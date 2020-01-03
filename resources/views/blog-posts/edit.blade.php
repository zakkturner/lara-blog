@extends('layout')

@section('content')

<h1>Edit Blog Post</h1>

<div class="blog-form">
    <form method="POST" action="/blog-posts/{{$blog_post->id}}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input class="form-control" type="text" name="title" value="{{ $blog_post->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1" value="{{ old('title')}}">
                <option >Javascript</option>
                <option>PHP</option>
                <option>General Webdev</option>
                <option>Front End Framework</option>
                <option>Back End Framework</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter Blog </label>
            <textarea 
            name="post" 
            class="form-control" 
            id="post" 
            rows="5" 
              > {{ $blog_post->post}}</textarea>
        </div>
        <div class="form-group">
            <label for="blog-img">Upload Image</label>
            <input name="file" id="file" type="file" value="{{$blog_post->image}}">
        </div>
        <button type="submit" class="btn btn-success">Submit Edit</button>
        
    </form>
    <form method="POST" action="/blog-posts/{{ $blog_post->id}}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    <br />
    <a href="/blog-posts">Cancel</a>


   

</div>



@include('errors')

@endsection
