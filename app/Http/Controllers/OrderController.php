<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'customer_name' => 'required',
            'phone_number' => 'required',
            'delivery_address' => 'required',
            'sugar_level' => 'nullable',
            'size' => 'nullable',
        ]);

        $product = Product::findOrFail($data['product_id']);
        $data['total_price'] = $product->price * $data['quantity'];
        $data['status'] = 'pending';

        Order::create($data);

        return back()->with('success', 'Order placed successfully!');
    }
}