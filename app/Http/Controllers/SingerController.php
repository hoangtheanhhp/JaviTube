<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Song;
use App\Models\Singer;
use App\Http\Requests\StoreSongRequest;
use DB;
class SingerController extends Controller
{
    public function index($id) {
        $singer = Singer::findOrFail($id);
        $songs = $singer->songs;
        $data = [
            'singer' => $singer,
        	'songs' => $songs, 
        ];
        return view('singer', $data);
    }
    public function like($id)
    {
        $singer = Singer::findOrFail($id);
        $user = Auth::user();
        if ($user->likedSinger($id))
        {
            return "fail";
        }
        $user->likeSinger()->attach($singer);
        return redirect()->back();
    }
    public function unlike($id)
    {
        $singer = Singer::findOrFail($id);
        Auth::user()->likeSinger()->detach($singer);
       return redirect()->back();
    }
}
?>