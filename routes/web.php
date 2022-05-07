<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StoreController;
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
Route::post('login-post',[AuthController::class,'loginPost'])->name('login-post');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'registerPembeli'])->name('register');


Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'authorization:admin,seller,customer'],function(){
        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    });
    Route::group(['middleware'=>'authorization:admin'],function(){

    });
    Route::group(['middleware'=>'authorization:seller'],function(){
        Route::get('my-store',[StoreController::class,'index'])->name('my-store');

        Route::get('shipment',[PengirimanController::class,'index'])->name('shipment');
        Route::get('shipment/setting',[PengirimanController::class,'setting'])->name('shipment.setting');

        Route::get('payment/saldo',[PaymentController::class,'index'])->name('payment.saldo');
        Route::get('payment/setting',[PaymentController::class,'paymentSetting'])->name('payment.setting');
        Route::get('payment/add-credit-card',[PaymentController::class,'addCreditCard'])->name('payment.add-credit-card');

        Route::get('product/add',[ProductController::class,'addProduct'])->name('add-product');
        Route::get('product/add-description',[ProductController::class,'addProductDescription'])->name('add-product-description');

        Route::get('sale',[SaleController::class,'index'])->name('sale');

        Route::get('monitoring',[StoreController::class,'monitoring'])->name('store-monitoring');

    });
    Route::group(['middleware'=>'authorization:seller,customer'],function(){
        Route::get('profile',[ProfileController::class,'index'])->name('profile');

        Route::get('product',[ProductController::class,'index'])->name('produk');
        Route::get('product/search',[ProductController::class,'search'])->name('product.search');
        Route::get('product/detail',[ProductController::class,'view'])->name('produk.detail');
        Route::get('keranjang',[TransactionController::class,'cart'])->name('keranjang');
        Route::get('checkout',[TransactionController::class,'checkout'])->name('checkout');

    });
    Route::group(['middleware'=>'authorization:customer'],function(){

    });
});
Route::get('contact',[DashboardController::class,'contact'])->name('contact');



// seller



// admin
Route::get('admin/login',[AuthController::class,'loginAdmin'])->name('admin.login');
Route::get('admin/dashboard',[DashboardController::class,'indexAdmin'])->name('admin.dashboard');
Route::get('admin/request-penjual',[DashboardController::class,'requestPenjual'])->name('admin.request-penjual');



