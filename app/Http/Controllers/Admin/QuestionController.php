<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use App\Models\Subscriber;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $data = [
            'questions' => Question::orderBy('id', 'desc')->get()
        ];

        return view('admin.question.index')->with($data);
    }
}