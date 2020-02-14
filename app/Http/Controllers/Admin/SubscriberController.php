<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use App\Models\Subscriber;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Session;

class SubscriberController extends Controller
{
    public function index()
    {
        $data = [
            'subscribers' => Subscriber::orderBy('name')->get()
        ];

        return view('admin.subscriber.index')->with($data);
    }

    /*
    |--------------------------------------------------------------------------
    | Approved Subscriber
    |--------------------------------------------------------------------------
    */
    public function approved()
    {
        $data = [
            'subscribers' => Subscriber::where('status', 'approved')->orderBy('name')->get()
        ];

        return view('admin.subscriber.approved')->with($data);
    }

    /*
    |--------------------------------------------------------------------------
    | Cancelled Subscriber
    |--------------------------------------------------------------------------
    */
    public function cancelled()
    {
        $data = [
            'subscribers' => Subscriber::where('status', 'cancelled')->orderBy('name')->get()
        ];

        return view('admin.subscriber.cancelled')->with($data);
    }


    /*
    |--------------------------------------------------------------------------
    | Changed to Subscriber status to cancelled
    |--------------------------------------------------------------------------
    */
    public function change_to_approved($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->status = 'approved';
        $subscriber->unique_id = $this->generate_unique_id($id);
        if ($subscriber->save()) {
            Session::flash('success', 'Subscriber updated successful');
            return redirect(route('admin.subscriber.index'));
        } else {
            Session::flash('error', 'Subscriber update failed');
            return redirect(route('admin.subscriber.index'));
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Changed to Subscriber status to cancelled
    |--------------------------------------------------------------------------
    */
    public function change_to_cancelled($id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->status = 'cancelled';
        if ($subscriber->save()) {
            Session::flash('success', 'Subscriber updated successful');
            return redirect(route('admin.subscriber.index'));
        } else {
            Session::flash('error', 'Subscriber update failed');
            return redirect(route('admin.subscriber.index'));
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Show single subscriber
    | @param $id
    |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        $data = [
            'subscriber' => Subscriber::find($id),
            'claims' => Claim::where('subscriber_id', $id)->get()
        ];

        return view('admin.subscriber.view')->with($data);
    }

    /*
    |--------------------------------------------------------------------------
    | generate unique id for subscriber
    |--------------------------------------------------------------------------
    */
    public function generate_unique_id($id)
    {
        return 'S' . str_pad($id, 5, '0', STR_PAD_LEFT);
    }

    /*
    |--------------------------------------------------------------------------
    | Subscription
    | @param $status
    |--------------------------------------------------------------------------
    */
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

    /*
    |--------------------------------------------------------------------------
    | Rejected Subscription
    |--------------------------------------------------------------------------
    */
    public function rejected()
    {
        $title = 'Rejected';
        $data = [
            'subscriptions'       => Subscription::with(['package', 'subscriber'])
                ->where('status', 'rejected')
                ->get(),
            'title' => $title
        ];
        return view('admin.subscriber.rejected')->with($data);
    }

    /*
    |--------------------------------------------------------------------------
    | Change subscription to approved
    | @param $id
    |--------------------------------------------------------------------------
    */
    public function subscription_change_to_approved($id)
    {
        $subscription = Subscription::find($id);
        $subscription->status = 'approved';
        if ($subscription->save()) {
            Session::flash('success', 'Subscription updated successful and sent to approved list');
            return redirect('admin/subscription/pending');
        } else {
            Session::flash('error', 'Subscription update failed');
            return redirect('admin/subscription/pending');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Change subscription to rejected
    | @param $id
    |--------------------------------------------------------------------------
    */
    public function subscription_change_to_rejected($id)
    {
        $subscription = Subscription::find($id);
        $subscription->status = 'rejected';
        if ($subscription->save()) {
            Session::flash('success', 'Subscription updated successful and sent to rejected list');
            return redirect('admin/subscription/pending');
        } else {
            Session::flash('error', 'Subscription update failed');
            return redirect('admin/subscription/pending');
        }
    }
}