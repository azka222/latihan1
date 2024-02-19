<?php

use App\Models\Cars;
use App\Http\Controllers\Auth\TwoFactorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;


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

// Route for Home menu
Route::get('/', function () {
    return view('homePage', [
        "title" => "Home"
    ]);
})->name('home');

// Route for About Us menu
Route::get('/aboutUs', function () {
    return view('aboutUs', [
        "title" => "About Us",
        "name" => "Muhammad Azka Alif Hartono",
        "university" => "Bina Nusantara University",
        "image" => "profile.jpg"
    ]);
});

// Route for register
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Route for registration menu
Route::get('/register', function(){
    return view('google2fa.register');
});

// Route for account info menu 
Route::get('/accountInfo', [UserController::class, 'display'])->name('display');

// Route for enable / disable 2FA
Route::post('/set2fa', [TwoFactorController::class, 'set2FA'])->name('set2FA');

// route for login
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route for login menu
Route::get('/login', function () {
    return view('google2fa.login');
});

// Route after login to QR Authentication
Route::get('/qrAuthentication', function () {
    return view('google2fa.qrAuthentication', [
    ]);
})->name('qrAuthentication');

// Route after QR to input OTP 
Route::get('/google2fa.otpVerify', function () {
    return view('google2fa.otpVerify');
})->name('otpVerify');

// Route for verify OTP 
Route::post('/2fa', [VerifyController::class, 'verify'])->name('2fa');

// Route for cars, carBrand, carCategory menu (Login Needed)
Route::middleware('auth.user')->group(function () {
    Route::get('/cars', [CarsController::class, 'showAll']);
    Route::get('/carBrand/{car:carBrand}', [CarsController::class, 'showBrand']);
    Route::get('/cars/{car:slug}', [CarsController::class, 'showModel']);
    Route::get('/carCategory/{cat:nameCategory}', [CategoriesController::class, 'showCategory']);
    Route::get('/carsAuthor', [CarsController::class, 'showByAuthor'])->name('showByAuthor');
});




