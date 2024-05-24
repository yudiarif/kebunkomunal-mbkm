<?php

namespace App\Http\Controllers;

use App\Models\FotoPanorama;
use App\Models\FotoPerkembangan;
use App\Models\KomoditiInfoJagung;
use App\Models\Pemupukan;
use App\Models\Map;
use Illuminate\Http\Request;

class JagungFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $datajagung = KomoditiInfoJagung::where('user_id',$userId )->get();
        $datapanorama = FotoPanorama::where('user_id',$userId)->where('komoditi_id',2)->latest()->first();
        $dataperkembangan = FotoPerkembangan::where('user_id',$userId)->where('komoditi_id',2)->latest()->first();
        $datapupukjagung = Pemupukan::with('user','komoditi')->where('komoditi_id', 2)->where('user_id',$userId)->get();
        $datamap = Map::where('komoditi_id',2)->get();
        // dd($datapanorama);
        return view('user.jagung.index', compact('datajagung','userId','datapanorama','dataperkembangan','datamap','datapupukjagung'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
