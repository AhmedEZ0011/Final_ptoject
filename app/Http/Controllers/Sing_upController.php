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
            'active' => 0,
           ]);


        $userdir = public_path().'/users/'.$request->id;
        mkdir($userdir);
        mkdir($userdir.'/documentation');
        mkdir($userdir.'/proposals');
        return redirect("/")->with('active', 'تم إرسال طلب تسجيلك في إنتظار قبولك في النظام  ');
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
