<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [ClientController::class, 'index']);
Route::get('/produk/{id}', [ClientController::class, 'produk']);


Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/tambah', [ProductController::class, 'create'])->name('tambah-product');
    Route::post('/product/tambah', [ProductController::class, 'store'])->name('proses-tambah-product');
    Route::resource('product-control', ProductController::class, ['except' => [
        'create','show','destroy'
        ]]);
    Route::post('/deleteproduct', [ProductController::class, 'delete'])->name('delete-product');
    // Route::post('/product/edit/{id}', [ProductController::class, 'simpanProduk'])->name('update-product');


});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


