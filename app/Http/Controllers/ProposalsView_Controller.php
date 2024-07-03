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
            'proposal_list' => Proposal::getProposalsList(),//DB::select('SELECT title, group_concat(user_id) students, created_at, group_concat(path) path FROM '.env('DB_DATABASE').'.proposals where decision = \'PENDING\' group by title, created_at;'),
            'teachers' => User::where('type', '=', 3)->get()
        ]);
    }

    public function modify(Request $request, $state,$data) {
        $data = json_decode('{'.$data.'}', false);

        $proposal = Proposal::findOrFail($data->ProposalID);
        $proposal->decision = $state == "accept" ? 'ACCEPTED' : 'REFUSED';
        $proposal->decision_date = now();
        if($request->input('project-supoervisor-id', null) != null)
            $proposal->superviser_id = $request->input('project-supoervisor-id');
        $proposal->save();
        
        if($state == "accept")
            return $this->store($request, $data->ProposalID);

        return redirect("proposals_view");
    }
    public function store(Request $request, $proposalID)
    {
        $project = Project::create([
            'proposal_id' => $proposalID,
            'end_date' => $request->input('project-input-lastdate'),
            'path' => "",
            'status'=> "INPROGRESS"
        ]);

        return redirect("proposals_view");
    }
}