@extends('layouts.webSite')
@section('title', 'Contact Us')
@section('content')


<!-- Contact Info Area start -->
<section class="contact-info-area pt-100 rel z-1">
     <div class="contact-banner">
       <img src="./assets/images/bg-contact.jpg" alt=""> 
       </div>      
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-info-content mb-30 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2>{!! $ContactUs_heading ?? 'Let’s Talk Our Expert Travel Guides' !!}</h2>
                    </div>
                    <p>{!! $contactus_content ?? 'Our dedicated support team is always ready to assist you with any questions or issues, offering
                        prompt and personalized solutions to meet your needs.' !!}</p>
                    <div class="features-team-box counter-text-wrap mt-40">
                        {{-- <h6>20+ Expert Team member</h6>
                        <div class="feature-authors">
                            <img src="assets/images/features/feature-author1.jpg" alt="Author">
                            <img src="assets/images/features/feature-author2.jpg" alt="Author">
                            <img src="assets/images/features/feature-author3.jpg" alt="Author"> --}}
                            <!-- <img src="assets/images/features/feature-author4.jpg" alt="Author"> -->
                            <!-- <img src="assets/images/features/feature-author5.jpg" alt="Author"> -->
                            <!-- <img src="assets/images/features/feature-author6.jpg" alt="Author"> -->
                            <!-- <img src="assets/images/features/feature-author7.jpg" alt="Author"> -->
                            {{-- <span>+</span> --}}
                            <p>One site many popular experience you’ll remember</p>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="content">
                                <h5>Need Help & Support</h5>
                                <div class="text"><i class="far fa-envelope"></i> <a
                                        href="mailto:{!! $Email ?? 'info@aisholidays.com' !!}">{!! $Email ?? 'info@aisholidays.com' !!}</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="content">
                                <h5>Need Any Urgent</h5>
                                <div class="text"><i class="fal fa-phone-volume"></i> 
                                    <a href="tel:{!! $Phone_number1 ?? '+91 7838602000' !!}">{!! $Phone_number1 ?? '91 7838602000' !!}</a>&nbsp; |&nbsp; 
                                    <a href="tel:{!! $Phone_number2 ?? '+91 7838502000' !!}">{!! $Phone_number2 ?? '+91 7838502000' !!}</a></div>
                                <div class="text"><i class="fal fa-phone-volume"></i> <a href="tel:{!! $Phone_number3 ?? '+91 7428280000' !!}">
                                    {!! $Phone_number3 ?? '+91 7428280000' !!}</a>&nbsp; |&nbsp; 
                                    <a href="tel:{!! $Phone_number4 ?? '+91 7831003500' !!}">{!! $Phone_number4 ?? '+91 7831003500' !!}</a></div>
                                <div class="text"><i class="fal fa-phone-volume"></i> <a href="tel:{!! $Phone_number5 ?? '+01 141004080' !!}">{!! $Phone_number5 ?? '+01 141004080' !!}</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Address</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i>{!! $Address ?? ' AiS Tower, Metro Station, 11C/1, opp. Najafgarh, New Bhagat Singh Market, Naya Bazar, Najafgarh, New Delhi, Delhi, 110043' !!}</div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Main Office Address</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i> 55 East 10th Street, New York,
                                    NY 10003, United States</div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Info Area end -->


<!-- Contact Form Area start -->
<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm"  name="contactForm" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        @csrf
                        <div class="section-title">
                            <h2>Get In Touch</h2>
                        </div>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                        value="" required data-error="Please enter your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                                        placeholder="Phone" value="" required data-error="Please enter your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="text">Address</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        placeholder="Enter your address" value="" required
                                        data-error="Please enter your Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="text">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="5"
                                        placeholder="Message" required
                                        data-error="Please enter your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <!-- <ul class="radio-filter mb-25">
                                        <li>
                                            <input class="form-check-input" type="radio" name="terms-condition"
                                                id="terms-condition">
                                            <label for="terms-condition">Save my name, email, and website in this
                                                browser for the next time I comment.</label>
                                        </li>
                                    </ul> -->
                                    <button id="submitButtons" type="submit" class="theme-btn style-two">
                                        <span data-hover="Send Comments">Submit</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                    {{-- <div id="msgSubmit" class="hidden"></div> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset($contactus_image1 ?? './assets/images/contact1.jpg') }}" alt="Contact" class="contact-us_image1">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset($contactus_image2 ?? './assets/images/contact2.jpg') }}" alt="Contact" class="contact-us_image2">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset($contactus_image3 ?? './assets/images/contact3.jpg') }}" alt="Contact" class="contact-us_image3">
                        </div>
                    </div>
                    <div class="circle-logo">
                        <img src="{{ asset($Logo ?? './assets/images/logo.png' ) }}" alt="Logo">
                        <!-- <span class="title h2">Ravelo</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area end -->


<!-- Contact Map Start -->
<div class="contact-map container">
<iframe src="{!! $Map_link ?? 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3502.56396446877!2d76.986643!3d28.612855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0fc2b49b1605%3A0xa87789dceea6dbcc!2sNajafgarh%20Delhi%20Gate!5e0!3m2!1sen!2sin!4v1734677910084!5m2!1sen!2sin' !!}" width="100%" height="450" style="border:0; display:block; margin:auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Contact Map End -->
<style>
    img.contact-us_image1 {
    max-height: 350px;
    min-height: 350px;
    object-fit: cover;
    border-radius:10px;
}
img.contact-us_image2 ,img.contact-us_image3 {
    max-height: 334px;
    min-height: 334px;
    object-fit: cover;
    border-radius:10px;
}
</style>
@endsection
@section('pageScript')
<script type="text/javascript"></script>
@endsection
@section('script')
    <script>
        // Attach submit event handler to the form
        $("#contactForm").on("submit", function(e) {
            e.preventDefault(); // Prevent default form submission

            // Create FormData object
            var form = new FormData(this);

            // Disable the submit button to prevent multiple submissions
            $("#submitButtons").attr("disabled", true);

            // Send AJAX POST request
            $.ajax({
                type: 'post',
                url: '{{ route('saveContactUsDetails') }}', // Backend route for saving contact details
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status) {
                        // Display success message
                        successMessage(response.message, true);

                        // Reset the form after successful submission
                        $("#contactForm")[0].reset();

                        // Re-enable the submit button
                        $("#submitButtons").attr("disabled", false);
                    } else {
                        // Display error message
                        errorMessage(response.message ?? "Something went wrong.");
                        $("#submitButtons").attr("disabled", false);
                    }
                },
                failure: function(response) {
                    // Handle failure response
                    errorMessage(response.message ?? "Something went wrong.");
                    $("#submitButtons").attr("disabled", false);
                },
                error: function(response) {
                    // Handle error response
                    errorMessage(response.message ?? "Something went wrong.");
                    $("#submitButtons").attr("disabled", false);
                }
            });
        });

        // Function to refresh the CAPTCHA (if applicable)
        // function refreshCapthca(captchaImgId, captchaInputId) {
        //     // Replace the CAPTCHA image source to reload it
        //     $("#" + captchaImgId).attr("src", "{{ captcha_src() }}" + "?" + Math.random());

        //     // Clear the CAPTCHA input field
        //     $("#" + captchaInputId).val('');
        // }
    </script>
@endsection