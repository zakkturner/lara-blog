@extends('layout')


@section('content')

<section id="Home">
    <h1>Zak's Web Dev Journey</h1>
    <p><em>Documenting my Web Development Learning</em></p>
    <hr />
    <div class="row">
        <div class="col-sm-8">
            <div class="blog-box">
                @foreach ($blog_posts as $blog_post)
                <a href="/blog-posts/{{$blog_post->id}}">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/{{$blog_post->image}}" alt="img" class="card-img-top">
                        <div class="card-body">


                            <h3>{{$blog_post->title}}</h4>
                                <h4>{{$blog_post->category}}</h5>
                                    <h5><?=date_format($blog_post->created_at,"m-d-Y")?></h5>





                        </div>



                    </div>
                </a>

                @endforeach

            </div>
        </div>
        <div class="col-sm-4">
            <div class="side-bar">
                <div class="recent-post">
                    <h4>Recent Post</h4>
                    <hr />
                    @foreach ($blog_posts as $blog_post)
                    <a href="/blog-posts/{{$blog_post->id}}">
                        <li>{{$blog_post->title}}</li>
                    </a>

                    @endforeach
                </div>
                <div class="categories">
                    <h4>Categories</h4>
                    <hr/>
                    @foreach ($blog_posts as $blog_post)
                    <a href="/blog-posts/{{$blog_post->id}}">
                        <li>{{$blog_post->category}}</li>
                    </a>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>




</section>



@endsection
