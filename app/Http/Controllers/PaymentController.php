<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('payment.index');
    }

    public function paymentSetting(){
        return view('payment.setting');
    }

    public function addCreditCard(){
        return view('payment.add_credit_card');
    }
}
