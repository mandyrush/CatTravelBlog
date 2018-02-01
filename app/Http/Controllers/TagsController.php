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
        $nessieQuote = collect(NessieSay::getLatest())->shuffle();
        $photos = $tag->photos()->latest('created_at')->paginate(30);
        return view('photos.index', compact('photos', 'nessieQuote'));
    }
}
