<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {

        foreach ($request->file('featured_image') as $file) {
            $filename = $file->store('public');

            // Save
            Gallery::create([
                "featured_image" => $filename
            ]);
        }

        return redirect('/gallery');
    }
}
