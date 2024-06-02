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
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/Sing_up');
}
}