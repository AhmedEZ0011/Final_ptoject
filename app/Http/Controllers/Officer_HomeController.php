<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Officer_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Officer_Home');
    }
    public function drop($id) {
        
    }
}
