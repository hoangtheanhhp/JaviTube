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
    
}
