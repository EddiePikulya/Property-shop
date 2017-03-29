@extends('layouts.master')
@section('content')
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / Blogs</span>
            <h2>Blogs</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer blog">
            <div class="row">
                <div class="col-lg-8 col-sm-12 ">
                    <a href="/blog/create"  class="more">Create a new post</a><hr>
                    @foreach($posts as $post)
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 "><a href="/blog/{{$post->id}}"  class="thumbnail"><img src="{{$post->photo}}"  alt="blog title"></a></div>
                        <div class="col-lg-8 col-sm-8 ">
                            <h3><a href="/blog/{{$post->id}}" >{{$post->title}}</a></h3>
                            <div class="info">Posted on: {{$post->created_at->toFormattedDateString()}}</div>
                            <p>{{$post->body}}</p>
                            <a href="/blog/{{$post->id}}"  class="more">Read</a>&nbsp;
                            @permission('crud-blog')
                            <a href="/blog/{{$post->id}}/edit"  class="more">Edit</a>&nbsp;
                            <a href="/blog/{{$post->id}}/delete"  class="more" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            @endpermission
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection