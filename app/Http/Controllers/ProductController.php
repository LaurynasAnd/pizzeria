<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $allProducts = [];
        foreach($categories as $category){
            $allProducts[$category->title] = Product::where('category_id', $category->id)->get();
            if($category->title == 'pizza'){
                foreach($allProducts['pizza'] as $pizza){
                    $pizza->variationsCount = $pizza->getVariations->count();
                    $pizza->variations = $pizza->getVariations;
                }
            }
            foreach($allProducts[$category->title] as $product){
                $product->category = $product->getCategory->title;
            }
        }

        return view('product.index', compact('allProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('title','<>','pizza')->get();
        return view('product.create', compact('categories'));
    }
    public function createPizza()
    {
        return view('product.create_pizza');
    }

    public function createPizzaVariation()
    {
        $sizes = Size::all();
        $html = View::make('product.create_pizza_variation')->with(compact('sizes'))->render();
        return Response::json([
            'html' => $html,
            'state' => 'OK'
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->photo = '';
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = $request->file('photo')->getClientOriginalName();
            $destinationPath = public_path('/img/products');
            $image->move($destinationPath, $name);
            $product->photo = $name;
        }
        $product->save();
        return redirect()->route('product.index')->with('success_message', 'Product successfully added');
    }
    public function storePizza(Request $request)
    {
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description ? $request->description : '';
        $product->photo = '';
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category_id = Category::where('title', 'pizza')->first()->id;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = $request->file('photo')->getClientOriginalName();
            $destinationPath = public_path('/img/products');
            $image->move($destinationPath, $name);
            $product->photo = $name;
        }
        $product->save();

        if(isset($request->v)){
            foreach($request->v as $key => $_){
                $variation = new Variation;
                $variation->description = $request->v_description[$key] ? $request->v_description[$key] : '';
                $variation->photo = '';
                $variation->price = $request->v_price[$key];
                $variation->discount_price = $request->v_discount_price[$key];
                $variation->size_id = $request->v_size_id[$key];
                $variation->size_id = $request->v_size_id[$key];
                $variation->product_id = $product->id;
                if ($request->hasFile('v_photo.'.$key)) {
                    $image = $request->file('v_photo.'.$key);
                    $name = $request->file('v_photo.'.$key)->getClientOriginalName();
                    $destinationPath = public_path('/img/products');
                    $image->move($destinationPath, $name);
                    $variation->photo = $name;
                }
                $variation->save();
            }
        }
        return redirect()->route('product.index')->with('success_message', 'Pizza successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->category = $product->getCategory->title;
        if($product->category_id == 1) {
            $product->variationsCount = $product->getVariations->count();
            $product->variations = $product->getVariations;
            foreach($product->variations as $var){
                $var->size = $var->getSize->title;
            }
        }
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::where('title','<>','pizza')->get();
        $product->category = $product->getCategory->title;
        return view('product.edit', compact('product','categories'));
    }

    public function editPizza(Product $product)
    {
        $sizes = Size::all();
        $product->variationsCount = $product->getVariations->count();
        $product->variations = $product->getVariations;
        return view('product.edit_pizza', ['pizza' => $product, 'sizes' => $sizes]);
    }

    public function editPizzaVariation()
    {
        $sizes = Size::all();
        $html = View::make('product.edit_pizza_variation')->with(compact('sizes'))->render();
        return Response::json([
            'html' => $html,
            'state' => 'OK'
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $product->title = $request->title;
        $product->description = $request->description ? $request->description : '';
        $product->photo = '';
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = $request->file('photo')->getClientOriginalName();
            $destinationPath = public_path('/img/products');
            $image->move($destinationPath, $name);
            $product->photo = $name;
        }
        $product->save();

        return redirect()->route('product.index')->with('success_message', 'Product successfully updated');
    }
    public function updatePizza(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->description = $request->description ? $request->description : '';
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->category_id = Category::where('title', 'pizza')->first()->id;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = $request->file('photo')->getClientOriginalName();
            $destinationPath = public_path('/img/products');
            $image->move($destinationPath, $name);
            $product->photo = $name;
        }
        $product->save();
        
        if(isset($request->v)){
            
            foreach($request->v as $key => $id){
                $variation = (Variation::where('id', $id)->get())[0];
                $variation->description = $request->v_description[$key] ? $request->v_description[$key] : '';
                $variation->price = $request->v_price[$key];
                $variation->discount_price = $request->v_discount_price[$key];
                $variation->size_id = $request->v_size_id[$key];
                $variation->size_id = $request->v_size_id[$key];
                $variation->product_id = $product->id;
                if ($request->hasFile('v_photo.'.$key)) {
                    $image = $request->file('v_photo.'.$key);
                    $name = $request->file('v_photo.'.$key)->getClientOriginalName();
                    $destinationPath = public_path('/img/products');
                    $image->move($destinationPath, $name);
                    $variation->photo = $name;
                }
                $variation->save();
            }
        }
        if(isset($request->vn)){

            foreach($request->vn as $key => $_){
                $variation = new Variation;
                $variation->description = $request->vn_description[$key] ? $request->vn_description[$key] : '';
                $variation->photo = '';
                $variation->price = $request->vn_price[$key];
                $variation->discount_price = $request->vn_discount_price[$key];
                $variation->size_id = $request->vn_size_id[$key];
                $variation->size_id = $request->vn_size_id[$key];
                $variation->product_id = $product->id;
                if ($request->hasFile('vn_photo.'.$key)) {
                    $image = $request->file('vn_photo.'.$key);
                    $name = $request->file('vn_photo.'.$key)->getClientOriginalName();
                    $destinationPath = public_path('/img/products');
                    $image->move($destinationPath, $name);
                    $variation->photo = $name;
                }
                $variation->save();
            }
        }
        return redirect()->route('product.index')->with('success_message', 'Pizza successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success_message', 'Product successfully deleted');
    }
    
    public function destroyPizza(Product $product){
        if($product->getVariations){
            foreach($product->getVariations as $variation){
                $variation->delete();
            }
        }
        $product->delete();
        return redirect()->route('product.index')->with('success_message', 'Pizza successfully deleted');
    }
}
