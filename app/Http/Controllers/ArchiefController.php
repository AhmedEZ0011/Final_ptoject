<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Project;

class ArchiefController extends Controller
{
    public function index()
    {

        return view('Archief', [
            'project_list' =>  Project::getProjectsListWithCondition( 'j.status ' ,'=', 'DONE'),

        ]);


}
public function Search(Request $request, $search, $department)
    {
        $a = ["Search" => $search,
              "Department" => $department
            ];

        $deptString = "";

        if($department !== "ALL")
            $deptString = " AND ps.department_id = '$department'";
        $projects = Project::getProjectsListWithCondition("(p.title LIKE '%$search%' OR p.sub_title LIKE '%$search%') AND j.status = 'DONE'".$deptString);
        if($projects == null)
             $projects = [];
        return response()->json($projects);
        }
public function view(Request $request, $pid)
    {
        $projects = Project :: getProjectsListWithCondition(' j.id ='. $pid);
        if(count($projects) == 0) abort(404);
        else
            return view('Search_Results', ['details' => $projects[0]]);
    }
}
