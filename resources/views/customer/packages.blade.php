@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section mt-5">
        <div class="container py-5">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase">Our Packages</h2>
                <p class="text-muted text-center">Choose the best plan that fits your needs</p>
            </div>

            <div class="row justify-content-center">
                @foreach (array_slice($plans, 0, 3) as $planName => $planProducts)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card border-0 rounded-lg text-center p-4 shadow" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <div class="icon-outer">
                                    <i class="fas fa-rocket fa-3x text-primary"></i>
                                </div>
                            </div>
                            <h4 class="price text-uppercase fw-bold text-dark">{{ $planName }}</h4>
                            <hr class="mx-auto w-50">

                            <ul class="list-unstyled features">
                                @foreach ($planProducts as $product)
                                <li class="py-1">
                                    <i class="fas fa-check-circle text-success"></i> {{ $product->name }}
                                </li>
                                @endforeach
                            </ul>

                            <button class="btn btn-primary btn-lg mt-3 choose-plan"
                                data-plan="{{ $planName }}"
                                data-products='@json($planProducts->map(fn($p) => ["id" => $p->id, "quantity" => 1]))'>
                                Request Package
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Custom Plan (unchanged) -->
                <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card border-0 rounded-lg text-center p-4 shadow" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <div class="icon-box mb-3">
                                    <div class="icon-outer">
                                        <i class="fas fa-rocket fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <h4 class="price text-uppercase fw-bold text-dark">Custom</h4>
                                <hr class="mx-auto w-50">

                                <ul class="list-unstyled features">
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 1</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 2</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 3</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 4</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 5</li>
                                </ul>

                                <button class="btn btn-primary btn-lg mt-3"
                                    onclick="window.location.href='/packages/customize'">
                                    Customize
                                </button>
                            </div>
                        </div>
                    </div> -->
            </div>
            <div class="row justify-content-center mt-5" data-aos="zoom-in-up">
                <button class="btn btn-primary btn-lg mt-3 col-lg-3"
                    onclick="window.location.href='/customize'">
                    Customize Package
                </button>
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

            axios.get('/api/user', {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    let user = response.data; // Get logged-in user details

                    axios.post('/api/send-plan-email', {
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
            axios.post('/api/orders', {
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