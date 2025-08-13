<!-- footer area start -->
<!-- <footer class="main-footer bgs-cover overlay rel z-1 pb-25" style="background-image: url(assets/images/backgrounds/footer.jpg);"> -->
    <div class="container">
        <!-- <div class="footer-top pt-100 pb-30">
            <div class="row justify-content-between">
                
                <div class="newsletter col-xl-5 col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-35">
                        <h2>Subscribe Newsletter</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                    </div>
                    <div class="subscribe">
                      <form class="newsletter-form mb-50" action="#">
                        <input id="news-email" type="email" placeholder="Email Address" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Subscribe">Subscribe</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                      </form>
                    </div>  
                </div>
            </div>
        </div> -->
    </div>
    <div class="widget-area pt-95 pb-45">
        <div class="container">
            <div class="row cols-xl-5 cols-lg-4 cols-md-3">
                <!-- <div class="col col-small" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Services</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="destination-details.php">Best Tour Guide</a></li>
                            <li><a href="destination-details.php">Tour Booking</a></li>
                            <li><a href="destination-details.php">Hotel Booking</a></li>
                            <li><a href="destination-details.php">Ticket Booking</a></li>
                            <li><a href="destination-details.php">Rental Services</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-text">
                        <div class="footer-logo mb-25">
                            <a href="{{ url('/') }}"><img src="{{asset($Logo ?? 'assets/images/logo.png')}}" alt="Logo"></a>
                        </div>
                        <p>{!! $footer_content ?? 'We make your dream more beautiful & enjoyful with lots of happiness.' !!}</p>
                        
                    </div>
                </div>
                <div class="col-lg-2 col-small" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Company</h5>
                        </div>
                        <ul class="list-style-three">
                        <li class="current"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}">About</a></li>
                        <li><a href="{{ route('tourpage') }}">Tour</a></li>
                        <li><a href="{{ route('destinationpage') }}">Destination</a></li>
                        <li><a href="{{ route('servicePages') }}">Services</a></li>
                        <li><a href="{{ route('blogpage') }}">Blog</a></li>
                        <li><a href="{{ route(name: 'galleryPages') }}">Gallery</a></li>
                        <li><a href="{{ route(name: 'privacyPolicy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route(name: 'CancellationRefundPolicy') }}">Cancellation Policy</a></li> 
                        <li><a href="{{ route(name: 'contactUs') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col col-small" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Destinations</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="destination-details.php">African Safaris</a></li>
                            <li><a href="destination-details.php">Alaska & Canada</a></li>
                            <li><a href="destination-details.php">South America</a></li>
                            <li><a href="destination-details.php">Middle East</a></li>
                            <li><a href="destination-details.php">South America</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- <div class="col col-small" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Categories</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="contact.php">Adventure</a></li>
                            <li><a href="contact.php">Hiking & Trekking</a></li>
                            <li><a href="contact.php">Cycling Tours</a></li>
                            <li><a href="contact.php">Family Tours</a></li>
                            <li><a href="contact.php">Wildlife Tours</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-3 col-sm-12 " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-contact">
                        <div class="footer-title">
                            <h5>Get In Touch</h5>
                        </div>
                        <ul class="list-style-one">
                            <li><i class="fal fa-map-marked-alt"></i>{!! $Address ?? 'AiS Tower, Metro Station, 11C/1, opp. Najafgarh, Naya Bazar, Najafgarh, New Delhi, Delhi, 110043' !!}</li>
                            <li><i class="fal fa-envelope"></i> <a href="mailto:{!! $Email ?? 'info@aisholidays.com' !!}">{!! $Email ?? 'info@aisholidays.com' !!}</a></li>
                            <!-- <li><i class="fal fa-clock"></i> Mon - Fri, 08am - 05pm</li> -->
                            <li><i class="fal fa-phone-volume"></i>  <a href="tel:{!! $Phone_number1 ?? '+91 7838602000' !!}">{!! $Phone_number1 ?? '91 7838602000' !!}</a></li>

                            <li><i class="fal fa-phone-volume"></i><a href="tel:{!! $Phone_number2 ?? '+91 7838502000' !!}">{!! $Phone_number2 ?? '+91 7838502000' !!}</a></li>
                            <li><i class="fal fa-phone-volume"></i><a href="tel:{!! $Phone_number3 ?? '+91 7428280000' !!}">
                                {!! $Phone_number3 ?? '+91 7428280000' !!}</a></li>

                            <li><i class="fal fa-phone-volume"></i> <a href="tel:{!! $Phone_number4 ?? '+91 7831003500' !!}">{!! $Phone_number4 ?? '+91 7831003500' !!}</a></li>

                            <li><i class="fal fa-phone-volume"></i> <a href="tel:{!! $Phone_number5 ?? '+01 141004080' !!}">{!! $Phone_number5 ?? '+01 141004080' !!}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-small" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Follow Us</h5>
                        </div>
                        <div class="social-style-one mt-15">
                            <a href="{!! $facebook_link ?? 'https://www.facebook.com' !!}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{!! $youtube_link ?? 'https://www.youtube.com' !!}"><i class="fab fa-youtube"></i></a>
                            {{-- <a href="{!! $pinterest_link ?? 'https://www.pinterest.com' !!}"><i class="fab fa-pinterest"></i></a> --}}
                            {{-- <a href="{!! $x_link ?? 'https://www.x.com' !!}"><i class="fa-brands fa-x-twitter"></i></a> --}}
                            <a href="{!! $insta_link ?? 'https://www.youtube.com' !!}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-5 pb-20">
        <div class="container">
            <div class="row">
               <div class="col-lg-5">
                    <div class="copyright-text text-center text-lg-start mb -5">
                        <p>© 2024 Ais Holidays Pvt. Ltd. Design by <a href="https://www.vyaparkranti.com/">VyaparKranti.</a></p>
                    </div>
               </div>
               <div class="col-lg-7 text-center text-lg-end">
                   <ul class="footer-bottom-nav">
                       <li><a href="{{ route('termsConditions') }}">Terms of services</a></li>
                       <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                       <li><a href="#">Refund Policies</a></li>
                       <li><a href="#">Cookies</a></li>
                   </ul>
               </div>
            </div>
            <!-- Scroll Top Button -->
            <button class="scroll-top scroll-to-target" data-target="html"><img src="{{asset('./assets/images/icons/scroll-up.png')}}" alt="Scroll  Up"></button>
        </div>
    </div>
</footer>
<style>
    .footer-logo img {
        max-width:200px;
    }
    @media (min-width: 1200px) {
    .col-xl-5 {
        flex: 0 0 auto;
        width: 32.666667%;
    }
}
.newsletter {
    display:flex;
}
@media (max-width: 768px) {
    .row-cols-md-3>* {
        flex: 0 0 auto;
        width: 48.333333%;
    }
}
@media(max-width:450px){
    .copyright-text p{
        margin-top: 20px;
    }
}
</style>
<!-- footer area end -->
<input id="enquiry" hidden="" type="checkbox">
<section class="enquiry-form">
    <label for="enquiry" class="enquiry-button">Enquire now</label>
    <div class="enquiry-container">
        <div class="contact-box_right_box">
            <div class="contact-box_form_box">

                <div id="success"></div>
                <form id="enquiryForm">
                    @csrf
                    <div class="control-group mt-25">
                        <input type="text" class="form-control bg-transparent p-4" id="name" name="name" placeholder="Your Name" required title="Please enter your name">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                        <p class="help-block text-danger"></p>
                    </div>
                    <!-- <div class="control-group">
                        <input type="text" class="form-control bg-transparent p-4" id="subject"  name="subject" placeholder="Subject" required="true" data-validation-required-message="Please enter a subject">
                        <p class="help-block text-danger"></p>
                    </div> -->
                    <div class="control-group">
                        <textarea class="form-control bg-transparent py-3 px-4" rows="2" id="message" name="message"  placeholder="Message" required="true" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <!-- <x-input-with-label-element id="captcha" type="text" label="Captcha" name="captcha" required placeholder="Captcha"></x-input-with-label-element> -->
                    <!-- <div class="col-md-12 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-md-6 pt-4">
                                <img  class="img-thumbnail h-100" src="{{ captcha_src() }}" id="captcha_img_id2">
                            </div>
                            <div class="col-md-6 pt-4 view-button">
                                <button type="button" class="btn default-btn btn-block font-weight-bold" onclick="refreshCapthca('captcha_img_id2','captcha')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16"> <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" /><path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" /></svg> Refresh </button>
                            </div>
                        </div>
                    </div> -->
                    <div>
                        <button class="btn btn-primary font-weight-bold py-3 px-5" id="submitButton" type="submit">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<style>
section.enquiry-form {
  position: fixed;
  top: 50%;
  right: -0%;
  z-index: 99;
  transition: var(--transition);
  margin-left: 40px;
  transform: translateY(-50%);
  margin-right: -400px;
}
.enquiry-button {
    transform: rotate(-90deg);
    top: 50%;
    left: calc(0% - 40px - 40px);
    cursor: pointer;
    margin: 0 0;
    color: #ffffff;
    height: 40px;
    user-select: none;
    -moz-user-select: none;
    line-height: 40px;
    padding: 0 15px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    /* background-color: rgb(var(--blue-color)); */
    background: var(--primary-color);
    -webkit-animation: liner_bg 5s ease infinite;
    animation: liner_bg 5s ease-in-out infinite;
    background-size: 300% 300%;
    position: absolute;
    border: 1px solid rgb(var(--black-color));
}
.contact-box_form_box {
    background-color: #fff;
    padding: 15px;
    border-radius: 10px;
    max-width: 400px;
    min-width: 400px;
    margin: 1rem auto;
    width: 100%;
}
.btn-primary {
    color: #fff;
    border-color:var(--primary-color) !important;
    background-color:var(--primary-color) !important;
    text-align:center;

}
#enquiry:checked + .enquiry-form {margin-right: 0px;}
.enquiry-container {box-shadow: 0px 0px 15px -5px rgba(0 0 0 / 0.5);}
@-webkit-keyframes liner_bg {
  0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
@keyframes liner_bg {
  0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
input, select, textarea, .nice-select, .form-control {
    width: 100%;
    height: auto;
    font-weight: 400;
    border-radius: 0;
    font-size: 16px;
    padding: 15px 30px;
    /* background-color: grey; */
    border: 1px solid #757070;
    font-family: var(--heading-font);
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



