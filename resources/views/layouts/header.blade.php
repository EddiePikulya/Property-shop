<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/" >Home</a></li>
                    <li><a href="/about/" >About</a></li>
                    <li><a href="/agents/" >Agents</a></li>
                    <li><a href="/contact/" >Contact</a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a href="#" >{{auth()->user()->name}}</a></li>
                    <li><a href="/logout" >Log Out</a></li>
                    @role('admin')
                    <li><a href="/property/manage" >Manage properties</a></li>
                    <li><a href="/blog-managing" >Manage blog</a></li>
                    @endrole
                    @role('blogger')
                    <li><a href="/property/manage" >Manage properties</a></li>
                    @endrole
                    @else
                    <li><a href="/blog/" >Blog</a></li>
                    @endif
                </ul>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="/" ><img src="{{URL::asset('images/logo.png')}}"  alt="Realestate"></a>
        <ul class="pull-right">
            <li><a href="/buysalerent/" >Buy</a></li>
            <li><a href="/buysalerent/" >Sale</a></li>
            <li><a href="/buysalerent/" >Rent</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->
</div>