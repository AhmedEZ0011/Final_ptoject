<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Student_Sign_InControlle;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Student_Sign_InController extends Controller
{
    public function index()
    {
        return view('student_sign_in');
    }
    public function login(Request $request)
    {
         
        $email = $request->email;
        $password = $request->password;


        $account = User::where('email', $email)->first();

        
        if ($account && Hash::check($password, $account->password)) {
            
            if ($account->type == 0) {
                //منسق المشاريع
                return view('Officer_Home');
            } else {
                
            if ($account->type == 1) {
               //المشرف
                return view('Faculty_Home');
            } else {
                         //الطالب
                return view('Student_Home');
            }
        
         }
    }
}
}