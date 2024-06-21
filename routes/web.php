<?php
use App\Http\Controllers\SingupController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\StudentSignInController;
use App\Http\Controllers\SignInController;
use App\Models\User;

use App\Http\Controllers\Student_HomeController;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File;

Route::get('/loginhome', 'App\Http\Controllers\LoginController@index');
Route::resource("/Student_Sign_In", 'App\Http\Controllers\Student_Sign_InController');
Route::resource("/Admin_Home", 'App\Http\Controllers\Admin_HomeController');
Route::resource("/Sing_up", 'App\Http\Controllers\Sing_upController');
Route::resource("/Sign_in", 'App\Http\Controllers\SignInController');
Route::resource("/Faculty_Home", 'App\Http\Controllers\Faculty_HomeController');
Route::resource("/Officer_Home", 'App\Http\Controllers\Officer_HomeController');
Route::resource("/Examiner_Home", 'App\Http\Controllers\Examiner_HomeController');
Route::resource("/Faculty_Sign_In", 'App\Http\Controllers\Faculty_Sign_InController');
Route::resource("/OfficerSettings", 'App\Http\Controllers\OfficerSettingsController');
Route::resource("/Student_Sign_In", 'App\Http\Controllers\Student_Sign_InController');
Route::resource("Student_Home", App\Http\Controllers\Student_HomeController::class);
Route::resource("/Student_Settings", 'App\Http\Controllers\Student_SettingsController');

//Route::post('/addproposal', 'Student_HomeController@addProposal')->name('Student_Home.addproposal');


                 // <<<<<<<<<Sign In >>>>>>>>

Route::post('/Sign_in.login', [SignInController::class, 'login'])->name("login");

                //<<<<<<<Officer_Home>>>>>>>>
			
Route::get('/drop_request_account/{id}/', function($id) {
	$state = User::find($id)->delete();
	$isdeleted = unlink(public_path().'/users/'.$id);
        if($state && $isdeleted) {
            return redirect ()->route('Officer_HomeController.index');
        }
        else {
			return redirect ()->route('Officer_HomeController.index');
        }
})->name("drop_request_account");
Route::get('/add_request_account/{id}/', function($id) {
	$state = User::find($id);
        if($state) {
			$state->active = 1;
			$state->save();

			return redirect ()->route('Officer_HomeController.index');
		}
		else {
			return redirect ()->route('Officer_HomeController.index');
        }
})->name("add_request_account");

/*Route::get('m/{i}', function($i) {
	return "You requested ".$i;
});
*/
