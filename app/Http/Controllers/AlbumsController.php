<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index(Tag $tag)
    {
        $albums = Album::with('tags')->paginate(8);
        return view('albums.index', compact('albums'));
    }
    public function create()
    {
        return view('albums.create');
    }
    public function store()
    {

    }
}
