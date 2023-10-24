@extends('layouts.app')

@section('content')
    <x-header />

    <div class="px-6 flex items-center justify-center">
        <div class="flex items-center justify-between border h-[200px] w-full rounded-lg px-10">
            <div class="flex flex-items">
                <div class="bg-gray-600 h-[70px] w-[70px] rounded-full">
                <img src="{{ asset('assets/martin.jpg') }}" alt="" class="rounded-full" width="70" height="70">
                </div>
                <div class="flex flex-col ml-4">
                    <p class="text-gray-600  text-xl font-bold ">Martin the Farmer</p>
                    <p class="text-gray-600 text-base font-medium">Martin Edgar Atole</p>
                    <p class="text-gray-600 text-sm mb-2">Cararayan, Naga City</p>
                   
                    <div class="flex-col items-center gap-x-2">
                        <p class="text-yellow-400">★★★★★</p>
                        <p class="text-sm text-gray-600">Rating: 5/5</p>
                    </div>
               
                </div>
                
            </div>

            @if (session('user_type') == 'Farmer')
                <form method="GET" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>  
                    </button>
                </form>
            @endif

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