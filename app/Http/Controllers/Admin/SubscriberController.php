<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $data = [
            'subscribers' => Subscriber::orderBy('name')->get()
        ];

        return view('admin.subscriber.index')->with($data);
    }
}