<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Claim;
use Session;


class ClaimController extends Controller
{
    public function index($status)
    {
        if ($status == 0)
            $title = 'Pending Claims';
        else
            $title = 'Completed Claims';
        $data = [
            'claims' => Claim::with('subscriber')
                ->where('status', $status)
                ->orderBy('id', 'desc')->get(),
            'status' => $title
        ];
        return $data['status']; 

        return view('admin.claim.index')->with($data);
    }

    public function change_status($status, $id)
    {
        if ($status == 'pending') {
            $claim = Claim::find($id);
            $claim->status = 1;
            $claim->save();
            Session::flash('success', 'Claim has successfully sent to completed list');
            return redirect('/admin/claim/0');
        } else {
            $claim = Claim::find($id);
            $claim->status = 0;
            $claim->save();
            Session::flash('success', 'Claim has successfully sent to pending list');
            return redirect('/admin/claim/1');
        }
    }


    public function cancel($id)
    {
        $claim = Claim::find($id);

        if ($claim->delete()) {
            Session::flash('success', 'Claim has successfully canceled');
            return redirect('/admin/claim/0');
        } else {
            Session::flash('error', 'Unexpected error Try again later');
            return redirect('/admin/claim/0');
        }
    }
}