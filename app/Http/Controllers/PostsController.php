<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->get();
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

    public function store(Request $request)
    {
        //Validate form fields
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'featured_text' => 'required'
        ]);

        // Moving file to the public folder
        $filename = $request->file('featured_image')->store('public');
        $data = [
              "title" => $request->title,
              "body" => $request->body,
              "featured_text" => $request->featured_text,
              "featured_image" => $filename
        ];

        // Save
        Posts::create($data);

        return redirect('/');
    }
}
