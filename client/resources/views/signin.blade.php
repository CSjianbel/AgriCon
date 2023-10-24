@extends('layouts.app')

@section('content')
    <div class="px-10 flex items-center justify-center h-screen">
        <form class="w-full"  action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="sample@email.com" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter password</label>
                <input type="password" name="password" id="password" class="bg-gray-50 py-4 px-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 " placeholder="••••••" required>
            </div>
            <div class="flex items-start mb-16">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="accent-pink-500 w-4 h-4 border border-gray-300 rounded focus:ring-3 focus:ring-blue-300" required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <button type="submit" class="text-white bg-[#1CB87E] hover:bg-[#168a5f] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-4 text-center">Sign In</button>
        </form>
    </div>
@endsection