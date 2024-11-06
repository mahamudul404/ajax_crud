<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products', compact('products'));
    }

    public function addProduct(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ],
    [
        'name.required' => 'Product name is required',
        'price.required' => 'Product price is required',
    ]

    );

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json(['status' => 'success']);
    }
}
