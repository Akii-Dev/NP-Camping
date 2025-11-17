<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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


        $_SESSION['user'] = $user; // useful for knowing the name and role


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
        ]);

        // keep user logged in after registration
        $_SESSION['user'] = $user;

        return redirect()->route('dashboard');
    }
}
