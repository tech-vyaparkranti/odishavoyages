@extends('layouts.webSite')
@section('title', 'Privacy Policy')
@section('content')
<div class="information-page-slider">
    <img src="./assets/img/travel-bg.jpg" alt="Home Stylers" class="img-fluid">
    <div class="information-content pt-80">
        <!-- <ul class="m-auto list-unstyled custom-container"> -->
            <!-- <li><a href="{{ url('/') }}">Home</a></li> -->
            <!-- <li><a href="javascript:void(0);">Privacy Policy</a></li> -->
        <!-- </ul> -->
    </div>
</div>
    <div id="about">
        <div class="default-content pt-2 pb-2">
            <div class="container">
                <div class="site-title pb-2">
                    <h2 class="text-center" style="">Privacy Policy</h2>
                </div>
                <div class="midd-content">
                    <p class="text-justify">Welcome to AIS Holidays. By using our website and services, you agree to our privacy policy, which outlines how we collect, use, and protect your data. 
                  </p>
                    <h5>Legal Compliance</h5>
                    <p>Our privacy policies are developed in accordance with the Ordinance of Laws of Special Tour and Travel Administration of India. Any unauthorized correction, copying, or misuse of personal data is strictly prohibited under Chapter 486. While users are free to explore our website and services, we advise against sharing personal data unless necessary. In cases where data is collected, we ensure its protection from external or third-party access and commit to deleting it after use.</p>

                    <h5>Data Collection & Usage</h5>
                    <p class="text-justify">AIS Holidays PVT LTD collects user information solely for statutory and promotional purposes. This includes contact details (email, address, phone number), age, country, and travel history. Information submitted via website forms is used to send promotional content, and users may opt out at any time.</p>
                    
                    <h5>Website Tracking & User Experience</h5>
                    <p class="text-justify">We track domain names and page visits to analyze website traffic and improve user experience. This statistical data helps us refine our services and enhance customer satisfaction. Advertisers associated with AIS Holidays may send promotional emails, which users can unsubscribe from at their discretion.</p>

                    <h5 class="text-justify">We may collect personal data for specific purposes, including:</h5>
                    <ul class="privacyb">
                        <li><b>&nbsp; • &nbsp;Identifying participants</b> in promotional activities.</li>
                        <li><b>&nbsp; • &nbsp;Responding to inquiries</b> and sending notifications</li>
                        <li><b>&nbsp; • &nbsp;Announcing promotions</b> and new services.</li>
                        <li><b>&nbsp; • &nbsp;Maintaining records</b> for legal and commercial purposes.</li>
                    </ul><br>
                    
                    <h5>Data Safety & Security</h5>
                    <p class="text-justify">All collected data is stored securely on our servers, accessible only to authorized contractors and business partners. While we take reasonable steps to protect user data, we cannot guarantee absolute security against third-party breaches. Users are advised to verify our website domain <b>(aisholidays)</b> before submitting any personal data.</p>
            
                    <h5>User Consent</h5>
                    <p class="text-justify">By submitting data through our contact forms or applications, users confirm that the information provided is accurate. They also consent to its use for ongoing promotional and marketing activities.</p>
                    
                    <h5>Policy Amendments</h5>
                    <p class="text-justify">AIS Holidays PVT LTD reserves the right to modify or remove any section of this privacy policy without prior notice. Updates will be reflected on our website.</p> 
                    <p class="text-justify">For any questions regarding this policy, please contact us directly.</p>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <style>
ul .privacyb{
  list-style-type: circle;
}
</style>
@endsection