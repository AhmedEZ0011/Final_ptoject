<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacultyProposalStudentsController extends Controller
{
    //
    public function index()
    {
        if (auth()->check()) {
            $account = Auth::user();
        return view('Faculty_proposal_students',[
            'proposal_list' => Proposal::getFacultyproposals(Auth::user()->id),
             ]);
            }
    }
    public function view(Request $request, $pid)
    {
        $projects = Project :: getProjectsListWithCondition(' j.id ='. $pid);
        if(count($projects) == 0) abort(404);
        else
            return view('Faculty_proposal_students', ['details' => $projects[0]]);
    }
}