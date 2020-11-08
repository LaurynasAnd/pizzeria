<div class="flex flex-wrap mb-3 -mx-3">
    <div class="w-full md:w-1/2 mb-3 md:mb-0 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="vn_size_id">
            Size*
        </label>
        <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="vn_size_id"
                name="vn_size_id[]"
            >
                @foreach ($sizes as $size)
                <option value="{{$size->id}}" @if($size->id == old('size_id') ) selected @endif>{{$size->title}} </option>
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
                name="vn_price[]" 
                type="text" 
                required
                value="{{old('vn_price[]')}}"
                placeholder="Price"
            >
        </div>
        <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="discount_variation_price">
            Discount Price*
            </label>
            <input class="price appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="discount_variation_price"
                name="vn_discount_price[]" 
                type="text" 
                value="{{old('vn_discount_price[]')}}"
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
                name="vn_description[]"
                cols="30" rows="2"
                placeholder="Describe Pizza"
        ></textarea>
    </div>
    <div class="w-full rounded mb-4">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">
            Photo
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="photo"
            name="vn_photo[]" 
            type="file" 
            placeholder="import picture"
            accept="image/png, image/jpeg, image/jpg, image/bmp"
        >
    </div>
    <input type="hidden" name="vn[]" value="1">

    
    <button type="button" 
            id="delete_variations"
            class="delete-variation bg-orange-400 hover:bg-orange-600 text-base text-white font-bold w-full my-4 py-2 px-4  rounded-md flex items-center justify-center cursor-pointer focus:outline-none "
            >
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        <span>Delete Variation</span>

    </button>
