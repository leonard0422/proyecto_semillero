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
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/sesion', 'sesion')->name('sesion');
Route::view('/products','products')->name('products');
Route::post('contacto', 'MsgController@store' );


