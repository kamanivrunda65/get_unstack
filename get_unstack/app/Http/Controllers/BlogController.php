<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    public function post()
    {
        return view('layouts.post');
    }
    public function blogs()
    {
        return view('layouts.blogs');
    }
    public function singleblog()
    {
        return view('layouts.blog');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Blog $blog,Request $request)
    {
        //dd($request->all());
        // dd($request->file('image'));
        // dd($file);
        // echo "<pre>";
        // print_r($request);
        $request->validate([
            'user_id'=>'required',
             'user_name'=>'required',
             'blog_title'=>'required',
             'tags'=>'required',
             'category'=>'required',
            'blog_content'=>'required',
            'image'=>['required','mimes:jpeg,jpg','min:1']
         ]);
         //dd($request->all());
         $filename=time()."-blog.".$request->file('image')->getClientOriginalExtension();
         $request->file('image')->storeAs('public/blog-images',$filename);
         $file="blog-images/".$filename;
         
         $blog->user_id=$request->user_id;
         $blog->user_name=$request->user_name;
         $blog->blog_title=$request->blog_title;
         $blog->blog_content=$request->blog_content;
         $blog->tags=$request->tags;
         $blog->image=$file;
         $blog->category=$request->category;
         $blog->save();
         return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blogdata=$blog->get();
        echo $blogdata;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
