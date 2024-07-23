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
            if($account->active == 0) {
                $validator["accountNotActive"] = "Your account not active yet!";
                return $this->logoutWithError($validator);
            }
             if ($account->type == 1) {
                //منسق المشاريع
                return redirect("Officer_Home");//view('Officer_Home', [
                   // 'inactive_users' => User::where('active', '=', 0)->where('type', '=', 4)->get()
                //]);
            } elseif ($account->type == 3) {
                //المشرف
                return redirect("Faculty_Home");
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

    public function logoutWithError($err) {
        return redirect('login')->withErrors($err);
    }
}
