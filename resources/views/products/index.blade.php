@extends('layouts.layout')
@section('page_css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('content')
    <main id="main" style="margin-top: 110px">

        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->
        <!-- breadcrumbarea__section__start -->

        <div class="breadcrumbarea">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__content__wraper" data-aos="fade-up">
                            <div class="breadcrumb__title">
                                <h2 class="heading">Featured Courses</h2>
                            </div>
                            <div class="breadcrumb__inner">
                                <ul>
                                    <li><a href="/home">Home</a></li>
                                    <li> Courses</li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="shape__icon__2">
                <img loading="lazy" class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png"
                    alt="photo">
                <img loading="lazy" class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png"
                    alt="photo">
                <img loading="lazy" class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png"
                    alt="photo">
                <img loading="lazy" class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png"
                    alt="photo">
            </div>

        </div>
        <!-- breadcrumbarea__section__end-->

        <!-- course__section__start   -->
        <div class="coursearea sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="course__text__wraper" data-aos="fade-up">
                            <div class="course__text">
                                <p>Showing 1–12 of 54 Results</p>
                            </div>
                            <div class="course__icon">
                                <ul class="nav property__team__tap" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="single__tab__link active" data-bs-toggle="tab"
                                            data-bs-target="#projects__one"><i class="icofont-layout"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="single__tab__link" data-bs-toggle="tab"
                                            data-bs-target="#projects__two"><i class="icofont-listine-dots"></i>
                                        </a>
                                    </li>

                                    <li class="short__by__new">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Short by New</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </li>



                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                        <div class="course__sidebar__wraper" data-aos="fade-up">
                            <div class="course__heading">
                                <h5>Search here</h5>
                            </div>
                            <div class="course__input">
                                <input type="text" placeholder="Search product">
                                <div class="search__button">
                                    <button><i class="icofont-search-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="course__sidebar__wraper" data-aos="fade-up">
                            <div class="categori__wraper">
                                <div class="course__heading">
                                    <h5>Products</h5>
                                </div>
                                <div class="course__categories__list">
                                    <ul>
                                        {{-- @foreach ($products as $product)
                                        <li>
                                            <a href="{{ route('courses.index', ['category' => $category->id]) }}">
                                                    {{ $product->name }}
                                                    <span>{{ $category->courses->count() }}</span>
                                                </a>
                                        </li>
                                        @endforeach --}}



                                    </ul>
                                </div>


                            </div>
                        </div>

                        {{-- <div class="course__sidebar__wraper" data-aos="fade-up">
                                <div class="course__heading">
                                    <h5>Skill Level</h5>
                                </div>
                                <div class="course__skill__list">
                                    <ul>
    
                                        <li>
                                            <a href="#">
                                                All
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Beginner
                                            </a>
                                        </li>
    
                                        <li>
                                            <a href="#">
                                                Intermediate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Advance
                                            </a>
                                        </li>
    
                                    </ul>
                                </div>
    
                            </div> --}}
                        {{-- <div class="course__sidebar__wraper" data-aos="fade-up">
                                <div class="course__heading">
                                    <h5>Tag</h5>
                                </div>
                                <div class="course__tag__list">
                                    <ul>
    
                                        <li>
                                            <a href="#">
                                                <div class="course__check__box active "></div>
                                                <span class="active">Mechanic</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="course__check__box  "></div>
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="course__check__box  "></div>
                                                <span>Computer Science</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="course__check__box  "></div>
                                                <span>Data & Tech</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="course__check__box  "></div>
                                                <span>Ux Desgin</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                            </div> --}}



                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-8 col-12">

                        <div class="tab-content tab__content__wrapper with__sidebar__content" id="myTabContent">


                            <div class="tab-pane fade  active show" id="projects__one" role="tabpanel"
                                aria-labelledby="projects__one">

                                <div class="row">

                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12" data-aos="fade-up">
                                            <div class="gridarea__wraper gridarea__wraper__2">
                                                <div class="gridarea__img">
                                                    <img loading="lazy"
                                                        src="{{ $product->image ? asset($product->image) : asset('img/product.jpg') }}"
                                                        alt="{{ $product->name }}">
                                                    <div class="gridarea__small__button">
                                                        <div class="grid__badge orange__color">
                                                            {{ $product->course_path ?? 'General' }}
                                                        </div>
                                                    </div>
                                                    <div class="gridarea__small__icon">
                                                        <a href="#"><i class="icofont-heart-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="gridarea__content">
                                                    <div class="gridarea__list">
                                                        <ul>
                                                            <li>
                                                                <i class="icofont-book-alt"></i>
                                                                {{-- {{ $course->totalLessonsCount() ?? 0 }} Lessons --}}
                                                            </li>
                                                            <li>
                                                                <i class="icofont-clock-time"></i>
                                                                {{-- {{ $course->duration ?? 'N/A' }} --}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="gridarea__heading">
                                                        <h3>
                                                            <a
                                                                href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="gridarea__bottom">
                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            {{-- <span>({{ $course->rating ?? 0 }})</span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="main__pagination__wrapper" data-aos="fade-up">
                                    {{-- {{ $courses->links('pagination::bootstrap-5') }} --}}
                                </div>
                            </div>


                            <div class="tab-pane fade" id="projects__two" role="tabpanel"
                                aria-labelledby="projects__two">
                                @foreach ($products as $product)
                                    <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list"
                                        data-aos="fade-up">
                                        <div class="gridarea__img">
                                            <a href="course-details.html">
                                                <img loading="lazy"
                                                    src="{{ $product->image ? asset($product->image) : asset('img/product.jpg') }}"
                                                    alt="{{ $product->name }}">
                                            </a>
                                            <div class="gridarea__small__button">
                                                <div class="grid__badge orange__color">
                                                    {{-- {{ $course->course_path ?? 'General' }}</div> --}}
                                                </div>
                                                <div class="gridarea__small__icon">
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>

                                            </div>
                                            <div class="gridarea__content">
                                                <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-book-alt"></i>
                                                            {{-- {{ $course->totalLessonsCount() ?? 0 }} Lesson --}}
                                                        </li>
                                                        <li>
                                                            <i class="icofont-clock-time"></i>
                                                            {{-- {{ $course->duration ?? 'N/A' }} --}}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="gridarea__heading">
                                                    <h3><a href="course-details.html">Become a product Manager learn the
                                                            skills & job.
                                                        </a></h3>
                                                </div>

                                                <div class="gridarea__bottom">
                                                    <div class="gridarea__bottom__left">


                                                        <div class="gridarea__star">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            {{-- <span>({{ $course->rating ?? 0 }})</span> --}}
                                                        </div>
                                                    </div>

                                                    <div class="gridarea__details">
                                                        <a href="{{ route('products.show', $product->id) }}">See Details
                                                            <i class="icofont-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach

                                <div class="main__pagination__wrapper" data-aos="fade-up">
                                    {{-- {{ $courses->links('pagination::bootstrap-5') }} --}}
                                </div>


                            </div>

                        </div>


                        {{-- <div class="main__pagination__wrapper" data-aos="fade-up">
                                <ul class="main__page__pagination">
                                    <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="icofont-double-right"></i></a></li>
                                </ul>
                            </div> --}}

                    </div>


                </div>
            </div>
        </div>
        <!-- course__section__end   -->


    </main>
@endsection
