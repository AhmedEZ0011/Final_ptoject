<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth as LaravelAuth;

// ...


class FacultySettingController extends Controller
{
   
    public function index()
    {
        return view ('/Faculty_Setting');
    }
       
       
    }
        
        

    