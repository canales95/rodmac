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


Route::match(['get','post'],'/', 'AdminController@viewIndex');
Route::match(['get','post'],'login', 'AdminController@viewLogin');
Route::match(['get','post'],'contenido', 'AdminController@viewContent');
// Route::match(['get','post'],'login', 'AdminController@viewLogin');
