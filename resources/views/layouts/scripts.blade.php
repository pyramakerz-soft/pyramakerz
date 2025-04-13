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
                title: "rtl-title",
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
                title: "rtl-title",
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