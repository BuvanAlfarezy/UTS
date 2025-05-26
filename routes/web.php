<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/umkm', function () {
    return view('umkm');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/detail', function () {
    return view('detail_berita');
});
Route::get('/detailu', function () {
    return view('detail_umkm');
});
