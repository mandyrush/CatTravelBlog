<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NessieSay;

class NessieSaysController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nessie_says = NessieSay::select()->paginate(20);

        return view('admin.nessie_says.index', compact('nessie_says'));
    }

    /**
     * Show selected Post
     *
     * @param NessieSay $nessie_say
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(NessieSay $nessie_say)
    {
        return view('admin.nessie_says.show', compact('nessie_say'));
    }

    /**
     * Show the form for creating a Nessie Say
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.nessie_says.create');
    }

    /**
     * Store Nessie Say
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['name' => 'required']);
        $data = ["name" => $request->name];
        NessieSay::create($data);

        return redirect('/admin/nessie_says');
    }

    /**
     * Show the form for editing a NessieSay
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nessie_say = NessieSay::findOrFail($id);

        return view('admin.nessie_says.edit', compact('nessie_say'));
    }

    /**
     * Update a NessieSay
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nessie_say = NessieSay::findOrFail($id);

        $nessie_say->update($request->all());

        return redirect(Session::get('redirect'));
    }

    /**
     * Soft delete a NessieSay
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function delete($id)
    {
        NessieSay::findOrFail($id)->delete();

        return redirect('/admin/nessie_says');
    }
}
