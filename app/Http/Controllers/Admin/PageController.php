<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Session;


class PageController extends Controller
{
    public function index()
    {
        $data =   [
            'pages' => Page::orderBy('title', 'desc')->get()

        ];
        return view('admin.page.index')->with($data);
    }


    public function create()
    {
        $data =   [
            'blog_categories' => BlogCategory::orderBy('name', 'asc')->get(),

        ];
        return view('admin.page.create')->with($data);
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
            return redirect(route('admin.page.index'));
        } else {
            Session::flash('success', 'Category inserted successful');
            return redirect(route('admin.page.index'));
        }
    }


    public function edit($id)
    {
        $data =   [
            'page' => Page::find($id)

        ];
        return view('admin.page.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->updated_at = now();


        if ($page->save()) {
            Session::flash('success', 'Page updated successful');
            return redirect(route('admin.page.index'));
        } else {
            Session::flash('success', 'Page updated successful');
            return redirect(route('admin.page.index'));
        }
    }
}