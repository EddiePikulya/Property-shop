@extends('layouts.master')
@section('content')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / Register</span>
            <h2>Register</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer">
            <div class="row register">
                <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

                    <form action="/register" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <input type="password" class="form-control" placeholder="Confirm Password" required name="password_confirmation">
                        <button type="submit" class="btn btn-success" name="submit">Register</button>
                        @include('layouts.errors')
                    </form>



                </div>

            </div>
        </div>
    </div>


@endsection