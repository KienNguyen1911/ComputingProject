<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;


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

Route::get('search', function () {
    return view('components.search');
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
    Route::get('/user',[ProfileController::class, 'getProfile'])->name('admin.user');
    Route::post('/user',[ProfileController::class, 'postProfile'])->name('postProfile');
    // Type
    
});
Route::get('/type',[TypeController::class, 'getType'])->name('view.type');
Route::get('/type-add',[TypeController::class, 'getAddType'])->name('add.type');
Route::post('/type-add',[TypeController::class, 'postAddType'])->name('postAddType');
Route::get('/type-edit/{id}',[TypeController::class, 'getEditType'])->name('edit.type');
Route::post('/type-edit/{id}',[TypeController::class, 'postEditType'])->name('postEditType');
Route::get('/type-delete/{id}',[TypeController::class, 'getDeleteType'])->name('delete.type');

Route::get('/home', [HomeController::class, 'getHome'])->name('view.home');
Route::get('/add-home', [HomeController::class, 'getAddHome'])->name('add.home');
Route::post('/add-home', [HomeController::class, 'postAddHome'])->name('postAddHome');
Route::get('/edit-home/{id}', [HomeController::class, 'getEditHome'])->name('edit.home');
Route::post('/edit-home/{id}', [HomeController::class, 'postEditHome'])->name('postEditHome');
Route::get('/delete-home/{id}', [HomeController::class, 'getDeleteHome'])->name('delete.home');

Route::get('/view-image/{id}', [HomeController::class, 'images'])->name('images.home');
Route::get('/delete-image/{id}', [HomeController::class, 'deleteImage'])->name('deleteImage.home');

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [LoginController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [LoginController::class, 'callBackFromGoogle'])->name('callback');
});

Route::prefix('facebook')->name('facebook.')->group(function () {
    Route::get('login', [LoginController::class, 'loginWithFacebook'])->name('login');
    Route::any('callback', [LoginController::class, 'callBackFromFacebook'])->name('callback');
});
