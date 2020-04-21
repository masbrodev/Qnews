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
Route::post('/addPost',       'AdminController@addPost');
Route::post('/editPost/{id}', 'AdminController@editPost');
Route::get('/daftar',         'AdminController@daftar');
Route::get('/edit/{id}',      'AdminController@edit');
Route::get('/hapus/{id}',	  'AdminController@hapus');
Route::get('/user',           'AdminController@user');
Route::get('/komentar',		  'AdminController@komentar');
Route::get('/hapusUser/{id}', 'AdminController@hapusUser');

/* -------------- User-----------*/

Route::post('/userInfo', 	'UserController@userInfo');
Route::post('/addComment',  'UserController@addComment');
Route::get('/comment', 		'UserController@comment');
Route::get('/editComment/{id}',    'UserController@editComment');
Route::post('/updateComment/{id}', 'UserController@updateComment');
Route::get('/deleteComment/{id}',  'UserController@deleteComment');
Route::post('/editBiodata', 	   'UserController@editBiodata');
Route::post('/reply',			   'UserController@reply');
Route::post('/like',			   'UserController@like');
Route::post('/unlike',			   'UserController@unlike');
Route::get('/notification', 	   'UserController@notification');