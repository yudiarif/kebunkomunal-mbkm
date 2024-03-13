<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class KatalogController extends Controller
{
    public function index()
    {
        $datakatalog = Katalog::all();
        return view('admin.kelolakatalog.index', compact('datakatalog'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'link_wa' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        $newPath = $request->file('foto')->store('katalog', 'public');
        $validatedData['foto'] = $newPath;
        Katalog::create($validatedData);
        return redirect()->route('katalog.index')->with('success', 'Produk Berhasil Ditambahkan');
    }
    

    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'nama_produk' => 'required',
        'harga' => 'required|numeric',
        'deskripsi' => 'required',
        'link_wa' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $validatedData = $validator->validated();

    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }

    // Ambil data Katalog berdasarkan ID
    $katalog = Katalog::find($id);

    // Hapus gambar lama jika ada dan gambar baru diunggah
    if ($request->hasFile('foto')) {
        if ($katalog->foto && Storage::disk('public')->exists($katalog->foto)) {
            Storage::disk('public')->delete($katalog->foto);
        }

        // Simpan foto baru
        $newPath = $request->file('foto')->store('katalog', 'public');
        $validatedData['foto'] = $newPath;
    }

    // Update data Katalog
    $katalog->update($validatedData);

    return redirect()->route('katalog.index')->with('success', 'Berhasil Mengedit Produk');
}


    public function destroy($id)
    {
        Katalog::find($id)->delete();
        return redirect()->route('katalog.index')->with('success', 'Berhasil Menghapus Produk');
    }
}
