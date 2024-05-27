<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function destroy($cityId)
    {
        $city = City::findOrFail($cityId);
        $city->delete();
        return redirect()->route('manage.cities')->with('success', 'City removed successfully.');
    }

    public function update(UpdateCityRequest $request, $cityId)
    {
        $city = City::findOrFail($cityId);
        $city->update($request->validated());
        return redirect()->route('manage.cities')->with('success', 'City updated successfully.');
    }

    public function showEditCity($cityId)
    {
        $city = City::findOrFail($cityId);
        return view('city.edit', compact('city'));
    }

    public function showCreateOrder()
    {
        return view('city.create');
    }

    public function storeFromAdmin(UpdateCityRequest $request)
    {
        $validated = $request->validated();

        $city = new City();
        $city->name = $validated['name'];
        $city->save();
        return redirect()->route('manage.cities')->with('success', 'City created successfully.');
    }
}
