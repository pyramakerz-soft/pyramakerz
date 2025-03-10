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
            <div class="row mt-5">
                <div class="col-xl-8">
                    @if (app()->getLocale() === 'ar')
                    <div class="breadcrumb__content__wraper" style="margin-top: 100px; text-align: right;" data-aos="fade-up">
                        <div class="breadcrumb__inner text-right">
                            <ul>
                                <li>مخصص</li>
                                <li><a href="{{ route('customer.packages') }}">{{ __('packages.packages') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    @else
                    <d class="breadcrumb__content__wraper" style="margin-top: 100px;" data-aos="fade-up">
                        <div class="breadcrumb__inner text-start">
                            <ul>
                                <li><a href="{{ route('customer.packages') }}">{{ __('packages.packages') }}</a></li>
                                <li>Custom</li>
                            </ul>
                        </div>
                </div>
                @endif

                <div class="course__details__top--2">
                    <div class="course__button__wraper" data-aos="fade-up">
                        <div class="course__button">
                            <a href="#">{{ __('packages.featured') }}</a>
                            {{-- <a class="course__2" href="#">{{ $product->skill_level ?? 'N/A' }}</a> --}}
                        </div>
                    </div>
                    <div class="product__details__heading" data-aos="fade-up">
                        <h3>{{ app()->getLocale() === 'ar' ? 'مخصص' : 'Custom' }}</h3>
                    </div>
                    <div class="product__details__price" data-aos="fade-up">
                        <ul>
                            <li>
                                <div class="product__details__date">
                                    <i class="icofont-book-alt"></i>
                                    {{-- {{ $product->totalLessonsCount() }} Lessons --}}
                                </div>
                            </li>
                            <li>
                                <!-- <div class="product__star">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <span>(44 Reviews)</span>
                                    </div> -->
                            </li>
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
                                                <i class="icofont-book-alt"></i> {{ __('packages.choose_products') }}
                                            </button>
                                        </li>
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="single__tab__link" data-bs-toggle="tab"
                                                data-bs-target="#summary" type="button">
                                                <i class="icofont-paper"></i> Summary
                                            </button>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content tab__content__wrapper" id="myTabContent">
                                <!-- Products Selection Tab -->
                                <div class="tab-pane fade active show" id="products" role="tabpanel">
                                    <div class="accordion content__cirriculum__wrap" id="accordionExample">
                                        @foreach($products as $product)
                                        <div class="accordion-item roundd">
                                            <h2 class="accordion-header" style="display: flex; justify-content: space-between;">
                                                <input class="form-check-input product-checkbox me-2" type="checkbox"
                                                    value="{{ $product->id }}"
                                                    data-name="{{ $product->name }}"
                                                    data-price="{{ $product->price }}"
                                                    id="product-{{ $product->id }}">

                                                <div class="d-flex align-items-center">
                                                    <label style="font-size: 16px; display: none;" id="quantity-label{{ $product->id }}">{{ __('packages.quantity') }}:</label>
                                                    <input type="number" class="form-control quantity-input ms-2"
                                                        id="quantity-{{ $product->id }}" value="1" min="1"
                                                        style="width: 60px; display: none;">
                                                </div>
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#product{{ $product->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="product{{ $product->id }}">
                                                    <strong>{{ app()->getLocale() === 'ar' ? $product->ar_name : $product->name }} - {{ number_format($product->price, 2) }} SAR</strong>
                                                </button>

                                            </h2>
                                            <div id="product{{ $product->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p><strong>{{ __('packages.description') }}: </strong> {{ $product->description ?? 'No description available.' }}</p>
                                                    <p><strong>{{ __('packages.price') }}:</strong> {{ number_format($product->price, 2) }} SAR</p>

                                                    <!-- Quantity Input (Hidden initially) -->


                                                    @if ($product->image)
                                                    <div class="text-center mt-3">
                                                        <img src="{{ asset('products/' . $product->image) }}"
                                                            alt="{{ $product->name }}" class="img-fluid rounded shadow" width="200">
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Summary Tab -->
                                <div class="tab-pane fade" id="summary" role="tabpanel">
                                    <div class="experence__heading">
                                        <h5>Selected Products</h5>
                                    </div>
                                    <div class="experence__description">
                                        <ul id="selected-products-list"></ul>
                                    </div>
                                    <h4 class="text-center mt-4">{{ __('packages.total_price') }}: <span id="total-price" class="fw-bold">0.00 SAR</span></h4>
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
                                <img src="{{ asset('assets/img/custom_plan.jpg') }}" alt="Custom Plan">
                            </div>

                            <div class="course__summery__button">
                                <button class="default__button" style="text-align: center !important;" id="submitCustomPlan"> {{ __('packages.request_package') }}</button>
                            </div>

                            <div class="course__summery__lists">
                                <ul>
                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">{{ __('packages.total_price') }}: </span>
                                            <span class="sb_content" id="total-price2"><a href="#" id="sidebar-total">0.00 SAR</a></span>
                                        </div>
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
@section('page_js')
<script src="app.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let token = localStorage.getItem('auth_token_pyra12234');

        if (!token) {
            localStorage.setItem("redirect_after_login", "/customize");
            window.location.href = "{{ route('customer.login') }}";
        }
        const checkboxes = document.querySelectorAll(".product-checkbox");
        const totalPriceElement = document.getElementById("total-price");
        const totalPriceElement2 = document.getElementById("total-price2");

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", function() {
                let quantityInput = document.getElementById(`quantity-${this.value}`);
                let quantityLabel = document.getElementById(`quantity-label${this.value}`);

                if (this.checked) {
                    quantityInput.style.display = "inline-block";
                    quantityLabel.style.display = "inline-block";
                } else {
                    quantityInput.style.display = "none";
                    quantityLabel.style.display = "none";
                    quantityInput.value = "1";
                }

                updateTotalPrice();
            });
        });

        document.querySelectorAll(".quantity-input").forEach((input) => {
            input.addEventListener("input", function() {
                updateTotalPrice();
            });
        });

        function updateTotalPrice() {
            let total = 0;
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    let price = parseFloat(checkbox.dataset.price);
                    let quantity = parseInt(document.getElementById(`quantity-${checkbox.value}`).value);
                    total += price * quantity;
                }
            });
            totalPriceElement.innerText = `${total.toFixed(2)} SAR`;
            totalPriceElement2.innerText = `${total.toFixed(2)} SAR`;
        }

        document.getElementById("submitCustomPlan").addEventListener("click", function() {
            let selectedProducts = [];
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    let productId = checkbox.value;
                    let productName = checkbox.dataset.name;
                    let productPrice = checkbox.dataset.price;
                    let quantity = document.getElementById(`quantity-${productId}`).value;

                    selectedProducts.push({
                        id: productId,
                        name: productName,
                        price: productPrice,
                        quantity: quantity
                    });
                }
            });

            if (selectedProducts.length === 0) {
                alert("Please select at least one product for your custom plan.");
                return;
            }

            let token = localStorage.getItem('auth_token_pyra12234');

            if (!token) {
                localStorage.setItem("redirect_after_login", "{{ route('customer.customizePackage') }}");
                window.location.href = "{{ route('customer.login') }}";
            } else {
                createOrder(selectedProducts);
                sendCustomPlanEmail(selectedProducts);
            }
        });

        function sendCustomPlanEmail(selectedProducts) {
            let token = localStorage.getItem('auth_token_pyra12234');

            axios.get(@json(url('/api/user')), {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            }).then(response => {
                let user = response.data;

                axios.post(@json(url('/api/send-plan-email')), {
                    user_name: user.name,
                    user_email: user.email,
                    selected_plan: "Custom Plan",
                    plan_products: selectedProducts
                }, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                }).then(() => {
                    alert("Your custom plan has been sent successfully!");
                    window.location.href = @json(route('customer.packages'));
                }).catch(error => {
                    console.error("Error sending email:", error.response);
                    alert("Failed to send custom plan email.");
                });

            }).catch(error => {
                console.error("Error fetching user details:", error.response);
                alert("Failed to retrieve user details.");
            });
        }

        function createOrder(selectedProducts) {
            let token = localStorage.getItem('auth_token_pyra12234');

            axios.post(@json(url('/api/orders')), {
                    plan_name: "Custom",
                    plan_name_ar: "مخصص",
                    products: selectedProducts
                }, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    alert("Your order has been placed successfully!");
                    window.location.href = @json(route('customer.packages'));
                })
                .catch(error => {
                    console.error("Error creating order:", error.response);
                    alert("Failed to create order.");
                });
        }


    });
</script>
@endsection