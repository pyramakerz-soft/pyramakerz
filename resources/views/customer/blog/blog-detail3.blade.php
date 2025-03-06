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
        <h2>{{ __('blog.blog_detail') }}</h2>
        <ol>
          <li><a href="{{ route('customer.index') }}">{{ __('blog.home') }}</a></li>
          <li><a href="{{ route('customer.blogs') }}">{{ __('blog.blog') }}</a></li>
          <li>{{ __('blog.blog_detail') }}</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="assets/img/blog3.1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="title">
              <span>
                {{ __('blog.blog3_title') }}
              </span>
              <br>
              {{ __('blog.blog3_heading1') }}
            </h2>


            <div class="content">
              <p>
                {{ __('blog.blog3_content1') }}
              </p>

              <h3>{{ __('blog.blog3_heading2') }}</h3>
              <p>
                {{ __('blog.blog3_content2') }}
              </p>


              <h3>
                {{ __('blog.blog3_heading3') }}
              </h3>
              <p>
                {{ __('blog.blog3_content3') }}
              </p>
              <h3>{{ __('blog.blog3_heading4') }}
              </h3>
              <p>
                {{ __('blog.blog3_content4') }}
              </p>
              <h3>
                {{ __('blog.blog3_heading5') }}
              </h3>
              <p>
                {{ __('blog.blog3_content5') }}
              </p>

              <p>
                {{ __('blog.blog3_content6') }}
              </p>

            </div><!-- End post content -->



          </article><!-- End blog post -->





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
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->


<div class="wh-api">
  <div class="wh-fixed whatsapp-pulse">
    <a href="https://api.whatsapp.com/send?phone=+201220016331&text=hello world" target="blank">
      <button class="wh-ap-btn"></button>
    </a>
  </div>
</div>
</div>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

@endsection
@section('page_js')
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
@endsection