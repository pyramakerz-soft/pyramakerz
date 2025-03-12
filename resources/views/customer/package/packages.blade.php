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
                            <h2 class="heading" style="text-align: center !important;">{{ __('packages.packages') }}</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                @if (app()->getLocale() === 'ar')
                                <li>{{ __('packages.packages') }}</li>
                                <li><a href="{{ route('customer.index') }}">{{ __('packages.home') }}</a></li>
                                @else
                                <li><a href="{{ route('customer.index') }}">{{ __('packages.home') }}</a></li>
                                <li>{{ __('packages.packages') }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <!-- <div class="shape__icon__2">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png"
                alt="photo">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png"
                alt="photo">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png"
                alt="photo">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png"
                alt="photo">
        </div> -->

    </div>
    <!-- breadcrumbarea__section__end-->

    <!-- course__section__start   -->
    <div class="coursearea ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="course__text__wraper" data-aos="fade-up">
                        <!-- <div class="course__text">
                            <p>Showing 1–12 of 54 Results</p>
                        </div> -->
                        <!-- <div class="course__icon">
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
                        </div> -->
                    </div>

                </div>
                <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-12">
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



                </div> -->

                <div class="col-xl-12 col-lg-9 col-md-8 col-12">

                    <div class="tab-content tab__content__wrapper with__sidebar__content" id="myTabContent">


                        <div class="tab-pane fade  active show" id="projects__one" role="tabpanel"
                            aria-labelledby="projects__one">

                            <div class="row">
                                @if (!empty($plans))
                                @foreach ($plans as $package)
                                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6 col-12" data-aos="fade-up">
                                    <div class="gridarea__wraper gridarea__wraper__2">
                                        <div class="gridarea__img">
                                            <img loading="lazy"
                                                src="{{ asset('package/' . $package->image) }}" alt="{{ $package->name }}">
                                            <div class="gridarea__small__button">
                                                <div class="grid__badge orange__color">
                                                    {{ app()->getLocale() === 'ar' ? $package->ar_name : $package->name }}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="gridarea__content">
                                            <div class="gridarea__list">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-book-alt"></i>
                                                        {{-- {{ $course->totalLessonsCount() ?? 0 }} Lessons --}}
                                                        {{ $package->products->count() ?? 0 }} {{ __('packages.product') }}
                                                    </li>
                                                    <li>
                                                        <i class="icofont-clock-time"></i>
                                                        {{-- {{ $course->duration ?? 'N/A' }} --}}
                                                        {{ $package->price }} SAR
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="gridarea__heading">
                                                <h3>
                                                    <a href="{{ route('customer.package_info', ['package' => $package->id]) }}">
                                                        {{ app()->getLocale() === 'ar' ? $package->ar_name : $package->name }}
                                                    </a>
                                                </h3>
                                            </div>
                                            <!-- <div class="gridarea__bottom">
                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    {{-- <span>({{ $course->rating ?? 0 }})</span> --}}
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <!-- Custom Plan -->
                                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6 col-12" data-aos="fade-up">
                                    <div class="gridarea__wraper gridarea__wraper__2">
                                        <div class="gridarea__img">
                                            @if (isset($package))
                                            <img loading="lazy"
                                                src="{{ asset('package/' . $package->image) }}" alt="{{ $package->name }}">
                                            @endif
                                            <div class="gridarea__small__button">
                                                <div class="grid__badge orange__color">
                                                    {{ app()->getLocale() === 'ar' ? 'مخصص' : 'Custom' }}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="gridarea__content">
                                            <div class="gridarea__list">
                                                <ul>
                                                    <li>
                                                        <i class="icofont-book-alt"></i>
                                                        {{-- {{ $course->totalLessonsCount() ?? 0 }} Lessons --}}
                                                        {{ __('packages.variable') }}
                                                    </li>
                                                    <li>
                                                        <i class="icofont-clock-time"></i>
                                                        {{-- {{ $course->duration ?? 'N/A' }} --}}
                                                        {{ __('packages.variable_price') }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="gridarea__heading">
                                                <h3>
                                                    <a
                                                        href="{{ route('customer.customizePackage') }}"> {{ app()->getLocale() === 'ar' ? 'مخصص' : 'Custom' }}</a>
                                                </h3>
                                            </div>
                                            <!-- <div class="gridarea__bottom">
                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    {{-- <span>({{ $course->rating ?? 0 }})</span> --}}
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="main__pagination__wrapper" data-aos="fade-up">
                                {{-- {{ $courses->links('pagination::bootstrap-5') }} --}}
                            </div>
                        </div>


                        <div class="tab-pane fade" id="projects__two" role="tabpanel"
                            aria-labelledby="projects__two">
                            @foreach ($plans as $package)
                            <div class="gridarea__wraper gridarea__wraper__2 gridarea__course__list"
                                data-aos="fade-up">
                                <div class="gridarea__img">
                                    <a href="course-details.html">
                                        <img loading="lazy"
                                            src="{{ asset('package/' . $package->image) }}" alt="{{ $package->name }}">
                                    </a>
                                    <div class="gridarea__small__button">
                                        <div class="grid__badge orange__color">
                                            {{-- {{ $course->course_path ?? 'General' }}
                                        </div> --}}
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
                                            <a href="{{ route('customer.package_info', ['package' => $package->id]) }}">See Details
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

<div class="wh-api">
    <div class="wh-fixed whatsapp-pulse">
        <a href="https://api.whatsapp.com/send?phone=+201220016331&text=Welcome to Pyramakerz" target="blank">
            <button class="wh-ap-btn"></button>
        </a>
    </div>
</div>



<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
@endsection
<!-- Vendor JS Files -->
@section('page_js')
<script src="app.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".choose-plan");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                let plan = this.getAttribute("data-plan");
                let products = JSON.parse(this.getAttribute("data-products"));
                let token = localStorage.getItem('auth_token_pyra12234');

                if (!token) {
                    localStorage.setItem("redirect_after_login", "{{ route('customer.packages') }}");
                    window.location.href = "{{ route('customer.login') }}";
                } else {
                    // If user is logged in, proceed with email and order creation
                    sendPlanEmail(plan, products);
                    createOrder(plan, products);
                }
            });
        });

        function sendPlanEmail(plan, products) {
            let token = localStorage.getItem('auth_token_pyra12234');

            axios.get(@json(url('/api/user')), {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    let user = response.data; // Get logged-in user details

                    axios.post(@json(url(path: '/api/send-plan-email')), {
                            user_name: user.name,
                            user_email: user.email,
                            selected_plan: plan,
                            plan_products: products // Sending products array
                        }, {
                            headers: {
                                Authorization: `Bearer ${token}`
                            }
                        })
                        .then(response => {
                            console.log("Email sent successfully.");
                        })
                        .catch(error => {
                            console.error("Error sending email:", error.response);
                            alert("Failed to send email.");
                        });
                })
                .catch(error => {
                    console.error("Error fetching user details:", error.response);
                    alert("Failed to retrieve user details.");
                });
        }

        function createOrder(plan, products) {
            let token = localStorage.getItem('auth_token_pyra12234');
            axios.post(@json(url('/api/orders')), {
                    plan_name: plan,
                    products: products
                }, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    alert("Your order has been placed successfully!");
                    window.location.href = "{{ route('customer.packages') }}";
                })
                .catch(error => {
                    console.error("Error creating order:", error.response);
                    alert("Failed to create order.");
                });
        }
    });
</script>
@endsection