<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as LaravelAuth;

// ...


class FacultySettingController extends Controller
{

    public function index()
    {
    if (auth()->check()) {
        $account = Auth::user();
        return view ('/Faculty_Setting');
    }
}
    public function update(Request $request)
{
    $account = User::find(Auth::user()->id);
    $account->name = $request->input('name');
    $account->email = $request->input('email');
    $account->password = Hash::make($request->input('password'));
     $account->save();
     return redirect("Faculty_Home");
}

    }