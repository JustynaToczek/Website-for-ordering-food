<?php

namespace App\Http\Controllers;

use App\Models\Order;

class AdminController extends Controller
{
    public function showOrders()
    {
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function showCities()
    {
        return view('admin.cities');
    }

    public function showDishes()
    {
        return view('admin.dishes');
    }
}
