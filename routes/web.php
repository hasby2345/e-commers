<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produkt', function () {
    return view('produkt');
});

// Route::get('produk/{id}', function (int $id) {
//     return view('info', ['produk' => Produk::findorFail($id)]);
// });
Route::get('produk/{id}', [App\Http\Controllers\ProdukController::class, 'getProdukById']);

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/done', function () {
    return view('done');
});

// Route::get('/cart', function () {
//     return view('user.cart');
// });

Route::get('keranjang', [KeranjangController::class, 'index']);
Route::post('keranjang', [KeranjangController::class,'addToCart'])->name('keranjang');
// Route::delete('keranjang/{id}', [
//     'as' => 'keranjang.delete',
//     'uses' => 'KeranjangController@delete'
// ]);
Route::delete('keranjang/{id}', [KeranjangController::class, 'delete'] )->name('keranjang.delete');
Route::patch('/keranjang/{id}', [KeranjangController::class, 'update'])->name('keranjang.update');
Route::get('/cekout', [OrderController::class, 'cekout'])->name('cekout');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');


    // Route::get('produk/{id}', [KeranjangController::class, 'getProdukById']);
// Route::get('keranjang', function() {
//     return view('keranjang');
// });

Route::get('cekout', function () {
    return view('cekout');
});
Route::get('about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pp', function () {
    return view('layouts.backend');
});


// Route::group(['prefix'=>'admin', 'middleware' => ['auth', IsAdmin::class]],function(){
//     Route::get('home', function () {
//         return view('home')
//     })->name('home');
Route::group(['prefix'=>'admin', 'middleware' => ['auth', IsAdmin::class]],function(){
    Route::resource('user', UserController::class);
    Route::resource('home', HomeController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('detail', DetailTransaksiController::class);
});

Route::get('/beranda', function () {
     return view('beranda');
 });

