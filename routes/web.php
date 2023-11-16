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
