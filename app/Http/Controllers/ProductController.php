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
        return view('admin.add_product', compact('categories'));
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
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        //Product:::create($data);
       $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'quantity' => $request->quantity,
        ]);

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = \Str::slug($request->name) . time() . '.' . $ext;
        $file->storePubliclyAs('public/images', $filename);

        $product->image = $filename;
        $product->save();

        return back();
    }
    public function view()
    {
        $products = Product::latest()->get(); //getting all from the database

        return view('admin.product', compact('products'));
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.edit_product', compact('product', 'categories'));
    }
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id ;

        if ($request->has('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = \Str::slug($request->name) . time() . '.' . $ext;
            $file->storePubliclyAs('public/images', $filename);

            $product->image = $filename;
        }

        $product->save();
        return back();
    }
}
