<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllquestionController extends Controller
{
    public function index()
    {
        return view('layouts.allquestion');
    }
    public function showquestions()
    {
        return view('admin.questiontable');
    }
}
