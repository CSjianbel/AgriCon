<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RatingController extends Controller 
{
    public function createRating(Request $request)
    {
        $url = 'http://localhost:8001/ratings';

        $payload = [
            'farm_id' => $request->farm_id,
            'business_id' => $request->business_id,
            'rating' => $request->rating,
            'comment' => $request->comment
        ];
        
        // If business ang marate sa product
        if ($request->item_id) {
            $payload['item_id'] = $request->item_id;
        }

        $rating = Http::post($url, $payload);

        dd($rating);
        // return redirect()->route('rating');
    }

    public function getFarmRatings($id) 
    {
        $url = 'http://localhost:8001/ratings';
        $ratings = Http::get($url, [
            'farm_id' => $id
        ]);
        $ratings = $ratings->json();

        dd($ratings);
        // return view('rating', ['ratings' => $ratings]);
    }

    public function getBusinessRatings($id) 
    {
        $url = 'http://localhost:8001/ratings';
        $ratings = Http::get($url, [
            'business_id' => $id
        ]);
        $ratings = $ratings->json();

        dd($ratings);
        // return view('rating', ['ratings' => $ratings]);
    }

    public function getProductRatings($id) 
    {
        $url = 'http://localhost:8001/ratings';
        $ratings = Http::get($url, [
            'item_id' => $id
        ]);
        $ratings = $ratings->json();

        dd($ratings);
        // return view('rating', ['ratings' => $ratings]);
    }

    public function getRating($id) 
    {
        $url = 'http://localhost:8001/ratings';
        $rating = Http::get($url, [
            'rating_id' => $id
        ]);
        $rating = $rating->json();

        dd($rating);
        // return view('rating', ['rating' => $rating]);
    }

    public function editRating($id, Request $request)
    {
        $url = 'http://localhost:8001/ratings' . $id;

        $old = Http::get($url);

        $rating = Http::put($url, [
            'rating' => $request->rating || $old->rating,
            'comment' => $request->comment || $old->comment
        ]);

        dd($rating);
        // return redirect()->route('rating');
    }

    public function deleteRating($id)
    {
        $url = 'http://localhost:8001/ratings' . $id;

        $rating = Http::delete($url);

        dd($rating);
        // return redirect()->route('rating');
    }
}



