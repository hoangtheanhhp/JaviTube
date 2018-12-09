<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
use App\Models\User;
class SearchController extends Controller
{
	public function index(Request $request)	{
		$songs = Song::search($request->search);
		$users = User::search($request->search);
		$singers = Singer::search($request->search);
		$data = [
			'songs' => $songs, 
			'users' => $users, 
			'singers' => $singers, 
		];
		return view('search.index', $data);
	}
}
