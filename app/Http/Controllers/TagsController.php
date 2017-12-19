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
    public function images(Tag $tag)
    {
        $images = $tag->images;
        return view('images.show', compact('images'));
    }
}
