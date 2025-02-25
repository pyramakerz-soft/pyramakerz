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

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
    @include('customer.nav')
    <main id="main">

        <section class="pricing-section">

            <div class="container mt-3">
                <div class="section-header text-center" data-aos="zoom-in-up">
                    <h2 class="fw-bold text-uppercase fs-2">Manage Account</h2>
                </div>
                <!-- User Information Section -->
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <h4>Profile Information</h4>
                        <p><strong>Name:</strong> <span id="user-name"></span></p>
                        <p><strong>Email:</strong> <span id="user-email"></span></p>
                    </div>
                </div>

                <!-- Update Password Section -->
                <div class="card mb-4">
                    <div class="card-body shadow">
                        <h4>Change Password</h4>
                        <form id="updatePasswordForm">
                            @csrf
                            <div class="mb-3">
                                <label>Current Password</label>
                                <input type="password" id="current_password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>New Password</label>
                                <input type="password" id="new_password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                            <p id="password-message" class="text-success mt-2"></p>
                        </form>
                    </div>
                </div>

                <!-- User Orders Section -->
                <div class="card">
                    <div class="card-body shadow">
                        <h4 class="mb-3">Plan Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="col-2 text-center" style="background-color: var(--color-primary);">Plan</th>
                                        <th class="col-4 text-center" style="background-color: var(--color-primary);">Products</th>
                                        <th class="col-2 text-center" style="background-color: var(--color-primary);">Quantity</th>
                                        <th class="col-2 text-center" style="background-color: var(--color-primary);">Total Price</th>
                                        <th class="col-2 text-center" style="background-color: var(--color-primary);">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="orderslist">
                                    <tr>
                                        <td colspan="3" class="text-center">Loading orders...</td>
                                    </tr>
                                </tbody>
                            </table>
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

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let token = localStorage.getItem('auth_token');

        if (!token) {
            window.location.href = "/login"; // Redirect if not logged in
        }

        // Fetch User Details
        axios.get('/api/user', {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            })
            .then(response => {
                document.getElementById("user-name").innerText = response.data.name;
                document.getElementById("user-email").innerText = response.data.email;
            })
            .catch(error => {
                console.error("Error fetching user:", error.response);
                alert("Failed to fetch user details.");
            });

        // Update Password
        document.getElementById("updatePasswordForm").addEventListener("submit", function(event) {
            event.preventDefault();

            axios.post('/api/update-password', {
                    current_password: document.getElementById("current_password").value,
                    new_password: document.getElementById("new_password").value
                }, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    document.getElementById("password-message").innerText = response.data.message;
                })
                .catch(error => {
                    document.getElementById("password-message").innerText = error.response.data.error || "Password update failed!";
                });
        });

        // Fetch Orders
        axios.get('/api/user/orders', {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            })
            .then(response => {
                let ordersList = document.getElementById("orderslist");
                ordersList.innerHTML = "";

                let orders = response.data.orders;
                if (!orders || orders.length === 0) {
                    ordersList.innerHTML = `<tr><td colspan="3" class="text-center">No orders found.</td></tr>`;
                    return;
                }

                orders.forEach(order => {
                    if (!order.products || order.products.length === 0) {
                        console.warn(`No products found for order: ${order.plan_name}`);
                        return;
                    }

                    let mappedProducts = order.products.map(product => {
                        return `<strong>${product.name}</strong>`;
                    });
                    let mappedQuantity = order.products.map(product => {
                        return `${product.quantity}`;
                    });
                    let mappedPrice = order.products.map(product => {
                        return `${parseFloat(product.price * parseInt(product.quantity)).toFixed(2)}`;
                    });


                    let productList = mappedProducts.join("<br>");
                    let quantityList = mappedQuantity.join("<br>");
                    let priceList = mappedPrice.join("<br>");
                    let row = document.createElement("tr");
                    row.innerHTML = `
        <td class="text-center fw-bold">${order.plan_name}</td>
        <td class="text-center">${productList}</td>
        <td class="text-center">${quantityList}</td>
        <td class="text-center">${priceList}</td>
        <td class="text-center">${new Date(order.created_at).toLocaleDateString()}</td>
    `;
                    ordersList.appendChild(row);
                });

            })
            .catch(error => {
                console.error("Error fetching orders:", error.response);
                alert("Failed to fetch orders.");
            });
    });
</script>

</html>