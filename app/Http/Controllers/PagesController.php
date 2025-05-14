<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function aboutus02()
    {
        return view('pages/aboutus02');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
