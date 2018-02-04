<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::take(3)
    	->latest()
    	->get();
        return view('home.index', compact('posts'));
    }
}
