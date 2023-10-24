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
        // return redirect()->route('/');
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

