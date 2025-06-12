@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<style>
    .input-group-ar {
        position: relative;
        display: flex;
        align-items: stretch;
        width: 100%;
    }
</style>
<main id="main admin-content" class="mt-5" style="padding-top: 70px;">
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
                <h2>{{ __('admin/add_package.add') }} </h2>
            </div>
        </div>

        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-12" data-aos="flip-right" data-aos-delay="400">
                    <form id="package-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>{{ __('admin/add_package.name_en') }}:</label>
                                <input type="text" name="en_name" class="form-control" id="en_name"
                                    placeholder="{{ __('admin/add_package.name_en') }}" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label>{{ __('admin/add_package.name_ar') }}:</label>
                                <input type="text" class="form-control" name="ar_name" id="ar_name"
                                    placeholder="{{ __('admin/add_package.name_ar') }}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.desc') }}:</label>
                            <input type="text" class="form-control" name="description" id="description"
                                placeholder="{{ __('admin/add_package.desc') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.desc_ar') }}:</label>
                            <input type="text" class="form-control" name="ar_description" id="ar_description"
                                placeholder="{{ __('admin/add_package.desc_ar') }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.bullet_points') }}:</label>
                            <div id="bullet-container">
                            </div>
                            <button type="button" class="btn btn-primary mt-2" onclick="addBullet()">{{ __('admin/add_package.add_bullet') }}</button>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.bullet_points_ar') }}:</label>
                            <div id="bullet-container-ar">
                            </div>
                            <button type="button" class="btn btn-primary mt-2" onclick="addBulletAr()">{{ __('admin/add_package.add_bullet') }}</button>
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.price') }}:</label>
                            <input type="number" class="form-control" name="price" id="price"
                                placeholder="{{ __('admin/add_package.price') }}" required step="0.01"
                                min="0">
                        </div>
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.upload_image') }}:</label>
                            <input type="file" class="form-control" name="image" id="image" accept="image/*"
                                required>
                        </div>

                        <!-- Select Products & Quantities -->
                        <div class="form-group mt-3">
                            <label>{{ __('admin/add_package.select_product') }}:</label>
                            <div id="product-selection">
                                @foreach ($products as $product)
                                <div class="d-flex align-items-center my-2">
                                    <!-- Checkbox to select product -->
                                    <input type="checkbox" class="product-checkbox" value="{{ $product->id }}"
                                        onclick="toggleQuantityInput(this)">

                                    <!-- Product Name -->
                                    <span class="mx-2" style="color: black; font-size: 16px;">{{ $product->name }}</span>

                                    <!-- Quantity Input (Initially Hidden) -->
                                    <input type="number" class="form-control product-quantity d-none"
                                        placeholder="Quantity" min="1" value="1" style="width: 80px;">
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="text-center mt-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-sucess" id="submitForm" data-aos="flip-up"
                                data-aos-delay="200">{{ __('admin/add_package.add') }}</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
</main>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>
@endsection

@section('page_js')
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
        } else {
            window.location.href = "{{ route('customer.index') }}"
        }
    });
</script>
<script>
    function toggleQuantityInput(checkbox) {
        let quantityInput = checkbox.closest('.d-flex').querySelector('.product-quantity');

        if (checkbox.checked) {
            quantityInput.classList.remove('d-none'); // Show input
        } else {
            quantityInput.classList.add('d-none'); // Hide input
            quantityInput.value = 1; // Reset quantity
        }
    }

    function addBullet() {
        const container = document.getElementById("bullet-container");
        const div = document.createElement("div");
        div.classList.add("input-group", "mb-2");
        div.innerHTML = `
        <input type="text" name="bullets[]" class="form-control" placeholder=" " required>
        <button type="button" class="btn btn-danger" onclick="removeBullet(this)">×</button>
    `;
        container.appendChild(div);
    }

    function removeBullet(button) {
        button.closest(".input-group").remove();
    }

    function addBulletAr() {
        const container = document.getElementById("bullet-container-ar");
        const div = document.createElement("div");
        div.classList.add("input-group-ar", "mb-2");
        div.innerHTML = `
        <input type="text" name="ar_bullets[]" class="form-control" placeholder=" " required>
        <button type="button" class="btn btn-danger" onclick="removeBulletAr(this)">×</button>
    `;
        container.appendChild(div);
    }

    function removeBulletAr(button) {
        button.closest(".input-group-ar").remove();
    }
</script>
<script>
    document.getElementById("package-form").addEventListener("submit", function(e) {
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
        formData.append("lang", "{{ app()->getLocale() }}");
        let bulletInputs = document.querySelectorAll("input[name='bullets[]']");
        let bullets = [];

        bulletInputs.forEach(input => {
            if (input.value.trim() !== "") {
                bullets.push(input.value.trim());
            }
        });

        formData.append("bullets", JSON.stringify(bullets));

        let bulletInputsAr = document.querySelectorAll("input[name='ar_bullets[]']");
        let bulletsAr = [];

        bulletInputsAr.forEach(input => {
            if (input.value.trim() !== "") {
                bulletsAr.push(input.value.trim());
            }
        });

        formData.append("ar_bullets", JSON.stringify(bulletsAr));

        let selectedProducts = [];
        document.querySelectorAll(".product-checkbox:checked").forEach((checkbox) => {
            let productId = checkbox.value;
            let quantityInput = checkbox.closest('.d-flex').querySelector('.product-quantity');
            let quantity = quantityInput.value;

            selectedProducts.push({
                id: productId,
                quantity: quantity
            });
        });

        formData.append("products", JSON.stringify(selectedProducts));

        let token = localStorage.getItem("auth_token_pyra12234");

        axios.post(@json(url('/api/packages')), formData, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "multipart/form-data"
                }
            })
            .then(response => {
                alertSuccess(response.data.message);
                document.getElementById("package-form").reset();
                document.querySelectorAll(".product-checkbox").forEach((checkbox) => {
                    toggleQuantityInput(checkbox);
                });
                submitBtn.disabled = false;
            })
            .catch(error => {
                let message = "Failed to add package.";

                // Handle validation errors
                if (error.response && error.response.data.errors) {
                    message = Object.values(error.response.data.errors).flat().join("\n");
                }
                // Handle general errors
                else if (error.response && error.response.data.error) {
                    message = error.response.data.error;
                }

                alertError(message);
                submitForm.disabled = false;
            });
    });
</script>
@endsection