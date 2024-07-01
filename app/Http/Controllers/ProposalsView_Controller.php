<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\Project;
use App\Models\User;
class ProposalsView_Controller extends Controller
{
    //
    public function index()
    {
        //Proposal::where('proposal_flag', '=', 0)->get()->unique("title")
        
        return view('Proposals_view', [
            'proposal_list' => DB::select('SELECT title, group_concat(user_id) students, created_at, group_concat(path) path FROM gpmsnew.proposals where decision = \'PENDING\' group by title, created_at;'),
            'teachers' => User::where('type', '=', 3)->get()
        ]);
    }

    public function modify(Request $request, $state, $title, $students) {
        //return "Project :".$request->input('proposal-input-title');
        $studentArray = explode(",", $students);
        foreach($studentArray as $student) {
            $proposal =  Proposal::where("title", "=", $title)->where("user_id", "=", $student)->firstOrFail();
            $proposal->decision = $state == "accept" ? 'ACCEPTED' : 'REFUSED';
            $proposal->save();
            $this->store($request, $student, $proposal->id);
        }
        return redirect("proposals_view");
    }
    public function store(Request $request, $user, $proposalID)
    {
        $project = Project::create([
            'user_id' => (int)$user,
            'proposal_id' => $proposalID,
            'superviser_id' => $request->input('project-supoervisor-id'),
            'end_date' => $request->input('project-input-lastdate'),
            'path' => "",
            'status'=> "INPROGRESS"
        ]);
}
}