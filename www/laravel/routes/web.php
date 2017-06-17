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
/*
Route::get('/', function () {
    return view('welcome', ['name' => "leo"]);
});

Route::get('/', function () {
	$name = "Jack";
    return view('welcome', compact('name'));
});
Route::get('/', function () {
	$category = [
		"javascript",
		"java",
		"php"

	];
    return view('welcome', compact('category'));
});

Route::get('/about', function () {
	$tasks = DB::table("tasks")->get();
	//dd($tasks);

	return view('welcome', compact('tasks'));
    //return view('about');
});

Route::get('/', function () {
	$tasks = DB::table("tasks")->get();
    return view('index', compact('tasks'));
});

Route::get('/task/{id}', function($id) {

	$task = DB::table("tasks")->find($id);

	return view('show', compact('task'));
});

*/
//Route::get('/', "Task@showTaskPage");

//Route::get('/task/{id}',"Task@showTaskId");

Route::get('/addpost', "AdminController@create");
Route::post('/addpost', "AdminController@store");
Route::get('/posts', "PostController@show");


