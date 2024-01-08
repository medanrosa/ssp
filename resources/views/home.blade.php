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
      {{-- <img src="img/mobile-screen.png" alt="App on Mobile mockup" /> --}}
      <img src="{{url('img/bg-01.jpg') }}" alt="App on Mobile mockup" />
    </div>
  </div>
</section>

          <section class="row tm-contact-row">

            <div class="col-lg-6 tm-contact-col-right">
              <div class="tm-bg-black-transparent tm-contact-text">
                          
                  <i class="mx-auto mb-5 fas fa-3x fa-address-card tm-app-feature-icon"></i>
                  
                  <h3 class="tm-service-tab-title">Leave us a review</h3>
                  <p class="tm-service-tab-p">
                    We would love to hear about your experience to improve our services
                  </p>                            
              </div>
          </div>

              <div class="col-lg-6 tm-contact-col-left">
                  <form action="#" method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
                    <div class="form-group">
                      <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                      <textarea rows="6" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary tm-btn-submit rounded-0">
                        Submit
                      </button>
                    </div>
                  </form>
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
    <img src="img/call-to-action-3.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />
    <div class="tm-bg-white tm-call-to-action-text">
      <h2 class="tm-call-to-action-title">Be the first to know</h2>
      <p class="tm-call-to-action-description">
        Subscribe to our news letter to hear the latest update with our system.
      </p>
      <form action="#" method="get" class="tm-call-to-action-form">                
        <input name="email" type="email" class="tm-email-input" id="email" placeholder="Email" />
        <button type="submit" class="btn btn-secondary">Get Updates</button>
      </form>
    </div>
  </div>
</section>
</x-app-layout>