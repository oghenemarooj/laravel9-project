<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::all(); //getting all from the database
        return view('user.add_product', compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        //$data->validate([
        $request->validate([
            'name' => 'required',
            'price' => 'integer|required',
            'category_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);
        //Product:::create($data);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'quantity' => $request->quantity,
        ]);

        return back();
    }
    public function view()
    {
        $products = Product::all(); //getting all from the database

        return view('user.product', compact('products'));
    }
}
