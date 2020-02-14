<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\Claim;
use App\Models\Vendor;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {

        $data = [
            'subscriber_total' => Subscriber::all()->count(),
            'subscriber_approved' => Subscriber::where('status', 'approved')->count(),
            'subscriber_cancelled' => Subscriber::where('status', 'cancelled')->count(),
            'subscription_pending' => Subscription::where('status', 'pending')->count(),
            'subscription_approved' => Subscription::where('status', 'approved')->count(),
            'subscription_rejected' => Subscription::where('status', 'rejected')->count(),
            'claim_peding' => Claim::where('status', 0)->count(),
            'claim_approved' => Claim::where('status', 1)->count(),
            'claim_rejected' => Claim::where('status', 2)->count(),
            'vendor_total' => Vendor::all()->count(),
            'vendor_rejected' => Vendor::where('status', 'rejected')->count(),
            'center_total' => Center::all()->count(),
            'center_rejected' => Center::where('status', 'rejected')->count(),
        ];
        return view('admin.dashboard')->with($data);
    }

    public function setting(Request $request)
    {
        if ($request->isMethod('post')) {
            $setting = Setting::find(1);
            $setting->contact = $request->contact;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->pinterest = $request->pinterest;
            $setting->instagram = $request->instagram;
            if ($setting->save()) {
                Session::flash('success', 'Setting updated successful');
                return redirect(route('admin.dashboard'));
            } else {
                Session::flash('error', 'Update successful');
                return redirect(route('admin.setting'));
            }
        }
        $setting = Setting::first();
        return view('admin.setting')->with(compact('setting'));
    }
}