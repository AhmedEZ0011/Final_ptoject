<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SignInController extends Controller
{
    //
    public function index()
    {

        return view('login');
    }

    public function login(Request $request)
    {
        $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credintials = $request->only('email', 'password');
        if(Auth::attempt($credintials)) {
            $account = Auth::user();
            if ($account->type == 0) {
                //أدمن
                return view('Admin_Home',  ['username' => $account->name]);
            } elseif ($account->type == 1) {
                //منسق المشاريع
                return redirect("Officer_Home");//view('Officer_Home', [
                   // 'inactive_users' => User::where('active', '=', 0)->where('type', '=', 4)->get()
                //]);
            } elseif ($account->type == 2) {
                //المشرف
                return view('Faculty_Home',  ['username' => $account->name]);
            } else {
                //الطالب
                return redirect("Student_Home");
            }
        }
        else {
            $validator["incorrectData"] = "Incorrect email or password";
            return redirect("login")->withErrors($validator);
        }
    }


    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect('login');
    }
}
