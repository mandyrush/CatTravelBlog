<?php

namespace App\Http\Controllers;

use App\NessieSay;
use App\Tag;

class TagsController extends Controller
{
    public function posts(Tag $tag)
    {
        $posts = $tag->posts;
        return view('posts.index', compact('posts'));
    }

    public function photos(Tag $tag)
    {
        $nessiesays = collect(NessieSay::getLatest())->shuffle();
        $photos = $tag->photos;
        return view('photos.index', compact('photos', 'nessiesays'));
    }
}
