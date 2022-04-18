<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexPembeli(){
        return view('dashboard');
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
