@extends('layouts.app')
@section('content')
    <div class="px-6 bg-white h-[100vh]">
        <div class=" flex bg-white items-center justify-between h-[80px]">
            <div class="bg-[#edf5ef] p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>
            </div>
            <p class="font-bold">Payment Methods</p>
            <div class="bg-[#ffffff] text-white p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>
            </div>
        </div>

        <div class="flex items-center p-4 border border-gray-200 rounded dark:border-gray-700">
            <input checked id="gcash" type="radio" value="" name="bordered-radio"
                class="w-4 h-4 pl- text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-2"
                class="w-full flex py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">
                <img src="{{ asset('assets/gcash.jpg') }}" class="rounded-lg mx-5" width="50" alt="">
                <p class="my-auto text-lg">gcash</p>
            </label>
        </div>
        <div class="flex items-center p-4 border border-gray-200 rounded dark:border-gray-700">
            <input checked id="visa" type="radio" value="" name="bordered-radio"
                class="w-4 h-4 pl- text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-2"
                class="w-full flex py-4 ml-2  text-sm font-medium text-gray-900 dark:text-gray-300"><img
                    src="{{ asset('assets/mastercard.png') }}" class="rounded-lg mx-5" width="50" alt="">
                <p class="my-auto text-lg">Mastercard</p>
            </label>
        </div>
        <div class="flex items-center p-4 border border-gray-200 rounded dark:border-gray-700">
            <input checked id="mastercard" type="radio" value="" name="bordered-radio"
                class="w-4 h-4  text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="bordered-radio-2"
                class="w-full flex py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"><img
                    src="{{ asset('assets/paypal.png') }}" class="rounded-lg mx-5" width="50" alt="">
                <p class="text-lg my-auto">Paypal</p>
            </label>
        </div>

    </div>

    <div class="fixed flex justify-between bottom-[80px] sm:w-[500px] w-full p-4 bg-white">
        <p class="text-xl">TOTAL</p>
        <p class="text-xl">12,000</p>
    </div>

    <div class="fixed bottom-0 sm:w-[500px] w-full p-4 bg-white text-white border border-t">
        <a href="/">
            <button class="bg-[#1CB87E] w-full py-4 rounded-lg font-bold">
                Complete Payment
            </button>
        </a>
    </div>
@endsection
