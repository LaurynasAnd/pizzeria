<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('page.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin/products'], function(){
    Route::get('', [ProductController::class, 'index'])->name('product.index');

    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::get('create-pizza', [ProductController::class, 'createPizza'])->name('product.create_pizza');
    Route::post('create-pizza-variation', [ProductController::class, 'createPizzaVariation'])->name('product.create_pizza_variation');
    
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::post('store-pizza', [ProductController::class, 'storePizza'])->name('product.store_pizza');
    Route::post('store-pizza-variation', [ProductController::class, 'storePizzaVariation'])->name('product.store_pizza_variation');

    Route::get('edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::post('delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('show/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('pdf/{product}', [ProductController::class, 'pdf'])->name('product.pdf');
 });