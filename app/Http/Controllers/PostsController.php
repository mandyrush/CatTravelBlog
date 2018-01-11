<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {

        $posts = Post::latest()
            ->filter(['month'=> \request('month'), 'year'=> \request('year')])
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
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
        $filename = $request->file('featured_photo')->store('public');
        $data = [
              "title" => $request->title,
              "body" => $request->body,
              "featured_text" => $request->featured_text,
              "featured_photo" => $filename,
              "user_id" => auth()->id()
        ];

        // Save
        Post::create($data);

        return redirect('/');
    }
}
