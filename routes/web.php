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
Route::get('/', function () {
    $nombre = "Mateo";
    return view('home', compact('nombre')); ['nombre' => 'Mateo']
})->name('home');
*/

Route::view('/', 'index')->name('home');
Route::view('/categorias', 'categorias')->name('categorias');
Route::view('/404page', '404page')->name('404page');
Route::view('/become-vendor', 'become-vendor')->name('become-vendor');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/login', 'login')->name('login');
Route::view('/cart','shopping-car')->name('shopping-car');
Route::view('/vstore','vendor-store')->name('vendor-store');
Route::view('/aboutus', 'about-us')->name('about-us');
Route::view('/contact', 'contact-us')->name('contact-us');
Route::view('/storel','store-list')->name('store-list');
Route::view('/products','products')->name('products');
Route::view('/login2','login2')->name('login2');
Route::post('contacto', 'MsgController@store' );


