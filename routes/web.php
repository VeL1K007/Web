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
    return view('Home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/History', function () {
    return view('History');
});

Route::get('/VR', function () {
    return view('VR');
});

Route::get('/Laravel', function () {
    return view('welcome');
});

Route::get('/Accessories', function () {
    return view('Accessories');
});

Route::get('/VRHeadSet', function () {
    return view('VRHeadSet');
});
