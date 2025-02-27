<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pyramakerz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables-orange.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
  @include('customer.nav')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/blog1.jpg" class="img-fluid" alt="">
                  </div>

                  <h2 class="title">
                    <a href="{{ route('customer.blogs1') }}">
                      Embracing the Future: <br>
                      STEAM Education as the Key to Unlocking Tomorrow's Potential
                    </a>
                  </h2>


                  <div class="content">
                    <p>
                      As we enter a new era marked by rapid technological advancements and unprecedented global challenges, the future of education has never been more crucial. In this blog post, we will delve into the transformative influence of STEAM education.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{ route('customer.blogs1') }}">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/blog2.jpg" class="img-fluid" alt="">
                  </div>

                  <h2 class="title">
                    <a href="{{ route('customer.blogs2') }}">
                      Exploring the Intersection of AI and Robotics:<br> Transforming the Future
                    </a>
                  </h2>
                  <br>

                  <div class="content">
                    <p>
                      In recent years, the fields of Artificial Intelligence (AI) and Robotics have witnessed remarkable advancements, revolutionizing industries and reshaping the way we interact with technology. In this blog post, we'll explore the fascinating intersection of AI and robotics
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{ route('customer.blogs2') }}">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="assets/img/blog3.jpeg" class="img-fluid" alt="">
                  </div>

                  <h2 class="title">
                    <a href="{{ route('customer.blogs3') }}">
                      Empowering Educators:<br> The Importance of Training Teachers in STEAM Education </a>
                  </h2>

                  <div class="content">
                    <p>
                      In today's rapidly evolving world, the demand for STEAM (Science, Technology, Engineering, Arts, and Mathematics) education has never been greater. As educators strive to prepare students for success in the 21st century, training teachers in STEAM education has become increasingly essential.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{ route('customer.blogs3') }}">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->


            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <!--<div class="sidebar-item search-form">-->
              <!--  <h3 class="sidebar-title">Search</h3>-->
              <!--  <form action="" class="mt-3">-->
              <!--    <input type="text">-->
              <!--    <button type="submit"><i class="bi bi-search"></i></button>-->
              <!--  </form>-->
              <!--</div>-->
              <!-- End sidebar search formn-->

              <!--<div class="sidebar-item categories">-->
              <!--  <h3 class="sidebar-title">Categories</h3>-->
              <!--  <ul class="mt-3">-->
              <!--    <li><a href="#">General <span>(25)</span></a></li>-->
              <!--    <li><a href="#">School Portal <span>(12)</span></a></li>-->
              <!--    <li><a href="#">Student Portal <span>(5)</span></a></li>-->
              <!--    <li><a href="#">Competitions <span>(22)</span></a></li>-->
              <!--    <li><a href="#">Alef Bot <span>(8)</span></a></li>-->

              <!--  </ul>-->
              <!--</div>-->
              <!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/blog1.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="{{ route('customer.blogs1') }}">Embracing the Future:</a></h4>

                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="{{ route('customer.blogs2') }}">Exploring the Intersection of AI and Robotics:</a></h4>

                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog3.jpeg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="{{ route('customer.blogs3') }}"> Empowering Educators:</a></h4>

                    </div>
                  </div><!-- End recent post item-->


                </div>

              </div><!-- End sidebar recent posts-->



            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  <div class="wh-api">
    <div class="wh-fixed whatsapp-pulse">
      <a href="https://api.whatsapp.com/send?phone=+201220016331&text=hello world" target="blank">
        <button class="wh-ap-btn"></button>
      </a>
    </div>
  </div>
  </div>
  <!-- ======= Footer ======= -->
  @include('customer.footer')
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>