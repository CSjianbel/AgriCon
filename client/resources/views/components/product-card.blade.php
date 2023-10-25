<div class="flex-grow bg-white border border-gray-200 rounded-lg shadow-sm">
    <a href="/product-view/{{$product['id']}}" >
        <div class="mx-auto p-2">
            <img class="rounded-t-lg mx-auto h-[140px] w-[140px]" src={{ $product['photo_url'] }} alt=""/>
        </div>
        <div class="p-5 bg-[#f1faf2] rounded-b-lg border-t">
            <h5 class="mb text-md font-bold tracking-tight text-[#014A4E]">{{ $product['name'] }}</h5>
            <p class="font-normal text-sm text-gray-700 dark:text-gray-400">{{ $username }}</p>
        </div>
    </a>
</div>
