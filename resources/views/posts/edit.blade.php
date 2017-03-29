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
                <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                    <form action="/blog/{{$post->id}}/edit/submit" method="post">
                        {{ csrf_field() }}
                        <label for="title">Title: </label>
                        <input type="text" class="form-control" placeholder="{{$post->title}}" name="title" required>
                        <label for="image">Image: </label>
                        <input type="file" class="form-control" name="image">
                        <label for="body">Body: </label>
                        <textarea class="form-control" name="body">{{$post->body}}</textarea>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        @include('layouts.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection