<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller {
    public function getBusinessOders() {
        $url = 'http://localhost:8001/orders';
        $orders = Http::get($url, [
            'business_id' => session('business_id')
        ]);
        $orders = $orders->json();

        dd($orders);
        // return view('order', ['orders' => $orders]);
    }

    public function getFarmOrders() {
        $url = 'http://localhost:8001/orders';
        $orders = Http::get($url, [
            'farm_id' => session('farm_id')
        ]);
        $orders = $orders->json();

        dd($orders);
        // return view('order', ['orders' => $orders]);
    }

    public function getOrder($id) {
        $url = 'http://localhost:8001/orders';
        $order = Http::get($url, [
            'order_id' => $id
        ]);
        $order = $order->json();

        dd($order);
        // return view('order', ['order' => $order]);
    }

    public function createOrder(Request $request) {
        $url = 'http://localhost:8001/orders';

        $order = Http::post($url, [
            'farm_id' => $request->farm_id,
            'business_id' => $request->business_id,
            'total' => $request->total_price,
            'status' => 'order created'
        ]);

        dd($order);
        // return redirect()->route('order');
    }

    public function updateOrder(Request $request) {
        $url = 'http://localhost:8001/orders';

        $order = Http::put($url, [
            'order_id' => $request->order_id,
            'status' => $request->status
        ]);

        dd($order);
        // return redirect()->route('order');
    }

    public function deleteOrder($id) {
        $url = 'http://localhost:8001/orders';

        $order = Http::delete($url, [
            'order_id' => $id
        ]);

        dd($order);
        // return redirect()->route('order');
    }

    public function addOrderItem(Request $request) {
        $url = 'http://localhost:8001/orders';

        $order = Http::post($url, [
            'order_id' => $request->order_id,
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'unit_of_measure' => $request->unit_of_measure
        ]);

        dd($order);
        // return redirect()->route('order');
    }

    public function removeOrderItem(Request $request) {
        $url = 'http://localhost:8001/orders';

        $order = Http::delete($url, [
            'order_id' => $request->order_id,
            'item_id' => $request->item_id
        ]);

        dd($order);
        // return redirect()->route('order');
    }

    public function editOrderItem(Request $request) {
        $url = 'http://localhost:8001/orders';

        $order = Http::put($url, [
            'order_id' => $request->order_id,
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'unit_of_measure' => $request->unit_of_measure
        ]);

        dd($order);
        // return redirect()->route('order');
    }
}

