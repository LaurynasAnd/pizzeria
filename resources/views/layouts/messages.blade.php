{{-- error messages --}}
@if ($errors->any())
<div class="bg-red-200 text-red-700 overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-6 py-2 sm:px-20">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif


{{-- success messages --}}
@if(session()->has('success_message'))
<div class="bg-green-200 text-green-700 overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-6 py-2 sm:px-20">
        {{session()->get('success_message')}}
    </div>
</div>
@endif
{{-- info messages --}}
@if(session()->has('info_message'))
<div class="bg-blue-200 text-blue-700 overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-6 py-2 sm:px-20">
        {{session()->get('info_message')}}
    </div>
</div>
@endif