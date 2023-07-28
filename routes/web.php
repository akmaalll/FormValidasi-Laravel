<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', "App\Http\Controllers\PegawaiController@index")->name('index.pegawai');
Route::get('/tambah', "App\Http\Controllers\PegawaiController@tambah")->name('tambah.pegawai');
Route::post('/store', "App\Http\Controllers\PegawaiController@store")->name('store.pegawai');
