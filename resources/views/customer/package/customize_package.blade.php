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
<style>
    .hidden-important {
        display: none !important;
    }

    .quantity-input {
        background-color: white;
        color: #FF7519;
        font-size: 16px;
        border: 1px solid #ced4da;
        -moz-appearance: textfield;
        -webkit-appearance: none;
        appearance: textfield;
        width: 36px;
        text-align: center !important;
        padding: 0;
        height: 32px;
        line-height: 32px;
        vertical-align: middle;
    }



    .quantity-input::-webkit-outer-spin-button,
    .quantity-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .quantity-input:focus {
        outline: none !important;
        box-shadow: none !important;
        border-color: #ced4da;
    }

    .btn-sm {
        min-width: 32px;
        min-height: 32px;
        border: none;
        background-color: #EEEEEE;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 16px;
        color: black;
        font-weight: bold;
        border-radius: 0;
    }


    .form-check-input:checked {
        background-color: #FF7519;
        border-color: #FF7519;
    }
</style>
@endsection
@section('content')


<main class="main_wrapper overflow-hidden">
    <div class="breadcrumbarea breadcrumbarea--2">
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-8">
                    <div class="breadcrumb__content__wraper" style="margin-top: 100px;" data-aos="fade-up">
                        <div class="breadcrumb__inner text-start">
                            <ul>
                                <li><a href="{{ route('customer.packages') }}">{{ __('packages.packages') }}</a></li>
                                <li>{{ app()->getLocale() === 'ar' ? 'مخصص' : 'Custom' }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="course__details__top--2">
                        <div class="product__details__heading" data-aos="fade-up">
                            <h3 style="font-size: 34px;">{{ app()->getLocale() === 'ar' ? 'مخصص' : 'Custom' }}</h3>
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
                                            <h2 class="accordion-header" style="display: flex; justify-content: space-between; align-items: center;">
                                                <input class="form-check-input product-checkbox me-2" type="checkbox"
                                                    style="margin: 0 20px 0 20px"
                                                    value="{{ $product->id }}"
                                                    data-name="{{ $product->name }}"
                                                    data-price="{{ $product->price }}"
                                                    id="product-{{ $product->id }}">



                                                @if (app()->getLocale() === 'ar')
                                                <div style="width: 100%;">
                                                    <button class="accordion-button collapsed" type="button"
                                                        style="position: relative;left:0 !important;float:left;"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#product{{ $product->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="product{{ $product->id }}">
                                                        <strong>{{ app()->getLocale() === 'ar' ? $product->ar_name : $product->name }} - {{ number_format($product->price, 2) }} SAR</strong>
                                                    </button>

                                                    <div class="d-flex align-items-center" id="quantityDiv-{{ $product->id }}" style="flex: 1; justify-content: end; position: relative; right: 93%; z-index: 9999; top: 12.5px; display: none !important;">
                                                        <!-- Minus Button -->
                                                        <button type="button" class="btn btn-outline-secondary btn-sm minus-btn" data-id="{{ $product->id }}">−</button>

                                                        <input type="number"
                                                            class="form-control text-center mx-2 quantity-input"
                                                            id="quantity-{{ $product->id }}"
                                                            value="1"
                                                            min="1"
                                                            style="appearance: textfield; text-align: center !important; -moz-appearance: textfield; -webkit-appearance: none; border:none;height: 32px; margin: 0 !important; border-radius: 0;">
                                                        <!-- Plus Button -->
                                                        <button type="button" class="btn btn-outline-secondary btn-sm plus-btn" data-id="{{ $product->id }}">+</button>
                                                    </div>
                                                </div>
                                                @else
                                                <div style="width: 100%;">
                                                    <button class="accordion-button collapsed" type="button"
                                                        style="position: relative;left:0 !important;float:left;"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#product{{ $product->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="product{{ $product->id }}">
                                                        <strong>{{ app()->getLocale() === 'ar' ? $product->ar_name : $product->name }} - {{ number_format($product->price, 2) }} SAR</strong>
                                                    </button>

                                                    <div class="d-flex align-items-center" id="quantityDiv-{{ $product->id }}" style="flex: 1; justify-content: end; position: relative; right: 7%; z-index: 9999; top: 12.5px; display: none !important;">
                                                        <!-- Minus Button -->
                                                        <button type="button" class="btn btn-outline-secondary btn-sm minus-btn" data-id="{{ $product->id }}">−</button>

                                                        <input type="number"
                                                            class="form-control text-center mx-2 quantity-input"
                                                            id="quantity-{{ $product->id }}"
                                                            value="1"
                                                            min="1"
                                                            style="appearance: textfield; text-align: center !important; -moz-appearance: textfield; -webkit-appearance: none; border:none;height: 32px; margin: 0 !important; border-radius: 0;">
                                                        <!-- Plus Button -->
                                                        <button type="button" class="btn btn-outline-secondary btn-sm plus-btn" data-id="{{ $product->id }}">+</button>
                                                    </div>
                                                </div>
                                                @endif
                                            </h2>
                                            <div id="product{{ $product->id }}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @if (app()->getLocale()==='ar')
                                                    <p><strong>{{ __('packages.description') }}: </strong> {{ $product->ar_description ?? 'No description available.' }}</p>
                                                    @else
                                                    <p><strong>{{ __('packages.description') }}: </strong> {{ $product->description ?? 'No description available.' }}</p>
                                                    @endif

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
                                <!-- <img src="{{ asset('assets/img/custom_plan.jpg') }}" alt="Custom Plan"> -->
                                <p style="text-align: center !important; font-size: 24px;">{{ app()->getLocale() === 'ar' ? 'باقة مخصصة' : 'Custom Package' }}</p>
                            </div>



                            <!-- <div class="course__summery__lists">
                                <ul>
                                    <li>
                                        <div class="course__summery__item">
                                            <span class="sb_label">{{ __('packages.total_price') }}: </span>
                                            <span class="sb_content" id="total-price2"><a href="#" id="sidebar-total">0.00 SAR</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->

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
                                                <span class="sb_content" style="background-color: white;" id="final-price"><span id="calculated-price" class="total-price2">{{ $package->price ?? '0' }}</span> SAR</span>
                                            </div>
                                            <p id="discount-info" class="text-success" style="display: none;"></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="course__summery__button">
                                <button class="default__button" style="text-align: center !important;" id="submitCustomPlan"
                                    data-package-price="0"> {{ __('packages.request_package') }}</button>
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
        if (localStorage.getItem('user_country') === 'egypt') {
            window.location.href = "{{ route('customer.index') }}";
        }
        document.querySelectorAll('.quantity-input').forEach(input => {
            // Store the previous valid value
            let previousValue = input.value;

            input.addEventListener('input', function() {
                if (this.value === '') {
                    this.value = previousValue; // revert to last value
                } else {
                    previousValue = this.value;
                }
            });
        });
        let token = localStorage.getItem('auth_token_pyra12234');

        if (!token) {
            localStorage.setItem("redirect_after_login", "{{ route('customer.customizePackage') }}");
            window.location.href = "{{ route('customer.login') }}";
        }
        const checkboxes = document.querySelectorAll(".product-checkbox");
        const totalPriceElement = document.getElementById("total-price");
        const totalPriceElement2 = document.querySelector(".total-price2");

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", function() {
                let quantityInput = document.getElementById(`quantity-${this.value}`);
                let quantityDiv = document.getElementById(`quantityDiv-${this.value}`);
                // let quantityLabel = document.getElementById(`quantity-label${this.value}`);

                if (this.checked) {
                    quantityInput.style.display = "inline-block";
                    quantityDiv.style.display = "block";
                    quantityDiv.classList.remove('hidden-important');

                    // quantityLabel.style.display = "inline-block";
                } else {
                    quantityInput.style.display = "none";
                    // quantityLabel.style.display = "none";
                    quantityInput.value = "1";
                    quantityDiv.classList.add('hidden-important');

                }

                updateTotalPrice();
            });
        });

        // Plus button
        document.querySelectorAll('.plus-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.dataset.id;
                const input = document.getElementById('quantity-' + id);
                input.value = parseInt(input.value) + 1;
                updateTotalPrice();
            });
        });

        // Minus button
        document.querySelectorAll('.minus-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.dataset.id;
                const input = document.getElementById('quantity-' + id);
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                    updateTotalPrice();
                }
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

            let discountedPrice = total;

            // Apply discount if a promo code has been entered
            if (appliedPromocode) {
                if (discountType === 'percentage') {
                    discountedPrice = total - (total * discountAmount / 100);
                } else {
                    discountedPrice = total - discountAmount;
                }
                discountedPrice = Math.max(discountedPrice, 0); // Ensure price doesn't go negative
            }

            totalPriceElement.innerText = `${total.toFixed(2)} SAR`;
            totalPriceElement2.innerText = `${discountedPrice.toFixed(2)} SAR`;

            // Show the original price crossed out if a discount is applied
            if (appliedPromocode) {
                document.getElementById("calculated-price").innerHTML = discountedPrice.toFixed(2);
            } else {
                document.getElementById("calculated-price").innerText = total.toFixed(2);
            }

            // Store the updated discounted price in the submit button
            document.getElementById("submitCustomPlan").setAttribute("data-package-price", `${discountedPrice.toFixed(2)}`);
        }

        //////////////////////////////////////
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

                    // Update total price with discount applied
                    updateTotalPrice();

                    document.getElementById("discount-info").innerText = `{{ __('packages.discount_applied') }}: ${discountAmount} ${(discountType === 'percentage') ? '%' : 'SAR'}`;
                    document.getElementById("discount-info").style.display = "block";
                })
                .catch(error => {
                    document.getElementById("apply-promocode").disabled = false;
                    alertError("{{ __('packages.invalid_promocode') }}");
                });
        });

        ///////////////////////////////////////

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
                alertError("{{ __('packages.select_products') }}");
                return;
            }

            let token = localStorage.getItem('auth_token_pyra12234');

            if (!token) {
                localStorage.setItem("redirect_after_login", "{{ route('customer.customizePackage') }}");
                window.location.href = "{{ route('customer.login') }}";
            } else {
                let plan_price = this.getAttribute("data-package-price");
                createOrder(plan_price, selectedProducts, appliedPromocode);
                sendCustomPlanEmail(plan_price, selectedProducts);
            }
        });

        function sendCustomPlanEmail(plan_price, selectedProducts) {
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
                    plan_products: selectedProducts,
                    plan_price: plan_price

                }, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                }).then(() => {
                    // alertSuccess("Your custom plan has been sent successfully!");
                    // window.location.href = "{{ route('customer.packages') }}";
                }).catch(error => {
                    console.error("Error sending email:", error.response);
                    alertError("Failed to send custom plan email.");
                });

            }).catch(error => {
                console.error("Error fetching user details:", error.response);
                alertError("Failed to retrieve user details.");
            });
        }

        function createOrder(plan_price, selectedProducts, promocode) {
            let token = localStorage.getItem('auth_token_pyra12234');
            axios.post(@json(url('/api/orders')), {
                    plan_name: "Custom",
                    plan_name_ar: "مخصص",
                    products: selectedProducts,
                    package_price: plan_price,
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