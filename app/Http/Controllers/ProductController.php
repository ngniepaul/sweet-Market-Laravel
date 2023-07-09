<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
    }

    public function edit(Product $product)
    {
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function delete(Product $product)
    {
        $product->delete();
        return back();
    }
}
