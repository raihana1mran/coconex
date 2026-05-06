<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'delivery_address' => 'required|string|max:500',
            'quantity' => 'required|integer|min:1',
            'sugar_level' => 'nullable|in:regular,no_sugar',
            'size' => 'nullable|in:250ml,500ml',
        ]);

        $product = Product::findOrFail($validated['product_id']);
        
        $price = $product->price;
        if (isset($validated['size']) && $validated['size'] === '500ml') {
            $price = $price * 2;
        }
        $total_price = $price * $validated['quantity'];

        $order = Order::create(array_merge($validated, [
            'total_price' => $total_price,
            'status' => 'pending'
        ]));

        return response()->json([
            'message' => 'Order placed successfully!',
            'order' => $order
        ]);
    }
}
