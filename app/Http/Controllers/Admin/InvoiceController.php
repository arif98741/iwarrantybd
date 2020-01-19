<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use Session;

class InvoiceController extends Controller
{

    public function index()
    {
        $data =   [
            'invoices' => Invoice::with('package')->orderBy('id', 'desc')->get()

        ];

        return view('admin.invoice.index')->with($data);
    }


    public function create()
    {
        $data =   [
            'blog_categories' => BlogCategory::orderBy('name', 'asc')->get(),

        ];
        return view('admin.invoice.create')->with($data);
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
            return redirect(route('admin.invoice.index'));
        } else {
            Session::flash('success', 'Category inserted successful');
            return redirect(route('admin.invoice.index'));
        }
    }


    public function edit($id)
    {
        $data =   [
            'page' => Page::find($id)

        ];
        return view('admin.invoice.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->updated_at = now();


        if ($page->save()) {
            Session::flash('success', 'Page updated successful');
            return redirect(route('admin.invoice.index'));
        } else {
            Session::flash('success', 'Page updated successful');
            return redirect(route('admin.invoice.index'));
        }
    }
}