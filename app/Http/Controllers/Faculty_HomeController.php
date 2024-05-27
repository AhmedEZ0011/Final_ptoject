<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Faculty_HomeController extends Controller
{
    public function index()
    {
        return view('Faculty_Home');
    }
}
