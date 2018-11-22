<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Singer;
use App\Http\Requests\AddSingerRequest;

class SingerController extends Controller
{
    public function index(){
		$singers = Singer::all();
		$data = [
			'singers' => $singers,
		];
		return view('singer', $data);
	}
	public function destroy($id){
        Singer::destroy($id);
        return back();
    }
    public function create(AddSingerRequest $request)
    {
        return Singer::create($request->all());
    }
}
