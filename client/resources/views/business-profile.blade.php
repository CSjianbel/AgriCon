@extends('layouts.app')

@section('content')
    <x-header />

    <div class="px-6 flex items-center justify-center mb-6">
        <div class="flex items-center justify-between border h-[200px] w-full rounded-lg px-10">
            <div class="flex flex-items">
                <div class="bg-gray-600 h-[70px] w-[70px] rounded-full">
                </div>
                <div class="flex flex-col ml-4">
                    <p class="text-gray-600  text-2xl font-bold ">Martin the Business</p>
                    <p class="text-gray-600 text-base font-medium">Martin Edgar Atole</p>
                    <p class="text-gray-600 text-sm mb-2">Cararayan, Naga City</p>
                   
                    <div class="flex-col items-center gap-x-2">
                        <p class="text-yellow-400">★★★★★</p>
                        <p class="text-sm text-gray-600">Rating: 5/5</p>
                    </div>
               
                </div>
                
            </div>
            <form method="GET" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>  
                </button>
            </form>
        </div>
    </div>

    <div class="px-6 flex flex-col gap-y-4">
        <button class="w-full rounded-lg border h-[65px] flex items-center px-6">
            <p>Partnered Farmers</p>
        </button>
        <button class="w-full rounded-lg border h-[65px] flex items-center px-6">
            <p>Orders</p>
        </button>
        <button class="w-full rounded-lg border h-[65px] flex items-center px-6">
            <p>Inventory</p>
        </button>
        <button class="w-full rounded-lg border h-[65px] flex items-center px-6 mb-12">
            <p>Cart</p>
        </button>
    </div>


    <x-bottom-nav />
@endsection