@extends('layout')

@section('content')

<div id="showPost">
    <div class="post-content d-flex flex-column">
        <div class="img-container p-2 bd-highlight">
            <img src="/images/{{$blog_post->image}}" alt="image">
        </div>
        <div class="blog-content  bd-highlight ">
            <h2>{{$blog_post->title}}</h2>

            <p>{{$blog_post->post}}
                <br />
                <a href="/blog-posts/{{$blog_post->id}}/edit" class="btn btn-warning">Edit</a>
            </p>
        </div>
    </div>





    @endsection
