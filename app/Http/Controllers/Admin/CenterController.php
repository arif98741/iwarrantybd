<?php

namespace App\Http\Controllers\Admin;

use App\Models\Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    public function index()
    {
        $data =   [
            'centers' => Center::all()

        ];
        return $data['centers'];

        return view('admin.center.index')->with($data);
    }


    public function create()
    {
        $data =   [];
        return view('admin.center.create')->with($data);
    }

    public function store(Request $request)
    {
        $center = new Center;
        $center->question = $request->question;
        $center->answer = $request->answer;
        if ($center->save()) {
            Session::flash('success', 'Center saved successful');
            return redirect(route('admin.center.index'));
        } else {
            Session::flash('success', 'Center insert failed!');
            return redirect(route('admin.center.index'));
        }
    }


    public function edit(Center $center)
    {
        $data =   [
            'faq' => $center

        ];
        return view('admin.center.edit')->with($data);
    }


    public function update(Request $request, Center $center)
    {
        // return $request->all();
        $center->question = $request->question;
        $center->answer = $request->answer;
        $center->updated_at = now();

        if ($center->save()) {
            Session::flash('success', 'Center updated successful');
            return redirect(route('admin.center.index'));
        } else {
            Session::flash('success', 'Center updated successful');
            return redirect(route('admin.center.index'));
        }
    }
}