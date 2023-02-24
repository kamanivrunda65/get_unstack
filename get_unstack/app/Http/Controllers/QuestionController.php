<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        return view('layouts.question');
    }
    public function store(Question $question,Request $request)
    {
        $request->validate([
            'question'=>'required',
            'tags'=>'required',
            'category'=>'required',
            'discription'=>'required'
        ]);
        if($request->permit='on'){
            $permit="Y";
        }
        $question->question=$request->question;
        $question->tags=$request->tags;
        $question->category=$request->category;
        $question->discription=$request->discription;

        $question->permit=$permit;

        $question->save();
        // echo "<pre>";
        // print_r($request->all());
        return redirect('/');
    }
}
