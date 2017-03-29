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
                <div class="col-lg-8">

                    <!-- blog detail -->
                    <h2>{{$post->title}}</h2>
                    <div class="info">Posted on: {{$post->created_at->toFormattedDateString()}}</div>
                    <img src="{{URL::asset($post->photo)}}"  class="thumbnail img-responsive"  alt="blog title">
                    <p>{{$post->body}}</p>
                    <!-- blog detail -->
                </div>
            </div>
        </div>
    </div>
@endsection