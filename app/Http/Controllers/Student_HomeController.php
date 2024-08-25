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
use App\Models\User;
class Student_HomeController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $account = Auth::user();
            $p = $this->getMyProposal();
             return view('Student_Home', [
                'username' => $account->name,
                'userid' => $account->id,
                'decision' => ($p == null|| $p->proposal == null) ? "" : $p->decision,
                //'status' => ($p == null) ? "" : $p->project->status,
                'status' => ($p == null || $p->project == null) ? "" : $p->project->status,
                'project_list' => Project::getProjectsListWithCondition('ps.user_id = '.Auth::user()->id) ,

               // 'project_list' => Project::getArchive('ps.user_id = '.Auth::user()->id) ,
            ]);
        } else {
            return redirect("login");
        }
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


public function addDocumentation(Request $request)
{
    if (!Auth::check()) {
        return redirect("login");
    }
    $userid = Auth::user()->id;
    $documentation = $request->file('documentation');
    if(!str_ends_with($documentation->getClientOriginalName(), ".pdf")) {
        return redirect('Student_Home')->with("status", "لا يمكن رفع ملفات غير ملفات ال PDF");
    }
    $documentation->move(public_path() . '\\users\\' . $userid . '\\documentation\\', $documentation->getClientOriginalName());

    return redirect('Student_Home')->with('status', 'تم رفع التوثيق بنجاح ');
}
private function getMyProposal() {
    foreach(Proposal::where('decision', '=', 'ACCEPTED')->orWhere('decision', '=', 'PENDING')->get() as $p) {
        foreach($p->students as $studentProposal) {
            if($studentProposal->user_id == Auth::user()->id)
                return $p;
        }
    }

    return null;
}
private function getGraduated() {
    foreach(Project::where('status', '=', 'DONE')->get() as $p) {
        foreach($p->students as $studentProposal) {
            if($studentProposal->user_id == Auth::user()->id)
                return $p;
        }
    }

    return null;
}
public function drop($id)
    {
    }
}

