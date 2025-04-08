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
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="{{ asset('assets/css/variables-orange.css') }}" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@endsection
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('blog.blog') }}</h2>
                <ol>
                    <li><a href="index.php">{{ __('blog.home') }}</a></li>
                    <li>{{ __('blog.blog') }}</li>
                </ol>
            </div>

        </div>
    </div> -->
    <!-- End Breadcrumbs -->
    <!-- ///////////////////// -->

    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <header class="section-header" style="display: flex; justify-content: space-between;">
                            <h2> {{ __('blog.blog') }}</h2>
                        </header>
                        <div class="breadcrumb__inner">
                            @if (app()->getLocale() === 'ar')
                            <ul>
                                <li><a href="{{ route('customer.index') }}">{{ __('blog.home') }}</a></li>
                                <li>{{ __('blog.blog') }}</li>
                            </ul>
                            @else
                            <ul style="padding: 0; text-align: left;">
                                <li><a href="{{ route('customer.index') }}">{{ __('blog.home') }}</a></li>
                                <li>{{ __('blog.blog') }}</li>
                            </ul>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ///////////////////// -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="recent-blog-posts mt-5" style="padding-bottom: 80px;">

        <div class="container" data-aos="fade-up">

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
                        <p>{{ __('exploring_interaction_text') }}</p>
                        @if (app()->getLocale() === 'en')
                        <br>
                        @endif
                        <a href="{{ route('customer.blogs2') }}" class="readmore stretched-link"><span>{{ __('read_more') }}</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="assets/img/blog3.jpeg" class="img-fluid" alt=""></div>

                        <h3 class="post-title">
                            {{ __('empowering_educators') }}<br> {{ __('empowering_educators_cont') }}
                        </h3>
                        <p>{{ __('empowering_educators_text') }}</p>
                        <a href="{{ route('customer.blogs3') }}" class="readmore stretched-link"><span>{{ __('read_more') }}</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section>
</main><!-- End #main -->


<div class="wh-api">
    <div class="wh-fixed whatsapp-pulse">
        <a href="https://api.whatsapp.com/send?phone=+201220016331&text=hello world" target="blank">
            <button class="wh-ap-btn"></button>
        </a>
    </div>
</div>
<!-- ======= Footer ======= -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

@endsection
@section('page_js')
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
@endsection