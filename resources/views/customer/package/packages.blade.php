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
    <!-- breadcrumbarea__section__start -->

    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <header class="section-header" style="display: flex; justify-content: space-between;">
                            <h2> {{ __('packages.packages') }}</h2>
                            <a href="{{ route('customer.customizePackage') }}" class="btn btn-primary" style="font-size: 20px;">{{ __('packages.custom_package') }} </a>
                        </header>
                        <div class="breadcrumb__inner">
                            @if (app()->getLocale() === 'ar')
                            <ul>
                                <li><a href="{{ route('customer.index') }}">{{ __('packages.home') }}</a></li>
                                <li>{{ __('packages.packages') }}</li>
                            </ul>
                            @else
                            <ul style="padding: 0; text-align: left;">
                                <li><a href="{{ route('customer.index') }}">{{ __('packages.home') }}</a></li>
                                <li>{{ __('packages.packages') }}</li>
                            </ul>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- breadcrumbarea__section__end-->
    @php
    function convertToArabicNumerals($number) {
    $western = ['0','1','2','3','4','5','6','7','8','9'];
    $arabic = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
    return str_replace($western, $arabic, $number);
    }
    @endphp
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing mb-5">

        <div class="container" data-aos="fade-up">
            <div class="row gy-4" data-aos="fade-left">
                @foreach ($plans as $package)
                @php
                $originalTotal = 0;

                foreach ($package->products as $product) {
                $originalTotal += $product->price * $product->pivot->quantity;
                }

                $packagePrice = $package->price;

                // Ensure no division by zero
                if ($originalTotal > 0 && $packagePrice < $originalTotal) {
                    $amountSaved=$originalTotal - $packagePrice;
                    $percentageSaved=($amountSaved / $originalTotal) * 100;
                    } else {
                    $amountSaved=0;
                    $percentageSaved=0;
                    }

                    // Optional: Format for display
                    $amountSavedFormatted=number_format($amountSaved, 2);
                    $percentageSavedFormatted=number_format($percentageSaved, 0) ;
                    @endphp
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{ route('customer.package_info', ['package' => $package->id]) }}" class="text-decoration-none text-dark">
                        <div class="box position-relative h-100">
                            @if (app()->getLocale()==='ar')
                            <span class="featured">وفر {{ convertToArabicNumerals($percentageSavedFormatted) .'٪' }}</span>
                            @else
                            <span class="featured">Save {{ $percentageSavedFormatted }}%</span>
                            @endif
                            <h3 style="color: #ff901c;">
                                {{ app()->getLocale() === 'ar' ? $package->ar_name : $package->name }}
                            </h3>
                            <div class="img-container">
                                <img src="{{ asset('package/' . $package->image) }}" alt="{{ $package->name }}" class="img-fluid">
                            </div>
                            <div class="price">
                                <sup>SAR</sup>{{ $package->price }}
                                <!-- <span> ($55.10)</span> -->
                            </div>
                            <br><br>
                            @if (app()->getLocale() === 'ar')
                                @if (!empty($package->ar_bullets) && is_array($package->ar_bullets))
                                <ul>
                                    @foreach ($package->ar_bullets as $bullet)
                                    <li class="d-flex align-items-center mb-2 justify-content-center">
                                        <i class="bi bi-check2"></i> {{ $bullet }}
                                    </li>
                                    <hr class="my-2">
                                    @endforeach
                                </ul>
                                @endif
                            @else
                            <ul>
                                @if (!empty($package->bullets) && is_array($package->bullets))
                                <ul>
                                    @foreach ($package->bullets as $bullet)
                                    <li class="d-flex align-items-center mb-2 justify-content-center">
                                        <i class="bi bi-check2"></i> {{ $bullet }}
                                    </li>
                                    <hr class="my-2">
                                    @endforeach
                                </ul>
                                @endif
                            </ul>
                            @endif

                            <div class="buy-container">
                                <a href="{{ route('customer.package_info', ['package' => $package->id]) }}" class="btn-buy">
                                    {{ __('packages.package_details') }}
                                </a>
                            </div>
                        </div>
                    </a>
            </div>

            @endforeach
        </div>
        </div>

    </section><!-- End Pricing Section -->


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
<script src="{{ asset('assets/vendor/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/vendor/aos/aos.js') }}"></script>
<!-- <script src="{{ asset('assets/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<script src="{{ asset('assets/vendor/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vendor/swiper/swiper-bundle.min.js') }}"></script>
<!--<script src="assetsb2c/vendor/php-email-form/validate.js"></script>-->
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        if (localStorage.getItem('user_country') === 'egypt') {
            window.location.href = "{{ route('customer.index') }}";
        }
    });
</script> -->
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch('https://ipapi.co/json/')
            .then(response => response.json())
            .then(data => {
                const countryCode = data.country;
                if (countryCode === 'EG') {
                    localStorage.setItem('user_country', 'egypt');
                    window.location.href = "{{ route('customer.index') }}";
                } else if (countryCode === 'SA') {
                    localStorage.setItem('user_country', 'saudi');
                } else {
                    localStorage.setItem('user_country', 'other');
                }
                // location.reload(); 
            });
    });
</script> -->
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
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
                            alertError("Failed to send email.");
                        });
                })
                .catch(error => {
                    console.error("Error fetching user details:", error.response);
                    alertError("Failed to retrieve user details.");
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
                    alertSuccess("Your order has been placed successfully!");
                    window.location.href = "{{ route('customer.packages') }}";
                })
                .catch(error => {
                    console.error("Error creating order:", error.response);
                    alertError("Failed to create order.");
                });
        }
    });
</script>

@endsection