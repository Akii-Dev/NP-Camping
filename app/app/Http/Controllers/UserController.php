<?php

namespace App\Http\Controllers;

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
        
        return 'login route works';
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
