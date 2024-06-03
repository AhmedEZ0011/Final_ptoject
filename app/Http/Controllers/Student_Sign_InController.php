<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Student_Sign_InController extends Controller
{ //لعرض صفحة تسجيل الدخول لطالب
    //Action :
    public function showLoginForm()
    {
        return view('Student_Sign_In', ['email' => '']);
    }
    /**
     * Handle login form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // استقبال البيانات من الطلب
       $email = $request->input('email');
       $password = $request->input('password');


        // عرض النموذج مع البريد الإلكتروني المدخل
        return view('Student_Sign_In', ['email' => $email]);

         //الكود #
        // تحقق من صحة البيانات
        //$request->validate([
        //  'email' => 'required|email',
        // 'password' => 'required|min:6',
        //]);

        // محاول تسجيل الدخول
         //$credentials = $request->only('email', 'password');

          //if (Auth::attempt($credentials)) {
           // إذا كانت بيانات الاعتماد صحيحة
         // return redirect()->intended('dashboard'); // تغيير مسار التوجيه حسب حاجتك
           //}

         // إذا كانت بيانات الاعتماد غير صحيحة
         //return back()->withErrors([
         //  'email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.',
          //])->withInput($request->except('password'));
}
    }

