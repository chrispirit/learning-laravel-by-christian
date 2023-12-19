<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);


        $user = User::create([
            'name' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);


        return redirect()->back()->with('success','User registered successfully');
    }
}
