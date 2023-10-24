@extends('layouts.app')

@section('content')
    <div class="px-6 flex bg-white items-center justify-between h-[80px] border-b mb-6">
        <div>
            <p class="font-bold text-green-900">AgriCon</p>
        </div>
        <div>
            <p>Profile</p>
        </div>
    </div>

    <div class="px-6">
        <form action="" class="flex items-center gap-x-2 mb-4">
            <input type="text" id="first-name" class="bg-gray py-4 px-4 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="Search Products">
            <button type="submit" class="text-white bg-[#1CB87E] hover:bg-[#168a5f] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-[17px] text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>                  
            </button>
        </form>

        <div id="category" class="flex flex-row gap-x-2 overflow-x-auto w-full mb-8">
            <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                All
            </button>
            <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                Vegetable
            </button>
            <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                Dairy
            </button>
            <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                Fruit
            </button>
            <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                Crops
            </button>
        </div>

        <p class="text-gray-600 font-bold mb-4">All Products</p>

        <div class="grid grid-cols-2 gap-4 pb-[100px]">
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
            <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                <div class="mx-auto p-2">
                    <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt="" width="150" height="100"/>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                    </a>
                    <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                    <p class="font-bold text-md">₱ 15.00 / kg</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 sm:w-[500px] w-full p-4 bg-white text-white border border-t mx-auto">
        <div class="flex flex-row items-center justify-evenly gap-x-12 py-2">
            <button class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                </svg>                                 
            </button>
            <button class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
            </button>
            <button class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>                  
            </button>
            <button class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>  
            </button>
        </div>
    </div>

    <style>
        #category::-webkit-scrollbar {
            display: none;
        }

        #category {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
    </style>
@endsection