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
    public function photos(Tag $tag)
    {
        $photos = $tag->photos;
        return view('photos.show', compact('photos'));
    }
}
