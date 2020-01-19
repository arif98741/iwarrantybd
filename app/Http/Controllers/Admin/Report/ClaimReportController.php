<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClaimReportController extends Controller
{
    private $path = 'admin.report.claim.';

    public function index()
    {
        $data = [];
        return view($this->path . 'index')->with($data);
    }


    public function action(Request $request)
    {
        dd($request);
    }
}