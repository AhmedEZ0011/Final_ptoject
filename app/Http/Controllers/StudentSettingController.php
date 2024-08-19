<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class StudentSettingController extends Controller
{
    //
    public function index()
    {
        return view('Student_Settings');
    }
    public function update(Request $request)
{
    $account = User::find(Auth::user()->id);
    $account->name = $request->input('name');
    $account->email = $request->input('email');
    $account->password = Hash::make($request->input('password'));
    $account->save();
     return redirect("Student_Home");
}

}
