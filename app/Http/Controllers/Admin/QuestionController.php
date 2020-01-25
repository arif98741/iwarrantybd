<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Session;


class QuestionController extends Controller
{
    public function index()
    {
        $data = [
            'questions' => Question::orderBy('id', 'desc')->get()
        ];

        return view('admin.question.index')->with($data);
    }

    public function destroy(Question $question)
    {
        if ($question->delete()) {
            Session::flash('success', 'Question deleted successfully');
            return redirect(route('admin.question.index'));
        } else {
            Session::flash('success', 'Question update failed');
            return redirect(route('admin.question.index'));
        }
    }
}