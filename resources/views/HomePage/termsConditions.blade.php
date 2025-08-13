@extends('layouts.webSite')
@section('title', 'Terms & Conditions')
@section('content')
{{-- <div class="information-page-slider">
    <img src="./assets/img/travel-bg.jpg" alt="Home Stylers" class="img-fluid">
    <div class="information-content">
        <ul class="m-auto list-unstyled custom-container">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="javascript:void(0);">Terms and Conditions</a></li>
        </ul>
    </div>
</div> --}}
    {{-- <div id="about"> --}}
        {{-- <div class="container-fluid  pb-3"> --}}
            <div class="container">
                {{-- <div class="heading pb-3"> --}}
                    <h2 class="text-center heading_terms_condition">Terms & Conditions</h2>
                {{-- </div> --}}
                <div class="midd-content">
                    {{-- <p class="text-justify">These Terms and Conditions, along with privacy policy or other terms (“Terms”) constitute a binding agreement by and between Aisholidays, ( “Website Owner” or “we” or “us” or “our”) and you (“you” or “your”) and relate to your use of our website, goods (as applicable) or services (as applicable) (collectively, “Services”).</p>
                    <p class="text-justify">By using our website and availing the services, you agree that you have read and accepted these terms (including the privacy policy). We reserve the right to modify these terms at any time and without Assigning any reason. It is your responsibility to periodically review these terms to stay informed of updates.</p> 
                    <p class="text-justify">The use of this website or availing of our Services is subject to the following terms of use:</p>  --}}
                    <ul class="points">
                        <li><p class="text-justify">Hotel and flight cancellations are subject to the respective hotel and airline policies.</p></li>
                        <li><p class="text-justify">AIS Holidays is not responsible for flight rescheduling or cancellations by airlines and their impact on related bookings.</p></li>
                        <li><p class="text-justify">Web check-in is mandatory, and all travel-related documents must be verified before check-in.</p></li>
                        <li><p class="text-justify">Final travel vouchers will be provided 7 days prior to the departure date.</p></li>
                        <li><p class="text-justify">Vehicles are provided strictly for point-to-point transfers, not for personal use.</p></li>
                        <li><p class="text-justify">Hotel rooms are subject to availability at the time of booking.</p></li>
                        <li><p class="text-justify">Rates are subject to change due to variations in airport taxes, hotel rates, transport costs, government taxes, or entrance fees.</p></li>
                        <li><p class="text-justify">Airfares may change without prior notice, and AIS Holidays will not be liable for such changes.</p></li>
                        <li><p class="text-justify">Hotel check-in is at 3:00 PM, and check-out is at 12:00 noon; early check-in or late check-out depends on availability.</p></li>
                        <li><p class="text-justify">Hotel images provided are for reference and may differ from the actual property.</p></li>
                        <li><p class="text-justify">A 25% payment is required to process land bookings.</p></li>
                        <li><p class="text-justify">Full payment is mandatory for booking flights, ferries, and Eurail tickets.</p></li>
                        <li><p class="text-justify">Non-refundable hotel and tour bookings require full payment in advance.</p></li>
                        <li><p class="text-justify">Additional charges apply for payments made via credit cards, debit cards, or Amex.</p></li>
                        <li><p class="text-justify">Once bookings are processed, amendments are subject to charges borne by the guest.</p></li>
                        <li><p class="text-justify">Cruise gratuity fees are excluded from the package and must be paid directly by the guest.</p></li>
                        <li><p class="text-justify">Visa expenses for visa-on-arrival countries are to be borne by the guest.</p></li>
                        <li><p class="text-justify">Passports must be valid for at least 6 months (180 days) from the travel date.</p></li>
                        <li><p class="text-justify">Travel insurance claims must be settled between the guest and the insurance company; AIS Holidays holds no liability.</p></li>
                        <li><p class="text-justify">PAN cards are mandatory for all travelers and must be submitted at the time of booking.</p></li>
                        <li><p class="text-justify">Visa approval or rejection is at the sole discretion of the embassy, and AIS Holidays is not liable for any decisions.</p></li>
                        <li><p class="text-justify">International hotels may require a security deposit or city taxes, which are to be paid by the guest during check-in.</p></li>
                        <li><p class="text-justify">Hotel amenities and special requests (like room preferences, early check-in, or specific views) are subject to availability.</p></li>
                        <li><p class="text-justify">Tours and tickets, once booked, are non-refundable.</p></li>
                        <li><p class="text-justify">Drinks, including water, during meals or sightseeing tours are not included in the package.</p></li>
                        <li><p class="text-justify">Tours, transfers, or activities may be canceled due to unforeseen weather conditions or political issues, and guests must handle such expenses; refunds will be issued for canceled activities.</p></li>
                        <li><p class="text-justify">AIS Holidays charges a non-refundable cancellation fee of ₹5,000 per person.</p></li>
                        <li><p class="text-justify">Duplicate airline, hotel, resort, or cruise bookings will result in forfeiture of payment, and any additional charges will be borne by the guest.</p></li>
                        <li><p class="text-justify">Guests testing positive for COVID-19 during the tour will bear all quarantine and testing expenses, as AIS Holidays is not responsible for such costs.</p></li>
                        <li><p class="text-justify">Guests showing COVID-19 symptoms at arrival may be tested, and if positive, placed in government-managed isolation facilities; such reservations will be considered no-shows.</p></li>
                        <li><p class="text-justify">COVID-19 tests may be mandatory for arrival or departure in some cities or countries; guests must verify and comply with these rules before travel.</p></li>
                        <li><p class="text-justify">Travel insurance is highly recommended and should be arranged by the guest or through AIS Holidays before traveling.</p></li>
                    </ul>
                             
                </div>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}
    <style>
        .heading_terms_condition{
            margin-top: 120px;
        }
       .midd-content .points li {
    list-style: disc ;
    padding: 0;
    margin: 0;
}
    </style>
@endsection