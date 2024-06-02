<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getmydata', function() {
	//User::all();
	$arr = Db::select("");

	$data = '{"user1": {"name": "Ahmed", "age": 24, "creationdate": "12-9-2024"},';
	$data = $data.'"user2": {"name": "khalid", "age": 21, "creationdate": "12-9-2024"},';
	return $d;
});

// Route for showing the login form
Route::get('/Student_Sign_In', [Student_Sign_InController::class, 'showLoginForm'])->name('student.login');

// Route for handling the login form submission
Route::post('/Student_Sign_In', [Student_Sign_InController::class, 'login'])->name('student.login.submit');


Route::get('/loginhome', 'App\Http\Controllers\LoginController@index');//***
Route::get('/sign', 'App\Http\Controllers\SignInController@index');
Route::get('/Faculty_Home', 'App\Http\Controllers\Faculty_HomeController@index');//تم التعديل
Route::get('/Officer_Home', 'App\Http\Controllers\Officer_HomeController@index');//تم التعديل
Route::get('/Examiner_Home', 'App\Http\Controllers\Examiner_HomeController@index');//تم التعديل
Route::get('/Faculty_Sign_In', 'App\Http\Controllers\Faculty_Sign_InController@index');//تم التعديل
Route::get('/OfficerSettings', 'App\Http\Controllers\OfficerSettingsController@index');//تم النعديل
Route::get('/Sing_up', 'App\Http\Controllers\Sing_upController@index');//تم التعديل
Route::get('/Student_Home', 'App\Http\Controllers\Student_HomeController@index');//تم التعديل
Route::get('/Student_Settings', 'App\Http\Controllers\Student_SettingsController@index');//تم التعديل

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
