<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SearchController;
use App\Models\Order;
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

Route::post('/add-to-basket', [BasketController::class, 'addToBasket'])->name('add.to.basket')->middleware('auth');

Route::get('/basket', [BasketController::class, 'show'])->name('show.basket')->middleware('auth');

Route::delete('/basket/{dishId}', [BasketController::class, 'destroy'])->name('basket.destroy');

// Route::get('/order', [Order::class, 'show'])->name('show.order'); //wróce tu

Route::controller(AdminController::class)->middleware('can:is-admin')->group(function () {
    Route::get('/admin/manage/orders', 'showOrders')->name('manage.orders');
    Route::get('/admin/manage/cities', 'showCities')->name('manage.cities');
    Route::get('/admin/manage/dishes', 'showDishes')->name('manage.dishes');
});

Route::controller(OrderController::class)->middleware('can:is-admin')->group(function () {
    Route::delete('/admin/order/destroy/{orderId}', 'destroy')->name('order.destroy');
    Route::get('/admin/order/edit/{orderId}', 'showEditOrder')->name('order.edit');
    Route::put('/admin/order/update/{orderId}', 'update')->name('order.update');
    Route::get('/admin/order/create', 'showCreateOrder')->name('order.create');
    Route::post('/admin/order/store', 'storeFromAdmin')->name('order.store');
});

Route::controller(CityController::class)->middleware('can:is-admin')->group(function () {
    Route::delete('/admin/city/destroy/{cityId}', 'destroy')->name('city.destroy');
    Route::get('/admin/city/edit/{cityId}', 'showEditCity')->name('city.edit');
    Route::put('/admin/city/update/{cityId}', 'update')->name('city.update');
    Route::get('/admin/city/create', 'showCreateCity')->name('city.create');
    Route::post('/admin/city/store', 'storeFromAdmin')->name('city.store');
});
