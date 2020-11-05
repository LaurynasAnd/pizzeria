@extends('layouts.admin_page')

@section('title')
Edit Pizza {{ucfirst($pizza->title)}}
@endsection

@section('content')
<form   id="product_form" 
        method="POST" 
        {{-- action="{{route('product.update_pizza', [$pizza])}}"  --}}
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
                value="{{old('title', $pizza->title)}}"
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
                value="{{old('price', $pizza->price)}}"
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
                value="{{old('discount_price', $pizza->discount_price)}}"
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
                placeholder="Describe Pizza"
        >{{old('description', $pizza->description)}}</textarea>
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
        @if ($pizza->photo)
            <img class="w-40" src="{{asset('img/products/'.$pizza->photo) }}" alt="">
        @endif
    </div>
    





    @if ($pizza->variationsCount)
    <div id="variations" class="border-t-2 border-gray-800 my-4">
        <h1 id="variations_title" class="text-2xl">Variations</h1>
        @foreach ($pizza->variations as $key => $var)
            <section class="my-4 border-b-2 border-gray-800">
                <div class="flex flex-wrap mb-3 -mx-3">
                    <div class="w-full md:w-1/2 mb-3 md:mb-0 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="v_size_id">
                            Size*
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                id="v_size_id"
                                name="v_size_id[]"
                            >
                                @foreach ($sizes as $size)
                                <option value="{{$size->id}}" @if($size->id == old("v_size_id['.$key.']", $var->size_id) ) selected @endif>{{$size->title}} </option>
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
                    <div class="w-full md:w-1/4 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pizza_variation_price">
                        Price*
                        </label>
                        <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                            id="pizza_variation_price"
                            name="v_price[]" 
                            type="text" 
                            required
                            value="{{old('v_price['.$key.']', $var->price)}}"
                            placeholder="Price"
                        >
                    </div>
                    <div class="w-full md:w-1/4 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="discount_variation_price">
                        Discount Price*
                        </label>
                        <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                            id="discount_variation_price"
                            name="v_discount_price[]" 
                            type="text" 
                            value="{{old('v_discount_price['.$key.']', $var->discount_price)}}"
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
                            name="v_description[]"
                            cols="30" rows="2"
                            placeholder="Describe Pizza"
                    >{{old('v_description['.$key.']', $var->description)}}</textarea>
                </div>
                <div class="w-full rounded mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">
                        Photo
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                        id="photo"
                        name="v_photo[]" 
                        type="file" 
                        placeholder="import picture"
                        accept="image/png, image/jpeg, image/jpg, image/bmp"
                    >
                    @if ($var->photo)
                        <img class="w-40" src="{{asset('img/products/'.$var->photo) }}" alt="">
                    @endif
                </div>
                <input type="hidden" name="v[]" value="1">
            </section>

        @endforeach
    </div>
    @endif
    




    
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
