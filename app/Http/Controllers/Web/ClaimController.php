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
        $claimData = $this->validateRequest();
        $claimData['image'] = '';
        $claimData['subscriber_id'] = Auth::guard('subscriber')->user()->id;



        if ($claim = Claim::create($claimData)) {

            if (!empty($request->file('image'))) {


                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = 'claim' . '_' . time() . '.' . $extension;
                $path = $request->file('image')->storeAs('public/uploads/claim', $fileNameToStore);
                $claimData['image'] =  str_replace("public/uploads/claim/", '', $path);
                $updateimage = Claim::find($claim->id);
                $updateimage->image = $claimData['image'];
                $updateimage->save();
            }


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
            'image' => 'sometimes',
        ]);
    }
}