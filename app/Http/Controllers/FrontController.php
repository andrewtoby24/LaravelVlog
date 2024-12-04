<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function vlog() 
    {
        return view('front.vlogs');
    }

    public function vlogPost($id)
    {
        return view('front.vlog-post');
    }
}
