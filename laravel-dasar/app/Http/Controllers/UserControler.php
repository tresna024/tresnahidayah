<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserControler extends Controller
{
    public function asrama()
    {
        return view('index', [
            "title" => "Home"
        ]);
    }

    public function kegiatan()
    {
        return view('view_kegiatan', [
            "title" => "Kegiatan"
        ]);
    }

    public function kegiatan2()
    {
        return view('view_kegiatan2', [
            "title" => "Kegiatan"
        ]);
    }

}
