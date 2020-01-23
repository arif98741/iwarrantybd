<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\Claim;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {

        $data = [
            'total_subscription' => Subscription::all()->count(),
            'total_subscriber' => Subscriber::all()->count(),
            'pending_claim' => Claim::where('status', 0)->count(),
            'completed_claim' => Claim::where('status', 1)->count(),
            'recent_claims' => Claim::orderBy('id', 'desc')->limit(5)->get(),
            'total_center' => Claim::count(),
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