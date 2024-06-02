<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class Faculty_Sign_InController extends Controller
{
    //لعرض صفحة تسجيل الدخول لطالب
        //Action :
    public function index()
    {
        return view('Faculty_Sign_In');
    }
    
       
        //Action اللي ابدير عملية التسجيل
        public function login(Request $request)
        {
            // التحقق من صحة المدخلات
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
    
            //المقارنه
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // في حالة نجاح التسجيل يعرض dashboard
                return redirect()->intended('/dashboard');
            }
    
            // في حالة فشل التسجيل لأي سبب يعرض خطأ 401
            return response()->json([
                'message' => 'The provided credentials do not match our records.',
            ], 401);
        }
        }

