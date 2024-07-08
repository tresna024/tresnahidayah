<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostControler extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "Post",
            "post"  => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single",
            "post" => $post
        ]);
    }
}
