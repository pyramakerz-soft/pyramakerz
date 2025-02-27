@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row align-items-center justify-content-center gy-6">

          <div class="col-lg-6 ">
            <h2>Alef Bot <br><span>is coming soon </span> </h2>
            <p>
              Our robotics kits provide a comprehensive range of learning tools for science, technology, engineering, and mathematics enthusiasts of all ages.
            </p>
            <a href="index.php" class="btn-get-started scrollto ">Go Back</a>
          </div>
          <div class="col-lg-6 col-md-6">
            <img src="assets/img/slide4.png" alt="" class="img-fluid img">
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item 1 -->
  </div>
</section>
@endsection