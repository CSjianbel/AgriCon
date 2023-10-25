<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class ProductCard extends Component
{
    public $username;
    /**
     * Create a new component instance.
     */
    public function __construct($product)
    {
        $this->product = $product;
        $this->username = $this->getUser(rand(1, 3));
        $this->username = $this->username['first_name'].$this->username['last_name'];
    }

    public function getUser($id) {
        $url = 'http://localhost:8001/users';
        $user = Http::get($url, [
            'user_id' => $id
        ]);
        return $user[0];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card', [
            'product' => $this->product,
            'username' => $this->username
        ]);
    }
}
