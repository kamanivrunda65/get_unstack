<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function index()
    {
        return view('layouts.signup');
    }

    public function store(User $user,Request $request){

       $request->validate([
        'name'=>['required'],
        'email'=>['required','email','unique:users,email'],
        'password'=>['required','min:8']
       ]);
       $user->name=$request->name;
       $user->email=$request->email;
       $user->email_verified_at;
       $user->password=md5($request->password);
       $user->save();
       return redirect('/login');
        // echo "<pre>";
        // print_r($request->all());
    }
}
