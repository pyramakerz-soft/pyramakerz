@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')

<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
  <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
    <h2>{!! __('schools.welcome_title') !!}</h2>
    <p>{{ __('schools.welcome_description') }}</p>
    <div class="d-flex">
      <a href="#contact" class="btn-get-started scrollto">{{ __('schools.get_in_touch') }}</a>
      <a href="https://youtu.be/N0RQdYYzxXU?si=iBXuGw5MMN5Yq5Mw"
        class="glightbox btn-watch-video d-flex align-items-center">
        <i class="bi bi-play-circle"></i><span>{{ __('schools.watch_video') }}</span>
      </a>
    </div>
  </div>
</section>

<main id="main">


  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-1-circle-fill"></i>
              </div>
              <a href="" class="stretched-link">
                <h3>{{ __('schools.integrated_steam') }}</h3>
                <p>
                  {{ __('schools.integrated_steam_text') }}
                </p>
              </a>

            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-item">
            <div class="img">
              <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-2-circle-fill"></i>
              </div>
              <a href="" class="stretched-link">
                <h3>{{ __('schools.curriculum_design') }}</h3>
                <p>{{ __('schools.curriculum_design_text') }}</p>
              </a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-item">
            <div class="img">
              <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-3-circle-fill"></i>
              </div>
              <a href="" class="stretched-link">
                <h3>{{ __('schools.educator_empowerment') }}</h3>
                <p>{{ __('schools.educator_empowerment_text') }}</p>
              </a>
            </div>
          </div>
        </div><!-- End Service Item -->



      </div>

    </div>
  </section><!-- End Services Section -->

  <section>
    <div class="container">
      <div class="section-header" data-aos="zoom-out">
        <h2>{{ __('schools.why_pyramakerz') }}</h2>
      </div>
      <div class="wrapper" data-aos="zoom-in-up" data-aos-delay="200">
        <div class="container-count">
          <i class="fas fa-clock"></i>
          <span class="num" data-target="2500000">000</span>
          <span class="text">{{ __('schools.training_hours') }}</span>
        </div>

        <div class="container-count">
          <i class="fas fa-book-reader"></i>
          <span class="num" data-target="20000">000 k+</span>
          <span class="text">{{ __('schools.num_students') }}</span>
        </div>

        <div class="container-count">
          <i class="fas fa-school"></i>
          <span class="num" data-target="50">000</span>
          <span class="text">{{ __('schools.num_schools') }}</span>
        </div>

        <div class="container-count">
          <i class="fas fa-chalkboard-teacher"></i>
          <span class="num" data-target="450">000</span>
          <span class="text">{{ __('schools.num_teachers') }}</span>
        </div>
      </div>
    </div>
  </section>





  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>{{ __('schools.our_solutions') }}</h2>
        <h4>{{ __('schools.our_solutions_text') }}</h4>
      </div>

      <ul class="nav nav-tabs row gy-4 d-flex  text-center">

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1" href="indexb2b.php">
            <i class="bi bi-cpu color-orange"></i>
            <h4>{{ __('schools.innovation_labs') }}</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <i class="bi bi-calendar-week color-orange"></i>
            <h4>{{ __('schools.inspiring_events') }}</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <i class="bi bi-motherboard color-orange"></i>
            <h4>{{ __('schools.tech_support') }}</h4>
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <i class="bi bi-book color-orange"></i>
            <h4>{{ __('schools.cutting_edge') }}</h4>
          </a>
        </li><!-- End Tab 4 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
            <i class="bi bi-card-checklist color-orange"></i>
            <h4>{{ __('schools.tailored_solutions') }}</h4>
          </a>
        </li><!-- End Tab 5 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
            <i class="bi bi-person-fill-check color-orange"></i>
            <h4>{{ __('schools.empowering_teachers') }}</h4>
          </a>
        </li><!-- End Tab 6 Nav -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>{{ __('schools.implementing_eco') }}</h3>
              <p class="">
                {{ __('schools.immersive_labs') }}
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.3d_equipments') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.project_components') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.sw_package') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.necessary_devices') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.power_tools') }}

                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.materials') }}
                </li>
              </ul>

            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/lab.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane" id="tab-2">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>{{ __('schools.events') }}</h3>
              <p>
                {{ __('schools.events_text') }}
              </p>


              <ul>
                <li><i class="bi bi-check-circle-fill"></i>

                  {{ __('schools.tech_day') }}

                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.comp_text') }}
                </li>

              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/event11.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->

        <div class="tab-pane" id="tab-3">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3> {{ __('schools.software_support') }}</h3>
              <p>
                {{ __('schools.software_support_text') }}
              </p>

              <ul>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.lms') }}

                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.supervision') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.fabrication') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.tools') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.laptops') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.printer') }}
                </li>
              </ul>

            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/tech.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 3 -->

        <div class="tab-pane" id="tab-4">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3> {{ __('schools.curicula') }}</h3>
              <p>
                {{ __('schools.curicula_text') }}
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.curicula_text2') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.curicula_text3') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.curicula_text4') }}
                </li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/curricula.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->

        <div class="tab-pane" id="tab-5">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3> {{ __('schools.customize_solutions') }} </h3>

              <p class="">
                {{ __('schools.customize_solutions_text') }}
              </p>
              <ul>

                <p class="">
                  {{ __('schools.benefits') }}
                </p>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.empower_school') }}

                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.empower_teachers') }}

                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.empower_students') }}
                </li>

                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.boost_school') }}
                </li>

                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.unlease_potential') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.lab_kits') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.orientation_day') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.student_completions') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.lms_track') }}
                </li>
                <li><i class="bi bi-check-circle-fill"></i>
                  {{ __('schools.offer') }}
                </li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/solution.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 5 -->

        <div class="tab-pane" id="tab-6">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>{{ __('schools.teacher_training') }}</h3>
              <p>{{ __('schools.teacher_training_text') }}</p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> {{ __('schools.teacher_training_point1') }}</li>
                <li><i class="bi bi-check-circle-fill"></i> {{ __('schools.teacher_training_point2') }}</li>
                <li><i class="bi bi-check-circle-fill"></i> {{ __('schools.teacher_training_point3') }}</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/teachertrain.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 6 -->

      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Clients Section ======= -->

  <section id="clients" class="clients">

    <div class="container">
      <div class="section-header" data-aos="zoom-in-up">
        <h2>{{ __('our_partners') }}</h2>
      </div>
      <div class="clients-slider swiper" data-aos="zoom-out" data-aos-delay="200">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/logo32.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo28.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo29.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo30.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/logo31.png" class="img-fluid" alt=""></div>
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



  <section class="pricing-section">
    <div class="container">
      <div class="section-header" data-aos="zoom-in-up">
        <h2>{{ __('schools.best_learning_programs') }}</h2>
      </div>

      <div class="row">
        <!-- STEM Attack -->
        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-aos="fade-up" data-aos-delay="200">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon-outer"><i class="fas fa-rocket"></i></div>
            </div>
            <div class="price-box">
              <h4 class="price">{{ __('schools.stem_attack') }}</h4>
            </div>
            <ul class="features">
              <p>{{ __('schools.stem_attack_text') }}</p>
            </ul>
          </div>
        </div>

        <!-- Integrated Solutions -->
        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-aos="fade-up" data-aos-delay="400">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon-outer"><i class="fas fa-gem"></i></div>
            </div>
            <div class="price-box">
              <h4 class="price">{{ __('schools.integrated_solutions') }}</h4>
            </div>
            <ul class="features">
              <p>{{ __('schools.integrated_solutions_text') }}</p>
            </ul>
          </div>
        </div>

        <!-- AI Labs -->
        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-aos="fade-up" data-aos-delay="800">
          <div class="inner-box">
            <div class="icon-box">
              <div class="icon-outer"><i class="fas fa-rocket"></i></div>
            </div>
            <div class="price-box">
              <h4 class="price">{{ __('schools.ai_labs') }}</h4>
            </div>
            <ul class="features">
              <p>{{ __('schools.ai_labs_text') }}</p>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </section>



  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">

          <div class="section-header" data-aos="zoom-out">
            <h2>{{ __('schools.impact_showcase') }}</h2>
          </div>
        </div>
        <div class="col-lg-6">

          <a class="btn-explore scrollto" href="https://www.youtube.com/playlist?list=PLWYgWsFUYmKMbV4Va4qwqrw-NHKcZjC3M&si=eC5nX_RU9E_-kzEm" data-aos="flip-up" data-aos-delay="400">{{ __('explore_more') }}</a>

        </div>
      </div>
    </div>
    <div class="wrappers-gallery" data-aos="zoom-in" data-aos-delay="200">
      <img src="./assets/img/img1.jpg">
      <img src="./assets/img/img2.JPG">
      <img src="./assets/img/img3.JPG">
      <img src="./assets/img/img4.JPG">
      <img src="./assets/img/img9.JPG">
      <img src="./assets/img/img5.JPG">
      <img src="./assets/img/img7.JPG">
      <img src="./assets/img/img8.JPG">
      <img src="./assets/img/img6.jpg">
      <img src="./assets/img/img10.JPG">
      <!-- <img src="./assets/img/labs.png"> -->

      <!-- <img src="https://source.unsplash.com/random/600x600?spring" alt=""> -->

    </div>
  </section>


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
        <h2>{{ __('get_in_touch') }}</h2>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 ">


        <div class="col-lg-5 justify-content-center" data-aos="flip-left" data-aos-delay="400">
          <img src="./assets/img/logo.png" class="img-form">

        </div>
        <div class="col-lg-7" data-aos="flip-right" data-aos-delay="400">
          <form action="" method="post" role="form" class="php-email-form">
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
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" data-aos="flip-up" data-aos-delay="200">{{ __('send_message') }}</button></div>
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



<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
@endsection
@section('page_js')
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script src="app.js"></script>
<!-- counter -->

<script>
  const counters = document.querySelectorAll(".num");

  counters.forEach((num) => {
    num.innerText = "0";
    const updateCounter = () => {
      const target = +num.getAttribute("data-target");
      const count = +num.innerText;
      const increment = target / 200;
      if (count < target) {
        num.innerText = `${Math.ceil(count + increment)}`;
        setTimeout(updateCounter, 1);
      } else num.innerText = target;
    };
    updateCounter();
  });


  let items = document.querySelectorAll('.slider .item');
  let next = document.getElementById('next');
  let prev = document.getElementById('prev');

  let active = 2;

  function loadShow() {
    let stt = 0;
    items[active].style.transform = `none`;
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;
    for (var i = active + 1; i < items.length; i++) {
      stt++;
      items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
      items[i].style.zIndex = -stt;
      items[i].style.filter = 'blur(5px)';
      items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    stt = 0;
    for (var i = active - 1; i >= 0; i--) {
      stt++;
      items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
      items[i].style.zIndex = -stt;
      items[i].style.filter = 'blur(5px)';
      items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
  }
  loadShow();
  next.onclick = function() {
    active = active + 1 < items.length ? active + 1 : active;
    loadShow();
  }
  prev.onclick = function() {
    active = active - 1 >= 0 ? active - 1 : active;
    loadShow();
  }

  // pop up 

  //   document.addEventListener("DOMContentLoaded", function() {
  //     setTimeout(function() {
  //         document.getElementById("popup").style.display = "flex";
  //     }, 3000); // Adjust the delay as needed (in milliseconds)
  // });

  // function closePopup() {
  //     document.getElementById("popup").style.display = "none";
  // }
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    axios.post(@json(url('/api/contact-us')), {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value
      })
      .then(response => {
        document.getElementById("contact-message").innerText = response.data.message;
        document.getElementById("contact-message").classList.add("text-success");
      })
      .catch(error => {
        document.getElementById("contact-message").innerText = "Failed to send message.";
        document.getElementById("contact-message").classList.add("text-danger");
      });
  });
</script>
@endsection