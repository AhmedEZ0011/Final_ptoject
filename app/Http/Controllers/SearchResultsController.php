<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Auth;
use App\Models\Proposal;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SearchResultsController extends Controller
{
    
    public function index(Request $request)
    {
        
    $query = $request->input('query'); // استخراج قيمة كلمة البحث

    $results =Project::getProjectsListWithCondition('p.title LIKE \'%'.$query.'%\'');
    
    return view('Search_Results', ['results' => $results]);
    }
  
}
