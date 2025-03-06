@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('blog.blog') }}</h2>
                <ol>
                    <li><a href="index.php">{{ __('blog.home') }}</a></li>
                    <li>{{ __('blog.blog') }}</li>
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

                        <div class="col-lg-6">
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

                        <div class="col-lg-6">
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