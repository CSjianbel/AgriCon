@extends('layouts.app')

@section('content')
    <div class="px-10 flex items-center justify-center h-screen">
        <form class="w-full" action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-6">
                <select id="countries" name="user_type" class="bg-gray-50 border py-4 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5">
                    <option selected>Select User Type</option>
                    <option value="US">Farmer</option>
                    <option value="CA">Business</option>
                </select>
            </div>
            <div class="flex flex-row gap-x-4 mb-6">
                <input type="text" name="first_name" id="first-name" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="First name" required>
                <input type="text" name="last_name" id="last-name" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="Last name" required>
            </div>
            <!-- <div class="mb-6">
                <input type="text" id="business-name" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="Enter business name" required>
            </div> -->
            <div class="mb-6">
                <input type="email" name="email" id="email" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="Enter email" required>
            </div>
            <div class="mb-6">
                <input type="password" name="password" id="password" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="Create password" required>
            </div>
            <hr class="mb-6">
            <button type="submit" class="text-white mb-6 bg-[#1CB87E] hover:bg-[#168a5f] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-4 text-center">Create Account</button>
            <div class="flex flex-row gap-x-2">
                <p>Alread have an account?</p>
                <a href="#">Sign In</a>
            </div>
        </form>
    </div>

@endsection