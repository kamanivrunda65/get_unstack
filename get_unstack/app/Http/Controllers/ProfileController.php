<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image ;
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
    public function show(User $user)
    {
        // $id=Auth::user()->id;
        // echo $id;
        // $userbyid=$user->get();
        // echo $userbyid;
    }
    public function updateuser(Request $request,User $user)
    {
        //dd($request->all());
        $request->validate([
            'user_id'=>'required',
             'profile_pic'=>'mimes:jpeg,jpg'
         ]);
         $image=$request->file('profile_pic');
         $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(300,270);
         $filename=time()."-profile.".$request->file('profile_pic')->getClientOriginalExtension();
         $image_resize->storeAs('public/assets/profile_pic',$filename);
         $file="public/assets/profile_pic/".$filename;
         $user_id=$request->user_id;
         $userbyid=$user->find($user_id);

         //$user->id=$request->user_id;
         $userbyid->name=$request->name;
         $userbyid->profile_pic=$file;
         $userbyid->country=$request->country;
         $userbyid->objective=$request->objective;
         $userbyid->web_link=$request->web_link;
         $userbyid->insta_link=$request->insta_link;
         $userbyid->youtube_link=$request->youtube_link;
         $userbyid->github_link=$request->github_link;
         $userbyid->twitter_link=$request->twitter_link;
         $userbyid->facebook_link=$request->facebook_link;
        //  $user->update($userbyid);
        $userbyid->save();
         return redirect('/profile') ;
    }
}
