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
        $myPosts = Song::all();
        $singers = Singer::all();
        $data = [
        	'user' => $user, 
            'myPosts' => $myPosts,
            'singers' => $singers,

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
        $user->password = $request->new_password;
        $user->save();
        return redirect()->back();
    }
}
