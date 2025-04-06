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
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <div class="row gy-4 posts-list">

                        <div class="col-lg-12">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog1.jpg" class="img-fluid" alt="">
                                </div>

                                <h2 class="title">
                                    <a href="{{ route('customer.blogs1') }}">
                                        {{ __('blog.title1') }}: <br>
                                        {{ __('blog.title1_cont') }}
                                    </a>
                                </h2>


                                <div class="content">
                                    <p>
                                        {{ __('blog.excerpt1') }}
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ route('customer.blogs1') }}">{{ __('blog.read_more') }}</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-12">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog2.jpg" class="img-fluid" alt="">
                                </div>

                                <h2 class="title">
                                    <a href="{{ route('customer.blogs2') }}">
                                        {{ __('blog.title2') }}: <br> {{ __('blog.title2_cont') }}
                                    </a>
                                </h2>
                                <br>

                                <div class="content">
                                    <p>
                                        {{ __('blog.excerpt2') }}
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ route('customer.blogs2') }}">{{ __('blog.read_more') }}</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-12">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog3.jpeg" class="img-fluid" alt="">
                                </div>

                                <h2 class="title">
                                    <a href="{{ route('customer.blogs3') }}">
                                        {{ __('blog.title3') }}: <br>{{ __('blog.title3_cont') }} </a>
                                </h2>

                                <div class="content">
                                    <p>
                                        {{ __('blog.excerpt3') }}
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ route('customer.blogs3') }}"> {{ __('blog.read_more') }}</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->


                    </div><!-- End blog posts list -->

                    <div class="blog-pagination">
                        <!-- <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul> -->
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
                            <h3 class="sidebar-title">{{ __('blog.recent_posts') }}</h3>

                            <div class="mt-3">


                                <div class="post-item mt-3">
                                    <img src="assets/img/blog1.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{ route('customer.blogs1') }}">{{ __('blog.title1') }}</a></h4>

                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog2.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{ route('customer.blogs2') }}">{{ __('blog.title2') }}</a></h4>

                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog3.jpeg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{ route('customer.blogs3') }}"> {{ __('blog.title3') }}</a></h4>

                                    </div>
                                </div><!-- End recent post item-->
                            </div>

                        </div><!-- End sidebar recent posts-->


                    </div><!-- End Blog Sidebar -->

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
<!-- ======= Footer ======= -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

@endsection
@section('page_js')
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
@endsection