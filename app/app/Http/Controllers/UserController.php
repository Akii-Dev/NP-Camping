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
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $validated['email'])->first(); 

        
        
        // $_SESSION['role'] = $user->role;
        // $_SESSION['user_id'] = $user->id;
        $_SESSION['user'] = $user; // has the same info as above but in one session variable

    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        return 'register route works';
    }

}
