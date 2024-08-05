<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Faculty_HomeController extends Controller
{
    public function index()
    {
        
            if (auth()->check()) {
                $account = Auth::user();
        
                return view('Faculty_Home', [
                    'username' => $account->name,
                    'userid' => $account->id
                ]);
            } else {
                // Handle the case when the user is not authenticated
                return redirect()->route('login'); // Redirect to the login page, for example
            }
        
    }
    public function drop($id) {
        
    }
    
}
