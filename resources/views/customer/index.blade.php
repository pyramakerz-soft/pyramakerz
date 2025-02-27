@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<div class="popup" id="popup">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <h2>Welcome to <span> Pyramakerz!</span></h2>
    <p>Join our Whatsapp Community of young innovators!</p>
    <a href="https://api.whatsapp.com/send?phone=+201220016331&text=Welcome to Pyramakerz" target="blank" class="btn join-btn">Join Now <i class="fab fa-whatsapp"></i></a>
    <button class="btn remind-btn" onclick="closePopup()">Remind Me Later</button>
  </div>
</div>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2><span>Empowering Minds </span> </h2>
            <p>
              Unlocking potential in over 20,000 students across Egypt and the GCC.
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">Get in touch</a>
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
            <h2><span>Innovating Futures </span> </h2>
            <p>
              Shaping tomorrow's leaders <span>with more than 2.5 million</span> Training Hours Delivered.
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">Get in touch</a>
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
            <h2><span>Fostering Collaboration </span> </h2>
            <p>
              Building communities through shared knowledge in <span>30+ educational</span> Institutions.
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">Get in touch</a>
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
            <h2><span>Cultivating Excellence </span> </h2>
            <p>
              Nurturing talents to reach new heights,<span>with 6+ years </span> of leading in EdTech.
            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">Get in touch</a>
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
            <h2><span>Driving Innovation </span> </h2>
            <p>
              Transforming education for a brighter future,<span>accredited by STEM.org</span> since August 2019.

            </p>
            <a href="index.php#contact" class="btn-get-started scrollto ">Get in touch</a>
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
        <h2>About Us</h2>
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

              <p>
                Since 2019, Pyramakerz Technologies S.A.E. has been a leading EdTech company on a mission to transform STEAM education. We provide high-quality, culturally relevant STEAM solutions to empower millions of learners worldwide, from schools and organizations to individual students. By demystifying and gamifying STEAM, we ignite a passion for creativity and critical thinking, shaping a future generation of confident innovators who will tackle the world's challenges.
              </p>

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
        <h2>Our Solutions</h2>
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
                  <h4>School Portal</h4>
                  <p>Our primary goal is to provide STEAM solutions to schools and expert training to teachers, assisting students in developing a strong foundation to excel in STEAM fields.</p>
                  <a href="{{ route('customer.schools') }}" class="btn-get-started scrollto ">See More</a>

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
                  <h4>Student Portal</h4>
                  <p>We understand that every student has unique needs and our programs provide personalized learning paths to nurture strengths and address growth areas.</p>
                  <br>
                  <a href="{{ route('customer.students') }}" class="btn-get-started scrollto ">See More</a>
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
                  <h4>Alef Bot</h4>
                  <p>Our robotics kits provide a comprehensive range of learning tools for science, technology, engineering, and mathematics enthusiasts of all ages.</p>
                  <br>
                  <a href="{{ route('customer.alefBot') }}" class="btn-get-started scrollto ">See More</a>

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
                  <h4>Competitions</h4>
                  <p>we take pride in our commitment to excellence and one way we showcase this is through active participation in robotics competitions and various educational events</p>
                  <a href="{{ route('customer.competitions') }}" class="btn-get-started scrollto ">See More</a>

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
        <h2>Our Successful Partners</h2>
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
        <h2>Blog</h2>
      </div>

      <div class="row posts-list">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog1.jpg" class="img-fluid" alt=""></div>

            <h3 class="post-title">Embracing the Future: <br>
              STEAM Education as the Key to Unlocking Tomorrow's Potential</h3>
            <p>
              As we enter a new era marked by rapid technological advancements and unprecedented global challenges, the future of education has never been more crucial. In this blog post, we will delve into the transformative influence of STEAM education.
            </p>
            <br>
            <a href="{{ route('customer.blogs1') }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog2.jpg" class="img-fluid" alt=""></div>

            <h3 class="post-title">Exploring the Intersection of AI and Robotics:<br> Transforming the Future</h3>
            <br>
            <p>
              In recent years, the fields of Artificial Intelligence (AI) and Robotics have witnessed remarkable advancements, revolutionizing industries and reshaping the way we interact with technology. In this blog post, we'll explore the fascinating intersection of AI and robotics
            </p>

            <a href="{{ route('customer.blogs2') }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/blog3.jpeg" class="img-fluid" alt=""></div>

            <h3 class="post-title">
              Empowering Educators:<br> The Importance of Training Teachers in STEAM Education</h3>
            <br>
            <p>
              In today's rapidly evolving world, the demand for STEAM (Science, Technology, Engineering, Arts, and Mathematics) education has never been greater. As educators strive to prepare students for success in the 21st century, training teachers in STEAM education has become increasingly essential.
            </p>

            <a href="{{ route('customer.blogs3') }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
        <h2>Get In Touch </h2>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 ">


        <div class="col-lg-5" data-aos="flip-left" data-aos-delay="400">
          <img src="./assets/img/logo.png" class="img-form">

        </div>
        <div class="col-lg-7" data-aos="flip-right" data-aos-delay="400">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label>Subject:</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <label>Message:</label>
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" data-aos="flip-up" data-aos-delay="200">Send Message</button></div>
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
    setTimeout(function() {
      document.getElementById("popup").style.display = "flex";
    }, 3000); // Adjust the delay as needed (in milliseconds)
  });

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
</script>
@endsection