<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function getUserCarts($id) 
    {
        $url = 'http://localhost:8001/carts';
        $carts = Http::get($url, [
            'user_id' => $id
        ]);
        $carts = $carts->json();

        dd($carts);
        // return view('cart', ['carts' => $carts]);
    }

    public function getCart($id) 
    {
        $url = 'http://localhost:8001/carts';
        $cart = Http::get($url, [
            'cart_id' => $id
        ]);
        $cart = $cart->json();

        dd($cart);
        // return view('cart', ['cart' => $cart]);
    }

    public function getCartItems($id) 
    {
        $url = 'http://localhost:8001/carts';
        $cart = Http::get($url, [
            'cart_id' => $id
        ]);
        $cart = $cart->json();

        dd($cart);
        // return view('cart', ['cart' => $cart]);
    }

    public function createCart(Request $request)
    {
        $url = 'http://localhost:8001/carts';

        $cart = Http::post($url, [
            'farm_id'=> $request->farm_id,
            'business_id'=> $request->business_id
        ]);

        dd($cart);
        // return redirect()->route('cart');
    }

    public function addToCart(Request $request)
    {
        $url = 'http://localhost:8001/carts';

        $cart = Http::post($url, [
            'cart_id' => $request->cart_id,
            'item_id' => $request->item_id
        ]);

        dd($cart);
        // return redirect()->route('cart');
    }

    public function removeFromCart(Request $request)
    {
        $url = 'http://localhost:8001/carts';

        $cart = Http::delete($url, [
            'cart_id' => $request->cart_id,
            'item_id' => $request->item_id
        ]);

        dd($cart);
        // return redirect()->route('cart');
    }

    public function deleteCart($id)
    {
        $url = 'http://localhost:8001/carts' . $id;

        $cart = Http::delete($url);

        dd($cart);
        // return redirect()->route('cart');
    }

    public function checkoutCart($id)
    {
        $url = 'http://localhost:8001/carts' . $id;

        $cart = Http::put($url, [
            'status' => 'checked out'
        ]);

        dd($cart);
        // return redirect()->route('cart');
    }
}

