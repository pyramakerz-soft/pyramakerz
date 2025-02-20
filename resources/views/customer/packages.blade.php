<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pyramakerz - School Portal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables-orange.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    @include('customer.nav')

    <!--  <div class="popup" id="popup">-->
    <!--    <div class="popup-overlay"></div>-->
    <!--    <div class="popup-content">-->
    <!--        <span class="close" onclick="closePopup()">&times;</span>-->
    <!--        <h2>Welcome to <span> Pyramakerz!</span></h2>-->
    <!--        <p>Join our Whatsapp Community of young innovators!</p>-->
    <!--        <a href="https://api.whatsapp.com/send?phone=+201220016331&text=Welcome to Pyramakerz" target="blank" class="btn join-btn">Join Now <i class="fab fa-whatsapp"></i></a>-->
    <!--        <button class="btn remind-btn" onclick="closePopup()">Remind Me Later</button>-->
    <!--    </div>-->
    <!--</div>-->





    <main id="main">

        <section class="pricing-section mt-5">
            <div class="container py-5">
                <div class="section-header text-center" data-aos="zoom-in-up">
                    <h2 class="fw-bold text-uppercase">Our Packages</h2>
                    <p class="text-muted text-center">Choose the best plan that fits your needs</p>
                </div>

                <div class="row justify-content-center">
                    <!-- Pricing Block -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card border-0 rounded-lg text-center p-4 shadow" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <div class="icon-box mb-3">
                                    <div class="icon-outer">
                                        <i class="fas fa-rocket fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <h4 class="price text-uppercase fw-bold text-dark">Bronze</h4>
                                <hr class="mx-auto w-50">
                                <ul class="list-unstyled features">
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 1</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 2</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 3</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 4</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 5</li>
                                </ul>
                                <button class="btn btn-primary btn-lg mt-3 choose-plan"
                                    data-plan="Bronze"
                                    data-features='["Feature 1", "Feature 2", "Feature 3", "Feature 4", "Feature 5"]'>
                                    Request Package
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card border-0 rounded-lg text-center p-4 shadow" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <div class="icon-box mb-3">
                                    <div class="icon-outer">
                                        <i class="fas fa-rocket fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <h4 class="price text-uppercase fw-bold text-dark">Silver</h4>
                                <hr class="mx-auto w-50">
                                <ul class="list-unstyled features">
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 1</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 2</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 3</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 4</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 5</li>
                                </ul>
                                <button class="btn btn-primary btn-lg mt-3 choose-plan"
                                    data-plan="Silver"
                                    data-features='["Feature 1", "Feature 2", "Feature 3", "Feature 4", "Feature 5"]'>
                                    Request Package
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card border-0 rounded-lg text-center p-4 shadow" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <div class="icon-box mb-3">
                                    <div class="icon-outer">
                                        <i class="fas fa-rocket fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <h4 class="price text-uppercase fw-bold text-dark">Gold</h4>
                                <hr class="mx-auto w-50">
                                <ul class="list-unstyled features">
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 1</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 2</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 3</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 4</li>
                                    <li class="py-1"><i class="fas fa-check-circle text-success"></i> Feature 5</li>
                                </ul>
                                <button class="btn btn-primary btn-lg mt-3 choose-plan"
                                    data-plan="Gold"
                                    data-features='["Feature 1", "Feature 2", "Feature 3", "Feature 4", "Feature 5"]'>
                                    Request Package
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
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
                                <button class="btn btn-primary btn-lg mt-3 choose-plan"
                                    data-plan="Custom"
                                    data-features='["Feature 1", "Feature 2", "Feature 3", "Feature 4", "Feature 5"]'>
                                    Request Package
                                </button>
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

    @include('customer.footer')


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="app.js"></script>
    <!-- counter -->


</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".choose-plan");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                let plan = this.getAttribute("data-plan"); // Get plan name
                let features = JSON.parse(this.getAttribute("data-features")); // Get features as an array
                let token = localStorage.getItem('auth_token'); // Check if user is logged in

                if (!token) {
                    // If user is not logged in, redirect to login and store last page
                    localStorage.setItem("redirect_after_login", "/packages");
                    window.location.href = "/login";
                } else {
                    // If user is logged in, proceed with email and order creation
                    sendPlanEmail(plan, features);
                    createOrder(plan, features);
                }
            });
        });

        function sendPlanEmail(plan, features) {
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
                            plan_features: features // Send features array
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

        function createOrder(plan, features) {
            let token = localStorage.getItem('auth_token');

            axios.post('/api/orders', {
                    plan_name: plan,
                    features: features
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



</html>