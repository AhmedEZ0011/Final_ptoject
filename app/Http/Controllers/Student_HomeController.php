<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
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
        $userid = Auth::user()->id;
        //$file = $request->file('file');
        $proposal = $request->file('proposal');
        $proposal->move(public_path().'\\users\\'.$userid.'\\', 'proposal.pdf');
        return redirect('Student_Home')->with('status', 'File uploaded successfully');
    }
}