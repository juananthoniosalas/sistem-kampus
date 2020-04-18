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


Route::get('/fakultas/index', 'FakultasController@index');
Route::get('/fakultas/tambah', 'FakultasController@tambah');
Route::post('/fakultas/store', 'FakultasController@store');
Route::get('/fakultas/edit/{id}', 'FakultasController@edit');
Route::put('/fakultas/update/{id}', 'FakultasController@update');
Route::get('/fakultas/hapus/{id}', 'FakultasController@delete');
Route::get('/jurusan/index', 'JurusanController@index');
Route::get('/jurusan/tambah', 'JurusanController@tambah');
Route::post('/jurusan/store', 'JurusanController@store');
Route::get('/jurusan/edit/{id}', 'JurusanController@edit');
Route::put('/jurusan/update/{id}', 'JurusanController@update');
Route::get('/jurusan/hapus/{id}', 'JurusanController@delete');
Route::get('/jurusan/cari','JurusanController@cari');
<<<<<<< Updated upstream
=======

//route Ruangan
Route::get('/ruangan/index', 'RuanganController@index');
Route::get('/ruangan/tambah', 'RuanganController@tambah');
Route::post('/ruangan/store', 'RuanganController@store');
Route::get('/ruangan/edit/{id}', 'RuanganController@edit');
Route::put('/ruangan/update/{id}', 'RuanganController@update');
Route::get('/ruangan/hapus/{id}', 'RuanganController@delete');
Route::get('/ruangan/cari','RuanganController@cari');
Route::get('/barang/tambah', 'BarangController@tambah');
    });

//route Barang
Route::get('/barang/export_excel', 'BarangController@export_excel');
Route::get('/barang/index', 'BarangController@index');
Route::post('/barang/store', 'BarangController@store');
Route::get('/barang/edit/{id}', 'BarangController@edit');
Route::put('/barang/update/{id}', 'BarangController@update');
Route::get('/barang/hapus/{id}', 'BarangController@delete');
Route::get('/barang/cari','BarangController@cari');
	});
>>>>>>> Stashed changes
