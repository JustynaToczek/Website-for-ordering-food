<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRestaurantRequest;
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
        $request->validate([
            'city' => 'required|exists:cities,id',
        ]);

        $city = City::findOrFail($request->input('city'));

        $restaurants = $city->restaurants;

        return view('search-result', [
            'city_name' => $city->name,
            'restaurants' => $restaurants
        ]);
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
        return redirect()->route('manage.restaurants')->with('success', 'Restaurant removed successfully.');
    }

    public function update(UpdateRestaurantRequest $request, $id)
    {
        $validated = $request->validated();

        $restaurant = Restaurant::findOrFail($id);
        $city = City::where('name', $request->input('city_name'))->first();

        if (!$city) {
            return redirect()->back()->withErrors(['city_name' => 'City not found'])->withInput();
        }

        $restaurant->name = $validated['name'];
        $restaurant->city_id = $city->id;
        $restaurant->picture_path = $validated['picture_path'];
        $restaurant->description = $validated['description'];
        $restaurant->save();

        return redirect()->route('manage.restaurants')->with('success', 'Restaurant updated successfully.');
    }


    public function showEditRestaurant($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant.edit', compact('restaurant'));
    }

    public function showCreateRestaurant()
    {
        return view('restaurant.create');
    }

    public function storeFromAdmin(UpdateRestaurantRequest $request)
    {
        $validated = $request->validated();

        $city = City::where('name', $validated['city_name'])->first();

        if (!$city) {
            return redirect()->back()->withErrors(['city_name' => 'City not found'])->withInput();
        }

        $restaurant = new Restaurant();
        $restaurant->name = $validated['name'];
        $restaurant->city_id = $city->id;
        $restaurant->picture_path = $validated['picture_path'];
        $restaurant->description = $validated['description'];
        $restaurant->save();

        return redirect()->route('manage.restaurants')->with('success', 'Restaurant created successfully.');
    }
}
