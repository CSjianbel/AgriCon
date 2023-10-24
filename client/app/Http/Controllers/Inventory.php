<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InventoryController extends Controller
{
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

