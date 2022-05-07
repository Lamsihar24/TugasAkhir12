<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::check()){
            if(auth()->user()->role=='admin'){
                return view('admin.index');
            }else{
                return view('dashboard');
            }
        }else{
            return redirect('login');
        }
    }

    public function contact(){
        return view('contact');
    }

    public function indexAdmin(){
        return view('admin.index');
    }

    public function indexPenjual(){
        return view('dashboard-seller');
    }

    public function requestPenjual(){
        return view('admin.request-penjual');
    }
}
