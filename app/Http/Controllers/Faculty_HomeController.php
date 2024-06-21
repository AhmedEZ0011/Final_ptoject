<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Faculty_HomeController extends Controller
{
    public function index()
    {
        return view('Faculty_Home');
    }
    public function drop($id) {
        
    }
    
}
