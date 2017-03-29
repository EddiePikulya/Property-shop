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
                    {{--<form action="/blog/create" method="post">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<input type="text" class="form-control" placeholder="Your title:" name="title" id="title" required>--}}
                        {{--<input type="file" class="form-control" name="photo">--}}
                        {{--<textarea class="form-control" placeholder="Body:" name="body" required></textarea>--}}
                        {{--<button type="submit" class="btn btn-success" name="submit">Submit</button>--}}
                        {{--@include('layouts.errors')--}}
                    {{--</form>--}}

                    {!! Form::open(
                        array(
                        'url' => '/blog/create',
                        'files' => true)
                    ) !!}
                    <div class="form-group">
                        {!! Form::label('Title') !!}
                        {!! Form::text('title', null, array('placeholder'=>'Your title:', 'class' => "form-control")) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Body') !!}
                        {!! Form::text('body', null, array('placeholder'=>'Your text:', 'class' => "form-control")) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Photo') !!}
                        {!! Form::file('photo', null) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Post!', array('class' => 'btn btn-success')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection