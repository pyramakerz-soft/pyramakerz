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

@php
$originalTotal = 0;
foreach ($package->products as $product) {
$originalTotal += $product->price * $product->pivot->quantity;
}
$packagePrice = $package->price;
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
    $saved=number_format(($originalTotal - $packagePrice), 0);
    @endphp
    @php
    function convertToArabicNumerals($number) {
    $western=['0','1','2','3','4','5','6','7','8','9'];
    $arabic=['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
    return str_replace($western, $arabic, $number);
    }
    @endphp
    <main class="main_wrapper overflow-hidden">
    <div class="breadcrumbarea breadcrumbarea--2">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-8">

                    <div class="breadcrumb__content__wraper" style="margin-top: 100px;" data-aos="fade-up">
                        <div class="breadcrumb__inner text-start">
                            <ul>
                                <li><a href="{{ route('customer.packages') }}">{{ __('packages.packages') }}</a></li>
                                <li>{{ app()->getLocale() === 'ar' ? $package->ar_name : $package->name }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="course__details__top--2">

                        <div class="product__details__heading" data-aos="fade-up">
                            <h3 style="font-size: 34px;">{{ app()->getLocale() === 'ar' ? $package->ar_name : $package->name }}</h3>
                        </div>
                        <div class="course__button__wraper" data-aos="fade-up">
                            <div class="course__button">
                                @if (app()->getLocale() === 'ar')
                                <p class="package_info">لقد وفرت {{ convertToArabicNumerals($saved) . ' ر.س'}}</p>
                                @else
                                <p class="package_info">You Save {{ $saved }} SAR</p>
                                @endif

                                {{-- <a class="course__2" href="#">{{ $product->skill_level ?? 'N/A' }}</a> --}}
                            </div>
                        </div>
                        <div class="product__details__price" data-aos="fade-up">
                            <ul>
                                <li>
                                    <div class="product__details__date">
                                        <!-- <i class="icofont-book-alt"></i> -->
                                        {{-- {{ $product->totalLessonsCount() }} Lessons --}}
                                    </div>
                                </li>
                                <!-- <li>
                                    <div class="product__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44 Reviews)</span>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="shape__icon__2">
            <img loading="lazy" class="shape__icon__img shape__icon__img__1"
                src="{{ asset('img/herobanner/herobanner__1.png') }}" alt="photo">
            <img loading="lazy" class="shape__icon__img shape__icon__img__2"
                src="{{ asset('img/herobanner/herobanner__2.png') }}" alt="photo">
            <img loading="lazy" class="shape__icon__img shape__icon__img__3"
                src="{{ asset('img/herobanner/herobanner__3.png') }}" alt="photo">
            <img loading="lazy" class="shape__icon__img shape__icon__img__4"
                src="{{ asset('img/herobanner/herobanner__5.png') }}" alt="photo">
        </div> -->
    </div>
    <div class="blogarea__2 sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog__details__content__wraper">
                        <div class="product__details__tab__wrapper" data-aos="fade-up">
                            <div class="row">
                                <div class="col-xl-12">
                                    <ul class="nav course__tap__wrap" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link active" data-bs-toggle="tab"
                                                data-bs-target="#products" type="button">
                                                <i class="icofont-book-alt"></i> {{ __('packages.products') }}
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link" data-bs-toggle="tab"
                                                data-bs-target="#description" type="button">
                                                <i class="icofont-paper"></i> {{ __('packages.description') }}
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content tab__content__wrapper" id="myTabContent">
                                <!-- Products Tab -->
                                <div class="tab-pane fade active show" id="products" role="tabpanel">
                                    <div class="accordion content__cirriculum__wrap" id="accordionExample">
                                        @foreach ($package->products as $product)
                                        <div class="accordion-item roundd">
                                            <h2 class="accordion-header" style="display: flex; justify-content: space-between;">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#product{{ $product->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="product{{ $product->id }}">
                                                    <strong>{{ app()->getLocale() === 'ar' ? $product->ar_name : $product->name }}</strong>
                                                </button>
                                            </h2>
                                            <div id="product{{ $product->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @if (app()->getLocale()==='ar')
                                                    <p><strong>{{ __('packages.description') }}: </strong> {{ $product->ar_description ?? 'No description available.' }}</p>
                                                    @else
                                                    <p><strong>{{ __('packages.description') }}: </strong> {{ $product->description ?? 'No description available.' }}</p>
                                                    @endif

                                                    <p><strong>{{ __('packages.price') }}:</strong>{{ number_format($product->price, 2) }} SAR</p>
                                                    <p><strong>{{ __('packages.quantity') }}:</strong> {{ $product->pivot->quantity }}</p>

                                                    @if ($product->image)
                                                    <div class="text-center">
                                                        <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded shadow" width="200">
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>





                                <!-- Description Tab -->
                                <div class="tab-pane fade" id="description" role="tabpanel">
                                    <div class="experence__heading">
                                        <h5>{{ __('packages.package_description') }}</h5>
                                    </div>
                                    <div class="experence__description">
                                        @if (app()->getLocale()==='ar')
                                        <p>{{ $package->ar_description ?? 'No description available for this package' }}
                                            @else
                                        <p>{{ $package->ar_description ?? 'No description available for this package' }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="course__details__sidebar--2">
                        <div class="event__sidebar__wraper" data-aos="fade-up">
                            <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                                <img loading="lazy"
                                    src="{{ asset('package/' . $package->image) }}" alt="{{ $package->name }}">
                            </div>


                            <div class="course__summery__lists">
                                <input type="text" id="promocode" class="form-control mb-2" placeholder="{{ __('packages.enter_promocode') }}">
                                <button id="apply-promocode" class="btn btn-secondary mb-3">{{ __('packages.apply_promocode') }}</button>

                                <p id="discount-info" class="text-success" style="display: none;"></p>
                                <!-- <p id="final-price" class="text-danger">{{ __('packages.total_price') }}: <span id="calculated-price">{{ $package->price ?? '0' }}</span> SAR</p> -->
                                <div class="course__summery__lists">
                                    <ul>
                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">{{ __('packages.price') }}: </span>
                                                <span class="sb_content" id="final-price" style="background-color: white;">
                                                    <span id="calculated-price">{{ $package->price ?? '0' }}</span> SAR
                                                </span>
                                            </div>
                                            <p id="discount-info" class="text-success" style="display: none;"></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="course__summery__button">
                                <!-- <a class="default__button" href="#">Enroll Now</a> -->
                                <button class="default__button choose-plan"
                                    style="text-align: center !important;"
                                    data-plan="{{ $package->name }}"
                                    data-plan-ar="{{ $package->ar_name }}"
                                    data-package-price="{{ $package->price }}"
                                    data-products='@json($package->products->map(fn($p) => ["id" => $p->id, "quantity" => $p->pivot->quantity]))'>
                                    {{ __('packages.request_package') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </main>


    @section('page_js')


    <script src="app.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let appliedPromocode = null;
            let discountAmount = 0;
            let discountType = "fixed";

            document.getElementById("apply-promocode").addEventListener("click", function() {
                document.getElementById("apply-promocode").disabled = true;
                let promocode = document.getElementById("promocode").value.trim();
                if (!promocode) {
                    alertError("{{ __('packages.enter_valid_promocode') }}");
                    document.getElementById("apply-promocode").disabled = false;
                    return;
                }

                axios.post(@json(url('/api/validate-promocode')), {
                        code: promocode
                    })
                    .then(response => {
                        discountAmount = response.data.discount_amount;
                        discountType = response.data.discount_type;
                        appliedPromocode = promocode;

                        let originalPrice = parseFloat(document.getElementById("calculated-price").innerText);

                        // Apply discount based on type
                        let newPrice = (discountType === 'percentage') ?
                            originalPrice - (originalPrice * discountAmount / 100) :
                            originalPrice - discountAmount;

                        newPrice = Math.max(newPrice, 0); // Ensure price doesn't go below zero

                        document.getElementById("calculated-price").innerText = newPrice.toFixed(2);

                        document.getElementById("discount-info").innerText = `{{ __('packages.discount_applied') }}: ${discountAmount} ${(discountType === 'percentage') ? '%' : 'SAR'}`;
                        document.getElementById("discount-info").style.display = "block";
                    })
                    .catch(error => {
                        document.getElementById("apply-promocode").disabled = false;
                        alertError("{{ __('packages.invalid_promocode') }}");
                    });
            });

            document.querySelectorAll(".choose-plan").forEach(button => {
                button.addEventListener("click", function() {
                    let plan = this.getAttribute("data-plan");
                    let plan_ar = this.getAttribute("data-plan-ar");
                    let plan_price = this.getAttribute("data-package-price");
                    let products = JSON.parse(this.getAttribute("data-products"));
                    let token = localStorage.getItem('auth_token_pyra12234');

                    if (!token) {
                        localStorage.setItem("redirect_after_login", "{{ route('customer.packages') }}");
                        window.location.href = "{{ route('customer.login') }}";
                    } else {
                        sendPlanEmail(plan_price, plan, products);
                        createOrder(plan, plan_ar, plan_price, products, appliedPromocode);
                    }
                });
            });

            function sendPlanEmail(plan_price, plan, products) {
                let token = localStorage.getItem('auth_token_pyra12234');

                axios.get(@json(url('/api/user')), {
                        headers: {
                            Authorization: `Bearer ${token}`
                        }
                    })
                    .then(response => {
                        let user = response.data; // Get logged-in user details
                        console.log(user);
                        axios.post(@json(url('/api/send-plan-email')), {
                                user_name: user.name,
                                user_email: user.email,
                                selected_plan: plan,
                                plan_products: products, // Sending products array
                                plan_price: plan_price
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

            function createOrder(plan, plan_ar, plan_price, products, promocode) {
                let token = localStorage.getItem('auth_token_pyra12234');
                axios.post(@json(url('/api/orders')), {
                        plan_name: plan,
                        plan_name_ar: plan_ar,
                        package_price: plan_price,
                        products: products,
                        promocode: promocode
                    }, {
                        headers: {
                            Authorization: `Bearer ${token}`
                        }
                    })
                    .then(response => {
                        Swal.fire({
                            title: "Success!",
                            text: "{{ __('packages.order_success') }}",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('customer.packages') }}";
                            }
                        });
                    })
                    .catch(error => {
                        alertError("{{ __('packages.order_failed') }}");
                    });
            }
        });
    </script>

    @endsection
    @endsection