<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sekolahku');
});

Route::get('/dataku', function () {
    return view('dataku');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/paper', function () {
    return view('paper');
});