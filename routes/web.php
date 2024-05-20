<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/restaurants/search', [RestaurantController::class, 'search'])->name('restaurants.search');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/restaurant/{id}', [RestaurantController::class, 'show'])->name('restaurant.show');

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});
