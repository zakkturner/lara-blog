<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_posts = Post::all();
        return view('blog-posts.home', compact('blog_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('blog-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = $image->getClientOriginalName();
            $size = $image->getClientSize();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $post = new Post();
            $post->title = request('title');
            $post->{'category'} = request('category');
            $post->{'post'} = request('post');
            $post->image = $name;
            $post->save();
            return redirect('/blog-posts');
        }
            
            
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog_post)
    {
    //    $post = Post::findOrFail($id);
       
        return view('blog-posts.show',compact('blog_post'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog_post)
    {
        
        return view('blog-posts.edit', compact('blog_post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $blog_post)
    {
        $blog_post->update(request(['title','category', 'post', 'image']));


        return redirect('/blog-posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog_post)
    {
        $blog_post->delete();
        return redirect('/blog-posts');
    }
}
