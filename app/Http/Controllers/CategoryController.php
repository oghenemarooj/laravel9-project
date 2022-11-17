<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('user.add_category');
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
}
