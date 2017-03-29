<!DOCTYPE html>
<html lang="en">
<head>
    <title>Realestate Bootstrap Theme </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}

    {{--<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"  />--}}
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.css')}}"  />
    {{--<link rel="stylesheet" href="assets/style.css" />--}}
    <link rel="stylesheet" href="{{URL::asset('assets/style.css')}}" />
    {{--<script src="assets/js/jquery-1.9.1.min.js" ></script>--}}
    <script src="{{URL::asset('assets/js/jquery-1.9.1.min.js')}}" ></script>
    {{--<script src="assets/bootstrap/js/bootstrap.js" ></script>--}}
    <script src="{{URL::asset('assets/bootstrap/js/bootstrap.js')}}" ></script>
    {{--<script src="assets/script.js" ></script>--}}
    <script src="{{URL::asset('assets/script.js')}}" ></script>




    <!-- Owl stylesheet -->
    {{--<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css" >--}}
    <link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.carousel.css')}}" >
    {{--<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css" >--}}
    <link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.theme.css')}}" >
    {{--<script src="assets/owl-carousel/owl.carousel.js" ></script>--}}
    <script src="{{URL::asset('assets/owl-carousel/owl.carousel.js')}}" ></script>
    <!-- Owl stylesheet -->


    <!-- slitslider -->
    {{--<link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css"  />--}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/slitslider/css/style.css')}}"  />
    {{--<link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css"  />--}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/slitslider/css/custom.css')}}"  />
    {{--<script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js" ></script>--}}
    <script type="text/javascript" src="{{URL::asset('assets/slitslider/js/modernizr.custom.79639.js')}}" ></script>
    {{--<script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js" ></script>--}}
    <script type="text/javascript" src="{{URL::asset('assets/slitslider/js/jquery.ba-cond.min.js')}}" ></script>
    {{--<script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js" ></script>--}}
    <script type="text/javascript" src="{{URL::asset('assets/slitslider/js/jquery.slitslider.js')}}" ></script>
    <!-- slitslider -->

    {{--<script src="assets/js/google_analytics_auto.js" ></script></head>--}}
    <script src="{{URL::asset('assets/js/google_analytics_auto.js')}}" ></script></head>

<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')




<!-- Modal -->
<div id="loginpop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 login">
                    <h4>Login</h4>
                    <form action="/login" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <hr>
                        @include('layouts.errors')
                    </form>
                </div>
                <a class="col-sm-6">
                    <h4>New User Sign Up</h4>
                    <p>Join today and get updated with all the properties deal happening around.</p>
                    <a href="/register"><button type="submit" class="btn btn-info">Join Now</button></a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.modal -->



</body>
</html>



