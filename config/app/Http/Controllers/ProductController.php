<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(): View
    {
        $products = Product::where('status', 'in_stock')->get();
        return view('home', compact('products'));
    }
}
