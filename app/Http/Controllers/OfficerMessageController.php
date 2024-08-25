<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class OfficerMessageController extends Controller
{
    public function index()
{
    if (auth()->check()) {
        $account = Auth::user();
    return view('Officer_message');
    }
}
}
