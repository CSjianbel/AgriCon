@extends('layouts.app')

@section('content')
    <x-header />

    <div class="px-6 flex items-center justify-center">
        <div class="flex items-center border h-[150px] w-full rounded-lg px-10">
            <div class="bg-gray-600 h-[65px] w-[65px] rounded-full">

            </div>
            <div class="flex flex-col">
                <p class="text-gray-600  text-2xl font-bold ml-4">Juan Dela Cruz</p>
                <p class="text-gray-600 text-sm ml-4">Cararayan, Naga City</p>
            </div>
        </div>
    </div>

    <p class="text-gray-600 font-bold mb-4 px-6 mt-6">Offered Products</p>

    <div class="grid grid-cols-2 gap-4 pb-[100px] px-6">
        @for ($i = 1; $i <= 8; $i++)
            <x-product-card />
        @endfor
    </div>

    <x-bottom-nav />
@endsection