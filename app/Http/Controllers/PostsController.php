<?php

namespace App\Http\Controllers;

use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('posts.index', compact('posts'));
    }
    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }
}
