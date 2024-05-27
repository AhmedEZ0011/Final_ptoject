<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Examiner_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Examiner_Home');
    }
}
