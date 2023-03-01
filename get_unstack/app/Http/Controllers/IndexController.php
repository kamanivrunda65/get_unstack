<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        // $data=Auth::user();
        // //dd($data);
        // if($data->role_id==1){
        //     return redirect('dashboard');
        // }
        // else
        // {
            return view('layouts.index');
        // }
        
    }
    public function contact()
    {
        return view('layouts.contact');
    }
}
