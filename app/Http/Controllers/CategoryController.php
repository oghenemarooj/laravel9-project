<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('user.add_category');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
