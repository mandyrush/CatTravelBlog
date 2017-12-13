<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function kitties()
    {
        return view('pages.kitties');
    }

    public function humans()
    {
        return view('pages.humans');
    }
}
