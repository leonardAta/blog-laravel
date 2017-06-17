<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show() {
    	$posts = Post::all();
    	return view("Post.index", compact('posts'));
    }
}
