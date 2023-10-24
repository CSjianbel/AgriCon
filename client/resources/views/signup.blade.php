@extends('layouts.app')

@section('content')
    <div class="px-10 flex items-center justify-center h-screen">
        <form class="w-full">
            <div class="mb-6">
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Select User Type</option>
                    <option value="US">Farmer</option>
                    <option value="CA">Business</option>
                </select>
            </div>
            <div class="flex flex-row gap-x-4">
                <input type="text" id="disabled-input" placeholder="First Name" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <input type="text" id="disabled-input" placeholder="Last Name" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <input type="text" id="disabled-input" placeholder="Business Name" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <input type="text" id="disabled-input" placeholder="Create Password" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <hr class="mb-6">
            <button type="submit" class="text-white mb-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-[500px] sm:w-auto px-5 py-2.5 text-center">Create Account</button>
            <div class="flex flex-row gap-x-2">
                <p>Alread have an account?</p>
                <a href="#">Sign In</a>
            </div>
        </form>
    </div>

@endsection