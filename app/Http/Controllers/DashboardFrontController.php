<?php

namespace App\Http\Controllers;

use App\Models\InformasiSlot;
use App\Models\KomoditiInfoAyam;
use App\Models\KomoditiInfoCabai;
use App\Models\KomoditiInfoJagung;
use App\Models\KomoditiInfoNila;
use App\Models\Panen;
use Illuminate\Http\Request;

class DashboardFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////////total///////////
        $userId = auth()->user()->id;
        $totalcabai = KomoditiInfoCabai::where('user_id',$userId)->get();
        $totaljagung = KomoditiInfoJagung::where('user_id',$userId)->get();
        
        $tanggalmulai = KomoditiInfoJagung::where('user_id',$userId)->get();

        $totalayam = KomoditiInfoAyam::where('user_id',$userId)->get();
        $totalnila = KomoditiInfoNila::where('user_id',$userId)->get();

        ////////panen///////////
        $panencabai = Panen::where('user_id',$userId)->where('komoditi_id',1)->get();
        $panenjagung = Panen::where('user_id',$userId)->where('komoditi_id',2)->get();
        $panennila = Panen::where('user_id',$userId)->where('komoditi_id',3)->get();
        $panenayam = Panen::where('user_id',$userId)->where('komoditi_id',4)->get();

        ////////slot////////
        $slotcabai = InformasiSlot::where('komoditi_id',1)->get();
        $slotjagung = InformasiSlot::where('komoditi_id',2)->get();
        $slotnila = InformasiSlot::where('komoditi_id',3)->get();
        $slotayam = InformasiSlot::where('komoditi_id',4)->get();
        

        // dd($linkwa);
        return view('user.dashboard.index', compact('totalcabai','tanggalmulai','totaljagung','totalayam','totalnila','panencabai','panenjagung','panennila','panenayam','slotcabai','slotjagung','slotnila','slotayam'));

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
