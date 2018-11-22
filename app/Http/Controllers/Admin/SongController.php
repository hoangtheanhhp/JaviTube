<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Song;

class SongController extends Controller
{
	public function index(){
		$songs = Song::all();	
		$data = [
			'songs' => $songs,
		];
		return view('admin.song', $data);
	}
	public function destroy($id){
		Song::destroy($id);
		return back();
	}
}
