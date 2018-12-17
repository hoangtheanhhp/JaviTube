<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Song;
use App\Models\Lyric;
use App\Http\Requests\StoreSongRequest;
use Illuminate\Http\Request;
use DB;

class SongController extends Controller
{
    public function store(StoreSongRequest $request)
    {
                // Start transaction!
        DB::beginTransaction();

        try {
            $song = Song::create([
            'name' => $request->name,
            'youtube_id' => youtubeId($request->link),
            'singer_id' => $request->singer_id,
            'user_id' => Auth::user()->id,
            ]);
            if ($request->lyric_ja) {
                Lyric::create([
                    'lyric' => $request->lyric_ja,
                    'user_id' => Auth::user()->id,
                    'type' => Lyric::JP, 
                    'song_id' => $song->id, 
                ]);
            }
            if ($request->lyric_vi) {
                Lyric::create([
                    'lyric' =>$request->lyric_vi,
                    'user_id' => Auth::user()->id,
                    'type' => Lyric::VI, 
                    'song_id' => $song->id, 
                ]);
            }
        } catch(ValidationException $e)
        {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->back()
                ->withErrors( $e->getErrors() )
                ->withInput();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return redirect()->route('users.show',Auth::user()->id);
    }

    public function show($id)
    {
        $song = Song::findOrFail($id);
        $data = [
            'song' => $song,
        ];
        return view('song.index', $data);
    }
    public function like($id)
    {
        $song = Song::findOrFail($id);
        $user = Auth::user();
        if ($user->liked($id))
        {
            return "fail";
        }
        $user->like()->attach($song);
        return redirect()->back();
    }
    public function liked($id)
    {
        $song = Song::findOrFail($id);
        $user = Auth::user();
        if ($user->liked($id)) return "1";
        else return "0";
    }
    public function unlike($id)
    {
        $song = Song::findOrFail($id);
        Auth::user()->like()->detach($song);
       return redirect()->back();
    }
    public function like_num($id)
    {
        $song = Song::findOrFail($id);
        return $song->be_liked()->count();
    }    

    public function destroy(Request $request){
        Song::destroy($request->id);
        return redirect()->back();
    }

    
}
