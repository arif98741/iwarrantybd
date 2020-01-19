<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Session;


class PackageController extends Controller
{
    public function index()
    {
        $data =   [
            'packages' => Package::orderBy('title', 'desc')->get()

        ];
        return view('admin.package.index')->with($data);
    }


    public function create()
    {
        $data =   [
            'blog_categories' => BlogCategory::orderBy('name', 'asc')->get(),

        ];
        return view('admin.package.create')->with($data);
    }

    public function store(Request $request)
    {
        $page = new Page;
        $page->title = $request->title;
        $page->blog_category_id = $request->blog_category_id;
        $page->slug = Str::slug($request->title, '-');
        $page->description = $request->description;
        if ($request->hasFile('image')) {

            $page->image = $this->uploadImage($request, $page);
        }


        if ($page->save()) {
            Session::flash('success', 'Category inserted successful');
            return redirect(route('admin.package.index'));
        } else {
            Session::flash('success', 'Category inserted successful');
            return redirect(route('admin.package.index'));
        }
    }


    public function edit($id)
    {
        $data =   [
            'package' => Package::find($id)

        ];
        return view('admin.package.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        $package->title = $request->title;
        $package->project = $request->project;
        $package->price = $request->price;
        $package->storage = $request->storage;
        $package->updated_at = now();

        if ($package->save()) {
            Session::flash('success', 'Package updated successful');
            return redirect(route('admin.package.index'));
        } else {
            Session::flash('success', 'Package updated successful');
            return redirect(route('admin.package.index'));
        }
    }
}