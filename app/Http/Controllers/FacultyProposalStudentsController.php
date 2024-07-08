<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class FacultyProposalStudentsController extends Controller
{
    //
    public function index()
    {
        return view('Faculty_proposal_students',[
            'projects_list' => Project::getProjectsListWithCondition('p.superviser_id = '.Auth::user()->id),
       ]);
    }
}
