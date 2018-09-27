<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Song;
use App\Models\Lyric;
use App\Http\Requests\StoreSongRequest;

class SongController extends Controller
{
    public function store(StoreSongRequest $request)
    {
        Song::create([
            'name' => $request->name,
            'youtube_id' => youtubeId($request->link),
            'singer_id' => $request->singer_id,
            'user_id' => Auth::user()->id,
        ]);
        if ($request->lyric_jp) {
            Lyric::create([
                'lyric' => $request->lyric,
                'user_id' => Auth::user()->id,
                'type' => Lyric::JP
            ]);
        }
        if ($request->lyric_vi) {
            Lyric::create([
                'lyric' => $request->lyric,
                'user_id' => Auth::user()->id,
                'type' => Lyric::VI
            ]);
        }
        return redirect()->route('user',Auth::user()->id);
    }

    public function show($id)
    {
        $song = Song::findOrFail($id);
        $data = [
            'song' => $song,
        ];
        return view('song.index', $data);
    }
}
