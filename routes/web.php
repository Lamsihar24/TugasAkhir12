<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('contact',[DashboardController::class,'contact'])->name('contact');

Route::get('product',[ProductController::class,'index'])->name('produk');
Route::get('product/detail',[ProductController::class,'view'])->name('produk.detail');
Route::get('keranjang',[TransactionController::class,'cart'])->name('keranjang');
Route::get('checkout',[TransactionController::class,'checkout'])->name('checkout');




