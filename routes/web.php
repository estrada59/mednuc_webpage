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

Route::get('/gammagrama_cardiaco', 'website\ListaServiciosController@cardiaco')->name('gamm_cardiaco');
Route::get('/gammagrama_cerebral', 'website\ListaServiciosController@cerebral')->name('gamm_cerebral');
Route::get('/gammagrama_hepatoesplenico', 'website\ListaServiciosController@hepatoesplenico')->name('gamm_hepatoesplenico');
Route::get('/gammagrama_mama', 'website\ListaServiciosController@mama')->name('gamm_mama');
Route::get('/gammagrama_oseo', 'website\ListaServiciosController@oseo')->name('gamm_oseo');
Route::get('/gammagrama_pulmonar', 'website\ListaServiciosController@pulmonar')->name('gamm_pulmonar');
Route::get('/gammagrama_renal', 'website\ListaServiciosController@renal')->name('gamm_renal');
Route::get('/gammagrama_tiroideo', 'website\ListaServiciosController@tiroideo')->name('gamm_tiroideo');
Route::get('/tratamiento_artritis', 'website\ListaServiciosController@trat_artritis')->name('trat_artritis');
Route::get('/tratamiento_ca_prostata', 'website\ListaServiciosController@trat_ca_prostata')->name('trat_cancer_prostata');
Route::get('/tratamiento_yodo', 'website\ListaServiciosController@trat_yodo')->name('trat_yodo');
Route::get('/spect_ct', 'website\ListaServiciosController@spect_ct')->name('spect_ct');


Route::get('/contacto', 'website\ContactoController@index')->name('contacto');

// Route::get('/', function () {
//     return view('welcome');
// });



