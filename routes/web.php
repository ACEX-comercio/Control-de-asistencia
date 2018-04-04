<?php

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
    return view('loginmain');
});

Route::get('/loginmain', function () {
    return view('loginmain');
});
Route::group(['middleware' => 'rolesusuario'], function () {
    Route::get('/asistencia', function () {
        return view('asistencia');
    });
});
Route::resource('/llegada', 'EntradaController');

Route::resource('/salida', 'SalidaController');
Route::resource('/admin', 'UsuarioController');
//Route::resource('/admin', 'UsuarioController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
