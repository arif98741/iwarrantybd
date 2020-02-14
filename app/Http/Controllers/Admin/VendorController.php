<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Models\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class VendorController extends Controller
{
    public function index()
    {
        $data =   [
            'vendors' => Vendor::orderBy('name', 'asc')->get()

        ];
        return view('admin.vendor.index')->with($data);
    }


    public function rejected()
    {
        $data =   [
            'vendors' => Vendor::where('status', 'rejected')->orderBy('name', 'asc')->get()

        ];
        return view('admin.vendor.rejected')->with($data);
    }

    public function change_to_reject($id)
    {
        $vendor = Vendor::find($id);
        $vendor->status = 'rejected';

        if ($vendor->update()) {
            Session::flash('success', 'Vendor has successfully rejected');
            return redirect(url('admin/vendor'));
        } else {
            Session::flash('error', 'Unexpected error Try again later');
            return redirect(url('admin/vendor'));
        }
    }


    public function create()
    {
        $data =   [];
        return view('admin.vendor.create')->with($data);
    }

    public function store(Request $request)
    {
        $vendor = new Vendor;
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->email = $request->email;
        $vendor->location = $request->location;
        $vendor->created_at = now();
        if ($vendor->save()) {
            Session::flash('success', 'Vendor Added successfully!');
            return redirect(route('admin.vendor.index'));
        } else {
            Session::flash('error', 'Something Went wrong!');
            return redirect(route('admin.vendor.create'));
        }
    }

    public function edit($id)
    {
        $data =   [
            'vendor' => Vendor::find($id)
        ];

        return view('admin.vendor.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $page = Vendor::find($id);
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->location = $request->location;
        $vendor->updated_at = now();

        if ($vendor->save()) {
            Session::flash('success', 'Vendor updated successfully');
            return redirect(route('admin.vendor.index'));
        } else {
            Session::flash('error', 'Failed to update vendor');
            return redirect(route('admin.vendor.index'));
        }
    }


    public function destroy(Vendor $vendor)
    {
        if ($vendor->delete()) {
            Session::flash('success', 'Vendor deleted successfully');
            return redirect(route('admin.vendor.index'));
        } else {
            Session::flash('success', 'Vendor update failed');
            return redirect(route('admin.vendor.index'));
        }
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:6',
            'phone' => 'required',
            'email' => 'required',
            'location' => 'required'
        ]);
    }
}