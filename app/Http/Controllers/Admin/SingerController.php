<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Singer;

class SingerController extends Controller
{
    public function index(){
		$singers = Singer::all();
		$data = [
			'singers' => $singers,
		];
		return view('admin.singer', $data);
	}
	public function destroy($id){
        Singer::destroy($id);
        return back();
    }
    public function store(Request $request)
    {
        $model = new Singer();
        $model->name = $request->name;
        $model->birthday = $request->birthday;
        $model->description = $request->description;
        if ($request->hasFile('avatar')) {
            $avatarName = $request->name.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $path = $request->avatar->storeAs('public/avatar',$avatarName);
            $model->avatar = $avatarName;
        }
        $model->save();
        return redirect()->back();
    }
}
