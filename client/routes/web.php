<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\WishList;
use App\Http\Controllers\Inventory;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerProfile;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomePage::class, 'homepage'])->name('home')->middleware('auth');
Route::get('/inventory', [Inventory::class, 'inventory'])->name('inventory')->middleware('auth');

Route::get('/login', function () {
    return view('signin');
});

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/product-view/{id}', [ProductController::class, 'getProductDetails'])->name('product')->middleware('auth');

Route::get('/wishlist', [WishList::class, 'wishlist'])->name('wishlist')->middleware('auth');

Route::get('/farmer-profile', [FarmerProfile::class, 'farmerProfile'])->name('farmer-profile')->middleware('auth');

Route::get('/business-profile', function () {
    return view('business-profile');
});


Route::get('/chats', function () {
    return view('chats');
});

Route::get('/profile', function () {
    return view('farmer-profile');
})->middleware('farmer');

Route::get('/profile', function () {
    return view('business-profile');
})->middleware('business');

Route::get('/transaction', function () {
    return view('transaction_view');
});

Route::get('/payment-methods', function () {
    return view('payment-method');
});


Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('signup', [UserController::class, 'signup'])->name('signup');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('products', [ProductController::class, 'getAllProducts'])->name('products');
// Route::get('products/{id}', [ProductController::class, 'getFarmProduct'])->name('products');
Route::post('create-product', [ProductController::class, 'createProduct'])->name('create.product');
