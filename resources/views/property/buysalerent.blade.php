@extends('layouts.master')
@section('content')
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/" >Home</a> / Buy, Sale & Rent</span>
            <h2>Buy, Sale & Rent</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

            <div class="row">
                <div class="col-lg-3 col-sm-4 ">
                <form method="post" action="/buysalerent">
                    {{ csrf_field() }}
                    <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                        <input type="text" name="text" id="text" class="form-control" placeholder="Search of Properties">
                        <div class="row">
                            <div class="col-lg-7">
                                <select class="form-control" name="price" id="price">
                                    <option>$0 - $200,000</option>
                                    <option>$200,000 - $400,000</option>
                                    <option>$400,000 - above</option>
                                </select>
                            </div>
                            <div class="col-lg-7">
                                <select class="form-control" name="property" id="property">
                                    <option>Apartment</option>
                                    <option>Building</option>
                                    <option>Office Space</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Find Now</button>


                    </div>
                </form>



                    <div class="hot-properties hidden-xs">
                        <h4>Hot Properties</h4>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"  class="img-responsive img-circle" alt="properties"></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"  class="img-responsive img-circle" alt="properties"></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"  class="img-responsive img-circle" alt="properties"></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"  class="img-responsive img-circle" alt="properties"></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>

                    </div>


                </div>

                <div class="col-lg-9 col-sm-8">
                    <div class="sortby clearfix">
                        <div class="pull-left result">Showing: {{$properties->count()}} of {{\App\Property::all()->count()}} </div>
                        <div class="pull-right">
                            <select class="form-control">
                                <option>Sort by</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                            </select></div>

                    </div>
                    <div class="row">

                        <!-- properties -->
                        @foreach($properties as $property)
                        <div class="col-lg-4 col-sm-6">
                            <div class="properties">
                                <div class="image-holder"><img src="{{ $property->main_photo }}"  class="img-responsive" alt="properties">
                                </div>
                                <h4><a href="/{{$property->id}}" >{{$property->name}}</a></h4>
                                <p class="price">Price: ${{$property->price}}</p>
                                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">{{$property->bed_rooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">{{$property->living_rooms}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">{{$property->parking}}</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">{{$property->kitchens}}</span> </div>
                                <a class="btn btn-primary" href="/{{$property->id}}" >View Details</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="center">
                            {{ $properties->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection