<?php

use App\Http\Controllers\Officer_HomeController;
use App\Http\Controllers\ProposalsView_Controller;
use App\Http\Controllers\ProjectsStudentsViewController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\SingupController;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentSignInController;
use App\Http\Controllers\SignInController;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Http\Controllers\Student_HomeController;
use App\Http\Controllers\OfficerSettingsController;
use App\Http\Controllers\FacultySettingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchResultsController;
use App\Http\Controllers\StudentSettingController;
use App\Http\Controllers\FacultyDocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArchiefController;

use App\Models\Project;

//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File;

Route::get('/Main_Home ', 'App\Http\Controllers\HomeController@index');

Route::get('/loginhome', 'App\Http\Controllers\LoginController@index');
Route::resource("/Student_Sign_In", 'App\Http\Controllers\Student_Sign_InController');
Route::resource("/Officer_message", 'App\Http\Controllers\OfficerMessageController');
Route::resource("Sing_up", 'App\Http\Controllers\Sing_upController')->names('Sing_up');
Route::get('login', 'App\Http\Controllers\SignInController@index')->name('login');
Route::get('logout', 'App\Http\Controllers\SignInController@logout')->name('logout');
Route::resource("/Sign_in", 'App\Http\Controllers\SignInController');
Route::resource("/Faculty_Home", 'App\Http\Controllers\Faculty_HomeController')
->names("Faculty_Home");
Route::name('Officer_Home.')->prefix("Officer_Home")->group(function() {
  Route::get('/', [Officer_HomeController::class, "index"])->name('index');
  Route::post('add_advertisement/', [Officer_HomeController::class, "AddAdvertisement"])->name('add_advertisement');
}); //::resource("", 'App\Http\Controllers\Officer_HomeController')
//->names("Officer_Home");
Route::resource("/Faculty_proposal_students", 'App\Http\Controllers\FacultyProposalStudentsController')
->names("Faculty_proposal_students");;
Route::name('Faculty_Setting.')->prefix('Faculty_Setting')->group(function() {
  Route::get('/', [FacultySettingController::class, 'index'])->name("index");
  Route::post('update/', [FacultySettingController::class, 'update'])->name("update");
});
Route::name('OfficerSettings.')->prefix('OfficerSettings')->group(function() {
  Route::get('/', [OfficerSettingsController::class, 'index'])->name("index");
  Route::post('update/', [OfficerSettingsController::class, 'update'])->name("update");
});
Route::resource("/Student_Sign_In", 'App\Http\Controllers\Student_Sign_InController');
Route::resource("Student_Home", 'App\Http\Controllers\Student_HomeController')
->names("Student_Home");
Route::resource("/Student_Settings", 'App\Http\Controllers\Student_SettingsController');
Route::resource("/proposals_view", 'App\Http\Controllers\ProposalsView_Controller')
->names("proposals_view");
Route::resource("/Projects_students_view", 'App\Http\Controllers\ProjectsStudentsViewController')
->names("Projects_students_view");
Route::resource("/Faculty_project_students", 'App\Http\Controllers\FacultyProjectStudentsController')
->names("Faculty_project_students");
// Route::resource("/Search_Results", 'App\Http\Controllers\SearchResultsController')
// ->names("Search_Results");

Route::name('Search.')->prefix("Search")->group(function() {
    Route::get('/{search}/{dept}/', [SearchController::class, "index"])->name('index');
});


Route::get('/searchview/{id}/', [SearchController::class, "view"])->name('view-search-result');
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/searchview/{id}/', [ArchiefController::class, "view"])->name('view-search-result');
Route::get('/', 'App\Http\Controllers\ArchiefController@index');


                 // <<<<<<<<<Sign In >>>>>>>>


Route::post('/Sign_in.login', [SignInController::class, 'login'])->name("login");

                //<<<<<<<Officer_Home>>>>>>>>

                Route::delete('/drop_request_account/{id}', function($id) {
                    $user = User::find($id);

                    if ($user) {
                        $state = $user->delete();
                        $directoryPath = public_path('users/' . $id);

                        if (File::exists($directoryPath)) {
                            $isDeleted = File::deleteDirectory($directoryPath);
                        } else {
                            $isDeleted = true; // Directory does not exist, so consider it deleted
                        }

                        if ($state && $isDeleted) {
                            return redirect()->route('Officer_Home.index')->with('status', 'Account and directory deleted successfully!');
                        } else {
                            return redirect()->route('Officer_Home.index')->withErrors(['error' => 'Failed to delete account or directory']);
                        }
                    } else {
                        return redirect()->route('Officer_Home.index')->withErrors(['error' => 'User not found']);
                    }
                })->name("drop_request_account");
Route::get('/add_request_account/{id}/', function($id) {
  $state = User::find($id);
        if($state) {
      $state->active = 1;
      $state->save();

      return redirect ()->route('Officer_Home.index');
    }
    else {
      return redirect ()->route('Officer_Home.index');
        }
})->name("add_request_account");

Route::name('proposals_view.')->group(function() {

    Route::post('modify/{state}/{data}/', [ProposalsView_Controller::class, "modify"])->name('modify');
    Route::get('modify/{state}/{data}/', [ProposalsView_Controller::class, "modify"])->name('modify');
  //Route::get("index", 'App\Http\Controllers\ProposalsView_Controller@index')->name("index");
});

Route::name('projects_view.')->group(function() {
    Route::post('set_examiner/{project_id}/', [ProjectsStudentsViewController::class, "setExaminers"])->name('set_examiner');
    Route::post('set_supervisor/{project_id}/', [ProjectsStudentsViewController::class, "setSupervisor"])->name('set_supervisor');
    Route::post('set_enable/{project_id}/', [ProjectsStudentsViewController::class, "setEnableState"])->name('set_enable');
    Route::post('set_grade/{project_id}/', [ProjectsStudentsViewController::class, "setGrade"])->name('set_grade');
});


Route::name('advertisements.')->prefix('advertisements')->group(function() {
  Route::get('/', [AdvertisementController::class, "load"])->name('load');
  Route::get('/{target}/', [AdvertisementController::class, "loads"])->name('loads');
  Route::post('seen/{id}/{target}/', [AdvertisementController::class, "seen"])->name('seen');
  Route::post('edit/{id}/', [AdvertisementController::class, "edit"])->name('edit');
  Route::delete('remove/{id}/{target}/', [AdvertisementController::class, "remove"])->name('remove');
});
Route::name('Search.')->prefix("Search")->group(function() {
    Route::get('/{search}/{dept}/', [SearchController::class, "index"])->name('index');
    Route::get('/view/{pid}/', [SearchController::class, "view"])->name('view');
});
Route::name('Archief.')->prefix("Archief")->group(function() {
    Route::get('/', [ArchiefController::class, "index"])->name('index');
    Route::get('/{search}/{dept}/', [ArchiefController::class, "Search"])->name('Search');
    Route::get('/view/{pid}/', [ArchiefController::class, "view"])->name('view');
});
  //<<<<<<<Student_Home>>>>>>>>
Route::post("/Student_Home/addproposal/", 'App\Http\Controllers\Student_HomeController@addproposal')->name('Student_Home.addproposal');
Route::post("/Student_Home/addreport/", 'App\Http\Controllers\Student_HomeController@addreport')->name('Student_Home.addreport');
Route::post("/Student_Home/addDocumentation/", 'App\Http\Controllers\Student_HomeController@addDocumentation')->name('Student_Home.addDocumentation');
Route::get("/Student_Home/search",'App\Http\Controllers\Student_HomeController@search')->name('Student_Home.search');
Route::get('/search/{id}/', function($id) {
  $state = User::find($id);
        if($state) {
      $state->active = 1;
      $state->save();
      //$query = $request->input('query');
      //$results = Project::where('column_name', 'LIKE', "%{$query}%")->get(); // Adjust column_name and model

      return redirect ()->route('Student_Home.search');
    }
    else {
      return redirect ()->route('Student_Home.search');
        }
})->name("search");