<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function addProduct(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index');
    }
}
