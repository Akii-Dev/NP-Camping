<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // method for showing the login page on login.blade.php
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email', // checks if email exists in users table
            'password' => 'required', // don't need min lenth. it already exists.
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!password_verify($validated['password'], $user->password)) {
            return back()->withErrors(['password' => 'The provided password is incorrect.'])->withInput();
        }


        // $_SESSION['user'] = $user; // useful for knowing the name and role
        session(['user' => $user]); // laravel session way
        Auth::login($user); // authenticate user so we can use @auth


        if ($user->role === 'admin') {
            return view('index'); // change index to admin later
        }

        return view('index');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email', // checks the user table
            'password' => 'required|string|min:8|confirmed', // this handles both password and password_confirmation. no need for a seperate field
        ]);

        // use factory to create a new user
        $user = User::factory()->create([
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => 'customer', // set role to customer by default
        ]);

        // create customer profile for new user
        Customer::create([
            'user_id' => $user->id,
        ]);

        // keep user logged in after registration
        // $_SESSION['user'] = $user; // standard php session way
        session(['user' => $user]); // proper laravel session way

        // authenticate user so we can use @auth
        Auth::login($user);
        

        return view('index');
    }

    public function logout()
    {
        session()->flush(); // clear all session data.

        Auth::logout(); 
        return view('index');
    }
}
