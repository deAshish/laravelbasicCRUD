<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
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
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
       // $post->image = $request->input('image');
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();  //getting image extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/highlights/',$filename);
            $post->image = $filename;

        }
        else{
            return $request;
            $post->image = '';
        }
        $post->content = $request->input('content');
        $post->save();

        return view('post')->with('post',$post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posts = Post::all();
        return view('postview')->with('posts',$posts);
    }

    public function show1()
    {
        $posts = Post::all();
        return view('postform')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('postupdateform')->with('posts', $posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        
        $posts->title = $request->input('title');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/post/',$filename);
            $post->image=$filename;
        }

        $posts->content = $request->input('content');
        $posts->save();

        return redirect('/postpage')->with('posts', $posts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}