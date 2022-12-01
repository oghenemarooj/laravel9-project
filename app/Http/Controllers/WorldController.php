<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    public function index()
   {
       $products = Product::latest()->get();
       $categories = Category::orderBy('name', 'asc')->get();
       return view('welcome', compact('products', 'categories'));
   }
   public function about()
   {
       return view('about_us');
   }
   public function contact()
   {
       return view('contact_us');
   }
   public function products($category_id)
   {
       $category = Category::where('id', '=', $category_id)->first();

    //    $category = Category::find($category_id);
    //    dd($category_id);
       return view('products');
   }
   public function details($product_id)
   {
    $products = Product::where('id', $product_id)->get();
       return view('details', compact('products'));
   }
}
