<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        foreach($products as $product){
            $product->price = str_replace('.',',',$product->price);
            $product->discount_price = str_replace('.',',',$product->discount_price);
        }
        $pizzas = $products->filter(fn($cat) => ($cat->category_id == 1));
        $snacks = $products->filter(fn($cat) => ($cat->category_id == 2));
        $desserts = $products->filter(fn($cat) => ($cat->category_id == 3));
        $drinks = $products->filter(fn($cat) => ($cat->category_id == 4));
        $otherProducts = ['Užkandžiai' => $snacks, 'Desertai' => $desserts, 'Gėrimai' => $drinks];

        foreach($pizzas as $pizza) {
            $pizza->variations = $pizza->getVariations;
        }

        return view('buyer.index', compact('products','pizzas', 'otherProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        //
    }
}
