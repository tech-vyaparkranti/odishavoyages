@extends('layouts.webSite')
@section('title', 'Blog')
@section('content')

    <!-- Blog List Area start -->
    <section class="blog-list-page py-100 rel z-1">
        <div class="blog-banner" style="margin-bottom:50px; ">
            <img src="./assets/images/bannerblog.jpg" alt="" style="max-height:200px;width:100%; object-fit:cover;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $item)
                            <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                </div>
                                <div class="content">
                                    <a class="category">{{ $item->blog_category }}</a>
                                    <h5><a href="{{ route('blogDetailpage', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                    </h5>
                                    {{-- <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> <a>{{ $item->blog_date }}</a></li>
                                        <li><i class="far fa-comments"></i> <a>Comments (5)</a></li>
                                    </ul> --}}
                                    {{-- <p>We specialize in crafting unforgettable city experiences for travelers seeking</p> --}}
                                    <a href="{{ route('blogDetailpage', ['slug' => $item->slug]) }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">Read More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-list2.jpg" alt="Blog List">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a>Ultimate Guide to Planning Your Dream Vacation</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a>25 February 2024</a></li>
                                    <li><i class="far fa-comments"></i> <a>Comments (5)</a></li>
                                </ul>
                                <p>We specialize in crafting unforgettable city experiences for travelers seeking</p>
                                <a href="{{ route('blogpage') }}" class="theme-btn style-two style-three">
                                    <span data-hover="Book Now">Read More</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-list3.jpg" alt="Blog List">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a>Ultimate Guide to Planning Your Dream Vacation</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a>25 February 2024</a></li>
                                    <li><i class="far fa-comments"></i> <a>Comments (5)</a></li>
                                </ul>
                                <p>We specialize in crafting unforgettable city experiences for travelers seeking</p>
                                <a href="{{ route('blogpage') }}" class="theme-btn style-two style-three">
                                    <span data-hover="Book Now">Read More</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-list4.jpg" alt="Blog List">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a>Ultimate Guide to Planning Your Dream Vacation</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a>25 February 2024</a></li>
                                    <li><i class="far fa-comments"></i> <a>Comments (5)</a></li>
                                </ul>
                                <p>We specialize in crafting unforgettable city experiences for travelers seeking</p>
                                <a href="{{ route('blogpage') }}" class="theme-btn style-two style-three">
                                    <span data-hover="Book Now">Read More</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!-- <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="./assets/images/blog-list5.jpg" alt="Blog List">
                                </div>
                                <div class="content">
                                    <a href="blog.php" class="category">Travel</a>
                                    <h5><a>Ultimate Guide to Planning Your Dream Vacation</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> <a>25 February 2024</a></li>
                                        <li><i class="far fa-comments"></i> <a>Comments (5)</a></li>
                                    </ul>
                                    <p>We specialize in crafting unforgettable city experiences for travelers seeking</p>
                                    <a href="{{ route('blogpage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">Read More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div> -->

                    <!-- <ul class="pagination pt-15 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
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
                            </ul> -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    <div class="blog-sidebar">

                        {{-- <div class="widget widget-search" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <form action="#" class="default-search-form">
                                    <input type="text" placeholder="Search" required="">
                                    <button type="submit" class="searchbutton far fa-search"></button>
                                </form>
                            </div> --}}

                        <!-- <div class="widget widget-category" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                    <h5 class="widget-title">Category</h5>
                                    <ul class="list-style-three">
                                        <li><a href="blog.php">Adventure</a></li>
                                        <li><a href="blog.php">Hiking & Trekking</a></li>
                                        <li><a href="blog.php">Cycling Tours</a></li>
                                        <li><a href="blog.php">Family Tours</a></li>
                                        <li><a href="blog.php">Mountain Hiking</a></li>
                                        <li><a href="blog.php">Rafting Excursion</a></li>
                                        <li><a href="blog.php">Coastal Paragliding</a></li>
                                    </ul>
                                </div> -->

                        <div class="widget widget-news" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <h5 class="widget-title">Recent News</h5>
                            <ul>
                                @foreach ($otherBlogs as $otherBlog)
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset($otherBlog->image) }}" alt="{{ $otherBlog->title }}">
                                        </div>
                                        <div class="content">
                                            <h6><a
                                                    href="{{ route('blogDetailpage', ['slug' => $otherBlog->slug]) }}">{{ $otherBlog->title }}</a>
                                            </h6>
                                            <span class="date"><i
                                                    class="far fa-calendar-alt"></i>{{ $otherBlog->blog_date }}</span>
                                        </div>
                                    </li>
                                @endforeach
                                {{-- <li>
                                        <div class="image">
                                            <img src="./assets/images/news1.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <h6><a href="{{ route('blogpage') }}">Unique Destinations an tolded Stories ways</a></h6>
                                            <span class="date"><i class="far fa-calendar-alt"></i> 25 Feb 2024</span>
                                        </div>
                                    </li> --}}
                                {{-- <li>
                                        <div class="image">
                                            <img src="./assets/images/news2.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <h6><a href="{{ route('blogpage') }}">Immersive Experiences from Around Globe</a></h6>
                                            <span class="date"><i class="far fa-calendar-alt"></i> 25 Feb 2024</span>
                                        </div>
                                    </li> --}}
                                {{-- <li>
                                        <div class="image">
                                            <img src="./assets/images/news3.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <h6><a href="{{ route('blogpage') }}">Journey to Inspire Your Next Adventure</a></h6>
                                            <span class="date"><i class="far fa-calendar-alt"></i> 25 Feb 2024</span>
                                        </div>
                                    </li> --}}
                            </ul>
                        </div>

                        <div class="widget widget-gallery" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <h5 class="widget-title">Gallery</h5>
                            {{-- <div class="gallery">
                                <a href="assets/images/gallery1.jpg">
                                    <img src="./assets/images/gallery1.jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery2.jpg">
                                    <img src="./assets/images/gallery2.jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery3.jpg">
                                    <img src="./assets/images/gallery3.jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery4.jpg">
                                    <img src="./assets/images/gallery4.jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery5.jpg">
                                    <img src="./assets/images/gallery5.jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery6.jpg">
                                    <img src="./assets/images/gallery6.jpg" alt="Gallery">
                                </a>
                                <a href="./assets/images/gallery7 (1).jpg">
                                    <img src="./assets/images/gallery7 (1).jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery8.jpg">
                                    <img src="./assets/images/gallery8.jpg" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery9.jpg">
                                    <img src="./assets/images/gallery9.jpg" alt="Gallery">
                                </a>
                            </div> --}}
                            <div class="gallery">
                                @if(!empty($galleryImages) && count($galleryImages) > 0)
                                    @foreach($galleryImages as $image)
                                        <a href="#">
                                            <img src="{{ asset($image->local_image) }}" alt="Blog Gallery">
                                        </a>
                                    @endforeach
                                @else
                                <a href="assets/images/gallery1.jpg">
                                    <img src="{{ asset('assets/images/gallery1.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery2.jpg">
                                    <img src="{{ asset('assets/images/gallery2.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery3.jpg">
                                    <img src="{{ asset('assets/images/gallery3.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery4.jpg">
                                    <img src="{{ asset('assets/images/gallery4.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery5.jpg">
                                    <img src="{{ asset('assets/images/gallery5.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery6.jpg">
                                    <img src="{{ asset('assets/images/gallery6.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery7.jpg">
                                    <img src="{{ asset('./assets/images/gallery9.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery8.jpg">
                                    <img src="{{ asset('./assets/images/gallery8.jpg') }}" alt="Gallery">
                                </a>
                                <a href="assets/images/gallery9.jpg">
                                    <img src="{{ asset('./assets/images/gallery9.jpg') }}" alt="Gallery">
                                </a>
                                @endif
                            </div>
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
                                <img src="./assets/images/cta-widget.png" alt="CTA">
                            </div>
                            <!-- <div class="cta-shape"><img src="./assets/images/cta-shape.png" alt="Shape"></div> -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Blog List Area end -->

@endsection
