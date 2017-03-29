<!DOCTYPE html>
<html lang="en">
<head>
    <title>Realestate Bootstrap Theme </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"  />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/js/jquery-1.9.1.min.js" ></script>
    <script src="assets/bootstrap/js/bootstrap.js" ></script>
    <script src="assets/script.js" ></script>



    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css" >
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css" >
    <script src="assets/owl-carousel/owl.carousel.js" ></script>
    <!-- Owl stylesheet -->


    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css"  />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css"  />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js" ></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js" ></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js" ></script>
    <!-- slitslider -->

    <script src="assets/js/google_analytics_auto.js" ></script></head>

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



