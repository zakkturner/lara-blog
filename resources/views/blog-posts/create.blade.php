@extends('layout')

@section('content')
<h1>Create New Blog Post</h1>

<div class="blog-form">
    <form method="POST" action="/blog-posts" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input  class="form-control" type="text" name="title"  value="{{ old('title')}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1" value="{{ old('title')}}">
                <option>Javascript</option>
                <option>PHP</option>
                <option>General Webdev</option>
                <option>Front End Framework</option>
                <option>Back End Framework</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="post" class="form-control" id="blog-post" rows="5" value="{{ old('title')}}"></textarea>
        </div>
        <div class="form-group">
            <label for="blog-img">Upload Image</label>
            <input  name="file" id="file"  type="file">
        </div>
        <button type="submit" class="btn btn-success">Submit Post</button>

        
        
    </form>
</div>



@include('errors')

@endsection
