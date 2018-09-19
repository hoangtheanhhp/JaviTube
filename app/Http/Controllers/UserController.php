<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;

class UserController extends Controller
{
    public function index($id) {
        $myPosts = Song::all();
        $singers = Singer::all();
        $data = [
            'myPosts' => $myPosts,
            'singers' => $singers,

        ];
        return view('profile.index', $data);
    }
}
