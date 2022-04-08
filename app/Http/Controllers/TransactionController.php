<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function cart(){
        return view('transaction.shopping-chart');
    }

    public function checkout(){
        return view('transaction.checkout');
    }
}
