<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proposal;
use App\Models\Advertisement;
use App\Models\AdvertisementMember;
use Exception;

class Officer_HomeController extends Controller
{
   
    public function index()
    {
        if(!Auth::check())
            redirect('login');
        return view('Officer_Home', [
            'inactive_users' => User::where('active', '=', 0)->whereIn('type', [3, 4])->get()
           ]);
    }
    public function drop($id) {
        
    }

    public function AddAdvertisement(Request $request) {
        $advertisement = Advertisement::create([
           'title' =>  $request->input('ad_title'),
           'content' =>  $request->input('ad_content'),
           'targets' =>  $request->input('ad_target'),
           'owner' =>  Auth::user()->id,
           'enabled' => $request->input('ad_enabled') == "on" ? 1 : 0
        ]);


        if($request->input('ad_target') == 'SPECIFIC') {

            $selectedAudience = explode(' ', $request->input('ad_specific_target'));
            foreach($selectedAudience as $item) {
                try {
                    AdvertisementMember::create([
                        'ad_id' => $advertisement->id,
                        'target_id' => (int)$item,
                        'seen' => 0
                    ]);
                }
                catch(Exception $e) {
                    return redirect('Officer_Home')->withErrors(['ad_error' => "Failed to add the current user($item) to audience group"]);
                }
            }
        }
        return redirect('Officer_Home');
    }
}
