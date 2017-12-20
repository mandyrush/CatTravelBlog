<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index()
    {
        $images = Image::latest()->get();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        foreach ($request->file('featured_image') as $file) {
            $filename = $file->store('public');

            // Save
            $image = Image::create([
                "featured_image" => $filename
            ]);
            $image->tags()->attach($request['tag']); // @todo replace 1 with the tag id
        }
        

        return redirect('/albums');
    }
}
