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
        $request->validate(
            [
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

    // update data
    public function updateProduct(Request $request)
    {
        $request->validate(
            [
                'up_name' => 'required',
                'up_price' => 'required',
            ],
            [
                'up_name.required' => 'Product name is required',
                'up_price.required' => 'Product price is required',
            ]        
        );

        $product = Product::find($request->id);
        $product->name = $request->up_name;
        $product->price = $request->up_price;
        $product->save();
        return response()->json(['status' => 'success']);
    }   

    // delete data
    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return response()->json(['status' => 'success']);
    }
}
