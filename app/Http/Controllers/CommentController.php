<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Song $song)
    {
        return response()->json($song->comments()->with('user')->latest()->get());
    }
  
    public function store(Request $request, Song $song)
    {
        $comment = $song->comments()->create([
            'content' => $request->body,
            'user_id' => Auth::id(),
        ]);

        $comment = Comment::where('id', $comment->id)->with('user')->first();

        return $comment->toJson();
    }
}
