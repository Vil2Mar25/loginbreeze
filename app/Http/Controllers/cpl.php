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

    public function Contacts()
    {
        return view('Contacts');
    }

    public function About()
    {
        return view('About');
    }
}
