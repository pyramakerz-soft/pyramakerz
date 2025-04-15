<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('vendor/ziggy/dist/ziggy.min.js') }}"></script>
<style>
    .swal2-container {
        z-index: 99999 !important;
        /* very high z-index to ensure it’s on top */
    }
</style>
<script>
    localStorage.setItem('redirect_after_logout', window.location.href);
</script>

@if (app()->getLocale() === 'ar')
<script>
    function alertSuccess(response) {
        Swal.fire({
            title: "نجاح!",
            html: `<div style="direction: rtl;">${response}</div>`,
            icon: "success",
            confirmButtonText: "موافق",
            customClass: {
                popup: "rtl-popup",
                confirmButton: "rtl-button"
            }
        });
    }

    function alertError(response) {
        Swal.fire({
            title: "خطأ!",
            html: `<div style="direction: rtl;">${response}</div>`,
            icon: "error",
            confirmButtonText: "حسناً",
            customClass: {
                popup: "rtl-popup",
                confirmButton: "rtl-button"
            }
        });
    }
</script>
<style>
    /* Ensure RTL Styling */
    .rtl-popup {
        direction: rtl;
        text-align: right;
        font-family: "Tajawal", "Cairo", sans-serif;
        /* Use an Arabic-friendly font */
    }

    .rtl-title {
        text-align: right;
    }

    .rtl-button {
        text-align: center;
    }
</style>
@else
<script>
    function alertSuccess(response) {
        Swal.fire({
            title: "Success!",
            text: response,
            icon: "success",
            confirmButtonText: "OK"
        });
    };

    function alertError(response) {
        Swal.fire({
            title: "Error!",
            text: response,
            icon: "error",
            confirmButtonText: "OK"
        });
    };
</script>
@endif

@if (session('expiry') && session('expiry') < now())
    @php session()->forget('expiry'); @endphp
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Save current URL before logout
            if (!localStorage.getItem('redirect_after_logout')) {
                localStorage.setItem('redirect_after_logout', window.location.href);
            }

            logout();
        });

        function logout() {
            let token = localStorage.getItem('auth_token_pyra12234');

            if (token) {
                axios.post(@json(url('/api/logout')), {}, {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                }).then(response => {
                    clearAuthData();
                    redirectToLastPage();
                }).catch(error => {
                    clearAuthData();
                    redirectToLastPage();
                });
            } else {
                clearAuthData();
                redirectToLastPage();
            }
        }

        function clearAuthData() {
            localStorage.removeItem('auth_token_pyra12234');
            localStorage.removeItem('user_country');
            sessionStorage.clear();
            document.cookie.split(";").forEach(cookie => {
                document.cookie = cookie.replace(/^ +/, "")
                    .replace(/=.*/, "=;expires=" + new Date(0).toUTCString() + ";path=/");
            });
        }

        function redirectToLastPage() {
            const redirectUrl = localStorage.getItem('redirect_after_logout') || "{{ route('customer.index') }}";
            localStorage.removeItem('redirect_after_logout');
            window.location.href = redirectUrl;
        }
    </script>
    @endif