<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('layouts.login');
    }
    public function login(Request $request)
    {
        // $value=$request['email'];
        // $request->validate([

        //     'email'=>'required',
        //     'password'=>'required'
        //    ]);
        //    $credentials=$request->only('email','password');

        //    if(Auth::attempt($credentials))
        //    {

        //         return redirect('/admindashboard');
        //    }
        //    session()->regenerate();
        //    Session::put('email',$value);
        //    return redirect('/login')->withSuccess('login details are not matched');
           echo "<pre>";
           print_r($request);
          // return redirect('/home');
     }



}
