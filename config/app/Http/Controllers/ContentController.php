<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends Controller
{
    public function index(): View|RedirectResponse
    {
        if (Cookie::get('cms_auth') !== 'authenticated') {
            return redirect()->route('login');
        }
        
        $products = Product::all();
        $orderCount = Order::whereNotIn('status', ['completed', 'cancelled'])->count();
        $totalEarnings = Order::where('status', 'completed')->sum('total_price');
        $recentOrders = Order::whereNotIn('status', ['completed', 'cancelled'])->latest()->take(10)->get();
        return view('cms', compact('products', 'orderCount', 'totalEarnings', 'recentOrders'));
    }

    public function store(Request $request): RedirectResponse
    {
        if (Cookie::get('cms_auth') !== 'authenticated') {
            return redirect()->route('login');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:png|max:2048',
            'category' => 'required|in:juice,snacks,starter',
            'flavour' => 'nullable|string|max:100',
            'status' => 'required|in:in_stock,out_of_stock',
        ]);

        $statusValue = $validated['status'];
        $imagePath = $request->file('image')->store('products', 'public');
        $imagePath = 'storage/' . $imagePath;

        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'image' => $imagePath,
            'category' => $validated['category'],
            'flavour' => $validated['flavour'] ?? null,
            'status' => $statusValue,
        ]);

        return redirect()->route('cms')->with('success', 'Product created successfully.');
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        if (Cookie::get('cms_auth') !== 'authenticated') {
            return redirect()->route('login');
        }
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:juice,snacks,starter',
            'flavour' => 'nullable|string|max:100',
            'status' => 'required|in:in_stock,out_of_stock',
        ]);

        $statusValue = $validated['status'];

        $updateData = [
            'name' => $validated['name'],
            'price' => $validated['price'],
            'category' => $validated['category'],
            'flavour' => $validated['flavour'] ?? null,
            'status' => $statusValue,
        ];

        $product->update($updateData);

        return redirect()->route('cms')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        if (Cookie::get('cms_auth') !== 'authenticated') {
            return redirect()->route('login');
        }
        
        $product->delete();

        return redirect()->route('cms')->with('success', 'Product deleted successfully.');
    }

    public function updateOrder(Request $request, Order $order): RedirectResponse
    {
        if (Cookie::get('cms_auth') !== 'authenticated') {
            return redirect()->route('login');
        }
        
        $validated = $request->validate([
            'status' => 'required|in:pending,processing,out_for_delivery,completed,cancelled',
        ]);

        $order->update(['status' => $validated['status']]);

        return redirect()->route('cms')->with('success', 'Order updated successfully.');
    }
}