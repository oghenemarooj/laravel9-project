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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::get('/add-category', [CategoryController::class, 'create'] )->name('category.create');
    Route::post('/store-category', [CategoryController::class, 'store'] )->name('category.store');
    Route::get('/add-product', [ProductController::class, 'create'] )->name('product.create');
    Route::post('/store-product', [ProductController::class, 'store'] )->name('product.store');
    Route::get('/product', [ProductController::class, 'view'] )->name('product.view');
});

require __DIR__.'/auth.php';
