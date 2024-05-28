<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sing_upController extends Controller
{
    //
    public function index()
    {
        return view('Sing_up');
    }
    public function storeRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'id'=> 'required|integer|max:11|unique:users',
            'role'=> 'required|string|max:255',
            'department'=> 'required|string|max:50',
            'gender'=> 'required|string|max:50',
            'reg_date'=> 'required|integer|max:50',
            'file_path' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'cridits'=> 'integer|max:135|min:1',
            'gpa'=> 'integer|max:100|min:0',
             
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id'=>$request->id,
            'role'=> $request->role,
            'department'=>$request->epartment,
            'gender'=>$request->gender,
            'reg_date'=>$request-> reg_date,
            'file_path' =>$request->file_path ,
            'cridits'=>$request->cridits,
            'gpa'=>$request->gpa,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/Sing_up');
    }
}
