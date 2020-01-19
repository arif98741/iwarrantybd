<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Claim;


class ClaimController extends Controller
{
    public function index($status)
    {
        $data = [
            'claims' => Claim::with('subscriber')
                ->where('status', $status)
                ->orderBy('id', 'desc')->get()
            'status' => $status
        ];

        return view('admin.claim.index')->with($data);
    }
}