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
Route::get('barang/hilang/create', 'BarangController@hilangcreate')->name('hilang.create');
Route::post('barang/hilang', 'BarangController@hilangstore')->name('hilang.store');
Route::get('barang/hilang/{id}', 'BarangController@hilang')->name('hilang.show');
Route::post('barang/hilang/{id}', 'BarangController@hilangupdate')->name('hilang.update');
Route::get('barang/hilang/{id}/edit', 'BarangController@hilangedit')->name('hilang.edit');
Route::post('barang/hilang/{id}/delete', 'BarangController@hilangdelete')->name('hilang.delete');



//ditemukan
Route::get('barang/temu', 'BarangController@temuindex')->name('temu.index');
Route::get('barang/temu/create', 'BarangController@temucreate')->name('temu.create');
Route::post('barang/temu', 'BarangController@temustore')->name('temu.store');
Route::get('barang/temu/{id}', 'BarangController@temu')->name('temu.show');
Route::post('barang/temu/{id}', 'BarangController@temuupdate')->name('temu.update');
Route::get('barang/temu/{id}/edit', 'BarangController@temuedit')->name('temu.edit');
Route::post('barang/temu/{id}/delete', 'BarangController@temudelete')->name('temu.delete');



Route::resource('user','UserController');
//Route::get('user', 'UserController@index')->name('user');
