<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
     return view('welcome');
 });

// Route::get('/issue',function(){
// 	return view('issue/create');
// });

// Route::get('create',function(){
// 	return view('issue/create');
// });

// Route::get('edit',function(){
// 	return view('issue/edit');
// });

// Route::get('vote',function(){
// 	return view('issue/vote');
// });
Route::get('issues', function(){
	$issues = \App\issues::all();
	return view('issues.index', compact('issues'));

});

Route::post('issues/{id}', function($id){
 	$issues = \App\issues::find($id);
 	$issues->update(Request::all());
 	return redirect(url ('issues'));
 });

Route::get('issues/{id}/edit', function($id){
	$issues = \App\issues::find($id);
	$serviceTypes = \App\ServiceType::all();
    $serviceDomains = \App\ServiceDomain::all();
    $issueStatus = \App\IssueStatus::all();
	return view('issues.edit', compact('issues', 'serviceTypes', 'serviceDomains','issueStatus'));
});

Route::post('issues', function(){
	\App\issues::create(Request::all());
	return redirect(url ('issues'));
});

Route::get('issues/create', function(){
	$issues = \App\issues::all();
	return view('issues.create', compact('issues', 'serviceTypes', 'serviceDomains','issueStatus'));
});

Route::get('issue','IssuesController@index');
Route::get('issue/create','IssuesController@create');
Route::get('issue/{id}/edit','IssuesController@edit');
Route::post('issue','IssuesController@store');
Route::post('issue/{id}','IssuesController@update');
