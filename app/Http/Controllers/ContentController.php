<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $orders = Order::with('product')->latest()->get();
        $orderCount = $orders->count();
        $totalEarnings = $orders->where('status', 'completed')->sum('total_price');
        $recentOrders = $orders->take(10);
        
        return view('cms', compact('products', 'orders', 'orderCount', 'totalEarnings', 'recentOrders'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable',
            'color' => 'nullable',
            'category' => 'nullable',
            'flavour' => 'nullable',
        ]);

        Product::create($data);
        return back()->with('success', 'Product added');
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable',
            'color' => 'nullable',
            'category' => 'nullable',
            'flavour' => 'nullable',
            'status' => 'nullable',
        ]);

        $product->update($data);
        return back()->with('success', 'Product updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted');
    }

    public function updateOrder(Request $request, Order $order)
    {
        $request->validate(['status' => 'required']);
        $order->update(['status' => $request->status]);
        return back()->with('success', 'Order status updated');
    }
}