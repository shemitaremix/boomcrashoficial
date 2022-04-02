 @extends('layouts.postlayout')

 @section('contenidillo')
 <main>
  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <div class="img-fluid text-center">
            <img src="../assets/img/bg_image_2.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 pr-lg-5">
          <h2 class="title-section">We're <span class="marked">Dynamic</span> Team of Creatives People</h2>
          <div class="divider"></div>
          <p>We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
          <a href="#" class="btn btn-primary">More Details</a>
          <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section counter-section">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-lg-4">
          <p>Total Invest</p>
          <h2>$<span class="number" data-number="816278"></span></h2>
        </div>
        <div class="col-lg-4">
          <p>Yearly Revenue</p>
          <h2>$<span class="number" data-number="216422"></span></h2>
        </div>
        <div class="col-lg-4">
          <p>Growth Ration</p>
          <h2><span class="number" data-number="73"></span>%</h2>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- Testimonials -->
  <div class="page-section bg-light">
    <div class="container">
      
      <div class="owl-carousel" id="testimonials">
        <div class="item">
          <div class="row align-items-center">
            <div class="col-md-6 py-3">
              <div class="testi-image">
                <img src="../assets/img/person/person_1.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 py-3">
              <div class="testi-content">
                <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente quo.</p>
                <div class="entry-footer">
                  <strong>Melvin Platje</strong> &mdash; <span class="text-grey">CEO Slurin Group</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="row align-items-center">
            <div class="col-md-6 py-3">
              <div class="testi-image">
                <img src="../assets/img/person/person_2.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 py-3">
              <div class="testi-content">
                <p>Repudiandae vero assumenda sequi labore ipsum eos ducimus provident a nam vitae et, dolorum temporibus inventore quaerat consectetur quos! Animi, qui ratione?</p>
                <div class="entry-footer">
                  <strong>George Burke</strong> &mdash; <span class="text-grey">CEO Letro</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
  <div class="page-section client-section">
    <div class="container-fluid">
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
        <div class="item">
          <img src="../assets/img/clients/airbnb.png" alt="">
        </div>
        <div class="item">
          <img src="../assets/img/clients/google.png" alt="">
        </div>
        <div class="item">
          <img src="../assets/img/clients/stripe.png" alt="">
        </div>
        <div class="item">
          <img src="../assets/img/clients/paypal.png" alt="">
        </div>
        <div class="item">
          <img src="../assets/img/clients/mailchimp.png" alt="">
        </div>
      </div>
    </div> <!-- .container-fluid -->
  </div> <!-- .page-section -->
</main>
 @endsection