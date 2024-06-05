<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDishRequest;
use App\Models\City;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);
        $dish->delete();
        return redirect()->route('manage.dishes')->with('success', 'Dish removed successfully.');
    }

    public function update(UpdateDishRequest $request, $id)
    {
        $dish = Dish::findOrFail($id);
        $validated = $request->validated();

        $city = City::where('name', $validated['city_name'])->first();
        if (!$city) {
            return redirect()->back()->withErrors(['city_name' => 'City not found or restaurant does not match the city'])->withInput();
        }

        $restaurant = Restaurant::where('name', $validated['restaurant_name'])
            ->where('city_id', $city->id)
            ->first();
        if (!$restaurant) {
            return redirect()->back()->withErrors(['restaurant_name' => 'Restaurant not found or restaurant does not match the city'])->withInput();
        }

        $dish->name = $validated['dish_name'];
        $dish->restaurant_id = $restaurant->id;
        $dish->price = $validated['price'];
        $dish->description = $validated['description'];
        $dish->picture_path = $validated['picture_path'];
        $dish->save();

        return redirect()->route('manage.dishes')->with('success', 'Dish updated successfully.');
    }


    public function showEditDish($id)
    {
        $dish = Dish::findOrFail($id);
        return view('dish.edit', compact('dish'));
    }

    public function showCreateDish()
    {
        return view('dish.create');
    }

    public function storeFromAdmin(UpdateDishRequest $request)
    {
        $validated = $request->validated();

        $city = City::where('name', $validated['city_name'])->first();
        if (!$city) {
            return redirect()->back()->withErrors(['city_name' => 'City not found'])->withInput();
        }

        $restaurant = Restaurant::where('name', $validated['restaurant_name'])
            ->where('city_id', $city->id)
            ->first();
        if (!$restaurant) {
            return redirect()->back()->withErrors(['restaurant_name' => 'Restaurant not found'])->withInput();
        }

        $dish = new Dish();
        $dish->name = $validated['dish_name'];
        $dish->restaurant_id = $restaurant->id;
        $dish->price = $validated['price'];
        $dish->description = $validated['description'];
        $dish->picture_path = $validated['picture_path'];
        $dish->save();

        return redirect()->route('manage.dishes')->with('success', 'Dish created successfully.');
    }
}
