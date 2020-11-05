@extends('layouts.admin_page')

@section('title')
Product {{ucfirst($product->title)}}
@endsection

@section('create')
<a class="bg-gray-100 hover:bg-indigo-700 text-indigo-700 hover:text-gray-100 text-xs font-bold py-1 px-4 border border-indigo-500 rounded-full flex items-center cursor-pointer"
    href="{{ route('product.index')}}">
        Krepšelis
</a>
@endsection

@section('content')
    <div class="flex flex-col md:grid md:grid-cols-2 md:gap-2">
        <div >
            @if ($product->photo)
                    
                    <img src="{{asset('img/products/'.$product->photo) }}" alt="">
                    
                    @else

                    <img src="{{asset('img/defaultPizza.svg')}} " alt="">

                    @endif
        </div>
        <div class="flex flex-col items-start justify-between">
            <div class="flex flex-col items-start">
                <div class="text-4xl mb-4 font-bold">{{ucfirst($product->title)}} </div>
                <div class="text-regular pl-4 mb-4">{{$product->description}} </div>
                <div class="text-regular pl-4 mb-4">Price from: {{$product->price}} &euro;</div>
                <div class="text-regular pl-4 mb-4">Discount Price: {{$product->discount_price}} &euro;</div>
                <div class="text-regular pl-4 mb-4">Category: {{ucfirst($product->category)}}</div>
                
                @if ($product->category == 'pizza')
                    <div class="text-regular pl-4 mb-4">Variations: {{$product->variationsCount}} </div>
                @endif
            </div>
            <div class="flex flex-col items-end w-full">
                <a class="bg-orange-400 hover:bg-orange-600 text-white w-1/2 text-xl font-bold py-3 px-4 rounded-full flex items-center justify-center cursor-pointer"
                    href="{{$product->category == 'pizza' ? route('product.edit_pizza', $product) : route('product.edit', $product)}}">
                        EDIT
                </a>
                <form action="{{$product->category == 'pizza' ? route('product.destroy_pizza', $product) : route('product.destroy', $product)}}" 
                        method="post" 
                        class="w-1/2">
                    <button class="bg-orange-400 hover:bg-orange-600 text-white w-full text-xl font-bold mr-2 mt-6 py-3 px-4 rounded-full flex items-center justify-center cursor-pointer"
                        type="submit">
                        DELETE
                    </button>
                </form>
            </div>
        </div>
    </div>

    @if($product->category == 'pizza' && $product->variationsCount > 0)

    <div class="bg-white mt-8 border-b-2 border-gray-200 text-4xl font-extrabold">
        Variations
    </div>
    <div class="flex flex-col mt-8 md:grid md:grid-cols-{{$product->variationsCount}} md:gap-2">
        @foreach ($product->variations as $var)
            <div class="flex flex-col mb-6 md:mb-0 border-b md:border-0 md:grid md:grid-cols-2 md:gap-2">
                <div >
                    @if ($var->photo)
                            
                            <img src="{{asset('img/products/'.$var->photo) }}" alt="">
                            
                            @else
        
                            <img src="{{asset('img/defaultPizza.svg')}} " alt="">
        
                            @endif
                </div>
                <div class="flex flex-col items-start justify-between">
                    <div class="flex flex-col items-start">
                        <div class="text-sm mb-4">Size: {{ucfirst($var->size)}} </div>
                        <div class="text-sm mb-4">
                            <div>Description</div>
                            <div class="pl-2">{{$var->description}} </div>
                        </div>
                        <div class="text-sm mb-4">Price from: {{$var->price}} &euro;</div>
                        <div class="text-sm mb-4">Discount Price: {{$var->discount_price}} &euro;</div>
                    </div>
                    <div class="flex flex-col items-end w-full">
                        <a class="bg-orange-400 hover:bg-orange-600 text-white w-1/2 text-xs font-bold py-1 px-4 rounded-full flex items-center justify-center cursor-pointer"
                            href="{{route('variation.edit', $var)}}">
                                EDIT
                        </a>
                        <form action="{{route('variation.destroy', $var)}}" 
                                method="post" 
                                class="w-1/2">
                            <button class="bg-orange-400 hover:bg-orange-600 text-white w-full text-xs font-bold mr-2 my-6 py-1 px-4 rounded-full flex items-center justify-center cursor-pointer"
                                type="submit">
                                DELETE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif

@endsection
