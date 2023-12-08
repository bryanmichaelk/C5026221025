<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingPage');
});

Route::get('webTiruan', function(){
    return view('webTiruan');
});

Route::get('linktree', function(){
    return view('linktree');
});

Route::get('latihan-js1', function(){
    return view('js1');
});

Route::get('latihan-js2', function(){
    return view('js2');
});

Route::get('contoh-alert-1', function(){
    return view('bsAlert1');
});

Route::get('contoh-alert-2', function(){
    return view('bsAlert2');
});

Route::get('contoh-alert-3', function(){
    return view('bsAlert3');
});

Route::get('contoh-alert-4', function(){
    return view('bsAlert4');
});

Route::get('pertemuan-css', function(){
    return view('pertemuancss');
});

Route::get('pertemuan-bootstrap', function(){
    return view('pertemuanBootstrap');
});

Route::get('responsive-1', function(){
    return view('responsive1');
});

Route::get('responsive-2', function(){
    return view('responsive2');
});

Route::get('tes', function(){
    return view('blog');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showTime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//route CRUD keranjang belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//route CRUD baju
Route::get('/baju','App\Http\Controllers\BajuController@index');
Route::get('/baju/tambah','App\Http\Controllers\BajuController@tambah');
Route::post('/baju/store','App\Http\Controllers\BajuController@store');
Route::get('/baju/edit/{id}','App\Http\Controllers\BajuController@edit');
Route::post('/baju/update','App\Http\Controllers\BajuController@update');
Route::get('/baju/hapus/{id}','App\Http\Controllers\BajuController@hapus');


Route::get('/baju/cari','App\Http\Controllers\BajuController@cari');
Route::get('/baju/view/{id}','App\Http\Controllers\BajuController@view');
