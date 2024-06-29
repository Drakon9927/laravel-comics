<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ['Dato uno', 'Dato due', 'Dato tre'];
    return view('home', compact('data'));
});

Route::get('/home', function () {
    $data = ['Dato uno', 'Dato due', 'Dato tre'];
    return view('home', compact('data'));
});

// Per la rotta /about carica il file "about" con i dati da config
Route::get('/about', function () {
    return view('about', config('store'));
});
