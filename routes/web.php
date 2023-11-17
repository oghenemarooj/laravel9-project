<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorldController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [WorldController::class, 'index'])->name('welcome');
Route::get('/about-us', [WorldController::class, 'about'])->name('about.us');
Route::get('/contact-us', [WorldController::class, 'contact'])->name('contact');
Route::get('/products/{category_id}', [WorldController::class, 'products'])->name('shop');
Route::get('/products-details/{product_id}', [WorldController::class, 'details'])->name('product.details');
Route::post('/addcart/{id}', [WorldController::class, 'addcart'] )->name('addcart.products');
Route::get('/showcart', [WorldController::class, 'showcart'] )->name('showcart.products');
Route::get('/delete/{id}', [WorldController::class, 'deletecart'] )->name('delete');

Route::get('/checkout', [WorldController::class, 'checkout'] )->name('checkout.products');
Route::get('/order', [WorldController::class, 'confirmorder'] )->name('order.products');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    if(Auth::user()->role == 'admin'){
        return redirect()->route('admin.dashboard');
    }elseif(Auth::user()->role == 'user'){
        return redirect()->route('welcome');
    }else{
        return redirect('404');
    }

})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [CategoryController::class, 'dashboard'] )->name('admin.dashboard');
    Route::get('/add-category', [CategoryController::class, 'create'] )->name('category.create');
    Route::post('/store-category', [CategoryController::class, 'store'] )->name('category.store');
    Route::get('/add-product', [ProductController::class, 'create'] )->name('product.create');
    Route::post('/store-product', [ProductController::class, 'store'] )->name('product.store');
    Route::get('/product', [ProductController::class, 'view'] )->name('product.view');
    Route::get('/all-category', [CategoryController::class, 'all'] )->name('category.all');
    Route::get('/product-category/{category_id}', [CategoryController::class, 'products'] )->name('category.products');

    Route::get('/edit-product/{product}', [ProductController::class, 'edit'] )->name('product.edit');
    Route::post('/update-product/{product}', [ProductController::class, 'update'] )->name('product.update');
});

require __DIR__.'/auth.php';
