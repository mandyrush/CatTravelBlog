<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select()->paginate(20);

        return view('admin.posts.index', compact('posts'));
    }


    /**
     * Show selected Post
     *
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for creating a Post
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store Post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @todo update validation to a Request class
        //Validate form fields
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'featured_text' => 'required'
        ]);

        // Moving file to the public folder
        $filename = $request->file('featured_photo')->store('public');
        $data = [
            "user_id" => auth()->id(),
            "title" => $request->title,
            "body" => $request->body,
            "featured_text" => $request->featured_text,
            "featured_photo" => $filename,
            "status" => 1
        ];

        // Save
        Post::create($data);

        return redirect('/admin/posts');
    }

    /**
     * Show the form for editing a Post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update a Post
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect(Session::get('redirect'));
    }

    /**
     * Soft delete a Post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // @todo update to soft delete instead of hard
        Post::findOrFail($id)->delete();

        return redirect(Session::get('redirectIndex'));
    }
}
