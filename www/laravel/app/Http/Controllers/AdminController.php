<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function create() {
    	return view("admin.addpost");
    }

    public function store() {

    	//dd(request()->all

    /*	$post->author = "Leonard Ata";
    	$post->title = request('title');
    	$post->body = request('post');

    	$post->save(); */

    	//validate the form
    	$this->validate(request(), [
    		"title" => "required",
    		"body" => "required"
    		]);

    	Post::create([
    		'author' => "Pope Francis",
    		'title' => request('title'),
    		'body' => request('body')

    		]);

    	return redirect('/addpost')->withMessage("post added successfully");
    }
}
