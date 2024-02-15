<?php

use App\Models\Cars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TwoFactorController;

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
});

Route::get('/facAuth', function () {
    return view('facAuth', [
        "title" => "Authentication"
    ]);
});

Route::get('/aboutUs', function (){
    return view('aboutUs', [
        "title" => "About Us",
        "name" => "Muhamad Azka Alif Hartono",
        "university" => "Bina Nusantara University",
        "image" => "profile.jpg"
    ]);
});


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::middleware('auth.user')->group(function () {
 Route::get('/cars',[CarsController::class, 'showAll']);

Route::get('/carBrand/{car:carBrand}', [CarsController::class, 'showBrand']);

Route::get('/cars/{car:slug}', [CarsController::class, 'showModel']);

Route::get('/carCategory/{cat:nameCategory}', [CategoriesController::class, 'showCategory']);
    
});


Route::post('/login', [AuthController::class, 'login'])->name('login');
