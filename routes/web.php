<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Status;
Route::get('/', function () {

	$var = Status::all()->toArray();
	return view('welcome', compact('var'));
});

Auth::routes();
Route::get('/questionnaires/create','QuestionnaireController@create');
Route::post('/questionnaires','QuestionnaireController@store');

Route::get('istoric','QuestionnaireController@istoric');
Route::get('top','QuestionnaireController@top');
Route::get('/questionnaires/{status}','QuestionnaireController@show');
Route::get('/home', 'HomeController@index')->name('home');