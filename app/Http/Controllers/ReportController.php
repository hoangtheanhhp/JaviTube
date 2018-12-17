<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        $data = [
            'reports' => $reports,
        ];
        return view('report.index', $data);
    }
    public function show($id)
    {
        $report = Report::findOrFail($id);
        $report->save();
        $data = [
            'report' => $report,
        ];
        return view('report.show', $data);
    }
    public function remove($id)
    {
        Report::destroy($id);
        return redirect()->back();
    }
    public function create(Request $request)
    {
        $re = new Report();
        if ($request->content){$re->content = $request->content;}
        else {return redirect()->back();}
        if ($request->song_id){$re->song_id = $request->song_id;}
        else {return redirect()->back();}
        $re->user_id = Auth::user()->id;
        $re->save();
        redirect()->back();
    }
    
}
