<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function myStore(){
        return view('profile.my-store');
    }
}
