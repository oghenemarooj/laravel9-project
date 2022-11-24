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
       $categories = Category::latest()->get();
       return view('welcome', compact('products', 'categories'));
   }
}
