<<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/biodata', function () {
    return view('biodata');
});
Route::get('/aktivitas', function () {
    return view('aktivitas');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/proyek', function () {
    return view('proyek');
});
Route::get('/dashboard/{id}', function () {
    return view('dashboard');
});

