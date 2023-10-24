<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller {
    public function getAllOrders() {
        $url = 'http://localhost:8001/orders';
        $orders = Http::get($url);
        $orders = $orders->json();

        dd($orders);
        // return view('order', ['orders' => $orders]);
    }
}

