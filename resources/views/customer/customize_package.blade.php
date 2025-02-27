@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')


<main id="main">
    <section class="pricing-section mt-5">
        <div class="container py-5">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase">Customize Your Plan</h2>
                <p class="text-muted text-center">Select the products you want and choose their quantities</p>
            </div>
            <div class="row justify-content-center" data-aos="zoom-in-up">
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <div class="card border-0 rounded-lg text-center p-4 shadow" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <h4 class="fw-bold text-dark text-center">Choose Your Products</h4>
                            <hr>

                            <form id="customPlanForm">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input product-checkbox me-2"
                                                type="checkbox"
                                                value="{{ $product->id }}"
                                                data-name="{{ $product->name }}"
                                                data-price="{{ $product->price }}"
                                                id="product-{{ $product->id }}">

                                            <label class="form-check-label" for="product-{{ $product->id }}">
                                                {{ $product->name }} - <strong>${{ number_format($product->price, 2) }}</strong>
                                            </label>

                                            <input type="number"
                                                class="form-control quantity-input ms-2"
                                                id="quantity-{{ $product->id }}"
                                                value="1"
                                                min="1"
                                                style="width: 60px; display: none;">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <hr>
                                <h4 class="text-center">Total Price: <span id="total-price" class="fw-bold">$0.00</span></h4>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary btn-lg mt-3" id="submitCustomPlan">
                                        Submit Custom Plan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        let token = localStorage.getItem('auth_token');

        if (!token) {
            localStorage.setItem("redirect_after_login", "/customize");
            window.location.href = "/login";
        }
        const checkboxes = document.querySelectorAll(".product-checkbox");
        const totalPriceElement = document.getElementById("total-price");

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", function() {
                let quantityInput = document.getElementById(`quantity-${this.value}`);

                if (this.checked) {
                    quantityInput.style.display = "inline-block";
                } else {
                    quantityInput.style.display = "none";
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
            totalPriceElement.innerText = `$${total.toFixed(2)}`;
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

            let token = localStorage.getItem('auth_token');

            if (!token) {
                localStorage.setItem("redirect_after_login", "/customize");
                window.location.href = "/login";
            } else {
                createOrder(selectedProducts);
                sendCustomPlanEmail(selectedProducts);
            }
        });

        function sendCustomPlanEmail(selectedProducts) {
            let token = localStorage.getItem('auth_token');

            axios.get('/api/user', {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            }).then(response => {
                let user = response.data;

                axios.post('/api/send-plan-email', {
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
                    window.location.href = "/packages";
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
            let token = localStorage.getItem('auth_token');
            axios.post('/api/orders', {
                    plan_name: "Custom",
                    products: selectedProducts
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