<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyProjectStudentsController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $account = Auth::user();
        return view('Faculty_project_students',[
            'projects_list' => Project::getProjectsListWithCondition('p.superviser_id = '.Auth::user()->id),
       ]);
    }
    }
}