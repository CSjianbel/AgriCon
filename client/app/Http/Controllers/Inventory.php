<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Inventory extends Controller
{
    public function inventory() 
    {
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
        return view('inventory', compact('products'));
    }

    public function getAllInventory() 
    {
        $url = 'http://localhost:8001/inventory';
        $inventory = Http::get($url);
        $inventory = $inventory->json();

        dd($inventory);
        // return view('inventory', ['inventory' => $inventory]);
    }

    public function getInventory($id) 
    {
        $url = 'http://localhost:8001/inventory';
        $inventory = Http::get($url, [
            'id' => $id
        ]);
        $inventory = $inventory->json();

        dd($inventory);
        // return view('inventory', ['inventory' => $inventory]);
    }

    public function getUserInventory($id) 
    {
        $url = 'http://localhost:8001/inventory';
        $inventory = Http::get($url, [
            'user_id' => $id
        ]);
        $inventory = $inventory->json();

        dd($inventory);
        // return view('inventory', ['inventory' => $inventory]);
    }

    public function createInventory(Request $request)
    {
        $url = 'http://localhost:8001/inventory';

        $payload = [
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'unit_of_measure' => $request->unit_of_measure,
            'user_id' => $request->user_id        
        ];

        if ($request->order_id) {
            $payload['order_id'] = $request->order_id;
        }

        $inventory = Http::post($url, $payload);

        $inventory = $inventory->json();
        // return redirect()->route('inventory');
    }
}

