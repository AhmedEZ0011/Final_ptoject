<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class SignInController extends Controller
{
    //
    public function index()
    {
        
        return view('login');
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;


        $account = User::where("email", $email)->first();


        if ($account && Hash::check($password, $account->password)) {

            if ($account->type == 0) {
                //أدمن
                return view('Admin_Home',  ['username' => $account->name]);
            }
            elseif ($account->type == 1) {
                //منسق المشاريع
                return view('Officer_Home', [
                    'username' => $account->name,
                    'inactive_users' => User::where('active', '=', 0)->where('type', '=', 4)->get()
                ]);
            } elseif ($account->type == 2) {
                    //المشرف
                    return view('Faculty_Home',  ['username' => $account->name]); 

                
                      // ,[ 'username' => $account->name,
                       // 'inactive_users' => User::where('active', '=', 0)->get()]
                    
             } else {
                    //الطالب
                    return view('Student_Home', ['username' => $account->name]);
                }
            }
        }
    }

