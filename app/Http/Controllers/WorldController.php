<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Cart;

class WorldController extends Controller
{
    public function index()
   {
       $products = Product::latest()->get();
       $categories = Category::orderBy('name', 'asc')->get();
       $user = auth()->user();
    //    $count = cart::where('phone', '=',  $user->phone)->count();
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
   public function addcart(Request $request, $id)
   {
    if(Auth::id())
    {
        $user = auth::user();

        $product = product::find($id);

        $cart = new cart;

        $cart->name = $user->name;

        $cart->phone = $user->phone;
        $cart->address = $user->address;

        $cart->product_title = $product->name;
        $cart->price = $product->price;
        $cart->quantity = $request->quantity;

        $cart->save();

        return redirect()->back()->with('message', 'Product Added successfully');
    }
    else
    {
        return redirect('login');
    }
   }
   public function showcart()
   {

    $user = auth()->user();

    $carts = cart::where('phone', '=',  $user->phone)->get();
    $count = cart::where('phone', '=',  $user->phone)->count();
    return view('showcart', compact('count', 'carts'));
   }

   public function deletecart($id)
   {
        $data = cart::find($id);
        $data -> delete();
       return redirect()->back()->with('message', 'Product deleted successfully');
   }
}
