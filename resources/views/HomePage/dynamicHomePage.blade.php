@extends('layouts.webSite')
@section('content')
    <!-- about-section -->
    <!-- Hero Area Start -->
    <section class="hero-area bgc-black pt-130 rpt-120 rel z-2">
        <!-- <img src="./assets/images/aisbanner1.jpg" alt="banner-image"> -->
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                @if (isset($sliders) && count($sliders) > 0)
                    @foreach ($sliders as $slide)
                        <div class="swiper-slide swiper-slide-next">
                            <img class="img-fluid" width="" height="" alt="Image"
                                src="{{ asset($slide->image) }}" />
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide swiper-slide-next">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/aisbanner1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/aisbanner2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/aisbanner3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/aisbanner4.jpg" />
                    </div>
                @endif
            </div>
        </div>
        <div class="container-fluid">
            <!-- <h1 class="hero-title" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">tour & -->
            <!-- Travel</h1> -->
            <!-- <div class="main-hero-image bgs-cover"> -->

            <!-- </div> -->
        </div>
        <div class="container container-1400">
            {{-- <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                    <span class="title">Destinations</span>
                    <select name="city" id="city">
                        <option value="value1">City or Region</option>
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination }}">{{ $destination }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-flag"></i></div>
                    <span class="title">All Categories</span>
                    <select name="activity" id="activity">
                        <option value="value1">Travel Category</option>
                        @foreach ($travelCategories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-item clearfix" style="position: relative;">
                    <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                    <span class="title" id="calendarTrigger" style="cursor: pointer;">Departure Date</span>
                    <div id="calendar"
                        style="display: none; position: absolute; top: 30px; left: 0; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                    </div>
                    <p id="selectedDate" style="margin-top: 10px; font-size: 14px; color: #555;"></p>
                </div>
                <div class="search-button">
                    <button class="theme-btn">
                        <span data-hover="Search">Search</span>
                    </button>
                </div>
            </div> --}}
            {{-- <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                <form action="{{ route('filterPackages') }}" method="POST" style="display: contents;">
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                        <span class="title">Destinations</span>
                        <select name="city" id="city">
                            <option value="">City or Region</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination }}">{{ $destination }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-flag"></i></div>
                        <span class="title">All Categories</span>
                        <select name="activity" id="activity">
                            <option value="">Travel Category</option>
                            @foreach ($travelCategories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-item clearfix" style="position: relative;">
                        <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                        <span class="title" id="calendarTrigger" style="cursor: pointer;">Departure Date</span>
                        <input type="date" name="departure_date" id="departure_date" 
                            style="display: none; position: absolute; top: 30px; left: 0; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                        <p id="selectedDate" style="margin-top: 10px; font-size: 14px; color: #555;"></p>
                    </div>
                    <div class="search-button">
                        <button type="submit" class="theme-btn">
                            <span data-hover="Search">Search</span>
                        </button>
                    </div>
                </form>
            </div>             --}}
            <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                <form action="{{ route('filterPackages') }}" method="POST" style="display: contents;">
                    @csrf
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                        <span class="title">Destinations</span>
                        <select name="city" id="city">
                            <option value="">City or Region</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination }}" {{ request('city') == $destination ? 'selected' : '' }}>
                                    {{ $destination }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-flag"></i></div>
                        <span class="title">All Categories</span>
                        <select name="activity" id="activity">
                            <option value="">Travel Category</option>
                            @foreach ($travelCategories as $category)
                                <option value="{{ $category }}" {{ request('activity') == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-item clearfix" style="position: relative;">
                        <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                        <span class="title" id="calendarTrigger" style="cursor: pointer;">Departure Date</span>
                        <input type="date" name="departure_date" id="departure_date" 
                            style="display: none; position: absolute; top: 30px; left: 0; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                        <p id="selectedDate" style="margin-top: 10px; font-size: 14px; color: #555;"></p>
                    </div>
                    <div class="search-button">
                        <button type="submit" class="theme-btn">
                            <span data-hover="Search">Search</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->

    <!-- About Us Area start -->
    <section class="about-us-area py-100 rpb-90 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="text-center mb-4">About Us </h2>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-25">
                            <h2>{!! $home_aboutus_content_heading ?? 'Travel with Confidence Top Reasons to Choose AIS Holidays' !!}</h2>
                        </div>
                        <p>{!! $home_aboutus_content_subheading ?? 'We go above and beyond to make your travel dreams reality hidden gems and must-see attractions' !!}
                        </p>
                        <div class="divider counter-text-wrap mt-45 mb-55"><span>We have <span><span class="count-text plus"
                                        data-speed="3000" data-stop="{!! $years_of_experience ?? '15' !!}">0</span> Years</span> of
                                experience</span></div>
                        <div class="row">
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="{!! $home_aboutus_content_popular_destination_no ?? '3' !!}">0</span>
                                    <span class="counter-title">Popular Destination</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text m-plus" data-speed="3000" data-stop="{!! $home_aboutus_content_satisfied_clients_no ?? '9' !!}">0</span>
                                    <span class="counter-title">Satisfied Clients</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('destinationpage') }}" class="theme-btn mt-10 style-two">
                            <span data-hover="Explore Destinations">Explore Destinations</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="about-us-image">
                        <div class="shape"><img src="assets/images/about/shape1.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape2.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape3.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape4.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape5.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape6.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape7.png" alt="Shape"></div>
                        <img src="{{ asset($home_aboutus_content_image ?? './assets/images/confidence.png') }}" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area end -->

    <!-- Destinations Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <!-- <h2>Discover the World's Treasures with Ais Holidays</h2> -->
                        <h2 class="popular-destination" data-aos="fade-up"> Popular Destinations</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="swiper packages mt-4">
                    <div class="swiper-wrapper">
                        @if (isset($homedestinations) && count($homedestinations) > 0)
                        @foreach ($homedestinations as $item)
                                <div class="col-xxl-3 col-xl-4 col-md-6 swiper-slide">
                                    <a href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}">
                                        <div class="destination-item" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-offset="50">
                                            <div class="image">
                                                @php
                                        // Ensure package_image is a valid JSON string before decoding
                                        $images = is_string($item->destination_image)
                                            ? json_decode($item->destination_image, true)
                                            : $item->destination_image;
        
                                        // Check if images is a valid array and get the first image
                                        $displayImage = is_array($images) && !empty($images) ? $images[0] : null;
                                    @endphp
        
                                    @if ($displayImage)
                                        <img src="{{ asset('storage/' . $displayImage) }}" alt="{{ $item->destination_name }}"
                                            class="hotel-image" style="margin-right: 10px;">
                                    @else
                                        <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image" class="hotel-image">
                                    @endif
                                            </div>
                                            <div class="content">
                                                {{-- <span class="location">
                                                    {{ $item->package_type }}
                                                </span> --}}
                                                <h5 class="card-heading">
                                                    {{ $item->destination_name }}
                                                </h5>
                                                {{-- <span class="time">
                                                    {!! $item->package_duration_days !!} Days / {!! $item->package_duration_nights !!} Nights
                                                </span> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="destination-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="./assets/images/destination1.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Tours, France</span>
                                    <h5><a href="{{ route('destinationpage') }}">Brown Concrete Building Basilica St
                                            Martin</a>
                                    </h5>
                                    <span class="time">3 days 2 nights</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="destination-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <img src="./assets/images/destination2.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Wildest, Italy</span>
                                    <h5><a href="{{ route('destinationpage') }}">Blue lake water view taken travel with
                                            daytime</a>
                                    </h5>
                                    <span class="time">3 days 2 night</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="destination-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <img src="./assets/images/destination4.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <h5><a href="{{ route('destinationpage') }}">Woman standing near Colosseum, Rome</a></h5>
                                    <span class="time">3 days 2 nights</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="destination-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <img src="./assets/images/destination3.jpg" alt="Destination">
                                </div>
                                <div class="content">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <h5><a href="{{ route('destinationpage') }}">Woman standing near Colosseum, Rome</a></h5>
                                    <span class="time">3 days 2 nights</span>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="view-more-buttons" style="display:block; text-align:center;">
                <a class="service-view-buttons" style="color:white;" href="{{ route('destinationpage') }}"><button
                        type="submit" class="theme-btn style-two text-center col-4 ">
                        <span data-hover="Send Comments">Explore More</span>
                        <i class="fal fa-arrow-right"></i></a>
                </button>
            </div>
        </div>
    </section>
    <!-- Destinations Area end -->

    <!-- Popular Destinations Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <!-- <h2>Discover the World's Treasures with Ais Holidays</h2> -->
                        <h2 class="popular-destination" data-aos="fade-up">Explore Popular Packages</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="swiper packages mt-4">
                    <div class="swiper-wrapper">
                        @if (isset($packages) && count($packages) > 0)
                            @foreach ($packages as $item)
                                @php
                                    // Ensure package_image is a valid JSON string before decoding
                                    $images = is_string($item->package_image)
                                        ? json_decode($item->package_image, true)
                                        : $item->package_image;

                                    // Check if images is a valid array and get the first image
                                    $displayImage = is_array($images) && !empty($images) ? $images[0] : null;
                                @endphp
                                <div class="col-xxl-3 col-xl-4 col-md-6 swiper-slide">
                                    <a href="{{ route('tourDetailpage', ['slug' => $item->slug]) }}">
                                        <div class="destination-item" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-offset="50">
                                            <div class="image">
                                                @if ($displayImage)
                                                    {{-- <figure class="images"> --}}
                                                    <img src="{{ asset('storage/' . $displayImage) }}"
                                                        alt="{{ $item->package_name }}" class="gallery-image">
                                                    {{-- </figure> --}}
                                                @else
                                                    {{-- <figure class="images"> --}}
                                                    <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image">
                                                    {{-- </figure> --}}
                                                @endif

                                                <div class="ratting">{{ $item->package_type }}</div>
                                            </div>
                                            <div class="content tourpackage">
                                                <span class="location">
                                                    <i class="fal fa-map-marker-alt"></i> {{ $item->package_country }}
                                                </span>
                                                <h5 class="card-heading">
                                                    {!! $item->package_name !!}
                                                </h5>
                                                <span class="time">
                                                    {!! $item->package_duration_days !!} Days / {!! $item->package_duration_nights !!} Nights
                                                </span>
                                            </div>
                                            <div class="destination-footer price">
                                                <span class="offer-price">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {!! IND_money_format($item->package_offer_price) !!}
                                                </span>
                                                <span class="sale-price">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {!! IND_money_format($item->package_price) !!}
                                                </span>
                                                <span class="offer-amount">
                                                    Save <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {{ IND_money_format($item->package_price - $item->package_offer_price) }}
                                                </span>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                        <p>NO Data Available</p>
                    @endif
                    </div>
                </div>
            </div>
            <div class="view-more-buttons" style="display:block; text-align:center;">
                <a class="service-view-buttons" style="color:white;" href="{{ route('tourpage') }}"><button
                        type="submit" class="theme-btn style-two text-center col-4 ">
                        <span data-hover="Send Comments">Explore More</span>
                        <i class="fal fa-arrow-right"></i></a>
                </button>
            </div>
        </div>
    </section>
    <!-- Popular Destinations Area end -->
    <!-- Features Area start -->
    <section class="features-area pt-100 pb-45 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="service text-center">Other Services</h2>
                <div class="col-xl-6">
                    <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-60">
                            <h2>{!! $home_other_services_content_heading ?? 'The Ultimate Travel Experience Features That Set Our Agency Apart' !!}</h2>
                        </div>
                        <div class="features-customer-box">
                            <div class="image">
                                <img src="{{ asset($home_other_services_image ?? './assets/images/features-box.jpg') }}" alt="Features">
                            </div>
                            <div class="content">
                                <h6>{!! $home_other_services_happy_customer_no ?? '850K+ Happy Customer' !!}</h6>
                                <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                            data-speed="3000" data-stop="{!! $years_of_experience ?? '15' !!}">0</span> Years</span></div>
                                <p>{!! $home_other_services_content_subheading ?? 'We pride ourselves offering personalized itineraries' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row pb-25">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="icon"><i class="fa-solid fa-umbrella-beach fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('tourpage') }}">Holidays</a></h5>
                                    <p>{!! $home_other_services_holidays_content ?? 'We are Casting Moments & Creating Memories lifelong Your ideal leaves are staying for
                                        you.' !!}</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="fa-regular fa-calendar-check fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('tourpage') }}">Event</a></h5>
                                    <p>{!! $home_other_services_event_content ?? 'Moments, Perfecting Every Detail Events Which is Beyond Imagination.' !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item mt-20">
                                <div class="icon"><i class="fa-solid fa-hand-holding-hand fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('tourpage') }}">Weddings</a></h5>
                                    <p>{!! $home_other_services_weddings_content ?? 'Love in Every Detail Creating Your Perfect Day, Your Dream marriage, Our violent
                                        Hand.' !!}</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="fa-solid fa-headset fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('tourpage') }}">Friendly Support</a></h5>
                                    <p>{!! $home_other_services_friendly_support_content ?? 'Trip Support Beyond Boundaries Leading Your peregrination, trip Support Beyond
                                        Boundaries.' !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="view-more-button">
                            <a class="service-view-buttons" style="color:white;"
                                href="{{ route('servicePages') }}"><button type="submit"
                                    class="theme-btn style-two text-center col-4 ">
                                    <span data-hover="Send Comments">View More</span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="client-logo-area mb-100">
        <div class="container">
            <div class="client-logo-wrap pt-60 pb-55">
                <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <h4 class="style" style="color:#022f5d;">Who Believe in Us</h4>
                </div>
                <div class="client-logo-active">
                    @if(isset($home_recognitions) && count($home_recognitions)>0)
                        @foreach ($home_recognitions as $item)
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset($item->image) }}" alt="Client Logo"></a>
                        </div>
                        @endforeach
                    @else
                    <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="assets/images/mytrip.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="assets/images/goibibo.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="assets/images/tripadv.png" alt="Client Logo"></a>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Area start -->
    <section class="blog-area py-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Read Latest News & Blog</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if (isset($blogs) && count($blogs) > 0)
                    @foreach ($blogs as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                </div>
                                <div class="content">
                                    <a class="category">{{ $item->blog_category }}</a>
                                    <h5><a
                                            href="{{ route('blogDetailpage', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                    </h5>
                                </div>

                                <a href="{{ route('blogDetailpage', ['slug' => $item->slug]) }}" class="theme-btn">
                                    <span data-hover="Book Now">Read More</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a href="{{ route('blogpage') }}">Ultimate Guide to Planning Your Dream Vacation
                                        with Ravelo
                                        Travel Agency</a></h5>
                                <!-- <ul class="blog-meta">
                                                    <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                                                    <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                                                </ul> -->
                            </div>

                            <a href="{{ route('blogpage') }}" class="theme-btn">
                                <span data-hover="Book Now">Read More</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-3.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a>Unforgettable Adventures Travel Agency Bucket List
                                        Experiences</a></h5>
                                <!-- <ul class="blog-meta">
                                                    <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                                                    <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                                                </ul> -->
                            </div>

                            <a href="{{ route('blogpage') }}" class="theme-btn">
                                <span data-hover="Book Now">Read More</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-3.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <a href="" class="category">Travel</a>
                                <h5><a>Exploring Culture and way Cuisine Travel Agency's they Best
                                        Foodie Destinations</a></h5>
                                <!-- <ul class="blog-meta">
                                                    <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                                                    <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                                                </ul> -->
                            </div>

                            <a href="{{ route('blogpage') }}" class="theme-btn">
                                <span data-hover="Book Now">Read More</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Blog Area end -->
    <style>
        .service-view-button button {
            color: white;
        }

        .view-more-button {
            /* margin-left: 212px; */
        }

        h2 {
            color: #022f5d;
        }

        .main-slider .swiper-wrapper img {
            /* transition: 3s ease-in-out; */
            transform: scale(1.1);
            max-height: 650px !important;
            width: 100%;
            /* opacity: 1; */
        }

        .main-slider .swiper-wrapper .swiper-slide.swiper-slide-next img {
            /* transition: 10s ease-in-out; */
            /* opacity: 0.5; */
            transform: scale(1);
        }

        h5.card-heading {
            color: #fff;
        }

        /* .fade {
                          animation: fadeInOut 4.7s infinite;
                        }

                        @keyframes fadeInOut {
                          0% {
                            opacity: 0.5;
                          }
                          50% {
                            opacity: 0.8;
                          }
                          100% {
                            opacity: 1;
                          }
                        } */
        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }
    </style>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const calendarTrigger = document.getElementById("calendarTrigger");
            const calendarDiv = document.getElementById("calendar");
            const selectedDateDisplay = document.getElementById("selectedDate");
            const hiddenDepartureDate = document.getElementById("hiddenDepartureDate");

            function generateCalendar(year, month) {
                const today = new Date(); // Get today's date
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDay = new Date(year, month, 1).getDay();

                let calendarHTML = `
                    <table style="border-collapse: collapse; width: 100%; text-align: center;">
                        <thead>
                            <tr>
                                <th style="padding: 5px;">Sun</th>
                                <th style="padding: 5px;">Mon</th>
                                <th style="padding: 5px;">Tue</th>
                                <th style="padding: 5px;">Wed</th>
                                <th style="padding: 5px;">Thu</th>
                                <th style="padding: 5px;">Fri</th>
                                <th style="padding: 5px;">Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                `;

                for (let i = 0; i < firstDay; i++) {
                    calendarHTML += `<td style="padding: 5px; border: 1px solid #ddd;"></td>`;
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const currentDate = new Date(year, month, day);

                    if ((firstDay + day - 1) % 7 === 0 && day > 1) {
                        calendarHTML += `</tr><tr>`;
                    }

                    // Disable past dates
                    const isPast = currentDate < today.setHours(0, 0, 0, 0);
                    calendarHTML += `
                        <td style="padding: 5px; border: 1px solid #ddd; cursor: ${isPast ? 'not-allowed' : 'pointer'}; 
                                   background-color: ${isPast ? '#f0f0f0' : 'transparent'}; 
                                   color: ${isPast ? '#ccc' : '#000'};"
                            data-date="${isPast ? '' : `${year}-${month + 1}-${day}`}">
                            ${day}
                        </td>`;
                }

                calendarHTML += `
                            </tr>
                        </tbody>
                    </table>
                `;
                return calendarHTML;
            }

            function handleDateSelection(event) {
                const selectedDate = event.target.getAttribute("data-date");
                if (selectedDate) {
                    selectedDateDisplay.textContent = `Selected Date: ${selectedDate}`;
                    hiddenDepartureDate.value = selectedDate; // Set the hidden input value
                    calendarDiv.style.display = "none";
                }
            }

            calendarTrigger.addEventListener("click", function() {
                if (calendarDiv.style.display === "none") {
                    const today = new Date();
                    calendarDiv.innerHTML = generateCalendar(today.getFullYear(), today.getMonth());
                    calendarDiv.style.display = "block";
                    calendarDiv.addEventListener("click", handleDateSelection);
                } else {
                    calendarDiv.style.display = "none";
                }
            });

            document.addEventListener("click", function(e) {
                if (!calendarDiv.contains(e.target) && e.target !== calendarTrigger) {
                    calendarDiv.style.display = "none";
                }
            });
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarTrigger = document.getElementById('calendarTrigger');
            const departureDateInput = document.getElementById('departure_date');
            const selectedDateText = document.getElementById('selectedDate');
    
            // Set the min attribute of the date input to today's date
            const today = new Date();
            const formattedDate = today.toISOString().split('T')[0]; // Format as YYYY-MM-DD
            departureDateInput.setAttribute('min', formattedDate);
    
            // Toggle visibility of the date input on clicking the calendar trigger
            calendarTrigger.addEventListener('click', function () {
                if (departureDateInput.style.display === 'none') {
                    departureDateInput.style.display = 'block';
                } else {
                    departureDateInput.style.display = 'none';
                }
            });
    
            // Update selected date text when a date is chosen
            departureDateInput.addEventListener('change', function () {
                const selectedDate = departureDateInput.value;
                selectedDateText.textContent = `Selected Date: ${selectedDate}`;
            });
        });
    </script>
    

@endsection
