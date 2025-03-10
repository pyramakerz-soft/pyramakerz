<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pyramakerz - Verify OTP</title>
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
            text-align: center;
            font-size: 20px;
            font-weight: bold;
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

        .resend-otp {
            margin-top: 10px;
            font-size: 0.9rem;
            cursor: pointer;
            color: #ff7f00;
        }

        .resend-otp:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    @include('layouts.scripts')

    <main id="main" class="auth-container">
        <div class="auth-box">
            <h2>Verify OTP</h2>
            <p class="text-muted">Enter the OTP sent to your email.</p>

            <form id="verifyOTPForm">
                @csrf
                <input type="number" id="otp" class="form-control" placeholder="Enter OTP" required>
                <button type="submit" class="btn btn-auth">Verify</button>
            </form>
            <p id="otpMessage" class="text-success mt-2"></p>

            <p class="resend-otp" onclick="resendOTP()">Resend OTP</p>
        </div>
    </main>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.getElementById('verifyOTPForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let email = localStorage.getItem('otp_email'); // Get stored email
            let otp = document.getElementById('otp').value;
            axios.post(@json(url('/api/verify-otp')), {
                    email,
                    otp
                })
                .then(response => {
                    console.log(response);
                    document.getElementById('otpMessage').innerText = response.data.message;
                    localStorage.removeItem('otp_email'); // Remove stored email after verification
                    setTimeout(() => {
                        window.location.href = @json(route('customer.login')); // Redirect to login
                    }, 1500);
                })
                .catch(error => {
                    document.getElementById('otpMessage').innerText = error.response.data.error || "OTP verification failed!";
                });
        });

        function resendOTP() {
            let email = localStorage.getItem('otp_email');

            axios.post(@json(url('/api/resend-otp')), {
                    email
                })
                .then(response => {
                    alert("OTP has been resent to your email!");
                })
                .catch(error => {
                    alert("Failed to resend OTP.");
                });
        }
    </script>
</body>

</html>