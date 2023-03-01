<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('layouts.profile');
    }
    public function referral()
    {
        return view('layouts.referral');
    }
    public function notification()
    {
        return view('layouts.notification');
    }
    public function setting()
    {
        return view('layouts.setting');
    }
}
