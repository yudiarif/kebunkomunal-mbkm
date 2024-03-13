<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komoditi;
use App\Models\Map;
use Illuminate\Support\Facades\Validator;



class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakomoditi = Komoditi::all();
        $datamap=Map::all();
        return view('admin.kelolamap.index', compact('datakomoditi','datamap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'komoditi_id' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'alamat' => 'required|',
            'link_google_map' => 'required',
        ]);
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        Map::create($validatedData);
        return redirect()->route('map.index')->with('success', 'Map Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datakomoditi = Komoditi::all();
        $datamap=Map::where('id',$id)->get();
        return view('admin.kelolamap.detailmap.index', compact('datakomoditi','datamap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'komoditi_id' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'alamat' => 'required|',
            'link_google_map' => 'required',
        ]);
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        Map::find($id)->update($validatedData);
        return redirect()->route('map.index')->with('success', 'Berhasil Mengedit Map');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Map::find($id)->delete();
        return redirect()->route('map.index')->with('success', 'Berhasil Menghapus Map');
    }
}
