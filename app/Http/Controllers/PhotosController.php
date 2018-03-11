<?php

namespace App\Http\Controllers;

use App\NessieSay;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $nessieQuote = collect(NessieSay::getLatest())->shuffle();

        $photos = Photo::latest('created_at')->paginate(30);

        return view('photos.index', compact('photos', 'nessieQuote'));
    }

    public function create()
    {
        return view('photos.create');
    }
}
