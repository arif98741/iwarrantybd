<?php

namespace App\Http\Controllers\Admin;

use App\Models\Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CenterController extends Controller
{
    private $path = 'admin.center.';

    public function index()
    {
        $data =   [
            'centers' => Center::orderBy('id', 'asc')->get()

        ];

        return view($this->path . 'index')->with($data);
    }

    public function reject()
    {
        $data =   [
            'centers' => Center::where('status','rejected')->orderBy('id', 'asc')->get()

        ];

        return view($this->path . 'rejected')->with($data);
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
            return redirect(route($this->path . 'index'));
        } else {
            Session::flash('success', 'Center insert failed!');
            return redirect(route($this->path . 'index'));
        }
    }


    public function edit(Center $center)
    {
        $data =   [
            'center' => $center

        ];
        return view($this->path . 'edit')->with($data);
    }


    public function update(Request $request, Center $center)
    {
        $center->name = $request->name;
        $center->location = $request->location;
        $center->phone = $request->phone;
        $center->email = $request->email;

        if ($center->save()) {
            Session::flash('success', 'Center updated successful');
            return redirect(route($this->path . 'index'));
        } else {
            Session::flash('success', 'Center updated successful');
            return redirect(route($this->path . 'index'));
        }
    }

    public function change_to_reject($id)
    {
        $center = Center::find($id);
        $center->status = 'rejected';

        if ($center->update()) {
            Session::flash('success', 'Center has successfully rejected');
            return redirect(url('admin/center'));
        } else {
            Session::flash('error', 'Unexpected error Try again later');
            return redirect(url('admin/center'));
        }
    }
}
