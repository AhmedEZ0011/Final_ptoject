<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('Search',[
            'project_list' => Project::getProjectsListWithCondition("p.title <> '' "),
       ]);
    }
        public function Search_Results(Request $request)
{
    $query = $request->input('query'); // استخراج قيمة كلمة البحث

    $results =Project::getProjectsListWithCondition('p.title LIKE \'%'.$query.'%\'');
    //$results =Project::getProjectsListWithCondition("p.title <> '' ");
    
    //return $results;
    return view('Search_Results', ['results' => $results]);
}
        
       
    
   
}
