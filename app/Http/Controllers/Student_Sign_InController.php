<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Student_Sign_InController extends Controller
{    
    public function index(){
    return view('login');
    }
    public function login(Request $request)
    {
         
        $email = $request->email;
        $password = $request->password;


        $account = User::where("email", $email)->first();

        
        if ($account && Hash::check($password, $account->password)) {
            
            if ($account->type == 0) {
                return view('Admin_Home');}
                 
              //منسق المشاريع 
            elseif ($account->type == 1) {
                return view('Officer_Home');}

               //المشرف
             elseif ($account->type == 2){
                return view('Faculty_Home');}
                //أستاد
             elseif ($account->type == 3) {
                return view('Faculty_Home');
                // طالب
                if ($account->type == 4) {
                
                     return view('Student_Home');
                 }      
                
            }
        
         }
    }
}
