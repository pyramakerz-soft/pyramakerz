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
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="../assets/css/variables-orange.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    @include('layouts.scripts')
    @include('customer.nav')
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
                            <img src="../assets/img/slide1.png" alt="" class="img-fluid img">
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
                            <img src="../assets/img/slide2.png" alt="" class="img-fluid img">
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
</body>

</html>