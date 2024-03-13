<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pupuk;
use Illuminate\Support\Facades\Validator;



class PupukController extends Controller
{
    public function index()
    {
        $datapupuk = Pupuk::all();
        return view('admin.kelolapupuk.index', compact('datapupuk'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_pupuk' => 'required|unique:pupuk',
        ]);
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        Pupuk::create($validatedData);
        return redirect()->route('pupuk.index')->with('success', 'Pupuk Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'jenis_pupuk' => 'required|unique:pupuk',
        ]);
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        Pupuk::find($id)->update($validatedData);

        return redirect()->route('pupuk.index')->with('success', 'Berhasil Mengedit Pupuk');
    }

    public function destroy($id)
    {
        Pupuk::find($id)->delete();
        return redirect()->route('pupuk.index')->with('success', 'Berhasil Menghapus Pupuk');
    }
}
