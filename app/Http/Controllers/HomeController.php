<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        $data = [
            'songs' => $songs,
        ];
        return view('index', $data);
    }
}
