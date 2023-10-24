<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', function () {
    return view('signin');
});

Route::get('signup', function() {
    return view('signup');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/farmer-profile', function () {
    return view('farmer-profile');
});

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/chats', function () {
    return view('chats');
});

Route::get('/profile', function () {
    return view('farmer-profile');
});

Route::get('/product-view', function () {
    return view('product');
});

Route::get('/transaction', function () {
    return view('transaction_view');
});


use App\Http\Controllers\UserController;
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('signup', [UserController::class, 'signup'])->name('signup');
Route::get('logout', [UserController::class, 'logout'])->name('logout');