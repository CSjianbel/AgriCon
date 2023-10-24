@extends('layouts.app')
@section('content')
    <div>
        <x-header />
        <div class="px-6">
            <form action="" class="flex items-center gap-x-2 mb-4">
                <input type="text" id="first-name"
                    class="bg-gray py-4 px-4 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 "
                    placeholder="Search Products">
                <button type="submit"
                    class="text-white bg-[#1CB87E] hover:bg-[#168a5f] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-[17px] text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </form>
            <p class="text-gray-600 font-bold mb-4">My Products</p>
            <div class="grid grid-cols-2 gap-4 pb-[100px]">
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                    <div class="mx-auto p-2">
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
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
        <x-bottom-nav />
    </div>
@endsection
