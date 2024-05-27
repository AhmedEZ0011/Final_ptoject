<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerSettingsController extends Controller
{
    public function index()
    {
        return view('OfficerSettings');
    }
}

