<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Ui\Presets\React;
use App\Models\Proposal;
use App\Models\Proposal_student;
use App\Models\Report;
use App\Models\Project;

class Student_HomeController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $account = Auth::user();
            return view('Student_Home', [
                'username' => $account->name,
                'userid' => $account->id
            ]);
        } else {
            return redirect("login");
        }
    }
    public function drop($id)
    {
    }
    public function addproposal(Request $request)
    {
        if (!Auth::check()) {
            return redirect("login");
        }
        $userid = Auth::user()->id;
        $proposal = $request->file('proposal');
        $proposal->move(public_path() . '\\users\\' . $userid . '\\proposals\\', $proposal->getClientOriginalName() );

        $proposalObject = Proposal::create([
            'title' => $request->input("proposal-input-title"),
            'sub_title' => $request->input("proposal-input-subtitle")
        ]);

        $students = [
            $userid, 
            $request->input('proposal-input-student2'), 
            $request->input('proposal-input-student3')
        ];
        for($i = 0; $i < count($students); $i++) {
            $element = $students[$i];
            
            if(null == $element || $element == '') continue;
            else {
                Proposal_student::create([
                    'user_id' => $element,
                    'proposal_id' => $proposalObject->id,
                    'path' => $proposal->getClientOriginalName()
                ]);
            }
        }

        return redirect('Student_Home')->with('status', 'تم رفع المقترح بنجاح');
    }
    public function addreport(Request $request)
    {
        if (!Auth::check()) {
            return redirect("login");
        }
        $userid = Auth::user()->id;
        $proposal = $request->file('report');
        $proposal->move(public_path() . '\\users\\' . $userid . '\\report\\');
        
        Report::create([
            'user_id' => Auth::user()->id,
            'content' => $request->input("report-input-content"),
            //'project_id'=>
            //'superviser_id'=>    
        ]);
        return redirect('Student_Home')->with('status', 'تم رفع التقرير بنجاح ');
}
public function addDocumentation(Request $request)
{
    if (!Auth::check()) {
        return redirect("login");
    }
    $userid = Auth::user()->id;
    $proposal = $request->file('documentation');
    $proposal->move(public_path() . '\\users\\' . $userid . '\\documentation\\');
    
    Report::create([
        'user_id' => Auth::user()->id,
        'path' => $proposal->getClientOriginalName() . '.pdf',
        //'proposal_id'=>
        //'superviser_id'=>    
    ]);
    return redirect('Student_Home')->with('status', 'تم رفع التوثيق بنجاح ');
}
}