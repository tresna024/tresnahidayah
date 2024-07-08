<?php

namespace App\Models;

class Post 
{
    public static function find($slug)
    {
        $posts = static::all();

    return $posts->firstWhere('slug', $slug);
    }
}
