<?php

namespace App\Http\Controllers\Web;

use Auth;
use Session;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Question;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $data =   [
            'setting'          => Setting::first(),
            'faqs'             => Faq::orderBy('id', 'desc')->limit(7)->get(),
            'faq_count'        => Faq::count(),
            'offset_faqs'      => Faq::skip(7)->take(50)->orderBy('id', 'desc')->get(),
            'reviews'           => Review::where('status', 1)->get(),
        ];

        return view('web.home')->with($data);
    }

    public function faq()
    {
        $data =   [
            'setting'    => Setting::first(),
            'faqs'      => Faq::orderBy('id', 'desc')->get(),
        ];

        return view('web.faq')->with($data);
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


    public function save_question(Request $request)
    {
        $question = new Question;
        $question->question_data =  $request->question_data;
        if ($question->save()) {
            // Session::flash('success', 'Your question has successfully saved!');
            return redirect('/');
        } else {
            // Session::flash('error', 'Failed to post question. Try again!');
            return redirect()->back();
        }
    }


    public function save_review(Request $request)
    {
        $review = new Review;
        $review->name =  $request->name;
        $review->designation =  $request->designation;
        $review->details =  $request->details;
        $review->created_at =  now();
        $review->updated_at =  now();
        if ($review->save()) {
            return redirect('/');
        } else {
            return redirect()->back();
        }
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