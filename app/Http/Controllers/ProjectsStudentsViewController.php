<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use App\Models\Trial_examiner;
class ProjectsStudentsViewController extends Controller
{
    public function index()
    {
        return view('Projects_students_view',[
            'projects_list' => Project::getProjectsList(),
            'teachers' => User::where('type', '=', 3)->get()
       ]);
    }

    public function setExaminers(Request $request, $project_id) {

        $examiners = [
            $request->input('project-examiner1-id'),
            $request->input('project-examiner2-id'),
            $request->input('project-examiner3-id'),
        ];

        foreach($examiners as $examinerID) {
            if($examinerID == "None") continue;

            $count = Trial_examiner::where('project_id', '=', $project_id)->where('examiner_id', '=', $examinerID)->count();
            if($count != 0) continue;
            $count = DB::select("SELECT count(*) as `Count`  FROM proposals p
                                INNER JOIN projects j ON j.proposal_id = p.id
                                WHERE j.id = $project_id AND p.superviser_id = $examinerID;");

            if($count[0]->Count != 0) continue;
            Trial_examiner::create([
                'examiner_id' => $examinerID,
                'project_id' => (int)$project_id,
                'comments' => null
            ]);
        }
        return $this->index();
    }

    public function setGrade(Request $request, $project_id) {
        $p = Project::find($project_id);
        $p->grade = $request->input('project-grade');
        $p->status = 'DONE'  ;
        $p->save();

        return $this->index();
    }

    public function ReplaceTheExaminer(Request $request, $project_id) {
        $p = Project::find($project_id);
        $proposal = Proposal::find($p->proposal_id);
        $proposal->superviser_id = (int)$request->input('project-examiner1-id');
        $proposal->save();
        return $this->index();
    }

    public function setEnableState(Request $request, $project_id  ) {
        $p = Project::find($project_id);
        $proposal = Proposal::find($p->proposal_id);
        $proposal->enabled = $proposal->enabled == 1 ? 0 : 1;
        $p->status = $proposal->enabled == 1 ? 'IDLE' : 'INPROGRESS' ;
        $proposal->save();

        return $this->index();
    }
}

