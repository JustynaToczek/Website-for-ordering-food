<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurant', ['restaurants' => $restaurants]);
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $dishes = $restaurant->dishes;

        return view('restaurant.show', ['restaurant' => $restaurant, 'dishes' => $dishes]);
    }

    public function search(Request $request)
    {
        // $request->validate([
        //     'city' => 'required|exists:cities,city_id'
        // ]);

        $city = City::findOrFail($request->input('city'));

        $restaurants = $city->restaurants;

        return view('search-result', [
            'city_name' => $city->city_name,
            'restaurants' => $restaurants
        ]);
    }
}
