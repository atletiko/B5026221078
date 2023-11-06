<?php

use Illuminate\Support\Facades\Route;
//import java.io.* ;
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
//System.out.print() ;
Route::get(
    '/' ,
    function () {
        return view('welcome');
    }
);

Route::get('jumlah', function () {
    $hasil = 2 + 3 ;
    return "Hasil Penjumlahan = " . (string)$hasil ;
});

Route::get('halo', function () {
    return "Selamat Datang di Situs web" ;
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('file1', function () {
	return view('hello');
});
