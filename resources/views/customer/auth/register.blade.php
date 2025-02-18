<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pyramakerz - Register & Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        /* Center the form */
        .auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .auth-box {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .auth-box h2 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: #ff7f00;
            /* Orange theme */
        }

        .form-control {
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .btn-auth {
            width: 100%;
            background-color: #ff7f00;
            color: white;
            font-weight: 500;
        }

        .btn-auth:hover {
            background-color: #e06d00;
        }

        .toggle-form {
            margin-top: 1rem;
            font-size: 0.9rem;
            cursor: pointer;
            color: #ff7f00;
        }

        .toggle-form:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    @include('layouts.scripts')

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top justify-content-center" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <a href="/" class="logo d-flex align-items-center justify-content-center scrollto me-auto me-lg-0">
                <img src="./assets/img/logo-orange.png">
            </a>
        </div>
    </header><!-- End Header -->

    <main id="main" class="auth-container">
        <div class="auth-box">
            <!-- Register Form -->
            <div id="registerForm">
                <h2>Register</h2>
                <form id="registerUserForm">
                    @csrf
                    <input type="text" id="name" class="form-control" placeholder="Name" required>
                    <input type="email" id="email" class="form-control" placeholder="Email" required>
                    <input type="password" id="password" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn btn-auth">Register</button>
                </form>
                <p id="registerMessage" class="text-success mt-2"></p>
                <p class="toggle-form" onclick="toggleForms()">Already have an account? Login here</p>
            </div>

            <!-- Login Form -->
            <div id="loginForm" style="display: none;">
                <h2>Login</h2>
                <form id="loginUserForm">
                    @csrf
                    <input type="email" id="loginEmail" class="form-control" placeholder="Email" required>
                    <input type="password" id="loginPassword" class="form-control" placeholder="Password" required>
                    <button type="submit" class="btn btn-auth">Login</button>
                </form>
                <p id="loginMessage" class="text-success mt-2"></p>
                <p class="toggle-form" onclick="toggleForms()">Don't have an account? Register here</p>
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('customer.footer')

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        function toggleForms() {
            document.getElementById("registerForm").style.display =
                document.getElementById("registerForm").style.display === "none" ? "block" : "none";
            document.getElementById("loginForm").style.display =
                document.getElementById("loginForm").style.display === "none" ? "block" : "none";
        }

        // Register User
        document.getElementById('registerUserForm').addEventListener('submit', function(event) {
            event.preventDefault();
            axios.post('/api/register', {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value
                })
                .then(response => {
                    document.getElementById('registerMessage').innerText = response.data.message;
                })
                .catch(error => {
                    document.getElementById('registerMessage').innerText = error.response.data.error || "Error registering!";
                });
        });

        // Login User
        document.getElementById('loginUserForm').addEventListener('submit', function(event) {
            event.preventDefault();
            axios.post('/api/login', {
                    email: document.getElementById('loginEmail').value,
                    password: document.getElementById('loginPassword').value
                })
                .then(response => {
                    localStorage.setItem('auth_token', response.data.token);
                    document.getElementById('loginMessage').innerText = "Login successful!";
                })
                .catch(error => {
                    document.getElementById('loginMessage').innerText = error.response.data.error || "Login failed!";
                });
        });
    </script>
</body>

</html>