@extends('layouts.master')

@section('content')
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / Buy</span>
            <h2>Buy</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

            <div class="row">
                <div class="col-lg-3 col-sm-4 hidden-xs">

                    <div class="hot-properties hidden-xs">
                        <h4>Hot Properties</h4>
                        @foreach($hot as $hot)
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="{{$hot->main_photo}}" class="img-responsive img-circle" alt="properties"/></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="/{{$hot->id}}">{{$hot->name}}</a></h5>
                                <p class="price">${{$hot->price}}</p> </div>
                        </div>
                        @endforeach

                    </div>



                    <div class="advertisement">
                        <h4>Advertisements</h4>
                    <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

                    </div>

                </div>

                <div class="col-lg-9 col-sm-8 ">

                    <h2>{{$property->name}}</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="property-images">
                                <!-- Slider Starts -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators hidden-xs">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <!-- Item 1 -->
                                        <div class="item active">
                                            <img src="{{$property->main_photo}}" class="properties" alt="properties" />
                                        </div>
                                        <!-- #Item 1 -->

                                        @for($i=0;$i<$property->photos->count();$i++)
                                        <div class="item">
                                            <img src="{{$property->photos[$i]['path']}}" class="properties" alt="properties" />

                                        </div>
                                        @endfor
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <!-- #Slider Ends -->

                            </div>




                            <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                                <p>{{$property->info}}</p>

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12  col-sm-6">
                                <div class="property-info">
                                    <p class="price">$ {{$property->price}}</p>
                                    <p class="area"><span class="glyphicon glyphicon-map-marker"></span> {{$property->address}}</p>

                                    <div class="profile">
                                        <span class="glyphicon glyphicon-user"></span> Agent Details
                                        <p>{{$property->agent_name}}<br>{{$property->agent_phone}}</p>
                                    </div>
                                </div>

                                <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
                                <div class="listing-detail">
                                    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">{{$property->bed_rooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">{{$property->living_rooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">{{$property->parking}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">{{$property->kitchens}}</span> </div>

                            </div>
                            <div class="col-lg-12 col-sm-6 ">
                                <div class="enquiry">
                                    <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                                    <form role="form">
                                        <input type="text" class="form-control" placeholder="Full Name"/>
                                        <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                                        <input type="text" class="form-control" placeholder="your number"/>
                                        <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
                                        <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
