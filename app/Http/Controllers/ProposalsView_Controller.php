<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ProposalsView_Controller extends Controller
{
    //
    public function index()
    {
        //Proposal::where('proposal_flag', '=', 0)->get()->unique("title")
        
        return view('Proposals_view', [
            'proposal_list' => DB::select('SELECT title, group_concat(user_id) students, created_at, group_concat(path) path FROM laravel.proposals where decision = \'PENDING\' group by title, created_at;')
        ]);
    }

    public function modify(Request $request, $state, $title, $students) {
        $studentArray = explode(",", $students);

        foreach($studentArray as $student) {
            $proposal =  Proposal::where("title", "=", $title)->where("user_id", "=", $student)->firstOrFail();
            $proposal->decision = $state == "accept" ? 'ACCEPTED' : 'REFUSED';
            $proposal->save();
        }
        return redirect("proposals_view");
    }
}
