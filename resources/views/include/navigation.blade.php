<!-- main header -->
<header class="main-header header-one white-menu menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img src="{{asset($Logo ?? 'assets/images/ais_tm_logo.png')}}" alt="Logo"
                                title="Logo"></a></div>
                </div>

                <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <div class="mobile-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{asset($Logo ?? 'assets/images/logo.png')}}" alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('aboutUs') }}">About</a></li>
                                {{-- <li class="dropdown"><a href="{{ route('tourpage') }}">Tours</a>
                                    <ul>
                                        <li><a href="{{ route('tourpage') }}">Tour</a></li>
                                        <li><a href="{{ route('tourDetailpage') }}">Tour Details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('tourpage') }}">Tours</a>
                                    <ul>
                                        <li><a href="{{ route('tourpage') }}">Tour</a></li>
                                        <li><a href="">Tour Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('destinationpage') }}">Destinations</a>
                                    {{-- <ul>
                                         <li><a href="{{ route('destinationpage') }}">Destination</a></li>
                                        <li><a href="{{ route('destinationDetailpage') }}">Destination Details</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="{{ route('servicePages') }}">Services</a></li>
                                <li><a href="{{ route('galleryPages') }}">Gallery</a></li>
                                {{-- <li class="dropdown"><a href="{{ route('blogpage') }}">Blog</a>
                                    <ul>
                                        <li><a href="{{ route('blogDetailpage') }}">Blog Details</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route(name: 'contactUs') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Nav Search -->
                <!-- <div class="nav-search">
                    <button class="far fa-search"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required="">
                        <button type="submit" class="searchbutton far fa-search"></button>
                    </form>
                </div> -->

                <!-- Menu Button -->
                <div class="menu-btns py-10">
                    <a href="{{ route(name: 'contactUs') }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Book Now">Book Now</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                    <!-- menu sidbar -->
                    <!-- <div class="menu-sidebar">
                        <button class="bg-transparent">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> -->
                    <div class="navbar-collapse collapse clearfix">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
{{-- <ul class="navigation clearfix">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
    <li class="dropdown"> <a href="{{ route('tourpage') }}">Tour</a>
        <ul>
            <li><a href="{{ route('tourpage') }}">Tour Detail</a></li>
        </ul>
    </li>
    <li class="dropdown"><a href="{{ route('destinationpage') }}">Destinations</a>
        <ul>
            <li><a href="{{ route('destinationDetailpage') }}">Destination Details</a></li>
        </ul>
    </li>
    <li><a href="{{ route('servicePages') }}">Services</a>

    <li><a href="{{ route('galleryPages') }}">Gallery</a>
    <li class="dropdown"><a href="{{ route('blogpage') }}">Blog</a>
        <ul>
            <li><a href="{{ route('blogDetailpage') }}">Blog Details</a></li>
        </ul>
    </li>
    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>

</ul> --}}
