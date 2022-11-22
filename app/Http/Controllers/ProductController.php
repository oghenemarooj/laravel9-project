<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('user.add_product');
    }
    public function store(Request $request)
    {
        // dd($request->all());

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
}
