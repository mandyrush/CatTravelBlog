<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$posts = Post::take(2)
    	->latest()
    	->get();
        return view('home.index', compact('posts'));
    }
}
