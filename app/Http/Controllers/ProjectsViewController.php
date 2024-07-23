<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectsViewController extends Controller
{
    public function index()
    {
       
        return view('Projects_view' 
            ,['projects_list' => DB::select('SELECT title, group_concat(user_id) students, created_at, group_concat(path) path FROM gpmsnew.proposals where decision = \'PENDING\' group by title, created_at;')]
        );
        
    }

    public function modify(Request $request, $state, $title, $students) {
        $studentArray = explode(",", $students);

        foreach($studentArray as $student) {
            $proposal =  Project::where("title", "=", $title)->where("user_id", "=", $student)->firstOrFail();
            $proposal->decision = $state == "accept" ? 'ACCEPTED' : 'REFUSED';
            $proposal->save();
        }
        return redirect("Projects_view");
    }
}
