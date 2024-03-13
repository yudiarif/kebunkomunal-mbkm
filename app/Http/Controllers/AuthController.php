<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;


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
        
        $validatedData = $validator->validated();
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if (Auth::attempt($infologin)) {
           if (Auth::user()->role_id == 1) {
            return redirect()->intended('admin/dashboard');
           }
           elseif (Auth::user()->role_id == 2) {
            return redirect()->intended('/');
           }
            // return redirect()->intended('admin/dashboard');
        }else{
            return redirect('login')->withErrors('Username Atau Password Salah')->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
