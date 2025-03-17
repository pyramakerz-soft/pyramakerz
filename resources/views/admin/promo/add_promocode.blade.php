@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main admin-content" class="mt-5">
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
                <h2>{{ __('admin/add_promo.add') }} </h2>
            </div>
        </div>

        <div class="container">
            <div class="row gy-5 ">
                <div class="col-lg-5" data-aos="flip-left" data-aos-delay="400">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="img-form">

                </div>
                <div class="col-lg-7" data-aos="flip-right" data-aos-delay="400">
                    <form id="promo-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>{{ __('admin/add_promo.code') }}:</label>
                                <input type="text" name="code" class="form-control" id="code"
                                    placeholder="{{ __('admin/add_promo.code') }}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_promo.discount_type') }}:</label>
                            <select name="discount_type" class="form-control" id="discount_type" required>
                                <option value="fixed">Fixed Amount</option>
                                <option value="percentage">Percentage</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_promo.discount_amount') }}:</label>
                            <input type="number" class="form-control" name="discount_amount" id="discount_amount"
                                placeholder="{{ __('admin/add_promo.discount_amount') }}" required step="1"
                                min="0">
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_promo.valid_until') }}:</label>
                            <input type="date" class="form-control" name="valid_until" id="valid_until" required>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-sucess" id="submitForm" data-aos="flip-up"
                                data-aos-delay="200">{{ __('admin/add_promo.add') }}</button>
                        </div>
                    </form>
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
<!-- Vendor JS Files -->
@section('page_js')
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let token = localStorage.getItem("auth_token_pyra12234");

        if (token) {
            axios.get(@json(url('/api/user')), {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                })
                .then(response => {
                    let user = response.data;
                    if (user.role === "admin") {
                        document.getElementById('itemstable').style.display = 'block';
                    } else {
                        window.location.href = "{{ route('customer.index') }}"
                    }
                })
                .catch(error => {
                    console.error("Failed to fetch user:", error);
                });
        }
    });
</script>
<script>
    // pop up
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            document.getElementById("popup").style.display = "flex";
        }, 3000); // Adjust the delay as needed (in milliseconds)
    });

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>

<script>
    document.getElementById("promo-form").addEventListener("submit", function(e) {
        e.preventDefault();
        const submitBtn = document.getElementById("submitForm");
        submitBtn.disabled = true;

        let formData = new FormData();
        formData.append("code", document.getElementById("code").value);
        formData.append("discount_type", document.getElementById("discount_type").value);
        formData.append("discount_amount", document.getElementById("discount_amount").value);
        formData.append("valid_until", document.getElementById("valid_until").value);


        let token = localStorage.getItem("auth_token_pyra12234");

        axios.post(@json(url('/api/promocodes')), formData, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "multipart/form-data"
                }
            })
            .then(response => {
                alert(response.data.message);
                document.getElementById("promo-form").reset();
                submitBtn.disabled = false;
            })
            .catch(error => {
                let message = "Failed to add Promocode.";

                // Handle validation errors
                if (error.response && error.response.data.errors) {
                    message = Object.values(error.response.data.errors).flat().join("\n");
                }
                // Handle general errors
                else if (error.response && error.response.data.error) {
                    message = error.response.data.error;
                }
                alert(message); // Show error message(s)
                submitBtn.disabled = false;
            });
    });
</script>
@endsection