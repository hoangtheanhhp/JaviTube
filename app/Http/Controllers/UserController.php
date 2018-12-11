<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Request\ChangePasswordRequest;

class UserController extends Controller
{
    public function index($id) {
    	$user = User::findOrFail($id);
        $myPosts = $user->song;
        $fols= $user->followed->all();
        $folPosts = [];
        foreach ($fols as $fol) {
            $songs = $fol->song->all();
            foreach ($songs as $song){
                if (!in_array($song,$folPosts,true)) array_push($folPosts,$song);
            }
        }
        $singerPosts = [];
        // $user->likeSinger->each(function ($singer, $key) {
        //     $singer->songs->each(function ($song, $key) {
        //         if (!in_array($song,$singerPosts,true)) array_push($singerPosts,$song);
        //     });
        // });
        $singers = $user->likeSinger->all();
        foreach ($singers as $singer) {
            $songs = $singer->songs->all();
            foreach ($songs as $song){
                if (!in_array($song,$singerPosts,true)) array_push($singerPosts,$song);
            }
        }
        $singers = Singer::all();
        $data = [
        	'user' => $user, 
            'myPosts' => $myPosts,
            'singers' => $singers,
            'singerPosts' => $singerPosts,
            'folPosts' => $folPosts,

        ];
        return view('profile.index', $data);
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        if ($request->hasFile('avatar')) {
            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $path = $request->avatar->storeAs('public/avatar',$avatarName);
            $user->avatar = $avatarName;
        }
        $user->save();
        return redirect()->route('users.show', $id);
    }

    public function toggleFollow($id) {
        $user = User::findOrFail($id);
        if ($user->isFollowing()) {
            Auth::user()->followed()->detach($id);
        } else {
            Auth::user()->followed()->attach($id);
        }
        return redirect()->back();
    }

    public function changePassword(ChangePasswordRequest $request) {
        $user = User::findOrFail(Auth::user()->id);
        if ($user->password !== bcrypt($request->password)) return redirect()->back()->with(['error' => 'Password incorrect']);
        $user->password = bcrypt($request->new_password);
        $user->save();
        return redirect()->back();
    }
}
