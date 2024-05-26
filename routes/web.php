<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
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

Route::get('/restaurant/{id}', [RestaurantController::class, 'show'])->name('restaurant.show');


Route::get('/auth/register', [AuthController::class, 'goToRegister'])->name('register');

Route::post('/auth/register', [AuthController::class, 'register'])->name('register.perform');

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'authenticate')->name('login.authenticate');
    Route::get('/auth/logout', 'logout')->name('logout');
});

Route::post('/add-to-basket', [BasketController::class, 'addToBasket'])->name('add.to.basket');

Route::get('/basket', [BasketController::class, 'show'])->name('show.basket');

Route::delete('/basket/{dishId}', [BasketController::class, 'destroy'])->name('basket.destroy');
