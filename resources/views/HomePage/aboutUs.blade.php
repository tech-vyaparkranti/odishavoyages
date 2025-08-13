@extends('layouts.webSite')
@section('title', 'About Us')
@section('content')


        
        <!-- About Area start -->
        <section class="about-area-two py-100 rel z-1">
        <div class="contact-banner">
       <img src="./assets/images/bg-contact.jpg" alt=""> 
       </div>   
            <div class="container pt-5">
                <div class="row justify-content-between pt-5">
                    <div class="col-xl-3" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <span class="subtitle mb-35 pt-5">About Company</span>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-page-content" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col-lg-8 pe-lg-5 me-lg-5">
                                    <div class="section-title mb-25">
                                        <h2>{!! $about_company_heading ?? 'Experience and Professional Tours & Travel Agency in the World' !!}</h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-years rmb-20">
                                        <span class="title bgc-secondary">Years Of Experience</span>
                                        <span class="text">We have</span>
                                        <span class="years">{!! $years_of_experience ?? '15' !!}+</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{!! $about_company_subheading ?? 'We specialize in crafting unforgettable city experiences for travelers seeking discover the heart and soul of urban landscapes. Our expertly guided tours take journey through vibrant streets, historic landmarks, and hidden gems of each city.' !!}</p>
                                    <ul class="list-style-two mt-35">
                                        {!! $about_company_services ?? ' <li>Experienced Agency</li>
                                        <li>Professional Team</li>
                                        <li>Value for Money Travel</li>
                                        <li>Online Support 24/7</li>' !!}
                                    </ul>
                                    <a href="{{ route('tourpage') }}" class="theme-btn style-three mt-30">
                                        <span data-hover="Explore Tours">Explore Tours</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Features Area start -->
        <section class="about-features-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="about-feature-image" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset($about_us_image_1 ?? './assets/images/about-feature1.jpg') }}" alt="About">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="about-feature-image" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset($about_us_image_2 ?? './assets/images/about-feature2.jpg') }}" alt="About">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8">
                        <div class="about-feature-boxes" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="feature-item style-three bgc-secondary">
                                <div class="icon-title">
                                    <div class="icon"><i class="flaticon-award-symbol"></i></div>
                                    <h5><a href="#">{!! $about_us_image_2_card_1_heading ?? 'We Are Award Winning Company' !!}</a></h5>
                                </div>
                                <div class="content">
                                    <p>{!! $about_us_image_2_card_1_subheading ?? 'At Pinnacle Business Solutions commitment to excellence and innovation earned' !!}</p>
                                </div>
                            </div>
                            <div class="feature-item style-three bgc-primary">
                                <div class="icon-title">
                                    <div class="icon"><i class="flaticon-tourism"></i></div>
                                    <h5><a href="#">{!! $about_us_image_2_card_2_heading ?? '5000+ Popular tour destinations' !!}</a></h5>
                                </div>
                                <div class="content">
                                    <p>{!! $about_us_image_2_card_2_subheading ?? 'Our team of experts is dedicate developing cutting-edge strategies drive success' !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Area end -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area pt-70 pb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <h2>{!! $about_us_image_3_heading ?? 'Travel with Confidence Top Reasons to Choose AIS Holidays' !!}</h2>
                            </div>
                            <p>{!! $about_us_image_3_subheading ?? 'We work closely with our clients to understand challenges and objectives, providing customized solutions to enhance efficiency boost profitability, and foster sustainable growth.' !!}</p>
                            <div class="row pt-25">
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
                        <div class="about-us-page">
                            <img src="{{ asset($about_us_image_3 ?? './assets/images/about-page.jpg') }}" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area end -->
        <!-- Features Area start -->
        <section class="about-feature-two bgc-black pb-45 rel z-1">
            <div class="container">
                <div class="section-title text-center text-white counter-text-wrap mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>How to Benefit from Our Tours & Travels</h2>
                    <p>One site many popular experience you’ll remember</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="feature-item style-two">
                            <div class="icon"><i class="flaticon-save-money"></i></div>
                            <div class="content">
                                <h5><a href="#">Best Rate Guarantee</a></h5>
                                {{-- <p>Tent camping is wonderful way to connect with nature</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="feature-item style-two">
                            <div class="icon"><i class="flaticon-travel-1"></i></div>
                            <div class="content">
                                <h5><a href="#">Diverse Destinations</a></h5>
                                {{-- <p>Mountain biking is exhilarat sport that physical fitness</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="feature-item style-two">
                            <div class="icon"><i class="flaticon-booking"></i></div>
                            <div class="content">
                                <h5><a href="#">Fast Booking</a></h5>
                                {{-- <p>Kayaking is a thrilling outdoor activity that adventure</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="feature-item style-two">
                            <div class="icon"><i class="flaticon-guidepost"></i></div>
                            <div class="content">
                                <h5><a href="#">Best Travel Guide</a></h5>
                                {{-- <p>Fishing and boat quintessent activities that bring</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Area end -->
        <!-- Testimonials Area start -->
        <section class="testimonials-area py-50 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-left-content rmb-50" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset($about_us_image_4 ?? 'assets/images/blog-3.jpg') }}" alt="Testimonial">
                            <div class="happy-customer text-white bgc-primary">
                                <h6>{!! $home_other_services_happy_customer_no ?? '95+ Happy Customer' !!}</h6>
                                <hr>
                                <p>Positive Reviews</p>
                                <div class="testi-header">
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-55">
                                <h2><span>{!! $about_testimonial_no ?? '5280' !!}</span>  {!! $about_testimonial_heading ?? 'Global Clients Say About Us Services' !!}</h2>
                            </div>
                            {{-- <div class="testimonials-active">
                                <div class="testimonial-item">
                                    <div class="testi-header">
                                        <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                        <h4>Quality Services</h4>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They took care of every detail, from to accommodations, and even suggested incredible experiences"</div>
                                    <div class="author">
                                        <div class="content">
                                            <h5>Randall V. Vasquez</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testi-header">
                                        <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                        <h4>Quality Services</h4>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They took care of every detail, from to accommodations, and even suggested incredible experiences"</div>
                                    <div class="author">
                                        <div class="content">
                                            <h5>Randall V. Vasquez</h5>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="swiper-container testimonials-active">
                                <div class="swiper-wrapper">
                                    @if(isset($testimonial) && count($testimonial)>0)
                                        @foreach ($testimonial as $item)
                                        <div class="swiper-slide testimonial-item">
                                            <div class="testi-header">
                                                <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                                <h4>{{ $item->heading_top }}</h4>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="text">{{ $item->heading_middle }}</div>
                                            <div class="author">
                                                <div class="content">
                                                    <h5>{{ $item->heading_bottom }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                    <div class="swiper-slide testimonial-item">
                                        <div class="testi-header">
                                            <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                            <h4>Quality Services</h4>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They took care of every detail, from to accommodations, and even suggested incredible experiences"</div>
                                        <div class="author">
                                            <div class="content">
                                                <h5>Randall V. Vasquez</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-item">
                                        <div class="testi-header">
                                            <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                            <h4>Quality Services</h4>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="text">"Our trip was absolutely a perfect, thanks this travel agency! They took care of every detail, from to accommodations, and even suggested incredible experiences"</div>
                                        <div class="author">
                                            <div class="content">
                                                <h5>Randall V. Vasquez</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area end -->
        <style>
            .slick-initialized .slick-slide {
    display: flex;

}
h2 {
    text-transform: none !important;
}

        </style>
        
        <!-- Client Logo Area start -->
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
        <!-- Client Logo Area end -->
@endsection         
            
        