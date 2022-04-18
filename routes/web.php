<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('login',[AuthController::class,'loginPembeli'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'registerPembeli'])->name('register');
Route::get('dashboard',[DashboardController::class,'indexPembeli'])->name('dashboard');
Route::get('contact',[DashboardController::class,'contact'])->name('contact');

Route::get('product',[ProductController::class,'index'])->name('produk');
Route::get('product/search',[ProductController::class,'search'])->name('product.search');
Route::get('product/detail',[ProductController::class,'view'])->name('produk.detail');
Route::get('keranjang',[TransactionController::class,'cart'])->name('keranjang');
Route::get('checkout',[TransactionController::class,'checkout'])->name('checkout');

// seller
Route::get('seller/login',[AuthController::class,'loginPenjual'])->name('penjual.login');
Route::get('seller/register',[AuthController::class,'registerPenjual'])->name('penjual.register');
Route::get('seller/dashboard',[DashboardController::class,'indexPenjual'])->name('penjual.dashboard');
Route::get('seller/account',[AccountController::class,'index'])->name('penjual.account');
Route::get('seller/my-store',[ProfileController::class,'myStore'])->name('penjual.my-store');
Route::get('seller/pengiriman',[PengirimanController::class,'index'])->name('penjual.pengiriman');
Route::get('seller/pengaturan-pengiriman',[PengirimanController::class,'setting'])->name('penjual.pengaturan-pengiriman');


// admin
Route::get('admin/login',[AuthController::class,'loginAdmin'])->name('admin.login');
Route::get('admin/dashboard',[DashboardController::class,'indexAdmin'])->name('admin.dashboard');
Route::get('admin/request-penjual',[DashboardController::class,'requestPenjual'])->name('admin.request-penjual');



