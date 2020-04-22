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

Route::get('/', 'website\InicioController@index')->name('inicio');

Route::get('/inicio', 'website\InicioController@index')->name('inicio');

Route::get('/nosotros', 'website\NosotrosController@index')->name('nosotros');

Route::get('/servicios', 'website\ServiciosController@index')->name('servicios');

Route::get('/contacto', 'website\ContactoController@index')->name('contacto');

// Route::get('/', function () {
//     return view('welcome');
// });



