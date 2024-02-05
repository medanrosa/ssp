<x-app-layout>
  <div class="backgroundfinal">
       <!-- Testimonials header -->
        <section class="row" id="tmServices">
            <div class="col-12">
              <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header"
                   data-parallax="scroll"
                   data-z-index="101"
                   data-image-src="img/people.jpg">
  
                   <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                      <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Contact</h2>
                      <p class="tm-services-description mb-0 small">
                        
                      </p>
                  </div>
              </div>
            </div>   
          </section>
  
          <section class="row tm-contact-row">
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
              <div class="col-lg-6 tm-contact-col-right">
                  <div class="tm-bg-black-transparent tm-contact-text">
                              
                      <i class="mx-auto mb-5 fas fa-3x fa-address-card tm-app-feature-icon"></i>
                      
                      <h3 class="tm-service-tab-title">Leave us a review</h3>
                      <p class="tm-service-tab-p">
                        We would love to hear about your experience to improve our services
                      </p>                            
                  </div>
              </div>
          </section>
  
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
          <div class="backgroundfinal">
        </x-app-layout>