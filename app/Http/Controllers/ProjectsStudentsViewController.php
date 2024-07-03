<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proposal;
class ProjectsStudentsViewController extends Controller
{
    public function index()
    {
        return view('Projects_students_view' 
        ,['projects_list' => DB::select('SELECT proposal_id, group_concat(user_id) students, created_at, group_concat(path) path FROM gpmsnew.projects where decision = \'INPROGRESS\' group by proposal_id, created_at;'),
       // 'teachers' => Proposal::where('created_at', '=', 3)->get()
       ]
);
    }
}

