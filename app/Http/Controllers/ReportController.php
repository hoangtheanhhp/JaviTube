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
        $data = [
            'report' => $report,
        ];
        return view('report.show', $data);
    }
    public function remove($id)
    {
        Report::detroy($id);
        return redirect()->back();
    }
    
}
