<x-app-layout>
  <div class="backgroundfinal">
<section class="row" id="tmHome">
  <div class="tm-home-container">
    <div class="text-white tm-home-left">
      <p class="text-uppercase tm-slogan">We made your travels</p>
      <hr class="tm-home-hr" />
      <h2 class="tm-home-title">A Breeeeeez...</h2>
      <div class="tm-bg-black-transparent tm-about-box">
      <p class="tm-home-text">
        RailReady is a revolutionaized online ticket purchasing system that simplifies the process while improving the overall travel experience.
      </p>
      <a href="#tmFeatures" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="tm-home-right">
      <img src="{{url('img/homepgimg.jpg') }}" alt="App on Mobile mockup" />
    </div>
  </div>
</section>

<!-- Features -->
<div class="row" id="tmFeatures">
  <div class="col-lg-4">
    <div class="tm-bg-white-transparent tm-feature-box">
    <h3 class="tm-feature-name">Secure Online Bookings</h3>

    <div class="tm-feature-icon-container">
        <i class="fas fa-3x fa-server"></i>
    </div>

    <p class="text-center">Provides a straightforward and safe online card payment system that eliminates the need to physically buy tickets at counters.</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="tm-bg-white-transparent tm-feature-box">
        <h3 class="tm-feature-name">Up To Date Train Schedules</h3>

        <div class="tm-feature-icon-container">
            <i class="fas fa-3x fa-headphones"></i>
        </div>
        <p class="text-center">Allow users to access the most recent train schedules to better plan their journey.</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="tm-bg-white-transparent tm-feature-box">
        <h3 class="tm-feature-name">Online Booking History</h3>

        <div class="tm-feature-icon-container">
            <i class="fas fa-3x fa-satellite-dish"></i>
        </div>
        <p class="text-center">Keep track of the user’s travel history, based on places they have visited and trains they have taken throughout the year.</p>
    </div>
  </div>
</div>
<!-- Call to Action -->
<section class="row tm-testimonials-cta" id="tmCallToAction">
  <div class="col-12 tm-call-to-action-col">
    <div class="tm-bg-black-transparent tm-about-box3">
      <h2 class="tm-call-to-action-title">Contact Us</h2>
      <p class="tm-call-to-action-description">
      For any inquiries, assistance, or feedback, please don't hesitate to contact our dedicated support team at [email] or [phone number]. We look forward to serving you on your next adventure with RailReady.
      </p>
    </div>
  </div>
</section>
</x-app-layout>
