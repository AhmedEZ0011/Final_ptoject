<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Faculty_HomeController extends Controller
{
    public function index()
    {
        $account = Auth::user();
        return view('Faculty_Home', [
            'username' => $account->name,
            'userid' => $account->id
        ]);
    }
    public function drop($id) {
        
    }
    
}
