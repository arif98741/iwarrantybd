<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class FaqController extends Controller
{

    public function index()
    {
        $data =   [
            'faqs' => Faq::orderBy('id', 'desc')->get()

        ];
        return view('admin.faq.index')->with($data);
    }


    public function create()
    {
        $data =   [];
        return view('admin.faq.create')->with($data);
    }

    public function store(Request $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        if ($faq->save()) {
            Session::flash('success', 'Faq saved successful');
            return redirect(route('admin.faq.index'));
        } else {
            Session::flash('success', 'Faq insert failed!');
            return redirect(route('admin.faq.index'));
        }
    }


    public function edit(Faq $faq)
    {
        $data =   [
            'faq' => $faq

        ];
        return view('admin.faq.edit')->with($data);
    }


    public function update(Request $request, Faq $faq)
    {
        // return $request->all();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->updated_at = now();

        if ($faq->save()) {
            Session::flash('success', 'Faq updated successful');
            return redirect(route('admin.faq.index'));
        } else {
            Session::flash('success', 'Faq updated successful');
            return redirect(route('admin.faq.index'));
        }
    }
}