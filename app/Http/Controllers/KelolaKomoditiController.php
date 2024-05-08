<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pupuk;
use App\Models\Komoditi;
use App\Models\KomoditiInfoJagung;
use App\Models\KomoditiInfoCabai;
use App\Models\KomoditiInfoNila;
use App\Models\KomoditiInfoAyam;
use App\Models\FotoPanorama;
use App\Models\FotoPerkembangan;
use App\Models\Panen;
use App\Models\KomoditiYT;
use App\Models\Map;
use App\Models\Pemupukan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class KelolaKomoditiController extends Controller
{
    public function index()
    {
        $users = User::with('KomoditiInfoJagung','KomoditiInfoAyam','KomoditiInfoCabai','KomoditiInfoNila')->where('role_id',2)->get();
        $datapupuk = Pupuk::all();
        $komoditijagung = KomoditiInfoJagung::latest()->first();
        $jagung = KomoditiInfoJagung::with('user')->get();
        // dd($users);
        // dd($komoditijagung->id);
        return view('admin.kelolakomoditi.index', compact('users','datapupuk','komoditijagung'));
    }
    
///////////////////jagung//////////////////////////
    public function showJagung($id)
    {
        $users = User::with('KomoditiInfoJagung')->find($id);
        $datapupuk = Pupuk::all();
        $komoditijagung = KomoditiInfoJagung::latest()->first();
        $jagung = KomoditiInfoJagung::with('pupuk')->where('user_id',$id)->get();
        $panoramajagung = FotoPanorama::where('komoditi_id', 2)
                        ->where('user_id', $id)
                        ->latest()
                        ->first();
        $fotojagung = FotoPerkembangan::where('komoditi_id', 2)
        ->where('user_id', $id)
        ->latest()
        ->first();
        $datamap = Map::where('komoditi_id',2)->get();

        // dd($jagung);
        // dd($panoramajagung);
    
        return view('admin.kelolakomoditi.detailjagung.index',compact('users','datapupuk','komoditijagung','jagung','panoramajagung','fotojagung','datamap'));
    }

    public function kelolaJagung($id)
    {
        $users = User::with('KomoditiInfoJagung')->find($id);
        $datapupuk = Pupuk::all();
        $komoditijagung = KomoditiInfoJagung::where('komoditi_id', 2)->latest('updated_at')->first();
        $namauser = User::where('id',$id)->first();
        $panoramajagung = FotoPanorama::where('komoditi_id', 2)->where('user_id',$id)->latest()->first();
        $fotojagung = FotoPerkembangan::where('komoditi_id', 2)->where('user_id',$id)->latest()->first();
        $datajagung = KomoditiInfoJagung::with('user','pupuk')->where('user_id',$id)->get();
        $datapanenjagung = Panen::with('user','komoditi')->where('komoditi_id', 2)->where('user_id',$id)->get();
        $datapupukjagung = Pemupukan::with('user','komoditi')->where('komoditi_id', 2)->where('user_id',$id)->get();
                
        return view('admin.kelolakomoditi.kelolajagung.index',compact('users','datapupuk','komoditijagung','datajagung','id','fotojagung','panoramajagung','namauser','datapanenjagung','datapupukjagung'));
    }        

    public function storeKomoditiJagung(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'komoditi_id' => 'required',
            'pupuk_id' => 'nullable|numeric',
            'tinggi' => 'required|numeric',
            'kematian' => 'required|integer',
            'kehijauan' => 'required|numeric',
            'tanggal_pupuk' => 'nullable|date',
            'ph_tanah' => 'required|numeric',
            'jumlah_slot' => 'required|integer',
            ]);
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        // dd($validatedData);
        
        KomoditiInfoJagung::create($validatedData);
        return redirect()->back()->with('success', 'Record komoditi jagung berhasil diperbaharui');
    }
    
    public function updateKomoditiJagung(Request $request, $id)
    {    
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'komoditi_id' => 'required',
            'pupuk_id' => 'nullable|numeric',
            'tinggi' => 'required|numeric',
            'kematian' => 'required|integer',
            'kehijauan' => 'required|numeric',
            'tanggal_pupuk' => 'nullable|date',
            'ph_tanah' => 'required|numeric',
            'jumlah_slot' => 'required|integer',
            ]);
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        KomoditiInfoJagung::find($id)->update($validatedData);
        return redirect()->back()->with('success', 'Record komoditi jagung berhasil diedit');
    }
    
    public function destroyJagung($id)
        {
            KomoditiInfoJagung::find($id)->delete();
            return redirect()->back()->with('success', 'Record Jagung berhasil dihapus');
        }
      
    public function destroyAllJagung($id)
        {
        // Hapus semua data dari tabel
        KomoditiInfoJagung::where('komoditi_id', 2)
                            ->where('user_id', $id)
                            ->delete();
    
        return redirect()->route('komoditi.index')->with('success', 'Berhasil Menghapus Semua Record Jagung');
        }
////////////////cabai/////////////////
public function kelolaCabai($id)
{
    $users = User::with('KomoditiInfoCabai')->find($id);
    $datapupuk = Pupuk::all();
    $komoditicabai = KomoditiInfoCabai::where('komoditi_id', 1)->latest('updated_at')->first();
    $namauser = User::where('id',$id)->first();
    $panoramacabai = FotoPanorama::where('komoditi_id', 1)->where('user_id',$id)->latest()->first();
    $fotocabai = FotoPerkembangan::where('komoditi_id', 1)->where('user_id',$id)->latest()->first();
    $datacabai = KomoditiInfoCabai::with('user','pupuk')->where('user_id',$id)->get();
    $datapanencabai = Panen::with('user','komoditi')->where('komoditi_id', 1)->where('user_id',$id)->get();
    


    return view('admin.kelolakomoditi.kelolacabai.index',compact('users','datapupuk','komoditicabai','datacabai','id','fotocabai','panoramacabai','namauser','datapanencabai'));
}  
public function storeKomoditiCabai(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'pupuk_id' => 'nullable|numeric',
        'tinggi' => 'required|numeric',
        'kematian' => 'required|integer',
        'kehijauan' => 'required|numeric',
        'tanggal_pupuk' => 'nullable|date',
        'ph_tanah' => 'required|numeric',
        'jumlah_slot' => 'required|integer',
    ]);
    $validatedData = $validator->validated();
    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }

    KomoditiInfoCabai::create($validatedData);
    return redirect()->back()->with('success', 'Record komoditi cabai berhasil diperbaharui');
    }

    public function updateKomoditiCabai(Request $request, $id)
        {
    
          $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'komoditi_id' => 'required',
                'pupuk_id' => 'nullable|numeric',
                'tinggi' => 'required|numeric',
                'kematian' => 'required|integer',
                'kehijauan' => 'required|numeric',
                'tanggal_pupuk' => 'nullable|date',
                'ph_tanah' => 'required|numeric',
                'jumlah_slot' => 'required|integer',
            ]);
            $validatedData = $validator->validated();
            if ($validator->fails()) {
                return back()->with('errors', $validator->messages()->all()[0])->withInput();
            }
            KomoditiInfoCabai::find($id)->update($validatedData);
    
            return redirect()->back()->with('success', 'Record komoditi cabai berhasil diedit');
        }
    public function destroyCabai($id)
        {
            KomoditiInfoCabai::find($id)->delete();
            return redirect()->back()->with('success', 'Record cabai berhasil dihapus');
        }
      
    public function destroyAllCabai($id)
        {
        // Hapus semua data dari tabel
        KomoditiInfoCabai::where('komoditi_id', 1)
                            ->where('user_id', $id)
                            ->delete();
    
        return redirect()->route('komoditi.index')->with('success', 'Berhasil Menghapus Semua Record cabai');
        }
public function showCabai($id)
        {
            $users = User::with('KomoditiInfoCabai')->find($id);
            $datapupuk = Pupuk::all();
            $komoditicabai = KomoditiInfoCabai::latest()->first();
            $cabai = KomoditiInfoCabai::with('pupuk')->where('user_id',$id)->get();
            $panoramacabai = FotoPanorama::where('komoditi_id', 1)
                            ->where('user_id', $id)
                            ->latest()
                            ->first();
            $fotocabai = FotoPerkembangan::where('komoditi_id', 1)
            ->where('user_id', $id)
            ->latest()
            ->first();
            // dd($jagung);
            // dd($panoramajagung);
            $datamap = Map::where('komoditi_id',1)->get();

            return view('admin.kelolakomoditi.detailcabai.index',compact('users','datapupuk','komoditicabai','cabai','panoramacabai','fotocabai','datamap'));
        }

/////////////////////NILA////////////

public function kelolaNila($id)
        {
    $users = User::with('KomoditiInfoNila')->find($id);
    $komoditinila = KomoditiInfoNila::where('komoditi_id', 3)->latest('updated_at')->first();
    $namauser = User::where('id',$id)->first();
    $panoramanila = FotoPanorama::where('komoditi_id', 3)->where('user_id',$id)->latest()->first();
    $fotonila = FotoPerkembangan::where('komoditi_id', 3)->where('user_id',$id)->latest()->first();
    $datanila = KomoditiInfoNila::with('user')->where('user_id',$id)->get();
    $datapanennila = Panen::with('user','komoditi')->where('komoditi_id', 3)->where('user_id',$id)->get();
    $yt = KomoditiYT::where('komoditi_id', 3)->where('user_id',$id)->latest()->first();

    

    return view('admin.kelolakomoditi.kelolanila.index',compact('users','komoditinila','datanila','id','fotonila','panoramanila','namauser','datapanennila','yt'));
        } 
        
public function storeKomoditiNila(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'berat' => 'required|numeric',
        'kematian' => 'required|numeric',
        'tanggal_pakan' => 'required|date',
        'jumlah_pakan' => 'required|numeric',
        'oksigen' => 'required|numeric',
        'ph' => 'required|numeric',
        'amoniac' => 'required|numeric',
        'jumlah_slot' => 'required|numeric',
    ]);
    $validatedData = $validator->validated();
    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }
    KomoditiInfoNila::create($validatedData);
    return redirect()->back()->with('success', 'Record komoditi nila berhasil diperbaharui');
    } 

public function updateKomoditiNila(Request $request, $id)
    {

      $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'berat' => 'required|numeric',
        'kematian' => 'required|numeric',
        'tanggal_pakan' => 'required|date',
        'jumlah_pakan' => 'required|numeric',
        'oksigen' => 'required|numeric',
        'ph' => 'required|numeric',
        'amoniac' => 'required|numeric',
        'jumlah_slot' => 'required|numeric',
        ]);
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        KomoditiInfoNila::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Record komoditi nila berhasil diedit');
    }

public function destroyNila($id)
    {
        KomoditiInfoNila::find($id)->delete();
        return redirect()->back()->with('success', 'Record nila berhasil dihapus');
    }

public function destroyAllNila($id)
    {
    // Hapus semua data dari tabel
    KomoditiInfoNila::where('komoditi_id', 3)
                        ->where('user_id', $id)
                        ->delete();

    return redirect()->route('komoditi.index')->with('success', 'Berhasil Menghapus Semua Record Nila');
    }
public function showNila($id)
        {
            $users = User::with('KomoditiInfoNila')->find($id);
            $komoditinila = KomoditiInfoNila::latest()->first();
            $nila = KomoditiInfoNila::where('user_id',$id)->get();
            $panoramanila = FotoPanorama::where('komoditi_id', 3)
                            ->where('user_id', $id)
                            ->latest()
                            ->first();
            $fotonila = FotoPerkembangan::where('komoditi_id', 3)
            ->where('user_id', $id)
            ->latest()
            ->first();
            $yt = KomoditiYT::where('komoditi_id', 3)
            ->where('user_id', $id)
            ->latest()
            ->first();
            $datamap = Map::where('komoditi_id',3)->get();
            // dd($jagung);
            // dd($panoramajagung);
            return view('admin.kelolakomoditi.detailnila.index',compact('users','komoditinila','nila','panoramanila','fotonila','yt','datamap'));
        }

///////////////ayam///////
public function kelolaAyam($id)
    {
    $users = User::with('KomoditiInfoAyam')->find($id);
    $komoditiayam = KomoditiInfoAyam::where('komoditi_id', 4)->latest('updated_at')->first();
    $namauser = User::where('id',$id)->first();
    $panoramaayam = FotoPanorama::where('komoditi_id', 4)->where('user_id',$id)->latest()->first();
    $fotoayam = FotoPerkembangan::where('komoditi_id', 4)->where('user_id',$id)->latest()->first();
    $yt = KomoditiYT::where('komoditi_id', 4)->where('user_id',$id)->latest()->first();
    $dataayam = KomoditiInfoAyam::with('user')->where('user_id',$id)->get();
    $datapanenayam = Panen::with('user','komoditi')->where('komoditi_id', 4)->where('user_id',$id)->get();
    

    return view('admin.kelolakomoditi.kelolaayam.index',compact('users','komoditiayam','dataayam','id','fotoayam','panoramaayam','namauser','datapanenayam','yt'));
    } 

public function storeKomoditiAyam(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'berat' => 'required|numeric',
        'kematian' => 'required|numeric',
        'tanggal_pakan' => 'required|date',
        'jumlah_pakan' => 'required|numeric',
        'suhu' => 'required|numeric',
        'amoniac' => 'required|numeric',
        'jumlah_slot' => 'required|numeric',
    ]);
    $validatedData = $validator->validated();
    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }
    KomoditiInfoAyam::create($validatedData);
    return redirect()->back()->with('success', 'Record komoditi ayam berhasil diperbaharui');
    } 
public function updateKomoditiAyam(Request $request, $id)
    {

      $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'berat' => 'required|numeric',
        'kematian' => 'required|numeric',
        'tanggal_pakan' => 'required|date',
        'jumlah_pakan' => 'required|numeric',
        'suhu' => 'required|numeric',
        'amoniac' => 'required|numeric',
        'jumlah_slot' => 'required|numeric',
        ]);
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        KomoditiInfoAyam::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Record komoditi ayam berhasil diedit');
    }

public function destroyAyam($id)
    {
        KomoditiInfoAyam::find($id)->delete();
        return redirect()->back()->with('success', 'Record ayam berhasil dihapus');
    }

public function destroyAllAyam($id)
    {
    KomoditiInfoAyam::where('komoditi_id', 4)
                        ->where('user_id', $id)
                        ->delete();
    return redirect()->route('komoditi.index')->with('success', 'Berhasil Menghapus Semua Record ayam');
    }

public function showAyam($id)
        {
            $users = User::with('KomoditiInfoAyam')->find($id);
            $komoditiayam = KomoditiInfoAyam::latest()->first();
            $ayam = KomoditiInfoAyam::where('user_id',$id)->get();
            $panoramaayam = FotoPanorama::where('komoditi_id', 4)
                            ->where('user_id', $id)
                            ->latest()
                            ->first();
            $fotoayam = FotoPerkembangan::where('komoditi_id', 4)
            ->where('user_id', $id)
            ->latest()
            ->first();
            $yt = KomoditiYT::where('komoditi_id', 4)
            ->where('user_id', $id)
            ->latest()
            ->first();
            $datamap = Map::where('komoditi_id',4)->get();
            // dd($jagung);
            // dd($panoramajagung);
            
            return view('admin.kelolakomoditi.detailayam.index',compact('users','komoditiayam','ayam','panoramaayam','fotoayam','yt','datamap'));
        }

////////////FOTO PERKEMBANGAN DAN FOTO PANORAMA///////////////
public function storeFotoPerkembangan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'komoditi_id' => 'required',
            'foto1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

         $userId = $request->input('user_id');
         $komoditiId = $request->input('komoditi_id');
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        $lastPhoto = FotoPerkembangan::where('user_id', $userId)
        ->where('komoditi_id',$komoditiId)
        ->latest('created_at')
        ->first();
        
        $photoFields = ['foto1', 'foto2', 'foto3'];

        foreach ($photoFields as $field) {
            if ($lastPhoto) {
                // Data ditemukan, lakukan operasi penggantian atau pengecekan lainnya
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($lastPhoto->$field && Storage::disk('public')->exists($lastPhoto->$field)) {
                        Storage::disk('public')->delete($lastPhoto->$field);
                    }
                    // Simpan file baru
                    $newPath = $request->file($field)->store('foto', 'public');
                    $validatedData[$field] = $newPath;
                } else {
                    // Gunakan yang sudah ada jika tidak ada file yang diunggah
                    $validatedData[$field] = $lastPhoto->$field ?? null;
                }
            } else {
                // Data tidak ditemukan, langsung simpan baru
                if ($request->hasFile($field)) {
                    $newPath = $request->file($field)->store('foto', 'public');
                    $validatedData[$field] = $newPath;
                } else {
                    // Tidak diunggah, atur nilainya menjadi null atau sesuai kebutuhan
                    $validatedData[$field] = null;
                }
            }
        }

    // dd($validatedData);
        FotoPerkembangan::create($validatedData);
        return redirect()->back()->with('success', 'Foto perkembangan berhasil diperbaharui');
    }

public function storeFotoPanorama(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'komoditi_id' => 'required',
            'panorama1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'panorama2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'panorama3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

         $userId = $request->input('user_id');
         $komoditiId = $request->input('komoditi_id');
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        $lastPhoto = FotoPanorama::where('user_id', $userId)
        ->where('komoditi_id',$komoditiId)
        ->latest('created_at')
        ->first();

        $panoramaFields = ['panorama1', 'panorama2', 'panorama3'];

        foreach ($panoramaFields as $field) {
            if ($lastPhoto) {
                // Data ditemukan, lakukan operasi penggantian atau pengecekan lainnya
                if ($request->hasFile($field)) {
                    // Hapus file lama jika ada
                    if ($lastPhoto->$field && Storage::disk('public')->exists($lastPhoto->$field)) {
                        Storage::disk('public')->delete($lastPhoto->$field);
                    }

                    // Simpan file baru
                    $newPath = $request->file($field)->store('panorama', 'public');
                    $validatedData[$field] = $newPath;
                } else {
                    // Gunakan yang sudah ada jika tidak ada file yang diunggah
                    $validatedData[$field] = $lastPhoto->$field ?? null;
                }
            } else {
                // Data tidak ditemukan, langsung simpan baru
                if ($request->hasFile($field)) {
                    $newPath = $request->file($field)->store('panorama', 'public');
                    $validatedData[$field] = $newPath;
                } else {
                    // Tidak diunggah, atur nilainya menjadi null atau sesuai kebutuhan
                    $validatedData[$field] = null;
                }
            }
        }

    // dd($validatedData);
        FotoPanorama::create($validatedData);
        return redirect()->back()->with('success', 'Foto Panorama berhasil diperbaharui');
    }

////////////////////PANEN/////////////////////
public function panenKomoditi(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'jumlah_panen' => 'required|numeric',
        'tanggal_panen' => 'required|date',
    ]);
    $validatedData = $validator->validated();
    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }
// dd($validatedData);
    Panen::create($validatedData);
    return redirect()->back()->with('success', 'Berhasil menambahkan data panen');
}

public function destroyPanen($id)
{
    Panen::find($id)->delete();
    return redirect()->back()->with('success', 'Panen berhasil dihapus');
}

////////////////////PEMUPUKAN/////////////////////
public function pemupukanKomoditi(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'pupuk_id' => 'required|numeric',
        'tanggal_pupuk' => 'required|date',
    ]);
    $validatedData = $validator->validated();
    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }
// dd($validatedData);
    Pemupukan::create($validatedData);
    return redirect()->back()->with('success', 'Berhasil menambahkan data panen');
}

public function destroyPemupukan($id)
{
    Pemupukan::find($id)->delete();
    return redirect()->back()->with('success', 'Panen berhasil dihapus');
}

////////////////Link Youtube/////////////////////////////////
public function youtubeKomoditi(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'komoditi_id' => 'required',
        'link_youtube' => 'required',
    ]);

    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }

    $validatedData = $validator->validated();

    KomoditiYT::updateOrCreate(
        ['user_id' => $validatedData['user_id'], 'komoditi_id' => $validatedData['komoditi_id']],
        ['link_youtube' => $validatedData['link_youtube']]
    );

    return redirect()->back()->with('success', 'Berhasil menambahkan/update data video');
}


}
