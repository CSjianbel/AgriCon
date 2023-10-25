<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{

    public function getAllProducts()
    {
        $url = 'http://localhost:8001/items';
        $products = Http::get($url);
        $products = $products->json();

        dd($products);
        return view('product', ['products' => $products]);
    }

    public function getProduct($id)
    {
        $url = 'http://localhost:8001/items';
        $product = Http::get($url, [
            'id' => $id
        ]);
        $product = $product->json();

        dd($product);
        // return view('product', ['product' => $product]);
    }

    public function getFarmProducts($id)
    {
        $url = 'http://localhost:8001/items';
        $products = Http::get($url, [
            'farm_id' => $id
        ]);
        $products = $products->json();

        dd($products);
        // return view('product', ['products' => $products]);
    }

    public function createProduct(Request $request)
    {
        $url = 'http://localhost:8001/items';
        $product = Http::post($url, [
            'name' => $request->name,
            'description' => $request->description,
            'farm_id' => session('user_id'),
            'unit_of_measure' => '2',
            'category' => 'Dairy',
            'status' => 'available',
        ]);

        return redirect()->route('inventory');
    }

    public function getProductDetails($id) {
        $jsonData = '[
            {
                "name":"Cabbage",
                "photo_url":"https://www.freepngimg.com/thumb/categories/2970.png",
                "quantity":"One Unit",
                "id":2,
                "price": 30
            },
            {
                "name":"Capsicum",
                "photo_url":"https://www.nicepng.com/png/detail/52-525615_green-bell-pepper-png-green-capsicum-png.png",
                "quantity":"One Unit",
                "id":7,
                "price": 5
            },
            {
                "name":"Garlic",
                "photo_url":"https://www.freepngimg.com/thumb/garlic/2-2-garlic-transparent-thumb.png",
                "quantity":"One Unit",
                "id":10,
                "price": 20
            },
            {
                "name":"Beetroot",
                "photo_url":"https://pngimg.com/uploads/beet/beet_PNG28.png",
                "quantity":"One Unit",
                "id":11,
                "price": 20
            },
            {
                "name":"Tomatoes",
                "photo_url":"https://www.freepngimg.com/thumb/categories/2985.png",
                "quantity":"One Unit",
                "id":13,
                "price": 5
            },
            {
                "name":"Celeriac",
                "photo_url":"https://w7.pngwing.com/pngs/252/146/png-transparent-celeriac-leaf-vegetable-food-celery-herbes-leaf-vegetable-food-plant-stem-thumbnail.png",
                "quantity":"One Bunch",
                "id":16,
                "price": 5
            },
            {
                "name":"Carrots",
                "photo_url":"https://www.freepngimg.com/thumb/categories/2971.png",
                "quantity":"One Kg",
                "id":18,
                "price": 60
            },
            {
                "name":"Onions",
                "photo_url":"https://www.freepngimg.com/thumb/onion/10-red-onion-png-image-thumb.png",
                "quantity":"One Kg",
                "id":19,
                "price": 120
            },
            {
                "name":"Potatoes",
                "photo_url":"https://www.freepngimg.com/thumb/potato/7-potato-png-images-pictures-download-thumb.png",
                "quantity":"One container",
                "id":20,
                "price": 80
            }
        ]';

        $products = json_decode($jsonData, true);

        $matchingElement = null;

        foreach ($products as $item) {
            if ($item['id'] == (int)$id) {
                $matchingElement = $item;
                break; 
            }
        }
        return view('product', ['product' => $matchingElement]);
    }

    // public function editProduct($id, Request $request)
    // {
    //     $url = 'http://localhost:8001/items' . $id;

    //     $old = Http::get($url);

    //     $product = Http::put($url, [
    //         'name' => $request->name || $old->name,
    //         'description' => $request->description || $old->description,
    //         'farm_id' => $request->farm_id || $old->farm_id,
    //         'unit_of_measure' => $request->unit_of_measure || $old->unit_of_measure,
    //         'category' => $request->category || $old->category,
    //         'status' => $request->status || $old->status,
    //     ]);
    //     // return redirect()->route('product');
    // }
}

