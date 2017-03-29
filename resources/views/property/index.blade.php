@extends('layouts.master')
@section('content')
<div class="">


    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1"></div>
                    <h2><a href="{{\App\Property::find(1)->id}}">{{\App\Property::find(1)->name}}</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{\App\Property::find(1)->address}}</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ {{\App\Property::find(1)->price}}</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                    <h2><a href="{{\App\Property::find(2)->id}}">{{\App\Property::find(2)->name}}</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{\App\Property::find(2)->address}}</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ {{\App\Property::find(2)->price}}</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                    <h2><a href="{{\App\Property::find(3)->id}}">{{\App\Property::find(3)->name}}</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{\App\Property::find(3)->address}}</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ {{\App\Property::find(3)->price}}</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-4"></div>
                    <h2><a href="{{\App\Property::find(4)->id}}">{{\App\Property::find(4)->name}}</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{\App\Property::find(4)->address}}</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ {{\App\Property::find(4)->price}}</cite>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-5"></div>
                    <h2><a href="{{\App\Property::find(5)->id}}">{{\App\Property::find(5)->name}}</a></h2>
                    <blockquote>
                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{\App\Property::find(5)->address}}</p>
                        <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
                        <cite>$ {{\App\Property::find(4)->price}}</cite>
                    </blockquote>
                </div>
            </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div><!-- /slider-wrapper -->
</div>
<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Buy, Sale & Rent</h3>
        <div class="searchbar">
            <div class="row">
                <form method="POST" action="/buysalerent">
                    {{ csrf_field() }}
                <div class="col-lg-6 col-sm-6">
                    <input type="text" name="text" id="text" class="form-control" placeholder="Search of Properties">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <select class="form-control" name="price" id="price">
                                <option>$0 - $200,000</option>
                                <option>$200,000 - $400,000</option>
                                <option>$400,000 - above</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <select class="form-control" name="property" id="property">
                                <option>Apartment</option>
                                <option>Building</option>
                                <option>Office Space</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <button type="submit" class="btn btn-success">Find Now</button>
                        </div>
                    </div>
                </div>
                </form>
                @if(!auth()->check())
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                    <p>Join now and get updated with all the properties deals.</p>
                    <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="/buysalerent"  class="pull-right viewall">View All Listing</a>
        <h2>Featured Properties</h2>
        <div id="owl-example" class="owl-carousel">
            @foreach($properties as $property)
            <div class="properties">
                <div class="image-holder"><img src="{{ $property->main_photo }}"  class="img-responsive" alt="properties"/>
                </div>
                <h4><a href="/{{$property->id}}" >{{ $property->name }}</a></h4>
                <p class="price">Price: ${{ $property->price }}</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">{{ $property->bed_rooms }}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">{{ $property->living_rooms }}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">{{$property->parking}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">{{$property->kitchens}}</span> </div>
                <a class="btn btn-primary" href="/{{$property->id}}" >View Details</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>About Us</h3>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="/about/" >Learn More</a></p>

            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
                <h3>Recommended Properties</h3>
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-4"><img src="{{\App\Property::first()->main_photo}}"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="/{{\App\Property::first()->id}}" >{{\App\Property::first()->name}}</a></h5>
                                    <p class="price">${{\App\Property::first()->price}}</p>
                                    <a href="/{{\App\Property::first()->id}}"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        @for($i=2;$i<=4;$i++)
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="{{\App\Property::find($i)->main_photo}}"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="{{\App\Property::find($i)->id}}" >{{\App\Property::find($i)->name}}</a></h5>
                                    <p class="price">${{\App\Property::find($i)->price}}</p>
                                    <a href="{{\App\Property::find($i)->id}}"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection