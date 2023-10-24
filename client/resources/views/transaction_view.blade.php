@extends('layouts.app')
@section('content')
    <div>
        <div class="px-6 flex bg-white items-center justify-between h-[80px]">
            <button class="bg-[#edf5ef] p-3 rounded-lg" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>
            </button>
            <p class="font-bold">Transaction Process</p>
            <div class="bg-[#ffffff] text-white p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>
            </div>
        </div>
        <div class="px-6 overflow-y-auto pb-[100px]">
            <div class="py-5">
                <div class="flex gap-x-2 border w-full items center p-5 mb-2 rounded-lg">
                    <div class="bg-gray-500 flex my-auto h-[50px] w-[50px] rounded-full">

                    </div>
                    <div class="flex-col">
                        <p>Martin Edgar</p>
                        <p>Merchant</p>
                    </div>
                </div>

                <div class="flex gap-x-2 border w-full items-center p-5 rounded-lg">
                    <div class="bg-gray-500 flex my-auto h-[50px] w-[50px] rounded-full">

                    </div>
                    <div class="flex-col">
                        <p>Noel Emaas</p>
                        <p>Customer</p>
                    </div>
                </div>
            </div>

            <div>
                <form action="">
                    @csrf
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment
                        Options</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Payment Method</option>
                        <option value="US">Full Payment</option>
                        <option value="CA">25% Downpayment</option>
                        <option value="CA">50% Downpayment</option>
                        <option value="CA">75% Downpayment</option>
                    </select>


                    <div style="margin-top: 10px">

                    </div>
                    <label for="search-dropdown" class="mb-2 text-sm font-medium">Price</label>
                    <div class="flex">
                        <button id="dropdown-button"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button">P<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg></button>

                        <div class="relative w-full">
                            <input type="search" id="search-dropdown"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                placeholder="Enter your price" required>
                            <button type="submit"
                                class="absolute top-0 right-0 p-3.5 h-full text-sm font-medium text-white bg-green-400 rounded-r-lg borde focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="mt-5">
                        <form>
                            <label for="search-dropdown" class="mb-2 text-sm font-medium ">Unit of Measure</label>
                            <div class="flex">
                                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                                    type="button">Select <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="dropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdown-button">
                                        <li>
                                            <a href="#" data-value="Kilograms"
                                                class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kilograms</a>
                                        </li>
                                        <li>
                                            <a href="#" data-value="Grams"
                                                class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grams</a>
                                        </li>
                                        <li>
                                            <a href="#" data-value="Milligram"
                                                class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Milligram</a>
                                        </li>
                                        <li>
                                            <a href="#" data-value="Pounds"
                                                class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pounds</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="relative w-full">
                                    <input type="search" id="search-dropdown2"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                        placeholder="Select or type unit of measure" required>
                                    <button type="submit"
                                        class="absolute top-0 right-0 p-3.5 h-full text-sm font-medium text-white bg-green-400 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                            class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt-3">
                        <label for="quantity"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <div class="flex items-center">
                            <button id="decrement"
                                class="flex-shrink-0  inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-red-500 rounded-l-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300"
                                type="button">
                                -
                            </button>
                            <div class="relative w-full">
                                <input type="number" id="quantity"
                                    class="block p-2 w-full text-center z-20 text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="0" required>
                            </div>
                            <button id="increment"
                                class="flex-shrink-0  inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-green-400 rounded-r-lg focus:ring-4 focus:outline-none focus:ring-green-500"
                                type="button">
                                +
                            </button>
                        </div>
                    </div>
                </form>

                <div class="mt-10">
                    <p class="text-1xl">Chat with each other</p>
                    <div class="flex  bg-gray-100">
                        <div class="flex flex-col flex-1 overflow-hidden">
                            <div class="flex flex-1">
                                <!-- Conversation Area -->
                                <div class="flex flex-1 flex-col overflow-hidden">
                                    <!-- Messages -->
                                    <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-4">
                                        <!-- Received Message -->
                                        <div class="flex mb-4">
                                            <div class="flex-shrink-0 mr-3">
                                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                    src="https://source.unsplash.com/random/301x301" alt="">
                                            </div>
                                            <div class="flex-1 my-auto">
                                                <div class="bg-white rounded-lg shadow">
                                                    <div class="py-2 px-4 text-sm">
                                                        <p>10,000 Pesos, deal?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sent Message -->
                                        <div class="flex mb-4 flex-row-reverse">
                                            <div class="flex-shrink-0 ml-3">
                                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                    src="https://source.unsplash.com/random/302x302" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <div class="bg-blue-500 text-white rounded-lg shadow">
                                                    <div class="py-2 px-4 text-sm">
                                                        <p>I'm sorry, pwede mo paba babaan yung presyo?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Received Message -->
                                        <div class="flex mb-4 my-auto">
                                            <div class="flex-shrink-0 mr-3">
                                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                    src="https://source.unsplash.com/random/303x303" alt="">
                                            </div>
                                            <div class="flex-1">
                                                <div class="bg-white rounded-lg shadow">
                                                    <div class="py-2 px-4 text-sm">
                                                        <p>Ayaw.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Input -->
                                    </div>
                                    <div class="flex-none h-16 bg-white border-t py-1">
                                        <div class="flex space-x-2">
                                            <input type="text"
                                                class="flex-1 py-2 rounded-lg border-gray-400 focus:outline-none focus:ring"
                                                placeholder="Type your message...">
                                            <button
                                                class="bg-green-400 text-white rounded-lg px-4 py-2 focus:outline-none focus:ring">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="fixed bottom-0 sm:w-[500px] w-full p-4 bg-white text-white border border-t">
            <a href="/">
                <button class="bg-[#1CB87E] w-full py-4 rounded-lg font-bold">
                    Confirm Transaction
                </button>
            </a>
        </div>
    </div>
    <script>
        document.getElementById('increment').addEventListener('click', function() {
            var input = document.getElementById('quantity');
            var value = parseInt(input.value, 10);
            if (isNaN(value)) value = 0;
            input.value = value + 1;
        });

        document.getElementById('decrement').addEventListener('click', function() {
            var input = document.getElementById('quantity');
            var value = parseInt(input.value, 10);
            if (isNaN(value)) value = 0;
            if (value > 0) {
                input.value = value - 1;
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            // Get all dropdown items
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            // Add click event listener to each dropdown item
            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Get the input element
                    const input = document.getElementById('search-dropdown2');

                    // Set the input value to the data-value of the clicked item
                    input.value = this.getAttribute('data-value');
                });
            });
        });


        function goBack() {
            window.history.back();
        }

    </script>
@endsection
