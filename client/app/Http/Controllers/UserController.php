<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function login(Request $request) {
        
        $url = 'http://localhost:8001/users';
        $user = Http::get($url, [
            'email' => $request->email
        ]);
        $user = $user->json();

        if ($user[0]['password'] == $request->password) {
            return redirect('/');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }
    }

    public function signup(Request $request) {

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
