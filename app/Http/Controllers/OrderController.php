<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Delivery_address;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('manage.orders')->with('success', 'Order removed successfully.');
    }

    public function update(UpdateOrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'User not found'])->withInput();
        }

        $address = Delivery_address::where('town', $validated['town'])
            ->where('street_name', $validated['street_name'])
            ->where('flat_number', $validated['flat_number'])
            ->first();
        if (!$address) {
            return redirect()->back()->withErrors(['address' => 'Address not found'])->withInput();
        }

        $order->user_id = $user->id;
        $order->address_id = $address->id;
        $order->date = $validated['date'];
        $order->total_price = $validated['total_price'];
        $order->save();

        return redirect()->route('manage.orders')->with('success', 'Order updated successfully.');
    }


    public function showEditOrder($id)
    {
        $order = Order::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    public function showCreateOrder()
    {
        return view('order.create');
    }

    public function storeFromAdmin(UpdateOrderRequest $request)
    {
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'User not found'])->withInput();
        }

        $address = Delivery_address::where('town', $validated['town'])
            ->where('street_name', $validated['street_name'])
            ->where('flat_number', $validated['flat_number'])
            ->first();
        if (!$address) {
            return redirect()->back()->withErrors(['address' => 'Address not found'])->withInput();
        }

        $order = new Order();
        $order->user_id = $user->id;
        $order->address_id = $address->id;
        $order->date = $validated['date'];
        $order->total_price = $validated['total_price'];
        $order->save();

        return redirect()->route('manage.orders')->with('success', 'Order created successfully.');
    }
}
