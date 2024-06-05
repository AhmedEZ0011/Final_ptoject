<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Student_Home');
    }
}
