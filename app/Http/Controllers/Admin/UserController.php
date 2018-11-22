<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
	public function index(){
		$users = User::all();
		$data = [
			'users' => $users,
		];
		return view('user', $data);
	}
	public function destroy($id){
		User::destroy($id);
		return back();
	}
	public function toAdmin($id)
	{		
		$user = User::findOrFail($id);
		$user->type = 2;
		$user->update();
		return back();
	}
}
