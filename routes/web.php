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
Route::post('contacto', 'MsgController@store' );


