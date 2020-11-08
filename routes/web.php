<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariationController;

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

Route::get('/', [BuyerController::class, 'index'])->name('page.index');

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
    Route::get('edit-pizza/{product}', [ProductController::class, 'editPizza'])->name('product.edit_pizza');
    Route::post('edit-pizza-variation', [ProductController::class, 'editPizzaVariation'])->name('product.edit_pizza_variation');

    Route::post('update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::post('update-pizza/{product}', [ProductController::class, 'updatePizza'])->name('product.update_pizza');

    Route::post('delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::post('delete-pizza/{product}', [ProductController::class, 'destroyPizza'])->name('product.destroy_pizza');

    Route::get('show/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('pdf/{product}', [ProductController::class, 'pdf'])->name('product.pdf');
 });


Route::group(['prefix' => 'admin/variations'], function(){
    Route::get('', [VariationController::class, 'index'])->name('variation.index');
    Route::get('create', [VariationController::class, 'create'])->name('variation.create');
    Route::post('store', [VariationController::class, 'store'])->name('variation.store');
    Route::get('edit/{variation}', [VariationController::class, 'edit'])->name('variation.edit');
    Route::post('update/{variation}', [VariationController::class, 'update'])->name('variation.update');
    Route::post('delete/{variation}', [VariationController::class, 'destroy'])->name('variation.destroy');
    Route::get('show/{variation}', [VariationController::class, 'show'])->name('variation.show');
    Route::get('pdf/{variation}', [VariationController::class, 'pdf'])->name('variation.pdf');
 });

Route::group(['prefix' => 'buyers'], function(){
    Route::get('', [BuyerController::class, 'index'])->name('buyer.index');
    Route::get('create', [BuyerController::class, 'create'])->name('buyer.create');
    Route::post('store', [BuyerController::class, 'store'])->name('buyer.store');
    Route::get('edit/{buyer}', [BuyerController::class, 'edit'])->name('buyer.edit');
    Route::post('update/{buyer}', [BuyerController::class, 'update'])->name('buyer.update');
    Route::post('delete/{buyer}', [BuyerController::class, 'destroy'])->name('buyer.destroy');
    Route::get('show/{buyer}', [BuyerController::class, 'show'])->name('buyer.show');
    Route::get('pdf/{buyer}', [BuyerController::class, 'pdf'])->name('buyer.pdf');
 });