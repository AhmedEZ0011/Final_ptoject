<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request, $search, $department)
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

    //return response()->json([1,2,3]);
    return view('Search_Results', ['details' => Project :: getProjectsListWithCondition(' j.id ='. $pid)]);
}




}
