<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cpl extends Controller
{
       /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function Projects()
    {
        return view('Projects');
    }

    public function Tags()
    {
        return view('Tags');
    }

    public function About()
    {
        return view('About');
    }
}
