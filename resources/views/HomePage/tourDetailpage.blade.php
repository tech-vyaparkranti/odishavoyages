@extends('layouts.webSite')
@section('title', $package->meta_title)
@section('meta_description', $package->meta_description)
@section('meta_keywords', $package->meta_keyword)
@section('content')

<!-- Tour Gallery start -->
<div class="tour-gallery mt-5 pt-100">
    <div class="blog-banner" style="margin-bottom:50px; ">
        <img src="{{ asset('assets/images/Banner_HD.png') }}" alt=""
            style="max-height:200px;width:100%; object-fit:cover;">
    </div>
    <div class="container-fluid">
        <div class="row gap-10 justify-content-center rel">
            <h2 class="text-center pb-25" style="color:#022f5d;">Our Tours</h2>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item fixed-image-size">
                    @if (isset($package->package_image))
                                        @php
                                            $images = is_string($package->package_image)
                                                ? json_decode($package->package_image, true)
                                                : $package->package_image;

                                            $images = is_array($images) ? $images : [];
                                        @endphp

                                        {{-- Dynamically populate the first two images for the first column --}}
                                        @if (isset($images[0]))
                                            <img src="{{ asset('storage/' . $images[0]) }}" alt="Destination" class="img-fluid ">
                                        @endif
                                        @if (isset($images[3]))
                                            <img src="{{ asset('storage/' . $images[3]) }}" alt="Destination" class="img-fluid">
                                        @endif
                    @else
                        {{-- Fallback: Original static images --}}
                        <img src="./assets/images/destination-details1.jpg" alt="Destination"
                            class="img-fluid fixed-image-size">
                        <img src="./assets/images/destination-details4.jpg" alt="Destination"
                            class="img-fluid fixed-image-size">
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item unique-image-size">
                    @if (isset($images[1]))
                        {{-- Dynamically populate the second image with unique CSS --}}
                        <img src="{{ asset('storage/' . $images[1]) }}" alt="Destination" class="img-fluid ">
                    @else
                        {{-- Fallback: Original static image --}}
                        <img src="./assets/images/destination-details2.jpg" alt="Destination"
                            class="img-fluid unique-image-size">
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item fixed-image-size below-image">
                    @if (isset($images[2]))
                        {{-- Dynamically populate the third and fifth images for the third column --}}
                        <img src="{{ asset('storage/' . $images[2]) }}" alt="Destination" class="img-fluid ">
                    @endif
                    @if (isset($images[4]))
                        <img src="{{ asset('storage/' . $images[4]) }}" alt="Destination" class="img-fluid ">
                    @else
                        {{-- Fallback: Original static images --}}
                        <img src="./assets/images/destination-details3.jpg" alt="Destination"
                            class="img-fluid fixed-image-size">
                        <img src="./assets/images/destination-details5.jpg" alt="Destination"
                            class="img-fluid fixed-image-size">
                    @endif
                </div>
            </div>



            {{-- <div class="col-lg-12">
                <div class="gallery-more-btn">
                    <a href="{{ route(name: 'contactUs') }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="See All Photos">See All Photos</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Tour Gallery End -->


<!-- Tour Header Area start -->
<section class="tour-header-area pt-70 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-7">
                <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <span class="location d-inline-block mb-10"> {{ $package->package_type }}</span>
                    <div class="section-title pb-5">
                        <h2> {{ $package->package_name }}, {{ $package->package_country }}</h2>
                    </div>
                    {{-- <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="tour-header-social mb-10">
                    <a href="#"><i class="far fa-share-alt"></i>Share tours</a>
                    <a href="#"><i class="fas fa-heart bgc-secondary"></i>Wish list</a>
                </div>
            </div> --}}
        </div>
        <hr class="mt-50 mb-70">
    </div>
</section>
<!-- Tour Header Area end -->


<!-- Tour Details Area start -->
<section class="tour-details-page pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tour-details-content">
                    <h3>Explore Tours</h3>
                    <p>
                        @if (isset($package->description) && !empty($package->description))
                                                @php
                                                    // Split the description into highlights (assuming each line is a bullet point)
                                                    $highlights = explode("\n", $package->description);
                                                @endphp
                                                @foreach ($highlights as $highlight)
                                                    <li>{!! $highlight !!}</li>
                                                @endforeach
                        @else
                            <li>No highlights available for this package.</li>
                        @endif
                    </p>
                    <div class="row pb-55">
                        <div class="col-md-6">
                            {{-- <div class="tour-include-exclude mt-4">
                                <h5>Included</h5>
                                <ul class="list-style-one check mt-2">
                                    <li><i class="fa-solid fa-check"></i> Pick and Drop Services</li>
                                    <li><i class="fa-solid fa-check"></i> 1 Meal Per Day</li>
                                    <li><i class="fa-solid fa-check"></i> Cruise Dinner & Music Event</li>
                                    <li><i class="fa-solid fa-check"></i> Visit 7 Best Places in the City</li>
                                    <li><i class="fa-solid fa-check"></i> Bottled Water on Buses</li>
                                    <li><i class="fa-solid fa-check"></i> Transportation Luxury Tour Bus</li>
                                </ul>
                            </div> --}}
                            <div class="tour-include-exclude mt-4">
                                <h5>Included</h5>
                                <ul class="list-style-one check mt-2">
                                    @php
                                        // Decode the included items JSON to an array
                                        $includedItems = is_string($package->package_included)
                                            ? json_decode($package->package_included, true)
                                            : $package->package_included;
                                        $includedItems = is_array($includedItems) ? $includedItems : [];
                                    @endphp
                                    @if (count($includedItems) > 0)
                                        @foreach ($includedItems as $item)
                                            <li><i class="fa-solid fa-check"></i> {{ $item }}</li>
                                        @endforeach
                                    @else
                                        <li>No included items available.</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="tour-include-exclude mt-4">
                                <h5>Excluded</h5>
                                <ul class="list-style-one mt-2">
                                    <li><i class="fa-regular fa-circle-xmark"></i> Gratuities</li>
                                    <li><i class="fa-regular fa-circle-xmark"></i> Hotel pickup and drop-off</li>
                                    <li><i class="fa-regular fa-circle-xmark"></i> Lunch, Food & Drinks</li>
                                    <li><i class="fa-regular fa-circle-xmark"></i> Optional upgrade to a glass</li>
                                    <li><i class="fa-regular fa-circle-xmark"></i> Additional Services</li>
                                    <li><i class="fa-regular fa-circle-xmark"></i> Insurance</li>
                                </ul>
                            </div> --}}
                            <div class="tour-include-exclude mt-4">
                                <h5>Excluded</h5>
                                <ul class="list-style-one cross mt-2">
                                    @php
                                        // Decode the excluded items JSON to an array
                                        $excludedItems = is_string($package->package_excluded)
                                            ? json_decode($package->package_excluded, true)
                                            : $package->package_excluded;
                                        $excludedItems = is_array($excludedItems) ? $excludedItems : [];
                                    @endphp
                                    @if (count($excludedItems) > 0)
                                        @foreach ($excludedItems as $item)
                                            <li><i class="fa-solid fa-times"></i> {{ $item }}</li>
                                        @endforeach
                                    @else
                                        <li>No excluded items available.</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                                        <div class="tour-include-exclude mt-30">
                                            <h5>Excluded</h5>
                                            <ul class="list-style-one mt-25">
                                                <li><i class="far fa-times"></i> Gratuities</li>
                                                <li><i class="far fa-times"></i> Hotel pickup and drop-off</li>
                                                <li><i class="far fa-times"></i> Lunch, Food & Drinks</li>
                                                <li><i class="far fa-times"></i> Optional upgrade to a glass</li>
                                                <li><i class="far fa-times"></i> Additional Services</li>
                                                <li><i class="far fa-times"></i> Insurance</li>
                                            </ul>
                                        </div>
                                    </div> -->
                    </div>
                </div>

                <!-- <h3>Activities</h3>
                            <div class="tour-activities mt-30 mb-45">
                                <div class="tour-activity-item">
                                    <i class="flaticon-hiking"></i>
                                    <b>Hiking</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-fishing"></i>
                                    <b>Fishing</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-man"></i>
                                    <b>Kayak shooting</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-kayak-1"></i>
                                    <b>Kayak</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-bonfire"></i>
                                    <b>Campfire</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-flashlight"></i>
                                    <b>Night Exploring</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-cycling"></i>
                                    <b>Biking</b>
                                </div>
                                <div class="tour-activity-item">
                                    <i class="flaticon-meditation"></i>
                                    <b>Yoga</b>
                                </div>
                            </div> -->

                <h3>Itinerary</h3>
                <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                    @php
                        // Decode itinerary_titles and itinerary_descriptions if needed
                        $titles = is_string($package->itinerary_titles)
                            ? json_decode($package->itinerary_titles, true)
                            : $package->itinerary_titles;
                        $descriptions = is_string($package->itinerary_descriptions)
                            ? json_decode($package->itinerary_descriptions, true)
                            : $package->itinerary_descriptions;
                    @endphp
                    @if (!empty($titles) && !empty($descriptions) && count($titles) === count($descriptions))
                        @foreach ($titles as $index => $title)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $title }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ $descriptions[$index] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No itinerary details available.</p>
                    @endif
                    {{-- <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwoTwo">
                                Day 2 - Wake up early and embark on a day hike
                            </button>
                        </h5>
                        <div id="collapseTwoTwo" class="accordion-collapse collapse show"
                            data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>The early start ensures you can fully immerse yourself in the tranquility of nature
                                    before the world fully awakens. As the morning light filters through the trees,
                                    you'll experience the crisp, fresh air and the peaceful sounds of the forest. The
                                    trail ahead offers both a physical challenge promise of breathtaking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoThree">
                                Day 3 - Join a guided ranger-led nature walk
                            </button>
                        </h5>
                        <div id="collapseTwoThree" class="accordion-collapse collapse"
                            data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoFour">
                                Day 4 - Take a break from hiking
                            </button>
                        </h5>
                        <div id="collapseTwoFour" class="accordion-collapse collapse"
                            data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoFive">
                                Day 5 - Pack a lunch and embark on a longer hike
                            </button>
                        </h5>
                        <div id="collapseTwoFive" class="accordion-collapse collapse"
                            data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <h3>Frequently Asked Questions</h3>
                <div class="accordion-one mt-25 mb-60" id="faq-accordion-current">
                    @if ($getHomeAllFaq->isNotEmpty())
                        @foreach ($getHomeAllFaq as $index => $FaqRow)
                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCurrent{{ $index }}" aria-expanded="false"
                                        aria-controls="collapseCurrent{{ $index }}">
                                        {!! $FaqRow['faq_question'] !!}
                                    </button>
                                </h5>
                                <div id="collapseCurrent{{ $index }}" class="accordion-collapse collapse"
                                    data-bs-parent="#faq-accordion-current">
                                    <div class="accordion-body">
                                        <p>{!! $FaqRow['faq_answer'] !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    02_What is included in the travel package?
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>The early start ensures you can fully immerse yourself in the tranquility of
                                        nature
                                        before the world fully awakens. As the morning light filters through the trees,
                                        you'll experience the crisp, fresh air and the peaceful sounds of the forest.
                                        The
                                        trail ahead offers both a physical challenge promise of breathtaking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    03_What is your cancellation and refund policy?
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>To take a trivial example which undertakes laborious physical exercise except to
                                        obtain some advantage pleasure annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    04_Can I customize my tour or travel package?
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>To take a trivial example which undertakes laborious physical exercise except to
                                        obtain some advantage pleasure annoying consequences</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    05_What documents do I need to travel?
                                </button>
                            </h5>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>To take a trivial example which undertakes laborious physical exercise except to
                                        obtain some advantage pleasure annoying consequences</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- <h3>Maps</h3>
                            <div class="tour-map mt-30 mb-50">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div> -->

                <!-- <h3>Clients Reviews</h3>
                            <div class="clients-reviews bgc-black mt-30 mb-60">
                                <div class="left">
                                    <b>4.8</b>
                                    <span>(586 reviews)</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="ratting-item">
                                        <span class="title">Services</span>
                                        <span class="line"><span style="width: 80%;"></span></span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <div class="ratting-item">
                                        <span class="title">Guides</span>
                                        <span class="line"><span style="width: 70%;"></span></span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <div class="ratting-item">
                                        <span class="title">Price</span>
                                        <span class="line"><span style="width: 80%;"></span></span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <div class="ratting-item">
                                        <span class="title">Safety</span>
                                        <span class="line"><span style="width: 80%;"></span></span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <div class="ratting-item">
                                        <span class="title">Foods</span>
                                        <span class="line"><span style="width: 80%;"></span></span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                    <div class="ratting-item">
                                        <span class="title">Hotels</span>
                                        <span class="line"><span style="width: 80%;"></span></span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                <!-- <h3>Clients Comments</h3>
                            <div class="comments mt-30 mb-60">
                                <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="author-thumb">
                                        <img src="assets/images/blog/comment-author1.jpg" alt="Author">
                                    </div>
                                    <div class="content">
                                        <h6>Lonnie B. Horwitz</h6>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="time">Venice, Rome and Milan – 9 Days 8 Nights</span>
                                        <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                        <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="comment-body comment-child" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="author-thumb">
                                        <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                                    </div>
                                    <div class="content">
                                        <h6>William G. Edwards</h6>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="time">Venice, Rome and Milan – 9 Days 8 Nights</span>
                                        <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                        <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="author-thumb">
                                        <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                                    </div>
                                    <div class="content">
                                        <h6>Jaime B. Wilson</h6>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="time">Venice, Rome and Milan – 9 Days 8 Nights</span>
                                        <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                        <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div> -->

                <!-- <h3>Add Reviews</h3> -->
                <!-- <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-30" name="review-form" action="#"
                        method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="comment-review-wrap">
                            <div class="comment-ratting-item">
                                <span class="title">Services</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="comment-ratting-item">
                                <span class="title">Guides</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="comment-ratting-item">
                                <span class="title">Price</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="comment-ratting-item">
                                <span class="title">Safety</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="comment-ratting-item">
                                <span class="title">Foods</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="comment-ratting-item">
                                <span class="title">Hotels</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-30 mb-40">
                        <h5>Leave Feedback</h5>
                        <div class="row gap-20 mt-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full-name">Name</label>
                                    <input type="text" id="full-name" name="full-name" class="form-control" value=""
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email-address">Email</label>
                                    <input type="email" id="email-address" name="email" class="form-control" value=""
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Comments</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn bgc-secondary style-two">
                                        <span data-hover="Submit reviews">Submit reviews</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> -->

            </div>
            <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                <div class="blog-sidebar tour-sidebar">

                    <!-- <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <h5 class="widget-title">Tour Booking</h5>
                                    <form action="#">
                                        <div class="date mb-25">
                                            <b>From Date</b>
                                            <input type="date">
                                        </div>
                                        <hr>
                                        <div class="time py-5">
                                            <b>Time :</b>
                                            <ul class="radio-filter">
                                                <li>
                                                    <input class="form-check-input" checked type="radio" name="time" id="time1">
                                                    <label for="time1">12:00</label>
                                                </li>
                                                <li>
                                                    <input class="form-check-input" type="radio" name="time" id="time2">
                                                    <label for="time2">08:00</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="mb-25">
                                        <h6>Tickets:</h6>
                                        <ul class="tickets clearfix">
                                            <li>
                                                Adult (18- years) <span class="price">$28.50</span>
                                                <select name="18-" id="18-">
                                                    <option value="value1">01</option>
                                                    <option value="value1">02</option>
                                                    <option value="value1" selected>03</option>
                                                </select>
                                            </li>
                                            <li>
                                                Adult (18+ years) <span class="price">$50.40</span>
                                                <select name="18+" id="18+">
                                                    <option value="value1">01</option>
                                                    <option value="value1">02</option>
                                                    <option value="value1">03</option>
                                                </select>
                                            </li>
                                        </ul>
                                        <hr class="mb-25">
                                        <h6>Add Extra:</h6>
                                        <ul class="radio-filter pt-5">
                                            <li>
                                                <input class="form-check-input" checked type="radio" name="AddExtra" id="add-extra1">
                                                <label for="add-extra1">Add service per booking <span>$50</span></label>
                                            </li>
                                            <li>
                                                <input class="form-check-input" type="radio" name="AddExtra" id="add-extra2">
                                                <label for="add-extra2">Add service per personal <span>$24</span></label>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h6>Total: <span class="price">$74</span></h6>
                                        <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5">
                                            <span data-hover="Book Now">Book Now</span>
                                            <i class="fal fa-arrow-right"></i>
                                        </button>
                                        <div class="text-center">
                                            <a href="contact.php">Need some help?</a>
                                        </div>
                                    </form>
                                </div> -->

                    <!-- <div class="form-container">
                        <h3 class="text-center">Tour Booking </h3>
                        <form id="enquiryForm2">
                            @csrf
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>

                            <label for="phone_number">Phone Number</label>
                            <input type="tel" id="phone_number" name="phone_number"
                                placeholder="Enter your phone number" required>

                            <label for="Amount">Amount</label>
                            <input type="text" id="amount" name="amount" placeholder="Enter amount" required>

                            <!-- <label for="package">Package</label>
                                <input type="text" id="name" name="name" placeholder="Enter package" required> -->
                    <!-- <select id="package" name="package" required> -->
                    <!-- <option value="">Select a package</option> -->
                    <!-- <option value="basic">Basic</option> -->
                    <!-- <option value="standard">Standard</option> -->
                    <!-- <option value="premium">Premium</option> -->
                    {{-- </select> --}}

                    <!-- <label for="message">Message</label>
                            <input type="text" id="message" name="message" placeholder="Message" required>

                            <button id="submitButton" type="submit">Pay Now</button>
                        </form>
                    </div> -->
                    <div class="enquiry-send-form">
                        <div class="enquire-form-button pb-2">
                            <div class="button-form-book">
                                <button id="bookNowBtn" disabled>Book Now</button>
                            </div>
                            <div class="button-form-book">
                                <button id="enquiryNowBtn">Enquiry Now</button>
                            </div>
                        </div>

                        <!-- Book Now Form -->
                        <div id="bookNowForm" class="form-container active">
                            <!-- <p class="text-center">Book Now Form</p> -->
                            <form>
                                <label for="bookName"> Full Name*</label>
                                <input type="text" id="bookName" required><br>
                                <label for="bookPhone">Phone Number*</label>
                                <input type="text" id="bookPhone" required><br>
                                <label for="bookAmount">Payment Amount</label>
                                <input type="text" id="bookAmount"><br>
                                <label for="bookMessage">Message</label>
                                <textarea id="bookMessage"></textarea><br>
                                <div class="form-submit">
                                    <button type="submit">Pay Now</button>
                                </div>
                            </form>
                        </div>

                        <!-- Enquiry Now Form -->
                        <div id="enquiryNowForm" class="form-container">
                            <!-- <p class="text-center">Enquiry Now Form</p> -->
                            <form>
                                <label for="enquiryName">Full Name*</label>
                                <input type="text" id="enquiryName" required><br>
                                <label for="enquiryPhone">Phone Number*</label>
                                <input type="text" id="enquiryPhone" required><br>
                                <label for="enquiryMessage">Message</label>
                                <textarea id="enquiryMessage"></textarea><br>
                                <div class="form-submit">
                                    <button type="submit">Send Enquiry</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h5 class="widget-title">Need Help?</h5>
                        <ul class="list-style-one">
                            <li><i class="far fa-envelope"></i> <a
                                    href="emilto:info@aisholidays.com">info@aisholidays.com</a></li>
                            <li><i class="fas fa-phone-volume"></i> <a href="callto:+91 783 860 2000">+91 783 860
                                    2000</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content text-white">
                            <span class="h6">Explore The World</span>
                            <h3>Best Tourist Place</h3>
                            <a href="{{ route('tourpage') }}" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Explore Now">Explore Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('./assets/images//cta-widget.png') }}" alt="CTA">
                        </div>
                        <!-- <div class="cta-shape"><img src="./assets/images/cta-shape3.png" alt="Shape"></div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Details Area end -->



<style>
    .form-container {
        display: none;
    }

    .form-container.active {
        display: block;
    }
</style>


<script>
    const bookNowBtn = document.getElementById('bookNowBtn');
    const enquiryNowBtn = document.getElementById('enquiryNowBtn');
    const bookNowForm = document.getElementById('bookNowForm');
    const enquiryNowForm = document.getElementById('enquiryNowForm');

    enquiryNowBtn.addEventListener('click', () => {
        bookNowForm.classList.remove('active');
        enquiryNowForm.classList.add('active');
        enquiryNowBtn.disabled = true;
        bookNowBtn.disabled = false;
    });

    bookNowBtn.addEventListener('click', () => {
        enquiryNowForm.classList.remove('active');
        bookNowForm.classList.add('active');
        bookNowBtn.disabled = true;
        enquiryNowBtn.disabled = false;
    });
</script>

</html>



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
<style>
    .form-container {
        width: 100%;
        /* max-width: 400px; */
        background: #fff;
        padding: 20px;
        border-radius: 10px;
       
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    .form-container input,
    .form-container select {
        width: 100%;
        padding: 10px;
        margin-bottom: 9px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #4a974a;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-container button:hover {
        background-color: #4a974a;
    }

    /* General fixed size for most images */
    .fixed-image-size img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 5px;
        margin-top: 10px;
    }
.enquiry-send-form{
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
    /* Unique style for the second image */
    .unique-image-size img {
        width: 100%;
        margin-top: 10px;
        height: 610px;
        object-fit: cover;
        /* Taller height for the second image */
        /* object-fit: contain; Ensures the whole image is visible */
        border-radius: 10px;
        /* Different rounded corners */
        /* border: 2px solid #ccc; Optional: Add a border for distinction */
    }

    .cross li i {
        font-size: 18px;
        margin-right: 15px;
        /* color: green; */
        color: red;
    }

    @media(max-width:992px) {
        .below-image {
            display: flex;
            justify-content: center !important;
            grid-gap: 10px;
            margin-top: -10px !important;
        }

        .fixed-image-size img {
            width: 100%;
            height: 300px;
            max-width: 552px !important;
            min-width: 376px !important;
            object-fit: cover;
            border-radius: 5px;
            margin-top: 10px;
        }
    }


    @media (max-width: 768px) {
        .form-container {
            width: 95%;
            padding: 15px;
        }

        .form-container h2 {
            font-size: 18px;
        }

        .form-container input,
        .form-container select {
            font-size: 13px;
            padding: 8px;
        }

        .form-container button {
            font-size: 14px;
            padding: 8px;
        }

        .below-image {
            display: block;
            justify-content: center !important;
            grid-gap: 10px;
            margin-top: -10px !important;
        }

        .fixed-image-size img {
            width: 100% !important;
            min-width: 100% !important;
            object-fit: cover;
        }

        .unique-image-size img {
            width: 100%;
            margin-top: 0px !important;
            height: 300px;
            /* Taller height for the second image */
            /* object-fit: contain; Ensures the whole image is visible */
            border-radius: 10px;
            object-fit: cover;
            /* Different rounded corners */
            /* border: 2px solid #ccc; Optional: Add a border for distinction */
        }
    }

    @media (max-width: 480px) {
        .form-container {
            width: 100%;
            border-radius: 0;
        }

        .form-container h2 {
            font-size: 16px;
        }
    }
</style>
<style>
    .button-form-book button {
        background-color: #56a356;
        color: white;
        padding: 10px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button-form-book button.active {
        opacity: 0.8;
        /* background-color: red;  */
    }

    .button-form-book button:disabled {
        background-color:green;
        /* cursor: not-allowed; */
    }

    .form-container {
        display: none;
    }

    .form-container.active {
        display: block;
    }
</style>

<script>
    const bookNowBtn = document.getElementById('bookNowBtn');
    const enquiryNowBtn = document.getElementById('enquiryNowBtn');
    const bookNowForm = document.getElementById('bookNowForm');
    const enquiryNowForm = document.getElementById('enquiryNowForm');

    // Add initial active class for Book Now button
    bookNowBtn.classList.add('active');

    enquiryNowBtn.addEventListener('click', () => {
        bookNowForm.classList.remove('active');
        enquiryNowForm.classList.add('active');
        enquiryNowBtn.classList.add('active');
        bookNowBtn.classList.remove('active');
    });

    bookNowBtn.addEventListener('click', () => {
        enquiryNowForm.classList.remove('active');
        bookNowForm.classList.add('active');
        bookNowBtn.classList.add('active');
        enquiryNowBtn.classList.remove('active');
    });
</script>

@endsection
@section('pageScript')
<script type="text/javascript"></script>
@endsection





<style>
    form.tab-content {
        display: none
    }

    .tabBtns {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 10px;
    }

    .tab-button.active {
        background-color: rgb(var(--steel-blue));
    }

    .tour-include-exclude .check li i {
        color: #63ab45;
    }

    .list-style-one li i {
        color: red
    }

    .tour-include-exclude {
        border-radius: 10px;
        padding: 35px 50px 28px;
        border: 1px solid rgb(var(--steel-blue));
    }

    .accordion-button:not(.collapsed) {
        color: rgb(var(--steel-blue));
        background-color: rgb(var(--steel-blue) / 10%);
        box-shadow: none;
        outline: none !important;
    }

    @media(max-width:992px) {
        .tour-include-exclude {
            border-radius: 10px;
            padding: 10px 10px 20px !important;
            border: 1px solid rgb(var(--steel-blue));
        }
    }

    /* .button-form-book button {
        background-color: green;
        padding: 8px 50px;
        color: white;
        border-radius: 8px;
        grid-gap: 10px;
        /* width:50%; */

    .enquire-form-button {
        display: flex;
        grid-gap: 50px;
        justify-content: center;

    }

    .button-book button {
        width: 100%;
        background-color: #4a974a;
        color: white;
        display: block;
        margin: auto;
        padding: 8px 50px;
        border-radius: 8px;
        margin-left: 7px;

    }

    .button-form-book button {
        width: 100%;
        background-color: #4a974a;
        color: white;
        display: block;
        margin: auto;
        padding: 8px 50px;
        border-radius: 8px;
        margin-left: 7px;
    }

    .form-submit button {
        background-color: #208420 !important;
    }

    button#bookNowBtn :active{
        background-color: green !important;
    }

    button#enquiryNowForm :active {
        background-color: green !important;
    }
</style>