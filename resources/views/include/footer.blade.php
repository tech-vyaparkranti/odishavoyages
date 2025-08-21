<?php
// This is the model you would use to fetch data.
// Make sure this path is correct based on your application structure.
use App\Models\WebSiteElements;

// Fetch the necessary web elements directly within the Blade file.
// This is a simplified way to get key-value pairs from the database.
$webElements = WebSiteElements::whereIn('element', ['Email', 'Phone_number', 'Address', 'Logo', 'footer_content', 'whatsapp_footer_link', 'phone_footer_link'])
                             ->pluck('element_details', 'element')
                             ->toArray();
?>
<footer class="footer">
    <hr/>
    <div class="footer-top">
        <div class="footer-section logo-section">
@if(isset($webElements['Logo']))
                <img src="{{ asset('website/uploads/WesiteElements/' . $webElements['Logo']) }}" style="height:150px;width:150px;" alt="Logo">
            @else
                <img src="/assets/images/logo1.png" style="height:150px;width:150px;" alt="Logo">
            @endif            <p>Where devotion meets ocean waves and hearts. </p>
         
    <label for="enquiry" class="btn-enquire">ENQUIRE NOW</label>
    </div>

        <div class="footer-section">
            <h4>Quick Link</h4>
            <ul>
    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
     <li><a href="{{ route('galleryPages') }}">Gallery</a></li>
      <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
        <li><a href="{{ route('blogpage') }}">Blogs</a></li>
         <li><a href="{{ route('termsConditions') }}">Terms & Conditions</a></li>
    <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
</ul>

         </div>

        <div class="footer-section">
    <h4>Contact Information</h4>

    {{-- Dynamic Email with static fallback --}}
    @if(isset($webElements['Email']))
        <p>
            <i class="fas fa-envelope"></i> 
            <strong>E-mail:</strong> 
            <a href="mailto:{!! $webElements['Email'] !!}">{!! $webElements['Email'] !!}</a>
        </p>
    @else
        <p>
            <i class="fas fa-envelope"></i> 
            <strong>E-mail:</strong> 
            <a href="mailto:info@odishavoyages.co.in">info@odishavoyages.co.in</a>
        </p>
    @endif

    {{-- Dynamic Phone Number with static fallback --}}
    @if(isset($webElements['Phone_number']))
        <p>
            <i class="fas fa-phone"></i> 
            <strong>Contact No:</strong> 
            <a href="tel:{!! $webElements['Phone_number'] !!}">{!! $webElements['Phone_number'] !!}</a>
        </p>
    @else
        <p>
            <i class="fas fa-phone"></i> 
            <strong>Contact No:</strong> 
            <a href="tel:9958298515">9958298515</a>
        </p>
    @endif

    {{-- Dynamic Address with static fallback --}}
    @if(isset($webElements['Address']))
        <p>
            <i class="fas fa-map-marker-alt"></i> 
            <strong>Address:</strong> {!! $webElements['Address'] !!}
        </p>
    @else
        <p>
            <i class="fas fa-map-marker-alt"></i> 
            <strong>Address:</strong> Block K, Birbal Road, Jangpura Ext., New Delhi - 110014
        </p>
    @endif
</div>

    </div>

    <div class="footer-bottom">
        <p>© 2025 All Rights Reserved by odisha voyages  & Developed by <a href="#">Vyapar kranti</a></p>
    </div>
</footer>

<style>
    a:hover{
        color:white;
    }
.footer {
    background: #B71C1C;
    color:white ;
    font-family: Arial, sans-serif;
}
.footer-top {
   display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
   
}

@media only screen and (min-width: 768px) {
  .footer-top {
   
    padding: 30px 100px;
}

}

.footer-section {
    flex: 1;
    min-width: 250px;
    margin-bottom: 20px;
}

.footer-section h4 {
    font-weight: bold;
    margin-bottom: 10px;
    color:white;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin: 5px 0;
}

.footer-section ul li a {
    text-decoration: none;
    color: white;
}

.btn-enquire {
    display: inline-block;
    padding: 8px 15px;
    background: #F1C40F;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.footer-bottom {
    background: #7d2424;
    padding: 10px 20px;
    text-align: center;
    font-size: 14px;
}

.footer-bottom a {
    color: white;
    font-weight: bold;
}

/* Responsive - Center li items on small screens */
@media (max-width: 768px) {
    .footer-top {
        flex-direction: column;
        text-align: center;
    }

    .footer-section ul {
        display: flex;
        flex-direction: column;
        align-items: center;
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
    a{
        color:white;
    }
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