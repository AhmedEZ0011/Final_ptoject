<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Ui\Presets\React;
use App\Models\Proposal;
use App\Models\Report;
use App\Models\Project;

class Student_HomeController extends Controller
{
    //
    public function index()
    {
        return view('Student_Home');
    }
    public function drop($id) {
        
    }
    public function addproposal(Request $request) {
        $userid = Auth::user()->id;
        $proposal = $request->file('proposal');
        $proposal->move(public_path().'\\users\\'.$userid.'\\', 'proposal.pdf');
        /* $proposal=Proposal::create([
            'id'=> $request->id,
            'title',
            'sub_title',
            'last_proposal_id',
            'applicant_id',
            'app_datetime',
            'superviser_id',
            'decision',
            'decision_date',
            'enabled',
            'proposal_flag'=>1
              
            ]);*/
        return redirect('Student_Home')->with('status', 'تم رفع المقترح بنجاح');
    }
    public function addreport(Request $request) {
        $userid = Auth::user()->id;
        $proposal = $request->file('report');
        $proposal->move(public_path().'\\users\\'.$userid.'\\', 'report.pdf');
         /*$report=Report::create([
        'id',
        'proposal_id',
        'faculty_id',
        'assignment_date',
        'opinion',
        'opinion_date',
        'comments',
         ]);*/
        return redirect('Student_Home')->with('status', 'تم رفع التقرير بنجاح');
    }
    public function addDocumentation(Request $request) {
        $userid = Auth::user()->id;
        $proposal = $request->file('documentation');
        $proposal->move(public_path().'\\users\\'.$userid.'\\', 'documentation.pdf');
       /*  $project=Project::create([
            'id',
            'proposal_id',
            'superviser_id',
            'status',
            'start_date',
            'end_date',
           // 'comments',
           // 'content',
         ]);*/
        return redirect('Student_Home')->with('status', 'تم رفع التوثيق بنجاح');
    }
    /*
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Project::where('column_name', 'LIKE', "%{$query}%")->get(); // Adjust column_name and model

        return view('Search');
    }*/

}