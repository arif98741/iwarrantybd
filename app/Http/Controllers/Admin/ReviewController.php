<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Session;


class ReviewController extends Controller
{
    public function index()
    {
        $data =   [
            'reviews' => Review::orderBy('name', 'asc')->get()

        ];
        return view('admin.review.index')->with($data);
    }


    public function create()
    {
        $data =   [];
        return view('admin.review.create')->with($data);
    }

    public function store(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->details = $request->details;
        $review->created_at = now();
        if ($review->save()) {
            if (!empty($request->file('image'))) {

                $reviewdata = Review::orderBy('id', 'desc')->first();
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = 'review' . '_' . time() . '.' . $extension;
                $path = $request->file('image')->storeAs('public/uploads/review', $fileNameToStore);
                $claimData['image'] =  str_replace("public/uploads/review/", '', $path);
                $updateimage = Review::find($reviewdata->id);
                $updateimage->image = $claimData['image'];
                $updateimage->save();
            }

            Session::flash('success', 'Review Added successfully!');
            return redirect(route('admin.review.index'));
        } else {
            Session::flash('error', 'Something Went wrong!');
            return redirect(route('admin.review.create'));
        }
    }


    public function edit($id)
    {
        $data =   [
            'vendor' => Review::find($id)
        ];

        return view('admin.review.edit')->with($data);
    }


    public function update(Request $request, $id)
    {
        $page = Review::find($id);
        $review->name = $request->name;
        $review->phone = $request->phone;
        $review->location = $request->location;
        $review->updated_at = now();

        if ($review->save()) {
            Session::flash('success', 'Review updated successfully');
            return redirect(route('admin.review.index'));
        } else {
            Session::flash('error', 'Failed to update vendor');
            return redirect(route('admin.review.index'));
        }
    }

    public function destroy(Review $review)
    {
        if ($review->delete()) {
            Session::flash('success', 'Review deleted successfully');
            return redirect(route('admin.review.index'));
        } else {
            Session::flash('success', 'Review update failed');
            return redirect(route('admin.review.index'));
        }
    }

    public function change_status($status, $id)
    {
        if ($status == 0) {
            $review = Review::find($id);
            $review->status = 1;
            $review->save();
            Session::flash('success', 'Review successfully changed to active');
            return redirect(route('admin.review.index'));
        } else {
            $review = Review::find($id);
            $review->status = 0;
            $review->save();
            Session::flash('success', 'Review successfully changed to inactive');
            return redirect(route('admin.review.index'));
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