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
            // ['name' => $request->name,'birthday'=> $request->birthday,'description' => $request->description]);
        $model->name = $request->name;
        $model->birthday = $request->birthday;
        $model->description = $request->description;
        $model->avatar = 'a';
        $model->save();
        return redirect()->back();
    }
}
