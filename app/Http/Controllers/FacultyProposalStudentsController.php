<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacultyProposalStudentsController extends Controller
{
    //
    public function index()
    {
        return view('Faculty_proposal_students',[
            'proposal_list' => Proposal::getFacultyproposals(Auth::user()->id),
             ]);
    }
}
