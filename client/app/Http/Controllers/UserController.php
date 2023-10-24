<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function login(Request $request) {
        
        $url = 'http://localhost:8001/users?email=' . $request->email;
        $user = Http::get($url);        
        $user = $user->json();

        dd($user);

        if ($user[0]['password'] == $request->password) {
            session(['user_id' => $user->id]);
            dd(session('user_id'));
            return redirect('/');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }
    }

    public function signup(Request $request) {
        $url = 'http://localhost:8001/users';

        $user = Http::post($url, [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'user_type' => $request->user_type
        ]);
        return redirect()->route('login');
    }

    public function index()
    {
        // Your code here
    }

    public function create()
    {
        // Your code here
    }

    public function store(Request $request)
    {
        // Your code here
    }

    public function show($id)
    {
        // Your code here
    }

    public function edit($id)
    {
        // Your code here
    }

    public function update(Request $request, $id)
    {
        // Your code here
    }

    public function destroy($id)
    {
        // Your code here
    }
}
