<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller

    {public function showRegistrationForm(){

        return view('register');
    }

        public function register(Request $request)
        {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|min:6',
            ]);

            // Create a new user instance
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password); // Hashing the password
            $user->type = 1; // Assuming regular user type, adjust as necessary

            // Save the user to the database
            $user->save();

            // Redirect to a success page or login page
            return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
        }}
