<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;

class AdminController extends Controller
{
    public function showOrders()
    {
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function showCities()
    {
        $cities = City::all();
        return view('admin.cities', ['cities' => $cities]);
    }

    public function showRestaurants()
    {
        $restaurants = Restaurant::with('cities')->get();
        return view('admin.restaurants', ['restaurants' => $restaurants]);
    }

    public function showDishes()
    {
        $dishes = Dish::all();
        return view('admin.dishes', ['dishes' => $dishes]);
    }
}
