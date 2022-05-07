<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $kredensil = $request->only('email','password');

        if(Auth::attempt($kredensil)){
            return redirect('dashboard');
        }else{
            return redirect('login');
        }

    }


    public function loginPembeli(){
        return view('auth.login-pembeli');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
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
