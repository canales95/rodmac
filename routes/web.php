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

// Route::get('/', function () {
//     return view('welcome');
// });

/* RUTAS PARA EL LOGIN --------------------------------------------------------------------- */
//Route::get('login', 'UserController@vistaLogin')
Route::match(['get','post'],'login', 'UserController@getLogin');
Route::match(['get','post'],'modulox', 'ModuloxController@moduloLogin');

/* RUTAS PARA EL REGISTRO --------------------------------------------------------------------- */
//Route::get('registro', 'UserController@vistaRegistro')
Route::match(['get','post'],'/registro', 'UserController@getRegistration');

/* RUTAS PARA EL MODULO X --------------------------------------------------------------------- */
