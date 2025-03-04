@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section">

        <div class="container mt-3">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase fs-1">Manage Account</h2>
            </div>
            <!-- User Information Section -->
            <div class="card mb-4 shadow" data-aos="zoom-in-up">
                <div class="card-body">
                    <h4 class="fs-2 mb-3">Profile Information</h4>
                    <p><strong>Name:</strong> <span id="user-name"></span></p>
                    <p><strong>Email:</strong> <span id="user-email"></span></p>
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="card mb-4" data-aos="zoom-in-up">
                <div class="card-body shadow">
                    <h4 class="fs-2 mb-3">Change Password</h4>
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
            <div class="card" data-aos="fade-up">
                <div class="card-body shadow">
                    <h4 class="mb-3 fs-2">Plan Orders</h4>
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
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

@endsection
@section('page_js')

<script src="app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let token = localStorage.getItem('auth_token');

        if (!token) {
            window.location.href = "/login"; // Redirect if not logged in
        }

        // Fetch User Details
        axios.get(@json(url('/api/user')), {
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

            axios.post(@json(url('/api/update-password')), {
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
        axios.get(@json(url('/api/user/orders')), {
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
                        return `${product.name}`;
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
@endsection