<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use App\Models\Subscriber;
use App\Models\Subscription;
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


    public function show($id)
    {
        $data = [
            'subscriber' => Subscriber::find($id),
            'claims' => Claim::where('subscriber_id', $id)->get()
        ];

        return view('admin.subscriber.view')->with($data);
    }



    public function subscription($status)
    {
        if ($status == 'pending') {
            $title = 'Pending';
        } else {
            $title = 'Approved';
        }

        $data = [
            'subscriptions'       => Subscription::with(['package', 'subscriber'])
                ->where('status', $status)
                ->get(),
            'title' => $title
        ];

        return view('admin.subscription.index')->with($data);
    }
}