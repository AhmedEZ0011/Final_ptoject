<?php
use App\Http\Controllers\Sing_upController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student_Sign_InController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Route::get('m/{i}', function($i) {
	return "You requested ".$i;
});
*/
//Route::get('/Sing_up', [Sing_upController::class, 'create'])->name('Sing_up.blade');
//Route::post('/Sing_up', [Sing_upController::class, 'storeRegistration']);
//Route::get('/Faculty_Sign_In', [Student_Sign_InController::class, 'showLoginForm'])->name('Faculty_Sign_In.blade');//تم التعديل
//Route::post('/Faculty_Sign_In', [Student_Sign_InController::class, 'login']);


Route::get('/student_sign_in', function() {
    return view('index');
});

Route::post('/student_sign_in', [Student_Sign_InController::class, 'login'])->name('student.login.submit');

Route::get('/about', 'App\Http\Controllers\NoorController@index');
Route::get('/loginhome', 'App\Http\Controllers\LoginController@index');

//Route::resource("/Student_Sign_In", 'App\Http\Controllers\Student_Sign_InController');
Route::resource("/Sing_up", 'App\Http\Controllers\Sing_upController');
Route::resource("/sign", 'App\Http\Controllers\SignInController');
Route::resource("/Faculty_Home", 'App\Http\Controllers\Faculty_HomeController');
Route::resource("/Officer_Home", 'App\Http\Controllers\Officer_HomeController');
Route::resource("/Examiner_Home", 'App\Http\Controllers\Examiner_HomeController');
//Route::resource("/Faculty_Sign_In", 'App\Http\Controllers\Faculty_Sign_InController');
Route::resource("/OfficerSettings", 'App\Http\Controllers\OfficerSettingsController');
//Route::resource("/Student_Sign_In", 'App\Http\Controllers\Student_Sign_InController');
Route::resource("/Student_Home", 'App\Http\Controllers\Student_HomeController');
Route::resource("/Student_Settings", 'App\Http\Controllers\Student_SettingsController');


/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
*/
