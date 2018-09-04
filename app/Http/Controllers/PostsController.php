<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $userId = $request['user_id'];

        $oldest = $request['oldest'] ? 'ASC' : 'DESC';

        $posts = Post::when($userId , function ($query, $userId) {
                return $query->whereIn('user_id', $userId);
            })
            ->orderBy('created_at', $oldest)
            ->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
