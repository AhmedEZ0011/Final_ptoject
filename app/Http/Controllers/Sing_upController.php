<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Sing_upController extends Controller
{
    public function inseart(Request $request)
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
