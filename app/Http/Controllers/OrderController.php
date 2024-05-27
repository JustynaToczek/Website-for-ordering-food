<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // public function show()
    // {
    //     $basket = session('basket', []);
    //     return view('basket.show', compact('basket'));
    // }

    public function destroy($orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->delete();
        return redirect()->route('manage.orders')->with('success', 'Order removed successfully.');
    }

    public function update(UpdateOrderRequest $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->update($request->validated());
        return redirect()->route('manage.orders')->with('success', 'Order updated successfully.');
    }

    public function showEditOrder($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('order.edit', compact('order'));
    }
    public function showCreateOrder()
    {
        return view('order.create');
    }

    public function storeFromAdmin(StoreOrderRequest $request)
    {
        $validated = $request->validated();

        $order = new Order();
        $order->user_id = $validated['user_id'];
        $order->address_id = $validated['address_id'];
        $order->date = $validated['date'];
        $order->total_price = $validated['total_price'];
        $order->save();
        return redirect()->route('manage.orders')->with('success', 'Order created successfully.');
    }
}
