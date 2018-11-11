<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;


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
        $user->avatar = $request->avatar;
        $user->save();
        return redirect()->route('users.show');
    }
}
