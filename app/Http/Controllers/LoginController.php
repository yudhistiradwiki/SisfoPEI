<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $a)
    {
        $cek = $a -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::guard('mahasiswa')->attempt($cek)) {
            $a -> session()->regenerate();
            return redirect()->intended('/');
        }
        elseif (Auth::guard('user')->attempt($cek)) {
            $a -> session()->regenerate();
            return redirect()->intended('/');
        }
        return back() -> with('loginError', 'Maaf! Gagal Login');
    }

    public function logout(Request $a)
    {
        Auth::logout();
        $a -> session() -> invalidate();
        $a -> session() -> regenerateToken();
        return redirect('/login');
    }
}
