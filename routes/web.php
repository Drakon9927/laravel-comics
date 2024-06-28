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
    $data = ['dato1', 'dato2', 'dato3'];
    return view('home', compact('data'));
});

Route::get('/home', function () {
    $data = ['dato1', 'dato2', 'dato3'];
    return view('home', compact('data'));
});
