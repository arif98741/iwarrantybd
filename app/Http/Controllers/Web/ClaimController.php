<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use Illuminate\Http\Request;
use Session;
use Auth;


class ClaimController extends Controller
{
    public function index()
    {
        $data = [];
        return view('web.claim.claim_request')->with($data);
    }


    public function save_Claim(Request $request)
    {


        $categoryData = $this->validateRequest();
        $categoryData['subscriber_id'] = Auth::guard('subscriber')->user()->id;
        if (Claim::create($categoryData)) {
            Session::flash('success', 'Your claim has received successfully! You will be notified soon.');
            return redirect('claim-request');
        } else {
            Session::flash('error', 'Something Went wrong!');
            return redirect('claim-request');
        }
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'phone_name' => 'required',
            'address' => 'sometimes',
            'model' => 'required',
            'imei' => 'required',
            'details' => 'required',
            'problem_pattern' => 'required',
            'more_details' => 'sometimes',
        ]);
    }
}