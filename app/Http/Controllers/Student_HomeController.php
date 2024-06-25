<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Ui\Presets\React;

class Student_HomeController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $account = Auth::user();
            return view('Student_Home', [
                'username' => $account->name,
                'userid' => $account->id
            ]);
        } else {
            return redirect("login");
        }
    }
    public function drop($id)
    {
    }
    public function addproposal(Request $request)
    {
        if (!Auth::check()) {
            return redirect("login");
        }
        $userid = Auth::user()->id;
        //$file = $request->file('file');
        $proposal = $request->file('proposal');
        $proposal->move(public_path() . '\\users\\' . $userid . '\\proposals\\', $proposal->getClientOriginalName() . '.pdf');
        //return "title = ".$request->input("proposal-input-title");
        Proposal::create([
            'user_id' => $userid,
            'title' => $request->input("proposal-input-title"),
            'subtitle' => $request->input("proposal-input-subtitle"),
            'path' => $proposal->getClientOriginalName() . '.pdf'
        ]);
        return redirect('Student_Home')->with('status', 'File uploaded successfully');
    }
}
