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


<main class="main_wrapper overflow-hidden">
    <div class="breadcrumbarea breadcrumbarea--2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="breadcrumb__content__wraper" style="margin-top: 100px" data-aos="fade-up">
                        <div class="breadcrumb__inner text-start">
                            <ul>
                                <li><a href="{{ route('customer.packages') }}">Packages</a></li>
                                <li>{{ $package->name ?? 'Course Details' }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="course__details__top--2">
                        <div class="course__button__wraper" data-aos="fade-up">
                            <div class="course__button">
                                <a href="#">Featured</a>
                                {{-- <a class="course__2" href="#">{{ $product->skill_level ?? 'N/A' }}</a> --}}
                            </div>
                        </div>
                        <div class="product__details__heading" data-aos="fade-up">
                            <h3>{{ $package->name }} Package</h3>
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
                                                <i class="icofont-book-alt"></i> Products
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="single__tab__link" data-bs-toggle="tab"
                                                data-bs-target="#description" type="button">
                                                <i class="icofont-paper"></i> Description
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
                                                    <strong>{{ $product->name }}</strong>
                                                </button>
                                            </h2>
                                            <div id="product{{ $product->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p><strong>Description:</strong> {{ $product->description ?? 'No description available.' }}</p>
                                                    <p><strong>Price:</strong>{{ number_format($product->price, 2) }} SAR</p>
                                                    <p><strong>Quantity:</strong> {{ $product->pivot->quantity }}</p>

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
                                        <h5>Package Description</h5>
                                    </div>
                                    <div class="experence__description">
                                        <p>{{ $package->description ?? 'No description available for this package' }}
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

                            <div class="course__summery__button">
                                <!-- <a class="default__button" href="#">Enroll Now</a> -->
                                <button class="default__button choose-plan"
                                    data-plan="{{ $package->name }}"
                                    data-products='@json($package->products->map(fn($p) => ["id" => $p->id, "quantity" => $p->pivot->quantity]))'>
                                    Request Package
                                </button>
                            </div>

                            <div class="course__summery__lists">
                                <ul>
                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">Price:</span>
                                            <span class="sb_content"><a href="#">{{ $package->price ?? '0' }} SAR</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- <div class="course__summery__item">
                                            <span class="sb_label">Skill Level:</span>
                                            {{-- <span class="sb_content">{{ $course->skill_level ?? 'N/A' }}</span> --}}
                                        </div> -->
                                    </li>
                                    <li>
                                        <!-- <div class="course__summery__item">
                                            <span class="sb_label">Language:</span>
                                            {{-- <span class="sb_content">
                                                    {{ $course->language ?? 'N/A' }}</span> --}}
                                        </div> -->
                                    </li>
                                </ul>
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
        const buttons = document.querySelectorAll(".choose-plan");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                let plan = this.getAttribute("data-plan");
                let products = JSON.parse(this.getAttribute("data-products"));
                let token = localStorage.getItem('auth_token');

                if (!token) {
                    localStorage.setItem("redirect_after_login", "/packages");
                    window.location.href = "/login";
                } else {
                    // If user is logged in, proceed with email and order creation
                    sendPlanEmail(plan, products);
                    createOrder(plan, products);
                }
            });
        });

        function sendPlanEmail(plan, products) {
            let token = localStorage.getItem('auth_token');

            axios.get(@json(url('/api/user')), {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    let user = response.data; // Get logged-in user details

                    axios.post(@json(url('/api/send-plan-email')), {
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
            let token = localStorage.getItem('auth_token');
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
                    window.location.href = "/packages";
                })
                .catch(error => {
                    console.error("Error creating order:", error.response);
                    alert("Failed to create order.");
                });
        }
    });
</script>

@endsection
@endsection