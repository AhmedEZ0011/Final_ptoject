<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AdvertisementController;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\Proposal_student;
use App\Models\User;
use App\Models\Trial_examiner;
class ProjectsStudentsViewController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $account = Auth::user();
        return view('Projects_students_view',[
            'projects_list' => Project::getProjectsList(),
            'teachers' => User::where('type', '=', 3)->get()
       ]);}
    }

    public function setExaminers(Request $request, $project_id) {

        $examiners = [
            $request->input('project-examiner1-id'),
            $request->input('project-examiner2-id'),
            $request->input('project-examiner3-id'),
        ];

        $data = [
            "ad_title" => "تكليف ",
            "ad_content" => "تم تكليفك ك ممتحن ",
            "ad_specific_target" => ""
        ];
        foreach($examiners as $examinerID) {
            if($examinerID == "None") continue;

            $data["ad_specific_target"] .= " ". $examinerID;

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

        AdvertisementController::sendForSpecific($data);
        return $this->index();
    }

    public function setGrade(Request $request, $project_id) {
        $p = Project::find($project_id);
        $id = $p->proposal_id;
        $p->grade = $request->input('project-grade');
        $p->status = 'DONE';
        $p->save();

        //$proposal = Proposal::find($id);


        $students = Proposal_student::where("proposal_id", $id)->get();
        $targets = "";

        echo "Proposal id".$id. " Count = ".count($students);

        foreach($students as $ps) {
            $targets .= " ".$ps->user_id;
        }
        echo var_dump($targets);
        $data = [
            "ad_title" => "تعيين درجة ",
            "ad_content" => "تم تعيين درجة للمشروع ",
            "ad_specific_target" => $targets
        ];
        AdvertisementController::sendForSpecific($data);
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

