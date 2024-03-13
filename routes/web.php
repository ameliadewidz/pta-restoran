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
    return view('index');
});

Route::get('reservation', function () {
    return view('reservation');
});

Route::get('categories', function () {
    return view('categories');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('food', function () {
    return view('food');
});

Route::get('beverages', function () {
    return view('beverages');
});