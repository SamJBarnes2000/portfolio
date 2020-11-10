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
    return view('welcome');
});

Route::get('/sprint1', function () {
    return view('sprint1');
});

Route::get('/sprint2', function () {
    return view('sprint2');
});

Route::get('/sprint3', function () {
    return view('sprint3');
});

Route::get('/sprint4', function () {
    return view('sprint4');
});

Route::get('/sprint5', function () {
    return view('sprint5');
});

Route::get('/sprint6', function () {
    return view('sprint6');
});
