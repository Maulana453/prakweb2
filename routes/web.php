<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('frontend')->group(function () {
        Route::get('/home',[FrontendController::class, 'home']);
        Route::get('/contact',[FrontendController::class, 'contact']);
        Route::get('/about',[FrontendController::class, 'about']);
        Route::get('/produk',[FrontendController::class, 'produk']);
        Route::get('/automatic',[FrontendController::class, 'automatic']);
        Route::get('/chronograph',[FrontendController::class, 'chronograph']);
        Route::get('/digital',[FrontendController::class, 'digital']);
        Route::get('/quartz',[FrontendController::class, 'quartz']);
        Route::get('/smartwatch',[FrontendController::class, 'smartwatch']);
    });
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[ProdukController::class, 'admin']);
        Route ::get('/logout', [ProdukController::class, 'logout']);
        
        Route::get('/produk',[ProdukController::class, 'index']);
        Route::get('/produk/create',[ProdukController::class, 'create']);
        Route::post('/produk/store',[ProdukController::class, 'store']);
        Route ::get('/produk/detail/{id}', [ProdukController::class, 'show']);
        Route ::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route ::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route ::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    
        Route::get('/pembayaran',[PembayaranController::class, 'index']);
        Route::get('/pembayaran/create',[PembayaranController::class, 'create']);
        Route::post('/pembayaran/store',[PembayaranController::class, 'store']);
        Route ::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
        Route ::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
        Route ::get('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy']);
    
        Route::get('/pelanggan',[PelangganController::class, 'index']);
        Route::get('/pelanggan/create',[PelangganController::class, 'create']);
        Route::post('/pelanggan/store',[PelangganController::class, 'store']);
        Route ::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
        Route ::post('/pelanggan/update/{id}', [PelangganController::class, 'update']);
        Route ::get('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);
    
        Route::get('/transaksi',[TransaksiController::class, 'index']);
        Route::get('/transaksi/create',[TransaksiController::class, 'create']);
        Route::post('/transaksi/store',[TransaksiController::class, 'store']);
        Route ::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
        Route ::post('/transaksi/update/{id}', [TransaksiController::class, 'update']);
        Route ::get('/transaksi/delete/{id}', [TransaksiController::class, 'destroy']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
