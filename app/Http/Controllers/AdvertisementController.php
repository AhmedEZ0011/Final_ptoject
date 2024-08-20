<?php
namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\AdvertisementMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdvertisementController  extends Controller {
    public function loads(Request $request, $target = null) {
        return $this->load($request, $target);
    }
    public function load(Request $request, $target_id = null) {
        $userType = Auth::user()->type;
        $target = $userType == 3 ? 'Faculties' : ($userType == 1 ? 'Officers' :  'STUDENTS');
        $ads = Advertisement
        ::join('advertisements_members', 'advertisements_members.ad_id', '=', 'advertisements.id')
        ->orderBy('advertisements.created_at','desc')
        ->where('advertisements.targets', '=', 'SPECIFIC')
        ->orWhere('advertisements.targets', '=', 'ALL')
        ->where('advertisements_members.target_id', '=', Auth::user()->id)
        ->orWhere('advertisements.targets', '=', $target)
        ->where('advertisements_members.target_id', '=', Auth::user()->id)->get("*");

        $adsData = [];
        foreach($ads as $ad) {
            if($ad->enabled == 0) {
                continue;
            }
            $targets = [];
            foreach($ad->targets()->get() as $target) {
                if($target_id != null) {
                    if($target->member()->get()[0]->id == $target_id) {
                        array_push($targets, $target->member()->get()[0]);
                        $targets[count($targets)-1]["seen"] = $target->seen == 1;
                    }
                }
                else {
                    array_push($targets, $target->member()->get()[0]);
                    $targets[count($targets)-1]["seen"] = $target->seen == 1;
                }


            }
            array_push($adsData, [
                "id" => $ad->id,
                "title" => $ad->title,
                "content" => $ad->content,
                "owner" => $ad->owner()->get()[0],
                "target" => $ad->targets,
                "enabled" => $ad->enabled,
                "created_at" => $ad->created_at,
                "targetlist" => $targets
            ]);
        }
        return $adsData;

    }

    public function remove(Request $request, $ad_id, $target_id) {
        $result = AdvertisementMember::where('ad_id', '=', $ad_id)
                ->where('target_id', '=', $target_id)
                ->delete();
        return response()->json(["Message" => "Done"]);
    }

    public function edit(Request $request, $ad_id) {

    }

    public function seen(Request $request, $ad_id, $target_id) {
        $result = AdvertisementMember::where('ad_id', '=', $ad_id)
                ->where('target_id', '=', $target_id)
                ->update(["seen" => 1]);
        return response()->json(["Message" => (!$result) ? "Process failed" : "Done"]);
    }

    public static function sendForSpecific($data) {
        // {ad_title: "", ad_content: "",
        // ad_target: "", ad_specific_target: ""}
        $data["ad_target"] = "SPECIFIC";
        $data["ad_enabled"] = 1;
        $request = Request::create('/path', 'POST', $data);
        AdvertisementController::AddAdvertisement($request);
    }

    public static function AddAdvertisement(Request $request) {
        $advertisement = Advertisement::create([
           'title' =>  $request->input('ad_title'),
           'content' =>  $request->input('ad_content'),
           'targets' =>  $request->input('ad_target'),
           'owner' =>  Auth::user()->id,
           'enabled' => 1 //$request->input('ad_enabled', "on") == "on" ? 1 : 0
        ]);


        if($request->input('ad_target') == 'SPECIFIC') {

            $selectedAudience = explode(' ', $request->input('ad_specific_target'));
            foreach($selectedAudience as $item) {
                if($item == "") continue;
                try {
                    AdvertisementMember::create([
                        'ad_id' => $advertisement->id,
                        'target_id' => (int)$item,
                        'seen' => 0
                    ]);
                }
                catch(Exception $e) {
                    //return redirect('Officer_Home')->withErrors(['ad_error' => "Failed to add the current user($item) to audience group"]);
                }
            }
        }
    }

}
