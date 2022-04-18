<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPembeli(){
        return view('auth.login-pembeli');
    }

    public function logout(){
        return redirect('/login');
    }

    public function registerPembeli(){
        return view('auth.registrasi-pembeli');
    }

    public function loginPenjual(){
        return view('auth.login-penjual');
    }

    public function RegisterPenjual(){
        return view('auth.registrasi-penjual');
    }

    public function LoginAdmin(){
        return view('auth.login-admin');
    }

}
