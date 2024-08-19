<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FacultyDocumentationController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $account = Auth::user();
        return view('Faculty_documentation',[
            'projects_list' => Project::getProjectsListWithCondition('p.superviser_id = '.Auth::user()->id),
       ]);
    }

}
}
