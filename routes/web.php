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

Route::get('notulen', 'NotulenController@index')->name('notulen.index');
Route::get('notulen/create/', 'NotulenController@create')->name('notulen.create');
Route::post('notulen/store/', 'NotulenController@store')->name('notulen.store');
Route::get('notulen/edit/{id}', 'NotulenController@edit')->name('notulen.edit');
Route::post('notulen/update/{id}', 'NotulenController@update')->name('notulen.update');
Route::get('notulen/delete/{id}', 'NotulenController@destroy')->name('notulen.destroy');

Route::get('laporan', 'LaporanController@index')->name('laporan.index');
Route::get('laporan/create/', 'LaporanController@create')->name('laporan.create');
Route::post('laporan/store/', 'LaporanController@store')->name('laporan.store');
Route::get('laporan/edit/{id}', 'LaporanController@edit')->name('laporan.edit');
Route::post('laporan/update/{id}', 'LaporanController@update')->name('laporan.update');
Route::get('laporan/delete/{id}', 'LaporanController@destroy')->name('laporan.destroy');

Route::get('anggota', 'AnggotaController@index')->name('anggota.index');
Route::get('anggota/create/', 'AnggotaController@create')->name('anggota.create');
Route::post('anggota/store/', 'AnggotaController@store')->name('anggota.store');
Route::get('anggota/edit/{id}', 'AnggotaController@edit')->name('anggota.edit');
Route::post('anggota/update/{id}', 'AnggotaController@update')->name('anggota.update');
Route::get('anggota/delete/{id}', 'AnggotaController@destroy')->name('anggota.destroy');

Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('admin/create/', 'AdminController@create')->name('admin.create');
Route::post('admin/store/', 'AdminController@store')->name('admin.store');
Route::get('admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('admin/update/{id}', 'AdminController@update')->name('admin.update');
Route::get('admin/delete/{id}', 'AdminController@destroy')->name('admin.destroy');


Route::resource('Laporan','LaporanController');
Route::resource('Admin','AdminController');
Route::resource('Anggota','AnggotaController');
Route::resource('Status','StatusController');
Route::resource('Jabatan','JabatanController');




//pemanggilan antara view ke view
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
