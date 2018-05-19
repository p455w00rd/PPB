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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//hilang
Route::get('barang/hilang', 'BarangController@hilangindex')->name('hilang.index');


//ditemukan
Route::get('barang/ditemukan', 'BarangController@temuindex')->name('temu.index');



Route::resource('user','UserController');
//Route::get('user', 'UserController@index')->name('user');
