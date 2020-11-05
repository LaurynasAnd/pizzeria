@extends('layouts.admin_page')

@section('title')
Products
@endsection

@section('create')
<div class="flex">
    <a class="bg-orange-400 hover:bg-orange-600 text-white text-xs font-bold mr-2 py-1 px-4 rounded-full flex items-center cursor-pointer"
        href="{{ route('product.create_pizza')}}">
            Add Pizza
    </a>
    <a class="bg-orange-400 hover:bg-orange-600 text-white text-xs font-bold py-1 px-4 rounded-full flex items-center cursor-pointer"
        href="{{ route('product.create')}}">
            Add Product
    </a>
</div>
@endsection

@section('content')


    @foreach ($allProducts as $category => $products)
    <div class="w-full bg-white rounded my-3 border border-gray-200">
        <div class="w-full ">{{strtoupper($category)}}S</div>
        @foreach ($products as $product)
            <a href="{{route('product.show', [$product])}}" class="w-full flex flex-col sm:flex-row justify-space-between border-t border-b border-gray-100 hover:bg-gray-100 cursor-pointer">
                <div class="w-20">
                
                    @if ($product->photo)
                    
                    <img src="{{asset('img/products/'.$product->photo) }}" alt="">
                    
                    @else

                    <img src="{{asset('img/defaultPizza.svg')}} " alt="">

                    @endif
                </div>
                <div class="flex flex-col pl-4">
                    <span class="text-xl">{{ucfirst($product->title)}}</span>
                    <span class="text-sm">{{ucfirst($product->description)}}</span>
                    <span class="text-sm">Price: {{ucfirst($product->price)}} &euro;</span>
                    <span class="text-sm">Discount price: {{ucfirst($product->discount_price)}} &euro;</span>
                    <span class="text-sm">Category: {{ucfirst($product->category)}}</span>

                    @if ($category == 'pizza')
                    <span class="text-sm">Has variations: {{ucfirst($product->variationsCount)}}</span>
                    @endif
                </div>

            </a>
        @endforeach
    </div>
    @endforeach

@endsection