<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('featured', 1)->orderBy('price')->limit(5)->get();
        return view('index', compact('featured_products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }
}
