<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function vlog() 
    {
        $posts = Post::all();
        return view('front.vlogs', compact('posts'));
    }

    public function vlogPost($id)
    {
        $post = Post::find($id);
        return view('front.vlog-post', compact('post'));
    }
}
