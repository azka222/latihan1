<?php

use App\Models\Cars;
use App\Http\Controllers\Auth\TwoFactorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('homePage', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/aboutUs', function () {
    return view('aboutUs', [
        "title" => "About Us",
        "name" => "Muhammad Azka Alif Hartono",
        "university" => "Bina Nusantara University",
        "image" => "profile.jpg"
    ]);
});


Route::get('/accountInfo', [UserController::class, 'display'])->name('display');

Route::post('/set2fa', [TwoFactorController::class, 'set2FA'])->name('set2FA');



Route::get('/login', function () {
    return view('google2fa.login');
})->name('login');

Route::get('/qrAuthentication', function () {
    return view('google2fa.qrAuthentication', [
    ]);
})->name('qrAuthentication');

Route::get('/google2fa.index', function () {
    return view('google2fa.index');
})->name('otpVerify');

Route::post('/2fa', [VerifyController::class, 'verify'])->name('2fa');



Route::middleware('auth.user')->group(function () {
    Route::get('/cars', [CarsController::class, 'showAll']);
    Route::get('/carBrand/{car:carBrand}', [CarsController::class, 'showBrand']);
    Route::get('/cars/{car:slug}', [CarsController::class, 'showModel']);
    Route::get('/carCategory/{cat:nameCategory}', [CategoriesController::class, 'showCategory']);
});


Route::post('/login', [LoginController::class, 'login'])->name('login');
