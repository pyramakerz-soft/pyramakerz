@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main admin-content" class="mt-5" style="padding-top: 70px;">
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
                <h2>{{ __('admin/add_product.add') }} </h2>
            </div>
        </div>

        <div class="container">
            <div class="row gy-5 ">
                <div class="col-lg-5" data-aos="flip-left" data-aos-delay="400">
                    <img src="{{ asset('/assets/img/logo.png') }}" class="img-form">

                </div>
                <div class="col-lg-7" data-aos="flip-right" data-aos-delay="400">
                    <form id="product-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>{{ __('admin/add_product.name_en') }}:</label>
                                <input type="text" name="en_name" class="form-control" id="en_name"
                                    placeholder="{{ __('admin/add_product.name_en') }}" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label>{{ __('admin/add_product.name_ar') }}:</label>
                                <input type="text" class="form-control" name="ar_name" id="ar_name"
                                    placeholder="{{ __('admin/add_product.name_ar') }}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_product.desc') }}:</label>
                            <input type="text" class="form-control" name="description" id="description"
                                placeholder="{{ __('admin/add_product.desc') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_product.desc_ar') }}:</label>
                            <input type="text" class="form-control" name="ar_description" id="ar_description"
                                placeholder="{{ __('admin/add_product.desc_ar') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_product.price') }}:</label>
                            <input type="number" class="form-control" name="price" id="price"
                                placeholder="{{ __('admin/add_product.price') }}" required step="0.01"
                                min="0">
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_product.upload_image') }}:</label>
                            <input type="file" class="form-control" name="image" id="image"
                                accept="image/png, image/jpeg, image/jpg, image/gif, image/webp, image/bmp, image/tiff"
                                required>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-sucess" id="submitForm" data-aos="flip-up"
                                data-aos-delay="200">{{ __('admin/add_product.add') }}</button>
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
                        document.getElementById('admin-content').style.display = 'block';
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
    document.getElementById("product-form").addEventListener("submit", function(e) {
        e.preventDefault();
        const submitBtn = document.getElementById("submitForm");
        submitBtn.disabled = true;

        let formData = new FormData();
        formData.append("en_name", document.getElementById("en_name").value);
        formData.append("ar_name", document.getElementById("ar_name").value);
        formData.append("description", document.getElementById("description").value);
        formData.append("ar_description", document.getElementById("ar_description").value);
        formData.append("price", document.getElementById("price").value);
        formData.append("image", document.getElementById("image").files[0]);


        let token = localStorage.getItem("auth_token_pyra12234");

        axios.post(@json(url('/api/products')), formData, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "multipart/form-data"
                }
            })
            .then(response => {
                alertSuccess(response.data.message);
                document.getElementById("product-form").reset();
                submitBtn.disabled = false;
            })
            .catch(error => {
                let message = "Failed to add product.";

                // Handle validation errors
                if (error.response && error.response.data.errors) {
                    message = Object.values(error.response.data.errors).flat().join("\n");
                }
                // Handle general errors
                else if (error.response && error.response.data.error) {
                    message = error.response.data.error;
                }
                alertError(message); // Show error message(s)
                submitBtn.disabled = false;
            });
    });
</script>
@endsection