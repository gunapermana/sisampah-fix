<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // For Guest
    public function guest()
    {
        return view('guest/dashboard');
    }
    public function guest_contact()
    {
        return view('guest/contact');
    }
    public function guest_about()
    {
        return view('guest/about');
    }
    public function guest_news()
    {
        return view('guest/news');
    }

    // For User Login
    public function user()
    {
        return view('user/dashboard');
    }
    public function user_contact()
    {
        return view('user/contact');
    }
    public function user_about()
    {
        return view('user/about');
    }
    public function user_news()
    {
        return view('user/news');
    }

    // For Login


    // For Register


    // For Logout
}