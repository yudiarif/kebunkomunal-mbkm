<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
        
    }
    public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'username' => 'required',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return back()->with('errors', $validator->messages()->all()[0])->withInput();
    }

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Pengguna berhasil login
        $role = Auth::user()->role_id;
        if ($role == 1) {
            // Pengguna adalah admin, arahkan ke dashboard admin
            return redirect()->intended('admin/dashboard');
        } elseif ($role == 2) {
            // Pengguna adalah user biasa, arahkan ke halaman dashboard user
            return redirect()->intended('/');
        }
    }

    // Jika login gagal, kembalikan ke halaman login dengan pesan kesalahan
    return redirect('login')->withErrors('Username atau Password Salah')->withInput();
}

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
