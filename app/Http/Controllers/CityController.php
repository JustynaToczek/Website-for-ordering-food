<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('index', ['cities' => $cities]);
    }
    
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('manage.cities')->with('success', 'City removed successfully.');
    }

    public function update(UpdateCityRequest $request, $id)
    {
        $city = City::findOrFail($id);
        $validated = $request->validated();

        $city->name = $validated['city_name'];
        $city->save();
        return redirect()->route('manage.cities')->with('success', 'City updated successfully.');
    }

    public function showEditCity($id)
    {
        $city = City::findOrFail($id);
        return view('city.edit', compact('city'));
    }

    public function showCreateCity()
    {
        return view('city.create');
    }


    public function showCreateOrder()
    {
        return view('city.create');
    }

    public function storeFromAdmin(UpdateCityRequest $request)
    {
        $validated = $request->validated();

        $city = new City();
        $city->name = $validated['city_name'];
        $city->save();
        return redirect()->route('manage.cities')->with('success', 'City created successfully.');
    }
}
