@extends('layouts.public_page')

@section('title')
Welcome
@endsection

@section('create')
<a class="bg-gray-100 hover:bg-indigo-700 text-indigo-700 hover:text-gray-100 text-xs font-bold py-1 px-4 border border-indigo-500 rounded-full flex items-center cursor-pointer"
    href="{{ route('product.index')}}">
        Krepšelis
</a>
@endsection

@section('content')

<div class=" bg-opacity-25 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4">

@foreach ($pizzas as $pizza)
    <div class="p-1 bg-white rounded-lg shadow-md flex flex-col">
        {{-- here will be image --}}
        <div class="h-full w-full">
            @if ($pizza->photo)
                <img src="{{asset('img/pizzas/'. $pizza->photo)}}"
                    class="object-cover w-full"
                    alt=""
                >
            @else
            <img src="{{asset('img/defaultPizza.svg')}}"
                    class="object-cover w-full"
                    alt=""
                >
            @endif
        </div>
        <div class="h-full w-full flex flex-col justify-between">
            <div class="flex flex-col justify-end">

                <div class="text-lg text-gray-600 leading-7 font-semibold">
                    {{-- pizza name/ --}}
                    <a href="{{ route('product.show', $pizza)}}">{{$pizza->title}}</a>
                </div>
                <div class="mt-2 ml-3 text-sm text-gray-500">
                    {{-- Plate number --}}
                    {{$pizza->price}}
                </div>
            </div>

            
            
        </div>



    </div>
    @endforeach
</div>

@endsection