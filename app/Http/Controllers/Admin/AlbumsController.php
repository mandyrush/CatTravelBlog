<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::select()->paginate(20);

        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Show selected Post
     *
     * @param Album $album
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Album $album)
    {
        return view('admin.albums.show', compact('album'));
    }

    /**
     * Show the form for creating a Album
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Store Album
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['title' => 'required']);

        // Moving file to the public folder
        $filename = $request->file('cover_photo')->store('public');
        $data = [
            "title" => $request->title,
            "cover_photo" => $filename,
        ];
        Album::create($data);

        return redirect('/admin/albums');
    }

    /**
     * Show the form for editing a Album
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);

        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update a Album
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);

        $album->update($request->all());

        return redirect(Session::get('redirect'));
    }

    /**
     * Soft delete a Album
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Album::findOrFail($id)->delete();

        return redirect('/admin/albums');
    }
}
