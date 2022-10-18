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

Route::get('header', function () {
    return view('components.header');
});

Route::get('footer', function () {
    return view('components.footer');
});

Route::get('/content', function () {
    return view('components.content');
});

Route::get('/home-details', function () {
    return view('home-details');
});
Route::get('personal-info', function () {
    return view('components.personal-info');
});
Route::get('profile', function () {
    return view('components.profile');
});
