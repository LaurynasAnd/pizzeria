@extends('layouts.admin_page')

@section('title')
Edit Product {{ucfirst($product->title)}}
@endsection

@section('content')
<form   id="product_form" 
        method="POST" 
        action="{{route('product.update', [$product])}}"
        class="flex flex-col  justify-center" 
        enctype="multipart/form-data"
>
    <div class="w-full mb-3 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="product_title">
        Title*
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            id="product_title"
            name="title" 
            type="text" 
            required
            value="{{old('title', $product->title)}}"
            placeholder="Product Title"
        >
    </div>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/3 px-3 mb-3 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category_id">
                category*
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="category_id"
                    name="category_id"
                >
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == old('category_id', $product->category_id) ) selected @endif>{{strtoupper($category->title)}} </option>
                    @endforeach
                </select>
                {{-- down arrow logo --}}
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="product_price">
            Price*
            </label>
            <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="product_price"
                name="price" 
                type="text" 
                required
                value="{{old('price', $product->price)}}"
                placeholder="Price"
            >
        </div>
        <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="discount_price">
            Discount Price*
            </label>
            <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="discount_price"
                name="discount_price" 
                type="text" 
                value="{{old('discount_price', $product->discount_price)}}"
                placeholder="Discount Price"
            >
        </div>
    </div>
    <div class="w-full rounded">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
            Description
        </label>
        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="description" 
                name="description"
                cols="30" rows="2"
                placeholder="Describe Product"
        >{{old('description', $product->description)}}</textarea>
    </div>
    <div class="w-full rounded">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">
            Photo
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="photo"
            name="photo" 
            type="file" 
            placeholder="import picture"
            accept="image/png, image/jpeg, image/jpg, image/bmp"
        >
        @if ($product->photo)
            <img src="{{asset('img/products/'.$product->photo) }}" alt="" class="h-40">
        @endif
    </div>
    
        
    @csrf
    <button type="submit" 
            class="bg-orange-400 hover:bg-orange-600 text-base text-white font-bold w-full mt-4 py-2 px-4  rounded-md flex items-center justify-center cursor-pointer focus:outline-none "
            >
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <span>Edit Product</span>

    </button>
</form>
@endsection