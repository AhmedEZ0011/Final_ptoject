<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //
    public function index() {
        return view("note", ["user" => "Mohammad", "btnName" => "Click me"]); // it should be Auth::user()->name
    }
    public function edit() {
        return view("note"); // it should be "edit-page"
    }
    public function store(Request $request) {

        $userid = $request->userid;
        $proposal = $request->file('proposal');
        $proposal->move(public_path().'\\users\\'.$userid.'\\', 'proposal.pdf');


        // save data to database...
        // $noteContent = $request->content;
        // Note::create([
        //     "content" => $noteContent
        // ]);

        return $this->index();
    }
    public function update(Request $request) {
        // update data to database...
    }
}
