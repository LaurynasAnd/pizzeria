@extends('layouts.public_page')

@section('title')
Welcome
@endsection

@section('create')
<a class="bg-orange-450 hover:bg-orange-650 text-white text-sm font-bold py-3 px-4  rounded-md flex items-center cursor-pointer"
    href="{{ route('product.index')}}">
        Krepšelis
</a>
@endsection

@section('content')
<script>const allProducts=<?php echo json_encode($products)?> </script>
<div class="text-2xl font-semibold mb-4">Picos</div>
<div class=" bg-opacity-25 -mx-4 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
@foreach ($pizzas as $pizza)
    <div class="product-card p-1 bg-white flex flex-col mx-2">
        {{-- here will be image --}}
        <div class="product-image h-full w-full" data-id={{$pizza->id}}>
            @if ($pizza->photo)
                <img src="{{asset('img/products/'. $pizza->photo)}}"
                    class="object-cover w-full hover:mt-4"
                    alt=""
                    data-id={{$pizza->id}}
                >
            @else
            <img src="{{asset('img/defaultPizza.svg')}}"
                    class="object-cover w-full"
                    alt=""
                    data-id={{$pizza->id}}
                >
            @endif
        </div>
        <div class="card-action-area h-full w-full flex flex-col justify-between">
            <div class="flex flex-col justify-end">

                <div class="card-title text-xl mb-2 leading-7 font-semibold">
                    {{-- pizza name/ --}}
                    <div href="{{ route('product.show', $pizza)}}">{{ucfirst($pizza->title)}}</div>
                </div>
                <p class="card-description text-sm text-gray-600 leading-5">
                    Sūrio padažas, granuliuoti česnakai, mocarelos sūris, raudonieji svogūnai, šoninė, vyšniniai pomidorai, itališkos žolelės, parmezanas, čederio sūris
                </p>
            </div>
        </div>
        <div class="card-actions mt-3 flex items-center justify-between">
            <div class="text-md font-medium">
                nuo {{($pizza->price)}} &euro;
            </div>
            <button type="button" data-id={{$pizza->id}} " class="pizza-button w-1/2 py-2 text-sm font-medium flex justify-center items-center text-orange-450 hover:text-orange-650 border border-orange-450 hover:border-orange-650 rounded-md focus:outline-none">
                Pasirinkti
            </button>
            
        </div>
            
            



    </div>
    @endforeach
</div>

@foreach ($otherProducts as $category => $products)
    

<div class="text-2xl mt-20 font-semibold mb-4">{{$category}}</div>
<div class=" bg-opacity-25 -mx-4 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
    @foreach ($products as $product)
        <div class="product-card mx-2 mt-8 p-1 bg-white flex flex-col">
            {{-- here will be image --}}
            <div class="product-image h-full w-full">
                @if ($product->photo)
                    <img src="{{asset('img/products/'. $product->photo)}}"
                        class="object-cover w-full hover:mt-4"
                        alt=""
                    >
                @else
                <img src="{{asset('img/defaultPizza.svg')}}"
                        class="object-cover w-full"
                        alt=""
                    >
                @endif
            </div>
            <div class="card-action-area mt-2 h-full w-full flex flex-col justify-between">
                <div class="flex flex-col justify-end">

                    <div class="card-title text-xl mb-2 leading-7 font-semibold">
                        {{-- pizza name/ --}}
                        <div href="{{ route('product.show', $product)}}">{{ucfirst($product->title)}}</div>
                    </div>
                    <p class="card-description text-sm text-gray-600 leading-5">
                        {{$product->description}}    
                    </p>
                </div>
            </div>
            <div class="card-actions mt-3 flex items-center justify-between">
                <div class="text-md font-medium">
                    {{($product->price)}} &euro;
                </div>
                <button type="button" class="w-1/2 py-2 text-sm font-medium flex justify-center items-center text-orange-450 hover:text-orange-650 border border-orange-450 hover:border-orange-650 rounded-md focus:outline-none">
                    Į krepšelį
                </button>
                
            </div>

        </div>
    @endforeach
</div>
@endforeach
@endsection

{{-- <pre>
    {{print_r($pizzas)}}
    {{$products}}
</pre> --}}