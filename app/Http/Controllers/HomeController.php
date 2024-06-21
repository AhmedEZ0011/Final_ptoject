<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    //this is the logout
   /* function logout (){
        session::flush(); 
        Auth::logout();
        return redirect (route('sign'));}
   */
}
