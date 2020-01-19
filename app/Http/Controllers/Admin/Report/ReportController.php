<?php

namespace App\Http\Controllers\Admin\Report;

use App\Models\Claim;
use App\Models\Subscriber;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReportController extends Controller
{
    private $path = 'admin.report.';

    public function index()
    {
        $data = [
            'total_subscription' => Subscription::all()->count(),
            'total_subscriber' => Subscriber::all()->count(),
            'total_claim' => Claim::count(),
            'completed_claim' => Claim::where('status', 1)->count(),
            'recent_claims' => Claim::orderBy('id', 'desc')->limit(5)->get(),
            'total_center' => Claim::count(),
        ];
        return view($this->path . 'index')->with($data);
    }
}