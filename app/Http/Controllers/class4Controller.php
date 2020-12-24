<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class class4Controller extends Controller
{
    public function index()
    {
        return view('viewBody');
    }

    public function signup()
    {
        return view('signup');
    }
}
