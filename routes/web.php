<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

// Route::get('footer', function () {
//     return view('components.footer');
// });

// Route::get('/content', function () {
//     return view('components.content');
// });

Route::get('/home-details', function () {
    return view('home-details');
});
Route::get('personal-info', function () {
    return view('components.personal-info');
});
Route::get('profile', function () {
    return view('components.profile');
});
// Route::get('gosw', function () {
//     return view('components.gosw');
// });

Route::get('confirm-pay', function () {
    return view('components.confirm-pay');
});
Route::get('/signup', function () {
    return view('components.signup');
});

Route::get('/signin', [LoginController::class, 'getSignin'])->name('signin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/browse', function () {
//     return view('components.browse');
// });

Route::prefix('admin')->group( function () {
    Route::get('dashboard', function () { 
        if(Auth::check()){
            return view('admin.dashboard');
        }else{
            return redirect()->route('signin');
        }
    }) -> name('admin.dashboard');
    Route::get('user', function () {return view('admin.user');}) -> name('admin.user');
    Route::get('demo', function () {return view('admin.demo');}) -> name('admin.demo');
    Route::get('tables', function () {return view('admin.tables');}) -> name('admin.tables');
    Route::get('notifications', function () {return view('admin.notifications');}) -> name('admin.notifications');
});

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [LoginController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [LoginController::class, 'callBackFromGoogle'])->name('callback');
});

