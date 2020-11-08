@extends('layouts.admin_page')

@section('title')
New Pizza
@endsection

@section('content')
<script> const createPizzaVariation="{{route('product.create_pizza_variation')}}"</script>
<form   id="product_form" 
        method="POST" 
        action="{{route('product.store_pizza')}}" 
        class="flex flex-col  justify-center" 
        enctype="multipart/form-data"
>
    <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pizza_title">
            Title*
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="pizza_title"
                name="title" 
                type="text" 
                required
                value="{{old('title')}}"
                placeholder="Pizza Title"
            >
        </div>
        <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pizza_price">
            Price*
            </label>
            <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="pizza_price"
                name="price" 
                type="text" 
                required
                value="{{old('price')}}"
                placeholder="Price"
            >
        </div>
        <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="discount_price">
            Discount Price*
            </label>
            <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="discount_price"
                name="discount_price" 
                type="text" 
                value="{{old('discount_price')}}"
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
        >{{old('description')}}</textarea>
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
    </div>
    
    <div id="variations"></div>
    
    <button type="button" 
            id="add_variations"
            class="bg-orange-400 hover:bg-orange-600 text-base text-white font-bold w-full mt-4 py-2 px-4  rounded-md flex items-center justify-center cursor-pointer focus:outline-none "
            >
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <span>Add Variation</span>

    </button>
    
    @csrf
    <button type="submit" 
            class="bg-orange-400 hover:bg-orange-600 text-base text-white font-bold w-full mt-4 py-2 px-4  rounded-md flex items-center justify-center cursor-pointer focus:outline-none "
            >
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <span>Add Pizza</span>

    </button>
</form>
@endsection