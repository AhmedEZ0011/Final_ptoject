<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OfficerSettingsController extends Controller
{
    public function index()
    {   if (auth()->check()) {
        $account = Auth::user();
        return view('OfficerSettings');
    }
}
    public function update(Request $request)
    {
        $account = User::find(Auth::user()->id);
        $account->name = $request->input('name');
        $account->email = $request->input('email');
        $account->password = Hash::make($request->input('password'));
         $account->save();
         return redirect("Officer_Home");
    }
}

