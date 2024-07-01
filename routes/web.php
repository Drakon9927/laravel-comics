<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = config('comics.fumetti');
    return view('home', compact('data'));
})->name('home');

Route::get('/about', function () {
    return view('about', config('store'));
})->name('about');