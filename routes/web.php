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
