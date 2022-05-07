<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }

    public function view(){
        return view('product.detail');
    }

    public function search(){
        return view('product.search');
    }


    public function addProduct(){
        return view('product.add_product');
    }

    public function addProductDescription(){
        return view('product.add_product_description');
    }
}