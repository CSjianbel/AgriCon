@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="px-6 flex bg-white items-center justify-between h-[80px]">
        <button class="bg-[#edf5ef] p-3 rounded-lg" onclick="goBack()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>
        </button>
        <p class="font-bold">Item Details</p>
        <div class="bg-[#ffffff] text-white p-3 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>
        </div>
    </div>


    <div class="bg-white p-6">
        <img class="rounded-t-lg mx-auto" src="{{ $product['photo_url'] }}" alt=""
                width="300" height="300" />

        <div class="flex justify-between items-center mb-6">

            <p class="font-bold text-2xl">{{ $product['name'] }}</p>

            <button class="p-4 w-fit h-fit bg-[#edf5ef] rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                  </svg>
            </button>
        </div>

        <a href="/farmer-profile">
            <button class="border rounded-lg px-4 py-4 flex items-center w-full">
                <img class="rounded-lg mr-4" src="{{ asset('assets/martin.jpg') }}" alt="martin" width="60" height="60">
                <div class="flex-col h-full items-center">
                    <p class="font-bold">Martin The Farmer</p>
                    <div class="flex text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <p class="text-gray-600">Cararayan, Naga City</p>
                    </div>
                </div>
            </button>
        </a>

        <p class="text-gray-600 font-bold mt-6 mb-4">Product Description</p>

        <div class="text-gray-600 mb-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat sagittis urna. Cras vehicula justo commodo nulla accumsan porta. Suspendisse.</p>
        </div>

        <div class="rating mb-6">
            <p class="text-gray-600 font-bold mt-6 mb-4">Product Ratings</p>
            <div class="flex items-center gap-x-2">
                <p class="text-yellow-400">★★★★★</p>
                <p class="text-sm text-gray-600">5/5 (10 reviews)</p>
            </div>
        </div>

        <div class="">
            <div class="flex gap-x-2 border-b border-t py-4">
                <div>
                    <div class="bg-gray-600 w-[45px] h-[45px] rounded-full"></div>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-between mb-2">
                        <div class="flex-col">
                            <p class="font-medium text-gray-600">Juan Dela Cruz</p>
                            <p class="text-sm text-gray-600">10/23/2023</p>
                        </div>
                        <p class="text-yellow-400">★★★★★</p>
                    </div>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat sagittis urna. Cras vehicula justo commodo nulla accumsan porta. Suspendisse.</p>
                </div>
            </div>
            <div class="flex gap-x-2 border-b py-4">
                <div>
                    <div class="bg-gray-600 w-[45px] h-[45px] rounded-full"></div>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-between mb-2">
                        <div class="flex-col">
                            <p class="font-medium text-gray-600">Juan Dela Cruz</p>
                            <p class="text-sm text-gray-600">10/23/2023</p>
                        </div>
                        <p class="text-yellow-400">★★★★★</p>
                    </div>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat sagittis urna. Cras vehicula justo commodo nulla accumsan porta. Suspendisse.</p>
                </div>
            </div>
        </div>

        <div class="w-full bg-gray-100 py-4">
            <p class="text-center">View All</p>
        </div>

        {{-- <p class="text-gray-600 font-bold mt-6 mb-4">Related Products</p>

        <div class="grid grid-cols-2 gap-4 pb-[100px]">
            @for ($i = 1; $i <= 4; $i++)
                <x-product-card />
            @endfor
        </div> --}}
    </div>


    <div class="fixed bottom-0 sm:w-[500px] w-full p-4 bg-white text-white border border-t">
        <a href="/transaction">
            <button class="bg-[#1CB87E] w-full py-4 rounded-lg font-bold">
                Start Transaction
            </button>
        </a>
    </div>
</div>

<script>
    function goBack() {
      window.history.back();
    }
</script>
@endsection
