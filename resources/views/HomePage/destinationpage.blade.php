@extends('layouts.webSite')

@section('title', 'Destination')
@section('content')


    <!-- Destinations Area start -->
    <section class="tour-grid-page py-100 rel z-2">
        <div class="blog-banner" style="margin-bottom:50px; ">
            <img src="./assets/images/Banner_HD.png" alt="" style="max-height:200px;width:100%; object-fit:cover;">
        </div>
        <div class="container">

            <!-- <div class="shop-shorter rel z-3 mb-20">
                            <select>
                                <option value="default" selected="">Filter by Price</option>
                                <option value="$10-$100">$10-$100</option>
                                <option value="$101-$200">$101-$200</option>
                                <option value="$201-$300">$201-$300</option>
                                <option value="$301-$400">$301-$400</option>
                                <option value="$401-$500">$401-$500</option>
                            </select>
                            <select>
                                <option value="default" selected="">By Reviews</option>
                                <option value="1-star">1 Star</option>
                                <option value="2-star">2 Star</option>
                                <option value="3-star">3 Star</option>
                                <option value="4-star">4 Star</option>
                                <option value="5-star">5 Star</option>
                            </select>
                            <select>
                                <option value="default" selected="">By Language</option>
                                <option value="english">English</option>
                                <option value="bangla">Bangla</option>
                            </select>
                            <select class="me-xl-auto">
                                <option value="default" selected="">By Durations</option>
                                <option value="10-100hr">10-100hr</option>
                                <option value="101-200hr">101-200hr</option>
                                <option value="201-300hr">201-300hr</option>
                                <option value="301-400hr">301-400hr</option>
                                <option value="401-500hr">401-500hr</option>
                            </select>
                            <select>
                                <option value="default" selected="">Short By</option>
                                <option value="new">Newness</option>
                                <option value="old">Oldest</option>
                                <option value="hight-to-low">High To Low</option>
                                <option value="low-to-high">Low To High</option>
                            </select>
                        </div> -->
            <hr class="mb-50">
            <div class="row">
                <h2 class="text-center pb-20"> Popular Destinations</h2>
                @if (!empty($homedestinations) && count($homedestinations))
                            @foreach ($homedestinations as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
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
                                    <div class="destination-header">
                                        {{-- <span class="location">
                                            {{ $item->package_type }}</span> --}}
                                        {{-- <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> --}}
                                    </div>
                                    <h5><a
                                            href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}">{{ $item->destination_name }}</a>
                                    </h5>
                                    {{-- <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p> --}}
                                    {{-- <ul class="blog-meta"> --}}
                                        {{-- <li><i class="far fa-clock"></i> {!! $item->package_duration_days !!} Days /
                                            {!! $item->package_duration_nights !!} Nights</li> --}}
                                        {{-- <li><i class="far fa-user"></i> 5-8 guest</li> --}}
                                    {{-- </ul> --}}
                                    <div class="destination-footers">
                                        <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                        <a href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}"
                                            class="theme-btn style-two style-three">
                                            <span data-hover="Book Now text-center">View More</span>
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourpage') }}">Bay Cruise lake trip by Boat in Bali,
                                        Indonesia</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now text-center">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery2.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourpage') }}">Buenos Aires, Calafate & Ushuaia, Rome,
                                        Italy</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery3.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourpage') }}">Bay Cruise lake trip by Boat in Bali,
                                        Indonesia</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery4.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourpage') }}">Buenos Aires, Calafate & Ushuaia, Rome,
                                        Italy</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                            <div class="image">
                                <span class="badge bgc-pink">Featured</span>
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery5.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourpage') }}">Buenos Aires, Calafate & Ushuaia, Rome,
                                        Italy</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                            <div class="image">
                                <span class="badge bgc">Featured</span>
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery6.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourpage') }}">Bay Cruise lake trip by Boat in Bali,
                                        Indonesia</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- <div class="col-xl-4 col-md-6">
                                <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <span class="badge">10% Off</span>
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/tour-list7.jpg" alt="Tour List">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h5><a href="tour-details.php">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h5>
                                        <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                        <ul class="blog-meta">
                                            <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                            <li><i class="far fa-user"></i> 5-8 guest</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$58.00</span>/person</span>
                                            <a href="tour-details.php" class="theme-btn style-two style-three">
                                                <span data-hover="Book Now">Book Now</span>
                                                <i class="fal fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                    <div class="image">
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/tour-list8.jpg" alt="Tour List">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h5><a href="tour-details.php">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h5>
                                        <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                        <ul class="blog-meta">
                                            <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                            <li><i class="far fa-user"></i> 5-8 guest</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$58.00</span>/person</span>
                                            <a href="tour-details.php" class="theme-btn style-two style-three">
                                                <span data-hover="Book Now">Book Now</span>
                                                <i class="fal fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                    <div class="image">
                                        <span class="badge bgc-primary">Popular</span>
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/tour-list9.jpg" alt="Tour List">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <h5><a href="tour-details.php">Bay Cruise lake trip by Boat in Bali, Indonesia</a></h5>
                                        <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                        <ul class="blog-meta">
                                            <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                            <li><i class="far fa-user"></i> 5-8 guest</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$58.00</span>/person</span>
                                            <a href="tour-details.php" class="theme-btn style-two style-three">
                                                <span data-hover="Book Now">Book Now</span>
                                                <i class="fal fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                    </li>
                                    <li class="page-item active">
                                        <span class="page-link">
                                            1
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div> -->
            </div>
        </div>
    </section>
    <!-- Destinations Area end -->


    <!-- Hotel Area start -->
    <!-- <section class="hotel-area bgc-black pt-100 pb-70 rel z-1">
                    <div class="container">
                        <div class="row justify-content-between align-items-center pb-40">
                            <div class="col-lg-9">
                                <div class="section-title text-white counter-text-wrap mb-15" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <h2>Discover the World's Class Top Hotel</h2>
                                    <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                                </div>
                            </div>
                            <div class="col-lg-3 text-xl-end">
                                <a href="tour-list.php" class="theme-btn style-four mb-15">
                                    <span data-hover="Explore More Hotel">Explore More Hotel</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-8 col-lg-10">
                                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/hotel1.jpg" alt="Hotel">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                                        <h5><a href="tour-details.php">The brown bench near swimming pool Hotel</a></h5>
                                        <ul class="list-style-one">
                                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                            <li><i class="fal fa-router"></i> Internet</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$85.00</span>/per night</span>
                                            <a href="tour-details.php" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-8 col-lg-10">
                                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/hotel2.jpg" alt="Hotel">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Kigali, Rwanda</span>
                                        <h5><a href="tour-details.php">Green trees and body of water Marriott Hotel</a></h5>
                                        <ul class="list-style-one">
                                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                            <li><i class="fal fa-router"></i> Internet</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$85.00</span>/per night</span>
                                            <a href="tour-details.php" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-8 col-lg-10">
                                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                                        <h5><a href="tour-details.php">Painted house surrounded with trees Hotel</a></h5>
                                        <ul class="list-style-one">
                                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                            <li><i class="fal fa-router"></i> Internet</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$85.00</span>/per night</span>
                                            <a href="tour-details.php" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/hotel3.jpg" alt="Hotel">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-8 col-lg-10">
                                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                                        <h5><a href="tour-details.php">house pool Jungle Pool Indonesia Hotel</a></h5>
                                        <ul class="list-style-one">
                                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                                            <li><i class="fal fa-router"></i> Internet</li>
                                        </ul>
                                        <div class="destination-footer">
                                            <span class="price"><span>$85.00</span>/per night</span>
                                            <a href="tour-details.php" class="read-more">Book Now <i class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                        <img src="assets/images/destinations/hotel4.jpg" alt="Hotel">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
    <!-- Hotel Area end -->


    <!-- Newsletter Area start -->
    <!-- <section class="newsletter-three bgc-primary py-100 rel z-1" style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
                    <div class="container container-1500">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="section-title counter-text-wrap mb-45">
                                        <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                                    </div>
                                    <form class="newsletter-form mb-15" action="#">
                                        <input id="news-email" type="email" placeholder="Email Address" required>
                                        <button type="submit" class="theme-btn bgc-secondary style-two">
                                            <span data-hover="Subscribe">Subscribe</span>
                                            <i class="fal fa-arrow-right"></i>
                                        </button>
                                    </form>
                                    <p>No credit card requirement. No commitments</p>
                                </div>
                                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                    <img src="assets/images/newsletter/newsletter-bg-image.png" alt="Newsletter">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="newsletter-image-part bgs-cover" style="background-image: url(assets/images/newsletter/newsletter-two-right.jpg);" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
                            </div>
                        </div>
                    </div>
                </section> -->
    <!-- Newsletter Area end -->
@endsection
