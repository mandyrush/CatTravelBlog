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
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        Posts::create(request(['title', 'body']));
        return redirect('/');
    }
}
