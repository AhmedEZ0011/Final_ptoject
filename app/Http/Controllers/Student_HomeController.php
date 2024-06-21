<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class Student_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Student_Home');
    }
    public function drop($id) {
        
    }
    public function addproposal(Request $request) {
        $userid = $request->userid;
        //$file = $request->file('file');
        //$file->store(public_path('users', $userid, 'proposal.pdf'));
        $request->proposal->move(public_path('users', $userid), 'proposal.pdf');
        return "Hello ". $userid. "<br>".public_path('users', $userid);
    }
}