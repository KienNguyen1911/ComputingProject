<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SearchController;

// use PaymentController;
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

// ======================== User ========================
Route::get('/', [HomeController::class, 'landingPage'])->name('landingPage');

Route::get('/allhome', [HomeController::class, 'getAllHome'])->name('allhome');
Route::get('/home-details/{id}', [HomeController::class, 'getHomeDetails'])->name('home-details');

// Reservation
Route::get('/reservations-list', [ReservationController::class, 'getReservationList'])->name('reservations-list');
Route::post('/reservation/{id}', [ReservationController::class, 'postReservation'])->name('postReservation');

// Payment
Route::get('/payment/{id}', [PaymentController::class, 'getPayment'])->name('getPayment');
Route::post('/payment/{id}', [PaymentController::class, 'postPayment'])->name('postPayment');
Route::get('/payment-detail/{id}', [PaymentController::class, 'getPaymentDetail'])->name('getPaymentDetail');

// VNPay Payment
Route::post('/vnpay-payment', [PaymentController::class, 'postVNPay'])->name('postVNPay');
Route::get('/vnpay-return', [PaymentController::class, 'getVNPayReturn'])->name('getVNPayReturn');

Route::get('/profile', function () {
    return view('components.profile');
});

Route::get('search', function () {
    return view('components.search');
});

Route::post('search', [SearchController::class, 'postSearch'])->name('postSearch');
Route::post('filter', [SearchController::class, 'postFilter'])->name('postFilter');


Route::get('personal-info', [ProfileController::class, 'getProfileUser'])->name('personal-info');
Route::post('personal-info', [ProfileController::class, 'postProfileUser'])->name('postProfileUser');

Route::get('profile', function () {
    return view('components.profile');
});

Route::get('/signup', [LoginController::class, 'getSignup'])->name('signup');
Route::post('/signup', [LoginController::class, 'postSignup'])->name('postSignup');
Route::get('/signin', [LoginController::class, 'getSignin'])->name('signin');
Route::post('/signin', [LoginController::class, 'postLogin'])->name('postSignin');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// ======================== Admin ========================
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('admin.dashboard');
    Route::get('/demo', [DashboardController::class, 'getDemo'])->name('admin.demo');
    Route::get('/notifications', [DashboardController::class, 'getNotifications'])->name('admin.notifications');
    Route::get('/tables', [DashboardController::class, 'getTables'])->name('admin.tables');
    Route::get('/user', [ProfileController::class, 'getProfile'])->name('admin.user');
    Route::post('/user', [ProfileController::class, 'postProfile'])->name('postProfile');
    // Type

});
Route::get('/type', [TypeController::class, 'getType'])->name('view.type');
Route::get('/type-add', [TypeController::class, 'getAddType'])->name('add.type');
Route::post('/type-add', [TypeController::class, 'postAddType'])->name('postAddType');
Route::get('/type-edit/{id}', [TypeController::class, 'getEditType'])->name('edit.type');
Route::post('/type-edit/{id}', [TypeController::class, 'postEditType'])->name('postEditType');
Route::get('/type-delete/{id}', [TypeController::class, 'getDeleteType'])->name('delete.type');

Route::get('/home', [HomeController::class, 'getHome'])->name('view.home');
Route::get('/add-home', [HomeController::class, 'getAddHome'])->name('add.home');
Route::post('/add-home', [HomeController::class, 'postAddHome'])->name('postAddHome');
Route::get('/edit-home/{id}', [HomeController::class, 'getEditHome'])->name('edit.home');
Route::post('/edit-home/{id}', [HomeController::class, 'postEditHome'])->name('postEditHome');
Route::get('/delete-home/{id}', [HomeController::class, 'getDeleteHome'])->name('delete.home');
Route::post('/search-home', [HomeController::class, 'searchHomeAdmin'])->name('searchHomeAdmin');

// Filter Home
Route::post('/filter-home-by-type', [HomeController::class, 'filterHomeByType'])->name('filterHomeByType');
Route::post('/filter-home-by-name', [HomeController::class, 'filterHomeByName'])->name('filterHomeByName');
Route::post('/filter-home-by-price', [HomeController::class, 'filterHomeByPrice'])->name('filterHomeByPrice');
Route::post('/filter-home-by-address', [HomeController::class, 'filterHomeByAddress'])->name('filterHomeByAddress');

Route::get('/view-image/{id}', [HomeController::class, 'images'])->name('images.home');
Route::get('/delete-image/{id}', [HomeController::class, 'deleteImage'])->name('deleteImage.home');

Route::get('/service', [ServiceController::class, 'getService'])->name('view.service');
Route::get('/add-service', [ServiceController::class, 'getAddService'])->name('add.service');
Route::post('/add-service', [ServiceController::class, 'postAddService'])->name('postAddService');
Route::get('/edit-service/{id}', [ServiceController::class, 'getEditService'])->name('edit.service');
Route::post('/edit-service/{id}', [ServiceController::class, 'postEditService'])->name('postEditService');
Route::get('/delete-service/{id}', [ServiceController::class, 'getDeleteService'])->name('delete.service');

Route::get('/view-reservation', [ReservationController::class, 'viewReservation'])->name('viewReservation');
Route::get('/getAddReservation', [ReservationController::class, 'getAddReservation'])->name('add.reservation');
Route::post('/postAddReservation', [ReservationController::class, 'createReservation'])->name('createReservation');
Route::get('/edit-reservation/{id}', [ReservationController::class, 'getEditReservation'])->name('editReservation');
Route::post('/update-reservation/{id}', [ReservationController::class, 'postEditReservation'])->name('postEditReservation');
Route::get('/delete-reservation/{id}', [ReservationController::class, 'getDeleteReservation'])->name('deleteReservation');

Route::get('/payment', [PaymentController::class, 'getPaymentList'])->name('getPaymentList');
Route::get('/payment-details/{id}', [PaymentController::class, 'getPaymentDetailAdmin'])->name('getPaymentDetailAdmin');
Route::get('/payment-delete/{id}', [PaymentController::class, 'getDeletePayment'])->name('deletePayment');
Route::post('/payment-search', [PaymentController::class, 'searchPayment'])->name('searchPayment');
Route::post('/payment-filter-by-date', [PaymentController::class, 'filterPaymentByDate'])->name('filterPaymentByDate');
Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [LoginController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [LoginController::class, 'callBackFromGoogle'])->name('callback');
});

Route::prefix('facebook')->name('facebook.')->group(function () {
    Route::get('login', [LoginController::class, 'loginWithFacebook'])->name('login');
    Route::any('callback', [LoginController::class, 'callBackFromFacebook'])->name('callback');
});

