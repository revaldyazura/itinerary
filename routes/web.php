<?php

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


Auth::routes();

Route::livewire('/', 'home')->name('home');
Route::livewire('/produk', 'produk-index')->name('produk');
Route::livewire('/produk/kota/{kotaId}', 'produk-kota')->name('produk.kota');
Route::livewire('/produk/{id}', 'produk-detail')->name('produk.detail');
Route::livewire('/keranjang', 'keranjang')->name('keranjang');
Route::livewire('/checkout', 'checkout')->name('checkout');
Route::livewire('/history', 'history')->name('history');