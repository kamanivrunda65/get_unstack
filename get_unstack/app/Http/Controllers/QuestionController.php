<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.question');
    }
    public function allquestion()
    {
        return view('layouts.allquestion');
    }
    public function singlequestion()
    {
        return view('layouts.questiondetail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Question $question,Request $request)
     {
         $request->validate([
            'user_id'=>'required',
             'question'=>'required',
             'tags'=>'required',
             'category'=>'required',
             'discription'=>'required'
         ]);
         if($request->permit="on"){
                    $permit="Y";
                }else{
                    $permit="N";
                }
         $question->user_id=$request->user_id;
         $question->question=$request->question;
         $question->tags=$request->tags;
         $question->category=$request->category;
         $question->discription=$request->discription;
         $question->permit=$permit;
 
         $question->save();
        //  echo "<pre>";
        //  print_r($request->all());
         return redirect('/allquestion');
     }


    // public function store(Question $question,Request $request)
    // {
    //     // $id=Auth::user()->name;
    //     echo "<pre>";
    //     print_r($request->all());
    //     // $request->validate([
    //     //     'question'=>'required',
    //     //     'tags'=>'required',
    //     //     'category'=>'required',
    //     //     'discription'=>'required'
    //     // ]);
    //     // if($request->permit='on'){
    //     //     $permit="1";
    //     // }else{
    //     //     $permit="2";
    //     // }
    //     // $question->user_id=$id;
    //     // $question->question=$request->question;
    //     // $question->tags=$request->tags;
    //     // $question->category=$request->category;
    //     // $question->discription=$request->discription;
    //     // $question->permit=$permit;

    //     //  echo $question->save();
    //     // echo "<pre>";
    //     // print_r($request->all());
    //     // return redirect('/questions');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $questiondata=$question->get();
        echo $questiondata;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($question_id,Question $question)
    {
        $questionbyid=$question->find($question_id);
        // echo $questionbyid;
        echo $questionbyid->delete();
    }
}
