<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function posts(Tag $tag)
    {
        $posts = $tag->posts;
        return view('posts.index', compact('posts'));
    }
    public function galleries(Tag $tag)
    {
        $galleries = $tag->galleries;
        return view('galleries.show', compact('galleries'));
    }
}
