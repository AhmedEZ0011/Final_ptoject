<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proposal;
class Officer_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Officer_Home', [
            'inactive_users' => User::where('active', '=', 0)->where('type', '=', 4)->get(),
            'proposal_list' => Proposal::where('proposal_flag', '=', 0)->get()
            //where('superviser_id', '=', 0)
            
            ]);
    }
    public function drop($id) {
        
    }
}
