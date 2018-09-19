<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Song;
use App\Http\Requests\StoreSongRequest;

class SongController extends Controller
{
    public function store(StoreSongRequest $request)
    {
        Song::create(
            array_merge(
                $request->all(),
                ['user_id' => Auth::user()->id]
            )
        );
    }
}
