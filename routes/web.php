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

Auth::routes();
Route::get('/home',  'HomeController@index');
Route::get('/',      'MainController@index');
Route::get('/berita/{path}',  'MainController@showBerita');
Route::get('/kategori/{cat}', 'MainController@kategoriBerita');
Route::post('/cari',		  'MainController@cari');

/* -------------- Admin -----------*/

Route::get('/tambah',         'AdminController@tambah');
Route::get('/hapusUser/{id}', 'AdminController@hapusUser');
