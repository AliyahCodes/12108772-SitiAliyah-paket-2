<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
            if(Auth::attempt($user)){
                if(auth()->user()->role != 2){
                    return redirect('dashboard');
                } else {
                    return redirect('staf');
                }
            } else {
                redirect()->back()->with('error', 'gagal login, silahkan coba lagi!');
            }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil Keluar akun!');
    }
}
