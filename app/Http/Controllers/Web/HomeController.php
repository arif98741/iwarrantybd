<?php

namespace App\Http\Controllers\Web;

use Auth;
use Session;
use Carbon\Carbon;
use App\Models\Page;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index()
    {
        $data =   [
            // 'offer'         => Page::where('title', 'offer')->first(),
            // 'how_it_work'   => Page::where('title', 'how_it_work')->first(),
            // 'standard'      => Package::where('title', 'STANDARD')->first(),
            // 'business'      => Package::where('title', 'BUSINESS')->first(),
            // 'premium'       => Package::where('title', 'PREMIUM')->first(),
            'setting'          => Setting::first(),
            'faqs'              => Faq::orderBy('id', 'desc')->get(),
        ];

        return view('web.home')->with($data);
    }

    public function save_subscription()
    {
        $subscription = new Subscription;
        $subscription->package_id = Package::orderBy('id')->first()->id;
        $subscription->subscriber_id = Auth::guard('subscriber')->user()->id;
        $subscription->created_at = now();
        $invoice = $subscription->save();
        $data =  Subscription::orderBy('subscriber_id', 'desc')->where('subscriber_id', Auth::guard('subscriber')->user()->id)->first();

        if ($invoice = $subscription->save()) {
            Session::flash('success', 'Your subscription received successfully!');
            return redirect('view_invoice/' . $data->id);
        } else {
            Session::flash('error', 'Subscription add failed. Unknown error!');
            return redirect()->back();
        }
    }


    public function view_invoice($id)
    {
        $data =   [
            'invoice'       => Subscription::with(['package', 'subscriber'])->where([
                'id' => $id,
                'subscriber_id' => Auth::guard('subscriber')->user()->id

            ])->first(),
            /* 'offer'         => Page::where('title', 'offer')->first(),
            'how_it_work'   => Page::where('title', 'how_it_work')->first(),
            'standard'      => Package::where('title', 'STANDARD')->first(),
            'business'      => Package::where('title', 'BUSINESS')->first(),
            'premium'       => Package::where('title', 'PREMIUM')->first(),*/
        ];
        // return $data['invoice'];

        return view('web.view_invoice', $data);
    }

    public function contact()
    {
        exit;
        $data =   [];

        return view('web.contact')->with($data);
    }

    private function validateRequest()
    {
        return request()->validate([
            'name'         => 'required',
            'email'   => 'required|email',
            'contact'  => 'required',
            'comment' => 'sometimes',
            'package_id'  => 'required'
        ]);
    }
}