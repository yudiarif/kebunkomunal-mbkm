<?php

namespace App\Http\Controllers;

use App\Models\InformasiSlot;
use App\Models\KomoditiInfoAyam;
use App\Models\KomoditiInfoCabai;
use App\Models\KomoditiInfoJagung;
use App\Models\KomoditiInfoNila;
use App\Models\Panen;
use App\Models\User;
use App\Models\Katalog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index()
    {
        ////////total///////////
       
        $totalcabai = KomoditiInfoCabai::distinct('user_id')->count('user_id');
        $totaljagung = KomoditiInfoJagung::distinct('user_id')->count('user_id');
        $totalayam = KomoditiInfoAyam::distinct('user_id')->count('user_id');
        $totalnila = KomoditiInfoNila::distinct('user_id')->count('user_id');

        ////////panen///////////
        $panencabai = Panen::where('user_id')->where('komoditi_id',1)->get();
        $panenjagung = Panen::where('user_id')->where('komoditi_id',2)->get();
        $panennila = Panen::where('user_id')->where('komoditi_id',3)->get();
        $panenayam = Panen::where('user_id')->where('komoditi_id',4)->get();

        ////////slot////////
        $slotcabai = InformasiSlot::where('komoditi_id',1)->get();
        $slotjagung = InformasiSlot::where('komoditi_id',2)->get();
        $slotnila = InformasiSlot::where('komoditi_id',3)->get();
        $slotayam = InformasiSlot::where('komoditi_id',4)->get();
        $users = User::with('KomoditiInfoJagung')->get();

        $totaluser = User::where('role_id',2)->get();
        $totaladmin = User::where('role_id',1)->get();

        $totalkatalog = Katalog::all();

        $totals = Panen::groupBy('komoditi_id')
        ->select('komoditi_id', DB::raw('SUM(jumlah_panen) as total_panen'))
        ->with('Komoditi')
        ->get();
        // dd($users);
        return view('admin.index', compact('totalkatalog','totaladmin','totaluser','totalcabai','totaljagung','totalayam','totalnila','panencabai','panenjagung','panennila','panenayam','slotcabai','slotjagung','slotnila','slotayam','users','totals'));

    }

}
