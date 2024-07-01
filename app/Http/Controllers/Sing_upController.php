<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;
class Sing_upController extends Controller
{
    //
    public function index()
    {
        return view('Sing_up', [
            'departments' => Department::all()
        ]);
    }
    /*
    public function storeRegistration(Request $request) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'id'=> 'required|integer|max:11|unique:users',
            'role'=> 'required|string|max:255',
            'department'=> 'required|string|max:50',
            'gender'=> 'required|string',
            'reg_date'=> 'required|integer|max:50',
            'file_path' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'cridits'=> 'integer|max:135|min:1',
            'gpa'=> 'integer|max:100|min:0',
            'department_id'=> 'required|integer|max:11|unique:users',
             
        ]);
       
        
    }  */
    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id' => $request->id,
            'collage' => $request->collage,
            'department_id' => $request->department_id,
            'gender' => $request->gender,
            'reg_date' => $request->reg_date,
            'file_path' => $request->file_path,
            'cridits' => $request->cridits,
            'gpa' => $request->gpa,
            'type' => $request->type,
            'active' => 0
        ]);
        $userdir = public_path().'/users/'.$request->id;
        mkdir($userdir);
        mkdir($userdir.'/documentation');
        mkdir($userdir.'/proposals');
        mkdir($userdir.'/report');
        return $this->index();
       /*
            /public/
                    user-id/
                            prob
                            last-version
                            documentation
                                /proposals
                                     /report
        */
    
     
    }
}
