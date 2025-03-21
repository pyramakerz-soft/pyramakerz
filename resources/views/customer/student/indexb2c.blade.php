@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="{{ asset('assets/css/variables-orange.css') }}" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@endsection

@section('content')
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


<section id="hero" class="herob2c d-flex ">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <h1 data-aos="fade-up">{{ __('students.unleash_the_power_of_programming_for_young_inventors') }}</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">{{ __('students.Student_Portal') }}
                </h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#featuress"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span style="color:white;">{{ __('students.started') }}</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img image" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets/img/ai3.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <br> <br> <br>
    <section id="why-us" class="why-us section-bg">
        <div class="container">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-5 align-items-stretch video-box" data-aos="zoom-in-up"
                        style="background-image: url('assets/img/mapp.jpg'); background-size: contain; border-radius:60px;"
                        data-aos="zoom-out" data-aos-delay="200">
                        <a href="https://srv1287-files.hstgr.io/14ac8d27bfcc0e17/files/public_html/img/Courses%20Road%20Map_English.mp4"
                            class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="blank"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="content" data-aos="fade-up">
                            <h3> <span>{{ __('students.who_we_are') }}</span></h3>
                            <h2>{{ __('students.welcome_to') }}</h2>
                            <p>
                                {{ __('students.why_us_paragraph') }}
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> {{ __('students.branches') }}
                </h2>

            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box image">
                        <img src="{{ asset('assets/img/course1.png') }}" class="img-fluid" alt="">
                        <h3>{{ __('students.mobile_dev') }}</h3>
                        <p>{{ __('students.mobile_paragraph') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box image">
                        <img src="{{ asset('assets/img/course2.png') }}" class="img-fluid" alt="">
                        <h3>{{ __('students.game_dev') }}</h3>
                        <br>
                        <p>{{ __('students.game_paragraph') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box image">
                        <img src="{{ asset('assets/img/course3.png') }}" class="img-fluid" alt="">
                        <h3>{{ __('students.artificial_intelligence') }}</h3>
                        <br>
                        <p>{{ __('students.artificial_paragraph') }}</p>
                    </div>
                </div>

            </div>
            <br>
            <div class="row  justify-content-center">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box image">
                        <img src="{{ asset('assets/img/course4.png') }}" class="img-fluid" alt="">
                        <h3>{{ __('students.web_dev') }}</h3>
                        <br>
                        <p>{{ __('students.web_paragraph') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box image">
                        <img src="{{ asset('assets/img/course5.png') }}" class="img-fluid" alt="">
                        <h3>{{ __('students.robotics') }}</h3>
                        <p>{{ __('students.robotics_paragraph') }}</p>
                    </div>
                </div>



            </div>

        </div>

    </section><!-- End Values Section -->


    <!-- ======= Features Section ======= -->
    <section id="featuress" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>{{ __('students.level_1') }}</h2>
                <p>{{ __('students.programming_universe') }}</p>
            </header>

            <div class="row">

                <div class="col-lg-6 image">
                    <img src="{{ asset('assets/img/level1.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                            <p>

                                This is a level 1 course for kids which will introduce
                                them to the world of technology and programming
                                starting from computer components to real projects
                                and games by themselves using programming blocks.
                            </p>
                        </div>

                        <div class="col-md-10" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3>{{ __('students.programming_universe_one') }}</h3>
                            </div>
                        </div>

                        <div class="col-md-10" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3>{{ __('students.programming_universe_two') }}</h3>
                            </div>
                        </div>


                    </div>
                </div>




            </div>


        </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>{{ __('students.courses') }}</h2>

            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="{{ asset('assets/img/level1-1.png') }}" style="height: 200px;">
                        </div>
                        <h2>
                            {{ __('students.scratch_jr') }}
                        </h2>
                        <h3>Outline:</h3>
                        <p> {{ __('students.scratch_outline') }}
                        </p>
                        <h3>Sample Projects:</h3>
                        <p>Creating simple animations.
                            Designing basic games.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="{{ asset('assets/img/level1-2.png') }}" style="height: 200px;">
                        </div>
                        <h2>
                            {{ __('students.pictoblox') }}

                        </h2>
                        <h3>Outline:</h3>
                        <p> {{ __('students.pictoblox_outline') }}
                        </p>
                        <h3>Sample Projects:</h3>
                        <p>Building interactive stories.
                            Designing advanced games and applications.</p>

                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Services Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> {{ __('students.level_2') }}
                </h2>
                <!-- <p>Programming Universe</p> -->
            </header>

            <div class="row">

                <div class="col-lg-6 image">
                    <img src="assets/img/level2.jpg" class="img-fluid" alt="">
                    <br>



                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">
                        <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                            <p>

                                A specialized tracks tailored to your child’s unique interests!
                                In this advanced phase of our program, we offer a range of
                                specialized tracks designed to nurture your child’s passion
                                for technology, each track is crafted to ignite curiosity and
                                fuel innovation. Your child will explore their chosen track in
                                depth, gaining valuable skills and insights along the way.
                            </p>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3>
                                    {{ __('students.web_dev') }}
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3> {{ __('students.game_dev_title') }}
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3> {{ __('students.mobile_dev') }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3> {{ __('students.robotics_dev') }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3> {{ __('students.artificial_intelligence') }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check2-circle"></i>
                                <h3>
                                    {{ __('students.python') }}
                                </h3>
                            </div>
                        </div>




                    </div>
                </div>




            </div>


        </div>

    </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>
                    {{ __('students.game_dev_title') }}
                </h2>

            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/game1.png" style="height: 200px;">
                        </div>
                        <h2>
                            {{ __('students.roblox') }}
                        </h2>
                        <h3>Outline:</h3>
                        <p>{{ __('students.roblox_outline') }}</p>
                        <h3>Sample Projects:</h3>
                        <p>Developing multiplayer games.
                            Creating custom game mechanics.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/game2.png" style="height: 200px; width:auto;">
                        </div>
                        <h2>
                            {{ __('students.unity') }}
                        </h2>
                        <h3>Outline:</h3>
                        <p>{{ __('students.unity_outline') }}</p>
                        <h3>Sample Projects:</h3>
                        <p>Building a 3D platformer game.
                            Developing virtual reality experiences.</p>

                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Services Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>{{ __('students.mobile_app_dev') }}</h2>

            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/mobile1.png" style="height: 200px;">
                        </div>

                        <h2>
                            {{ __('students.app_inventor') }}
                        </h2>
                        <h3>Outline:</h3>
                        <p>{{ __('students.app_inventor_outline') }}</p>
                        <h3>Sample Projects:</h3>
                        <p>Designing a basic calculator app.
                            Developing a simple quiz game.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/mobile2.png" style="height: 200px; width:auto;">
                        </div>
                        <h2>
                            {{ __('students.flutter') }}

                        </h2>
                        <h3>Outline:</h3>
                        <p>Introduction to Flutter and Dart.
                            Cross-platform app development.
                            Advanced UI design and animations.</p>
                        <h3>Sample Projects:</h3>
                        <p>Introduction to Flutter and Dart.
                            Cross-platform app development.
                            Advanced UI design and animations.</p>

                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Services Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Artificial Intelligence (AI)</h2>

            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="{{ asset('assets/img/level1-1.png') }}" style="height: 200px;">
                        </div>
                        <h2>
                            PICTOBLOX AI

                        </h2>
                        <h3>Outline:</h3>
                        <p>Introduction to Artificial Intelligence.
                            Basics of machine learning.
                            Hands-on projects using PICTOBLOX AI.</p>
                        <h3>Sample Projects:</h3>
                        <p>Creating simple AI models.
                            Training a chatbot.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/ai2.png" style="height: 200px; width:auto;">
                        </div>
                        <h2>
                            Python & ML
                        </h2>
                        <h3>Outline:</h3>
                        <p>Introduction to Python programming.
                            Machine learning fundamentals.</p>
                        <h3>Sample Projects:</h3>
                        <p>Building a sentiment analysis tool.
                            Developing a recommendation system.</p>

                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Services Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Artificial Intelligence (AI)</h2>

            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">

                        <img src="assets/img/robot1.png" style="height: 200px;">
                        <h2>
                            TinkerCad & Real Projects

                        </h2>
                        <h3>Outline:</h3>
                        <p>Introduction to mechatronics.
                            Virtual prototyping using TinkerCad.
                            Hands-on projects with real components.</p>
                        <h3>Sample Projects:</h3>
                        <p>Designing and simulating electronic circuits.
                            Building basic robotic systems.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/robot2.png" style="height: 200px; width:auto;">
                        </div>
                        <h2>
                            3D and Laser Cutting
                        </h2>
                        <h3>Outline:</h3>
                        <p>Introduction to 3D printing technique.
                            Creating designs for 3D printing.
                            Laser cutting techniques and applications.</p>
                        <h3>Sample Projects:</h3>
                        <p>Designing and printing 3D models.
                            Creating custom laser-cut designs.</p>

                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Services Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> {{ __('students.web_dev') }}
                </h2>

            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">

                        <div class="image">
                            <img src="assets/img/web1.png" style="height: 200px; ">
                        </div>

                        <h2>
                            WordPress & Canva

                        </h2>
                        <h3>Outline:</h3>
                        <p>Introduction to WordPress and Canva.
                            Website creation and customization.
                            Basic HTML and CSS concepts.</p>
                        <h3>Sample Projects:</h3>
                        <p>Building a personal blog or portfolio website.
                            Designing custom graphics using Canva.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <div class="image">
                            <img src="assets/img/web2.png" style="height: 200px; width:auto;">
                        </div>
                        <h2>
                            HTML, CSS, Java script
                        </h2>
                        <h3>Outline:</h3>
                        <p>Advanced HTML and CSS.
                            Introduction to JavaScript.
                            Interactive website development.</p>
                        <h3>Sample Projects:</h3>
                        <p>Creating responsive web pages.
                            Adding dynamic features using JavaScript.</p>

                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Services Section -->




    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> {{ __('students.pricing') }}</h2>
                <!-- <p>In the case of B2C Units in Egyptian pound , every instructor will be compensated with 200 EGP for each session they conduct. these sessions are expected to run for a duration of 90 MINS</p> -->


            </header>


            <div class="row gy-4" data-aos="fade-left">


                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <h3 style="color: #ff901c;"> {{ __('students.one_month_plan') }}</h3>
                        <div class="price"> {{ __('students.price_1200_egp') }}</div>
                        <!--<img src="assetsb2c/img/price.PNG" class="img-fluid" alt="">-->
                        <br> <br>
                        <ul>
                            <li> <i class="bi bi-check2"></i> {{ __('students.students_4_to_10') }}</li>
                            <hr>
                            <li><i class="bi bi-check2"></i>For 3 Months you will pay<br> EGP 3600($73.50)</li>
                            <hr>
                            <li><i class="bi bi-check2"></i> {{ __('students.payment_monthly') }}</li>

                        </ul>
                        <!--<a href="#" class="btn-buy">Buy Now</a>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <span class="featured">Saving 25%</span>
                        <h3 style="color: #ff901c;">3 Months Plan</h3>
                        <div class="price"><sup>EGP</sup>2700<span> ($55.10)</span></div>
                        <!--<img src="assetsb2c/img/price.PNG" class="img-fluid" alt="">-->
                        <br> <br>
                        <ul>
                            <li> <i class="bi bi-check2"></i>Student from 4 to 10</li>
                            <hr>
                            <li><i class="bi bi-check2"></i>EGP 900 ($18.37) Each month</li><br>
                            <hr>
                            <li><i class="bi bi-check2"></i>Payments will be divide into two Halfs </li>

                        </ul>
                        <!--<a href="#" class="btn-buy">Buy Now</a>-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <span class="featured">Saving 25%</span>
                        <h3 style="color: #ff901c;">12 Months Plan</h3>
                        <div class="price"><sup>EGP</sup>8400<span> ($171.5)</span></div>
                        <!--<img src="assetsb2c/img/price.PNG" class="img-fluid" alt="">-->
                        <br> <br>
                        <ul>
                            <li> <i class="bi bi-check2"></i>Student from 4 to 10</li>
                            <hr>
                            <li><i class="bi bi-check2"></i>EGP 900 ($18.37) Each month</li><br>
                            <hr>
                            <li><i class="bi bi-check2"></i>Payments will be divide into two Halfs </li>

                        </ul>
                        <!--<a href="#" class="btn-buy">Buy Now</a>-->
                    </div>
                </div>



            </div>

        </div>

    </section><!-- End Pricing Section -->






</main><!-- End #main -->


<!-- <div class="wh-api">
                                                        <div class="wh-fixed whatsapp-pulse">
                                                            <a href="https://api.whatsapp.com/send?phone=+201220016331&text=Welcome to Pyramakerz" target="blank">
                                                                <button class="wh-ap-btn"></button>
                                                            </a>
                                                        </div>
                                                    </div> -->

<!-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-arrow-up-short"></i></a> -->

<div id="preloader"></div>
@endsection


@section('page_js')
<script src="{{ asset('assets/vendor/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/vendor/aos/aos.js') }}"></script>
<!-- <script src="{{ asset('assets/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<script src="{{ asset('assets/vendor/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vendor/swiper/swiper-bundle.min.js') }}"></script>
<!--<script src="assetsb2c/vendor/php-email-form/validate.js"></script>-->

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection