@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<div class="popup" id="popup">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <h2>{{ __('welcome_popup_title') }}</h2>
    <p>{{ __('welcome_popup_message') }}</p>
    <a href="https://api.whatsapp.com/send?phone=+201220016331&text=Welcome to Pyramakerz" target="blank" class="btn join-btn">{{ __('join_now') }} <i class="fab fa-whatsapp"></i></a>
    <button class="btn remind-btn" onclick="closePopup()">{{ __('remind_me_later') }}</button>

  </div>
</div>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2><span>{{ __('empowering_minds') }} </span> </h2>
            <p>{{ __('empowering_minds_text') }}</p>
            <a href="index.php#contact" class="btn-get-started scrollto ">{{ __('get_in_touch') }}</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="assets/img/slide1.png" alt="" class="img-fluid img">
          </div>
        </div>
      </div>
    </div><!-- End Carousel Item 1 -->

    <div class="carousel-item">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2><span>{{ __('innovating_futures') }} </span> </h2>
            <p>
              {{ __('innovating_futures_text') }}
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">{{ __('get_in_touch') }}</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="assets/img/slide2.png" alt="" class="img-fluid img">
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item 2-->

    <div class="carousel-item">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2><span>{{ __('fostering_collaboration') }}</span> </h2>
            <p>
              {{ __('fostering_collaboration_text') }}
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">{{ __('get_in_touch') }}</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="assets/img/slide3.png" alt="" class="img-fluid img">
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item 3 -->

    <div class="carousel-item">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2><span>{{ __('cultivating_excellence') }}</span> </h2>
            <p>
              {{ __('cultivating_excellence_text') }}
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">{{ __('get_in_touch') }}</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="assets/img/slide4.png" alt="" class="img-fluid img">
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item 4 -->

    <div class="carousel-item">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2><span>{{ __('driving_innovation') }}</span> </h2>
            <p>
              {{ __('driving_innovation_text') }}
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">{{ __('get_in_touch') }}</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="assets/img/slide5.png" alt="" class="img-fluid img">
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item 5 -->
  </div>

  <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

  <ol class="carousel-indicators"></ol>

</section><!-- End Hero Section -->

<main id="main">


  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
        <h2>{{ __('about_us') }}</h2>
      </div>

      <div class="row ">



        <div class="col-lg-6" data-aos="flip-up" data-aos-delay="400">
          <div class="about-img">
            <img src="assets/img/about.png" class="img-fluid " alt="">
          </div>
        </div>

        <div class="col-lg-6  " data-aos="flip-down" data-aos-delay="400">
          <h3 class="pt-0 ">Pyramakerz Technologies</h3>



          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active align-items-center justify-content-center" style="margin: auto; ">

              <p>{{ __('pyramakerz_description') }}</p>

            </div><!-- End Tab 1 Content -->


          </div>

        </div>

      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= solution Section ======= -->
  <section id="solution" class="team" style="margin-top:-60px;">
    <div class="container" data-aos="fade-up">

      <div class="section-header" data-aos="zoom-in-up" data-aos="zoom-in-right" data-aos-delay="200">
        <h2>{{ __('our_solutions') }}</h2>
      </div>

      <div class="row gy-5">

        <div class="col-xl-6 col-md-6 " data-aos="fade-down-right" data-aos-delay="400">
          <div class="team-member">

            <div class="member-info solution">
              <div class="row">
                <div class="col-xl-4 col-md-4 member-img" data-aos="zoom-in-left" data-aos-delay="400">
                  <img src="./assets/img/schoolbg.png">
                </div>
                <div class="col-xl-8 col-md-8">
                  <h4>{{ __('school_portal') }}</h4>
                  <p>{{ __('school_portal_description') }}</p>
                  <a href="{{ route('customer.schools') }}" class="btn-get-started scrollto ">{{ __('see_more') }}</a>

                </div>
              </div>
            </div>
          </div>
        </div><!-- End solution 1 -->

        <div class="col-xl-6 col-md-6 " data-aos="fade-down-left" data-aos-delay="400">
          <div class="team-member">

            <div class="member-info solution">
              <div class="row">
                <div class="col-xl-4 col-md-4 member-img" data-aos="zoom-in-right" data-aos-delay="400">
                  <img src="./assets/img/studentbg.png">
                </div>
                <div class="col-xl-8 col-md-8">
                  <h4>{{ __('student_portal') }}</h4>
                  <p>{{ __('student_portal_description') }}</p>
                  <br>
                  <a href="{{ route('customer.students') }}" class="btn-get-started scrollto ">{{ __('see_more') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End solution 2 -->

      </div>
      <div class="row gy-5">
        <div class="col-xl-6 col-md-6 " data-aos="fade-up-right" data-aos-delay="600">
          <div class="team-member">

            <div class="member-info solution">
              <div class="row">
                <div class="col-xl-4 col-md-4 member-img" data-aos="zoom-in-left" data-aos-delay="400">
                  <img src="./assets/img/alefbg.png">
                </div>
                <div class="col-xl-8 col-md-8">
                  <h4>{{ __('alef_bot') }}</h4>
                  <p>{{ __('alef_bot_description') }}</p>
                  <br>
                  <a href="{{ route('customer.alefBot') }}" class="btn-get-started scrollto ">{{ __('see_more') }}</a>

                </div>
              </div>
            </div>
          </div>
        </div><!-- End solution 3 -->

        <div class="col-xl-6 col-md-6 " data-aos="fade-up-left" data-aos-delay="600">
          <div class="team-member">

            <div class="member-info solution">
              <div class="row">
                <div class="col-xl-4 col-md-4 member-img" data-aos="zoom-in-right" data-aos-delay="400">
                  <img src="./assets/img/compbg.png">
                </div>
                <div class="col-xl-8 col-md-8">
                  <h4>{{ __('competitions') }}</h4>
                  <p>{{ __('competitions_description') }}</p>
                  <a href="{{ route('customer.competitions') }}" class="btn-get-started scrollto ">{{ __('see_more') }}</a>

                </div>
              </div>
            </div>
          </div>
        </div><!-- End solution 4 -->



      </div>


    </div>
  </section><!-- End solution Section -->

  <!-- ======= Clients Section ======= -->

  <section id="clients" class="clients">

    <div class="container" data-aos="zoom-out">
      <div class="section-header" data-aos="zoom-in-up">
        <h2>{{ __('our_partners') }}</h2>
      </div>
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/logo1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo8.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo9.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo10.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo11.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo12.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo13.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo14.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo15.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo16.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo17.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo18.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo19.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo20.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo21.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo22.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo23.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo24.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo25.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo26.png" class="img-fluid" alt=""></div>
        </div>
      </div>

    </div>
  </section><!-- End Clients Section -->



  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="blog" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <div class="section-header" data-aos="zoom-in-up">
        <h2>{{ __('blog') }}</h2>
      </div>

      <div class="row posts-list">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog1.jpg" class="img-fluid" alt=""></div>

            <h3 class="post-title"> {{ __('embracing_future') }} <br>
              {{ __('embracing_future_cont') }}
            </h3>
            <p>{{ __('embracing_future_text') }}</p>
            <br>
            <a href="{{ route('customer.blogs1') }}" class="readmore stretched-link"><span>{{ __('read_more') }}</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog2.jpg" class="img-fluid" alt=""></div>

            <h3 class="post-title">{{ __('exploring_interaction') }}<br>{{ __('exploring_interaction_cont') }}</h3>
            <br>
            <p>{{ __('exploring_interaction_text') }}</p>

            <a href="{{ route('customer.blogs2') }}" class="readmore stretched-link"><span>{{ __('read_more') }}</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog3.jpeg" class="img-fluid" alt=""></div>

            <h3 class="post-title">
              {{ __('empowering_educators') }}<br> {{ __('empowering_educators_cont') }}
            </h3>
            <br>
            <p>{{ __('empowering_educators_text') }}</p>
            <a href="{{ route('customer.blogs3') }}" class="readmore stretched-link"><span>{{ __('read_more') }}</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
        <h2>{{ __('get_in_touch') }}</h2>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 ">


        <div class="col-lg-5" data-aos="flip-left" data-aos-delay="400">
          <img src="./assets/img/logo.png" class="img-form">

        </div>
        <div class="col-lg-7" data-aos="flip-right" data-aos-delay="400">
          <form id="contactForm" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <label>{{ __('name') }}</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>{{ __('email') }}</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label>{{ __('subject') }}</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <label>{{ __('message') }}</label>
              <textarea class="form-control" name="message" id="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="error-message" style="display: none; color: red;"></div>
              <div class="sent-message" style="display: none; color: green; background-color: white;">{{ __('success_contact') }}</div>
            </div>
            <div class="text-center">
              <button type="submit" data-aos="flip-up" data-aos-delay="200">{{ __('send_message') }}</button>
            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<div class="wh-api">
  <div class="wh-fixed whatsapp-pulse">
    <a href="https://api.whatsapp.com/send?phone=+201220016331&text=Welcome to Pyramakerz" target="blank">
      <button class="wh-ap-btn"></button>
    </a>
  </div>
</div>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
@endsection
<!-- Vendor JS Files -->
@section('page_js')

<!--<script src="assets/vendor/php-email-form/validate.js"></script>-->



<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
  // pop up
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("popup").style.display = "flex";
  });

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let token = localStorage.getItem("auth_token_pyra12234");

    // Auto-fill email if user is logged in
    if (token) {
      axios.get("/api/user", {
        headers: {
          "Authorization": `Bearer ${token}`
        }
      }).then(response => {
        document.getElementById("email").value = response.data.email;
        document.getElementById("email").readOnly = true;
      }).catch(error => {
        console.error("Error fetching user:", error);
      });
    }

    // Handle form submission
    document.getElementById("contactForm").addEventListener("submit", function(event) {
      event.preventDefault();
      let formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value
      };

      document.querySelector(".error-message").style.display = "none";
      document.querySelector(".sent-message").style.display = "none";

      axios.post("/api/contact", formData, {
        headers: {
          "Authorization": token ? `Bearer ${token}` : "",
          "Content-Type": "application/json"
        }
      }).then(response => {
        document.querySelector(".sent-message").style.display = "block";
        document.getElementById("contactForm").reset();
        if (token) {
          axios.get("/api/user", {
            headers: {
              "Authorization": `Bearer ${token}`
            }
          }).then(response => {
            document.getElementById("email").value = response.data.email;
            document.getElementById("email").readOnly = true;
          }).catch(error => {
            console.error("Error fetching user:", error);
          });
        }

      }).catch(error => {
        document.querySelector(".error-message").style.display = "block";
        document.querySelector(".error-message").textContent = error.response?.data?.message || "Failed to send message.";
      });
    });
  });
</script>
@endsection