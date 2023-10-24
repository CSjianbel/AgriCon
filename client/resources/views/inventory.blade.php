@extends('layouts.app')
@section('content')
<div>
    <x-header />
    <div class="px-6">
        <p class="text-gray-600 font-bold mb-4">All Products</p>
        <div class="grid grid-cols-2 gap-4 pb-[100px]">
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>

                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>

                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>
                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>
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

    </div>
</div>
@endsection
