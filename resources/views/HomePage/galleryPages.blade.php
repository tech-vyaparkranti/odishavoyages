@extends('layouts.webSite')

@section('title', 'Gallery')
@section('content')

    <!-- Gallery Area start -->
    <section class="gallery-two-area py-100 pt-120 rel z-1">
    <div class="blog-banner" style="margin-bottom:50px; ">
            <img src="{{ asset('./assets/images/bg-contact).jpg') }}" alt=""
                style="max-height:300px;width:100%; object-fit:cover;">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h2>Explore Our Photo Gallery</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (!empty($galleryImages) && count($galleryImages))
                @foreach ($galleryImages as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset($item->local_image) }}" alt="{{ $item->alternate_text }}">
                            <a data-fancybox="gallery" href="{{ asset($item->local_image) }}" class="link">
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h5><a>{{ $item->title }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <!-- Fancybox Trigger -->
                                {{-- <a data-fancybox="gallery" href="./assets/images/gallery1.jpg"> --}}
                                <img src="./assets/images/gallery1.jpg" alt="Gallery">
                                {{-- </a> --}}
                                <!-- Fancybox Trigger for the Icon -->
                                <a data-fancybox="gallery" href="./assets/images/gallery1.jpg" class="link">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="content">
                                {{-- <span class="category">Tour & Travel</span> --}}
                                <h5><a>Brown Concrete Building</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">

                            <div class="image">
                                <img src="./assets/images/gallery2.jpg" alt="Gallery">
                                <a data-fancybox="gallery" href="./assets/images/gallery2.jpg" class="link">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>

                            <div class="content">
                                {{-- <span class="category">Tour & Travel</span> --}}
                                <h5><a>Swimming near boat</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">

                            <div class="image">
                                <img src="./assets/images/gallery3.jpg" alt="Gallery">
                                <a data-fancybox="gallery" href="./assets/images/gallery3.jpg" class="link">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>

                            <div class="content">
                                {{-- <span class="category">Tour & Travel</span> --}}
                                <h5><a>Building in the desert</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                            
                                <img src="./assets/images/gallery4.jpg" alt="Gallery">
                                <a data-fancybox="gallery" href="./assets/images/gallery4.jpg" class="link">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        
                            <div class="content">
                                {{-- <span class="category">Tour & Travel</span> --}}
                                <h5><a>Cliff near shore beach</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="image">
                                <img src="./assets/images/gallery5.jpg" alt="Gallery">
                                <a data-fancybox="gallery" href="./assets/images/gallery5.jpg" class="link">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="content">
                                {{-- <span class="category">Tour & Travel</span> --}}
                                <h5><a>Tent camping in the desert</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="image">
                                <img src="./assets/images/gallery6.jpg" alt="Gallery">
                                <a data-fancybox="gallery" href="./assets/images/gallery6.jpg" class="link">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            </a>
                            <div class="content">
                                {{-- <span class="category">Tour & Travel</span> --}}
                                <h5><a>Machu Picchu, Peru</a></h5>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- <div class="col-lg-4 col-sm-6">
                                <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="assets/images/gallery/gallery7.jpg" alt="Gallery">
                                        <a href="destination-details.php" class="link"><i class="fal fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content">
                                        <span class="category">Tour & Travel</span>
                                        <h5><a href="destination-details.php">Gray and black fish under water</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                    <div class="image">
                                        <img src="assets/images/gallery/gallery8.jpg" alt="Gallery">
                                        <a href="destination-details.php" class="link"><i class="fal fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content">
                                        <span class="category">Tour & Travel</span>
                                        <h5><a href="destination-details.php">Yacht sailing near island</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-two-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                                    <div class="image">
                                        <img src="assets/images/gallery/gallery9.jpg" alt="Gallery">
                                        <a href="destination-details.php" class="link"><i class="fal fa-arrow-right"></i></a>
                                    </div>
                                    <div class="content">
                                        <span class="category">Tour & Travel</span>
                                        <h5><a href="destination-details.php">Ship on dock during daytime</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <a href="tour-grid.php" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="View All Gallery">View All Gallery</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div> -->
            </div>
        </div>
    </section>
    <!-- Gallery Area end -->


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

    {{-- <script>
 Fancybox.bind("[data-fancybox='gallery']", {
        Thumbs: {
            autoStart: true,
        },
        Toolbar: {
            display: ["zoom", "close"],
        },
    });
    </script> --}}

@endsection
