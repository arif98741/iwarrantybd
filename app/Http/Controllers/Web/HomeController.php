<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Page;
use  App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;



class HomeController extends Controller
{
    public function index()
    {
        $data =   [
            'offer'         => Page::where('title', 'offer')->first(),
            'how_it_work'   => Page::where('title', 'how_it_work')->first(),
            'standard'      => Package::where('title', 'STANDARD')->first(),
            'business'      => Package::where('title', 'BUSINESS')->first(),
            'premium'       => Package::where('title', 'PREMIUM')->first(),
        ];

        return view('web.home')->with($data);
    }

    public function add_invoice(Request $request, $id)
    {
        $data =   [
            'package' => Package::find($id),
            'offer'         => Page::where('title', 'offer')->first(),
            'how_it_work'   => Page::where('title', 'how_it_work')->first(),
            'standard'      => Package::where('title', 'STANDARD')->first(),
            'business'      => Package::where('title', 'BUSINESS')->first(),
            'premium'       => Package::where('title', 'PREMIUM')->first(),
        ];

        return view('web.add_invoice')->with($data);
    }

    public function save_invoice()
    {
        $invoicedata = $this->validateRequest();
        $data['created_at'] = now();

        if ($invoice = Invoice::create($invoicedata)) {
            Session::flash('success', 'Invoice Added successfully!');
            return redirect('view_invoice/' . $invoice->id);
        } else {
            Session::flash('error', 'Invoice Add Failed');
            return redirect('invoice/' . $invoicedata['package_id']);
        }
    }


    public function view_invoice($id)
    {

        $data =   [
            'invoice'       => Invoice::with('package')->where('id', $id)->first(),
            'offer'         => Page::where('title', 'offer')->first(),
            'how_it_work'   => Page::where('title', 'how_it_work')->first(),
            'standard'      => Package::where('title', 'STANDARD')->first(),
            'business'      => Package::where('title', 'BUSINESS')->first(),
            'premium'       => Package::where('title', 'PREMIUM')->first(),
        ];

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