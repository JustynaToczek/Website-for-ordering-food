<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToBasketRequest;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show()
    {
        $basket = session('basket', []);
        return view('basket.show', compact('basket'));
    }

    public function addToBasket(Request $request)
    {
        $dishId = $request->input('dish_id');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $restaurantId = $request->input('restaurant_id');
        $picturePath = $request->input('picture_path');
        $dishName = $request->input('dish_name');

        $restaurantName = Restaurant::find($restaurantId)->name;

        $basket = session('basket', []);

        if (!empty($basket)) {
            $firstItem = reset($basket);
            if ($firstItem['restaurant_id'] != $restaurantId) {
                return redirect()->back()->with('error', "You can't add this product to the basket, because you can only add products that are from the same restaurant. ");
            }
        }

        if (array_key_exists($dishId, $basket)) {
            $basket[$dishId]['quantity'] += $quantity;
            $basket[$dishId]['price'] = ($price / $quantity) * $basket[$dishId]['quantity']; // Update the total price
        } else {
            $basket[$dishId] = [
                'quantity' => $quantity,
                'price' => $price,
                'restaurant_id' => $restaurantId,
                'picture_path' => $picturePath,
                'dish_name' => $dishName,
                'restaurant_name' => $restaurantName
            ];
        }

        session(['basket' => $basket]);

        return redirect()->back()->with('success', 'Added to the basket successfully.');
    }


    public function destroy($dishId)
    {
        $basket = session('basket', []);

        if (array_key_exists($dishId, $basket)) {
            unset($basket[$dishId]);
            session(['basket' => $basket]);
        }

        return redirect()->back()->with('success', 'Item removed from the basket.');
    }
}
