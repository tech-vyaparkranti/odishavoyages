@extends('layouts.webSite')

@section('title', 'Services')
@section('content')   


<!-- Tour Grid Area start -->
<div class="default-content pt-120 pb-3">
        <div class="custom-container">
            <div class="site-title pb-3" data-aos="fade-up">
                <h2 class="text-center" data-aos="fade-up"> Our Services</h2>
                <p class="text-center p-2">{!! $our_services_subheading ?? 'We provide a wide range of services that cater to both
                    individual travelers and corporate clients. Here’s a glimpse of what we offer:' !!}</p>
            </div>
            <div class="service-icon-content">
                <div class="icon-content">
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-1.png" alt=""></div>
                        <p class="text-center">Flight</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-2.png" alt=""></div>
                        <p class="text-center">Hotel</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-3.png" alt=""></div>
                        <p class="text-center">Cab</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-4.png" alt=""></div>
                        <p class="text-center">Train</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-5.png" alt=""></div>
                        <p class="text-center">Bus</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-6.png" alt=""></div>
                        <p class="text-center">Package</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-7.png" alt=""></div>
                        <p class="text-center">Visa</p>
                    </div>
                    <div class="service-icon">
                        <div class="icon"><img src="./assets/images/service-8.png" alt=""></div>
                        <p class="text-center">Passport</p>
                    </div>
                </div>
            </div>
            <div class="midd-content">
                @if (!empty($ourServices) && count($ourServices))
                @foreach ($ourServices as $item)
                    <div class="services-container">
                        <div class="left-item" data-aos="fade-up"data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{$item->service_image}}" alt="service-img">
                        </div>
                        <div class="right-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>{{$item->service_name}}</h4>
                            <p>{!!$item->service_details!!}</p>
                            <a href="{{ route('contactUs') }}"><p class="btn enquireNow">
                                Enquiry Now</p></a>
                        </div>
                    </div>
                @endforeach
                @else
                <!-- <div class="services-container">
                    <div class="left-item" data-aos="fade-up">
                        <img src="./assets/images/corporate-tours.jpg" alt="service-img">
                    </div>
                    <div class="right-item" data-aos="fade-up">
                        <h4>Corporate Travel Solutions</h4>
                        <p>Travel for businesses can be complex and time-consuming. We are there to make your travel
                            process
                            more enjoyable by streamlining its processing for companies of all sizes.We take care of
                            every detail of corporate travel-from flight booking to accompanying them at hotels
                            and even arranging ground transport for them. Our core objective is to make the travel
                            experience
                            for their employees efficient and worthwhile.</p>
                            <a href="{{ route('contactUs') }}"><p class="btn enquireNow">
                            Enquiry Now</p></a>
                    </div>
                    
                </div> -->
                    <div class="services-container">
                        <div class="left-item" data-aos="fade-up"data-aos-duration="1500" data-aos-offset="50">
                            <img src="./assets/images/Leadership-and-Management-Skill-Programs-1.jpg" alt="service-img">
                        </div>
                        <div class="right-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>Custom Travel Packages</h4>
                            <p>Custom Travel Packages is one of the services we put forward, showing our adaptation to every
                                client&#39;s differing interests, preferences, and budgets. We know that any customer may
                                want a
                                romantic getaway, a family vacation, or a solo adventure. We work closely with the client so
                                we
                                come up with a tailor-made itinerary that reflects all his or her desires.</p>
                            <a href="{{ route('contactUs') }}"><p class="btn enquireNow">
                                Enquiry Now</p></a>
                        </div>
                    </div>
                    <div class="services-container">
                        <div class="left-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="./assets/images/apartment-villa.jpg" alt="service-img">
                        </div>
                        <div class="right-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>Flight and Hotel Bookings</h4>
                            <p>In the present scenario, it can be very overwhelming to find the right flights and
                                accommodation
                                given the hundreds of choices out there. At Trip Closure, we simplify the Flight and Hotel
                                Booking
                                process by giving you varied options that just fit your needs. We have a large airline
                                network and hotel chains, so we can find the best rates and good availability
                                for your travel dates.</p>
                                <a href="{{ route('contactUs') }}"><p class="btn enquireNow">
                                Enquiry Now</p></a>
                        </div>
                    </div>
                    <div class="services-container">
                        <div class="left-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="./assets/images/adventure-tours.jpg" alt="service-img">
                        </div>
                        <div class="right-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>Visa and Travel</h4>
                            <p>There is quite a mess in visa applications and adequate travel insurance,
                                especially with international travel. Our Visa and Travel Insurance service takes away all
                                the
                                confusion. Our team, with ample experience, will help you fill out the visa application
                                so that you prepare and present all the necessary documentation and information to
                                successfully
                                enter your destination.</p>
                                <a href="{{ route('contactUs') }}"><p class="btn enquireNow">
                                Enquiry Now</p></a>
                        </div>
                    </div>
                    <div class="services-container">
                        <div class="left-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <img src="./assets/images/international-conventions.jpg" alt="service-img">
                        </div>
                        <div class="right-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>Local Tours and Activities</h4>
                            <p>Traveling is barely imaginable without you enjoying the best of what a place has to give
                                through local
                                tours and activities. Indeed, we regard this as one of the indispensable methods of gaining
                                a more
                                meaningful connection with the local culture and traditions whenever you are in a location</p>
                                <a href="{{ route('contactUs') }}"><p class="btn enquireNow">
                                Enquiry Now</p></a>
                        </div>
                    </div> 
                @endif


            </div>

        </div>
    </div>
<!-- Tour Grid Area end -->


<!-- Newsletter Area start -->
<!-- <section class="newsletter-three bgc-primary py-100 rel z-1"
    style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most
                            popular experience you’ll remember</p>
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
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="assets/images/newsletter/newsletter-bg-image.png" alt="Newsletter">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover"
                    style="background-image: url(assets/images/newsletter/newsletter-two-right.jpg);"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section> -->
<!-- Newsletter Area end -->
 <style>
    h2{
        color:#022f5d;
    }
    .services-container:nth-child(2n+1) > div:first-child {
    order: 1;
}
.left-item img {
    /* float: left; */
    margin-bottom: 20px;
    display: block;
    margin: auto;
    max-height: 350px;
    min-height: 350px;
    max-width: 400px;
    object-fit: cover;
    min-width: 400px;
}
 </style>
@endsection