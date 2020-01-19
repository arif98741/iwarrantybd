<?php

namespace App\Http\Controllers\Admin;

use App\Models\Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CenterController extends Controller
{
    public function index()
    {
        $data =   [
            'centers' => Center::orderBy('id', 'asc')->get()

        ];


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
        $center->name = $request->name;
        $center->location = $request->location;
        $center->phone = $request->phone;
        $center->email = $request->email;
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
            'center' => $center

        ];
        return view('admin.center.edit')->with($data);
    }


    public function update(Request $request, Center $center)
    {
        $center->name = $request->name;
        $center->location = $request->location;
        $center->phone = $request->phone;
        $center->email = $request->email;

        if ($center->save()) {
            Session::flash('success', 'Center updated successful');
            return redirect(route('admin.center.index'));
        } else {
            Session::flash('success', 'Center updated successful');
            return redirect(route('admin.center.index'));
        }
    }
}