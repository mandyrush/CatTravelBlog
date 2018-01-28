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

        $photos = Photo::latest()->limit(10)->get();

        return view('photos.index', compact('photos', 'nessieQuote'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    { 
        foreach ($request->file('featured_photo') as $file) {
            $filename = $file->store('public');

            // Save
            $photo = Photo::create([
                "featured_photo" => $filename
            ]);
            $photo->tags()->attach($request['tag']); // @todo replace 1 with the tag id
        }
        

        return redirect('/albums');
    }
}
