<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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
})->name('welcome');

Route::get('header', function () {
    return view('components.header');
});

Route::get('/home-details', function () {
    return view('home-details');
})->name('home-details');
Route::get('personal-info', function () {
    return view('components.personal-info');
});
Route::get('profile', function () {
    return view('components.profile');
});

Route::get('confirm-pay', function () {
    return view('components.confirm-pay');
});
Route::get('/signup', [LoginController::class, 'getSignup'])->name('signup');
Route::post('/signup', [LoginController::class, 'postSignup'])->name('postSignup');
Route::get('/signin', [LoginController::class, 'getSignin'])->name('signin');
Route::post('/signin', [LoginController::class, 'postLogin'])->name('postSignin');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->group( function () {
    Route::get('/dashboard',[DashboardController::class, 'getDashboard'])->name('admin.dashboard');
    Route::get('/demo',[DashboardController::class, 'getDemo'])->name('admin.demo');
    Route::get('/notifications',[DashboardController::class, 'getNotifications'])->name('admin.notifications');
    Route::get('/tables',[DashboardController::class, 'getTables'])->name('admin.tables');
    Route::get('/user',[DashboardController::class, 'getUser'])->name('admin.user');
});

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [LoginController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [LoginController::class, 'callBackFromGoogle'])->name('callback');
});

