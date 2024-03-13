<?php

namespace App\Http\Controllers;
use App\Models\Komoditi;
use App\Models\InformasiSlot;
use Illuminate\Support\Facades\Validator;



use Illuminate\Http\Request;

class InformasiSlotController extends Controller
{
    public function index()
    {
        $datakomoditi = Komoditi::with('informasiSlot')->get();
        $dataslot=InformasiSlot::all();
        return view('admin.informasislot.index', compact('datakomoditi','dataslot'));
    }
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'slot' => 'required',
            'tanggal' => 'required',
            'komoditi_id' => 'required',
        ]);
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        InformasiSlot::updateOrCreate(
            ['komoditi_id' => $id], // Kondisi pencarian berdasarkan ID
            $validatedData // Data yang akan diperbarui atau dibuat
        );

        return redirect()->route('informasislot.index')->with('success', 'Informasi Slot berhasil diperbaharui');
    }
    public function destroy($id)
    {
        InformasiSlot::where('komoditi_id', $id)->delete();
        return redirect()->route('informasislot.index')->with('success', 'Berhasil Menghapus Informasi Slot');
    }
}
