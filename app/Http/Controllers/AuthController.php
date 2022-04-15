<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function logout(){
        return redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }

    public function loginPenjual(){
        return view('auth.login_penjual');
    }

    public function RegisterPenjual(){
        return view('auth.registrasi_penjual');
    }

}
