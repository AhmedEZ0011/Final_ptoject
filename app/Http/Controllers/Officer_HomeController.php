<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Officer_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Officer_Home', [
            'inactive_users' => User::where('active', '=', 0)->where('type', '=', 4)->get()
        ]);
    }
    public function drop($id) {
        
    }
}
