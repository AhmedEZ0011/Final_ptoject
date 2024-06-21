<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth as LaravelAuth;

// ...


class Faculty_Sign_InController extends Controller
{
   
    public function index()
    {
        return view ('/Faculty_Sign_In');
    }
       
        //Action اللي ابدير عملية التسجيل
        /*public function login(Request $request)
        {
            // التحقق من صحة المدخلات
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
    
            //المقارنه
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // في حالة نجاح التسجيل يعرض dashboard
                return redirect()->intended('Officer_Home');
            }
    
            // في حالة فشل التسجيل لأي سبب يعرض خطأ 401
            return response()->json([
                'message' => 'The provided credentials do not match our records.',
            ], 401);}
       /* $account = User::where(["email" => $request->email, "password" => $request->password])->first();
        
       // A  و B يعتبرو قيم حقول الادخال 
       // الي ح نتحصلوا عليه عليهم من ال request
        
        $request->email;
        $request->password;
        
        if($account->type == 0) {
        // admin
        return view('Officer_Home');
        */
        function login (){
            return view ('/Faculty_Sign_In');
        }
        function loginPost(Request $request){
          //  $request->validate([
            //    'password'=>'required'
            //]);
            $user = $request->only('password');
            
            if (LaravelAuth::attempt($user)){
                return redirect()->intended(route('Student_Home'));
            }
        }
    }
        
        

    