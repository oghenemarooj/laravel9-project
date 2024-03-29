<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function create()
    {


        return view('admin.add_category');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
        ]);
        Category::create([
            'name' => $request->name
        ]);

        return back();
    }
    public function all()
    {

        $categories = Category::all();



        return view('admin.all_category', compact('categories',));
    }
    public function products($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();

        return view('admin.product_category', compact('products'));
    }


}
