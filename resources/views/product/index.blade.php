@extends('layouts.admin_page')

@section('title')
Products
@endsection

@section('create')
<a class="bg-gray-100 hover:bg-indigo-700 text-indigo-700 hover:text-gray-100 text-xs font-bold py-1 px-4 border border-indigo-500 rounded-full flex items-center cursor-pointer"
    href="{{ route('product.index')}}">
        Krepšelis
</a>
@endsection

@section('content')


    @foreach ($allProducts as $category => $products)
    <div class="w-full bg-gray-100 rounded my-3">
        <div>{{strtoupper($category)}}</div>
        @foreach
            
        @endforeach
    </div>
    @endforeach

@endsection