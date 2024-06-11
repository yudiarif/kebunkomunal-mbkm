<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\InformasiSlotController;
use App\Http\Controllers\KelolaKomoditiController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AyamFrontController;
use App\Http\Controllers\CabaiFrontController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardFrontController;
use App\Http\Controllers\JagungFrontController;
use App\Http\Controllers\KatalogFrontController;
use App\Http\Controllers\NilaFrontController;
use App\Http\Controllers\ProfilController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('activation/{user}', function (Request $request, $user) {
    $token = $request->query('token');
    if ($token) {
        $credentials = explode(':', base64_decode($token));
        if (count($credentials) === 2) {
            $username = $credentials[0];
            $password = $credentials[1];
            if (Auth::attempt(['username' => $username, 'password' => $password])) {
                // Redirect to the user's respective dashboard
                return redirect()->intended(Auth::user()->role_id == 1 ? 'admin/dashboard' : '/');
            }
        }
    }
    return redirect('login')->withErrors('Invalid activation link or credentials.');
})->name('activation')->middleware('signed');

//Mark as read for notifications
Route::get('/markAsRead/{id}', function ($id) {
    auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    return redirect('/jagung');
})->name('markAsRead');

/////////////////////////////////
Route::middleware(['guest'])->group(function(){
    Route::get('login', [AuthController::class,'index'])->name('login');
    Route::post('login', [AuthController::class,'login'])->middleware('throttle:login');
});


Route::get('/home',function(){
    return redirect('/admin/dashboard');
});

Route::get('logout', [AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::get('profil', [ProfilController::class,'index'])->name('profil')->middleware('auth');

Route::middleware(['auth','userAkses:2'])->group(function(){
    Route::resource('jagung', JagungFrontController::class);
    Route::resource('cabai', CabaiFrontController::class);
    Route::resource('ayam', AyamFrontController::class);
    Route::resource('nila', NilaFrontController::class);
    Route::resource('/', DashboardFrontController::class);
    Route::resource('katalog', KatalogFrontController::class);
   
});

Route::middleware(['auth','userAkses:1'])->group(function(){
Route::prefix('admin')->group(function () {
    Route::resource('dashboard', DashboardAdminController::class);
    Route::resource('users', UserController::class);
    Route::resource('pupuk', PupukController::class);
    Route::resource('informasislot', InformasiSlotController::class);
    Route::resource('komoditi', KelolaKomoditiController::class);
    Route::resource('map', MapController::class);
    Route::resource('katalog', KatalogController::class);
    // Route::get('komoditi', [KelolaKomoditiController::class, 'index']);
    ///jagung//
    Route::get('komoditi/show-jagung/{id}', [KelolaKomoditiController::class, 'showJagung'])->name('show-jagung');
    Route::get('komoditi/kelola-jagung/{id}', [KelolaKomoditiController::class, 'kelolaJagung'])->name('kelola-jagung');
    Route::delete('komoditi/destroy-jagung/{id}', [KelolaKomoditiController::class, 'destroyJagung'])->name('destroy-jagung');
    Route::delete('komoditi/destroy-all-jagung/{id}', [KelolaKomoditiController::class, 'destroyAllJagung'])->name('destroy-all-jagung');
    Route::post('komoditi/store-komoditi-jagung', [KelolaKomoditiController::class, 'storeKomoditiJagung'])->name('store-komoditi-jagung');
    Route::put('komoditi/update-komoditi-jagung/{id}', [KelolaKomoditiController::class, 'updateKomoditiJagung'])->name('update-komoditi-jagung');

    //////cabai///
    Route::get('komoditi/kelola-cabai/{id}', [KelolaKomoditiController::class, 'kelolaCabai'])->name('kelola-cabai');
    Route::get('komoditi/show-cabai/{id}', [KelolaKomoditiController::class, 'showCabai'])->name('show-cabai');
    Route::delete('komoditi/destroy-cabai/{id}', [KelolaKomoditiController::class, 'destroyCabai'])->name('destroy-cabai');
    Route::delete('komoditi/destroy-all-cabai/{id}', [KelolaKomoditiController::class, 'destroyAllCabai'])->name('destroy-all-cabai');
    Route::post('komoditi/store-komoditi-cabai', [KelolaKomoditiController::class, 'storeKomoditiCabai'])->name('store-komoditi-cabai');
    Route::put('komoditi/update-komoditi-cabai/{id}', [KelolaKomoditiController::class, 'updateKomoditiCabai'])->name('update-komoditi-cabai');


    //////nila////
    Route::get('komoditi/kelola-nila/{id}', [KelolaKomoditiController::class, 'kelolaNila'])->name('kelola-nila');
    Route::post('komoditi/store-komoditi-nila', [KelolaKomoditiController::class, 'storeKomoditiNila'])->name('store-komoditi-nila');
    Route::put('komoditi/update-komoditi-nila/{id}', [KelolaKomoditiController::class, 'updateKomoditiNila'])->name('update-komoditi-nila');
    Route::delete('komoditi/destroy-nila/{id}', [KelolaKomoditiController::class, 'destroyNila'])->name('destroy-nila');
    Route::delete('komoditi/destroy-all-nila/{id}', [KelolaKomoditiController::class, 'destroyAllNila'])->name('destroy-all-nila');
    Route::get('komoditi/show-nila/{id}', [KelolaKomoditiController::class, 'showNila'])->name('show-nila');


     //////ayam////
    Route::get('komoditi/kelola-ayam/{id}', [KelolaKomoditiController::class, 'kelolaAyam'])->name('kelola-ayam');
    Route::post('komoditi/store-komoditi-ayam', [KelolaKomoditiController::class, 'storeKomoditiAyam'])->name('store-komoditi-ayam');
    Route::put('komoditi/update-komoditi-ayam/{id}', [KelolaKomoditiController::class, 'updateKomoditiAyam'])->name('update-komoditi-ayam');
    Route::delete('komoditi/destroy-ayam/{id}', [KelolaKomoditiController::class, 'destroyAyam'])->name('destroy-ayam');
    Route::delete('komoditi/destroy-all-ayam/{id}', [KelolaKomoditiController::class, 'destroyAllAyam'])->name('destroy-all-ayam');
    Route::get('komoditi/show-ayam/{id}', [KelolaKomoditiController::class, 'showAyam'])->name('show-ayam');


     ///////foto perkembangan dan foto panorama////////////////
     Route::post('komoditi/store-foto-panorama', [KelolaKomoditiController::class, 'storeFotoPanorama'])->name('store-foto-panorama');
     Route::post('komoditi/store-foto-perkembangan', [KelolaKomoditiController::class, 'storeFotoPerkembangan'])->name('store-foto-perkembangan');

     //////panen///////////////////////
     Route::post('komoditi/panen-komoditi', [KelolaKomoditiController::class, 'panenKomoditi'])->name('panen-komoditi');
     Route::post('komoditi/pemupukan-komoditi', [KelolaKomoditiController::class, 'pemupukanKomoditi'])->name('pemupukan-komoditi');
     Route::delete('komoditi/destroy-panen/{id}', [KelolaKomoditiController::class, 'destroyPanen'])->name('destroy-panen');
     Route::delete('komoditi/destroy-pemupukan/{id}', [KelolaKomoditiController::class, 'destroyPemupukan'])->name('destroy-pemupukan');

     ///////////////Youtube/////////////
     Route::post('komoditi/yt-komoditi', [KelolaKomoditiController::class, 'youtubeKomoditi'])->name('yt-komoditi');
});

});
