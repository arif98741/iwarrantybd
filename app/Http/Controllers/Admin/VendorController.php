<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        $data =   [
            'vendors' => Vendor::orderBy('name', 'asc')->get()

        ];
        return view('admin.vendor.index')->with($data);
    }


    public function create()
    {
        $data =   [
            'blog_categories' => BlogCategory::orderBy('name', 'asc')->get(),

        ];
        return view('admin.vendor.create')->with($data);
    }

    public function store(Request $request)
    {
        $page = new Vendor;
        $page->title = $request->title;
        $page->blog_category_id = $request->blog_category_id;
        $page->slug = Str::slug($request->title, '-');
        $page->description = $request->description;
        if ($request->hasFile('image')) {

            $page->image = $this->uploadImage($request, $page);
        }

        if ($page->save()) {
            Session::flash('success', 'Vendor inserted successful');
            return redirect(route('admin.vendor.index'));
        } else {
            Session::flash('success', 'Vendor inserted successful');
            return redirect(route('admin.vendor.index'));
        }
    }


    public function edit($id)
    {
        $data =   [
            'vendor' => Vendor::find($id)

        ];
       
       // return view('admin.vendor.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $page = Vendor::find($id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->updated_at = now();


        if ($page->save()) {
            Session::flash('success', 'Vendor updated successful');
            return redirect(route('admin.vendor.index'));
        } else {
            Session::flash('success', 'Vendor updated successful');
            return redirect(route('admin.vendor.index'));
        }
    }

    public function destroy(Vendor $vendor)
    {
        return $vendor;



        if ($vendor->delete()) {
            Session::flash('success', 'Vendor inserted successful');
            return redirect(route('admin.vendor.index'));
        } else {
            Session::flash('success', 'Vendor inserted successful');
            return redirect(route('admin.vendor.index'));
        }
    }
}