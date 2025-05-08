@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section">

        <div class="container mt-3">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase fs-1">{{ __('admin/add_product.title') }}</h2>
            </div>
            <!-- User Orders Section -->
            <div class="card" data-aos="fade-up" style="border: none !important;">
                <div class="card-body shadow">
                    <!-- <h4 class="mb-3 fs-2">Predefined Packages</h4> -->
                    <div class="table-responsive" id="itemstable" style="display: none;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.name_en') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.name_ar') }}</th>
                                    <th class="col-3 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.desc') }}</th>
                                    <th class="col-1 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.price') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.image') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="orderslist">
                                @forelse ($products as $product)
                                <tr>
                                    <td class="col-2 text-center">{{ $product->name }}</td>
                                    <td class="col-2 text-center">{{ $product->ar_name }}</td>
                                    <td class="col-2 text-center">{{ $product->description }}</td>
                                    <td class="col-2 text-center">{{ $product->price }} SAR</td>
                                    <td class="col-2 text-center"><img src="{{ asset("products/$product->image") }}" class="img-fluid" alt=""></td>
                                    <td class="col-2 text-center">
                                        <button class="dropdown-item text-danger" onclick="deleteProduct({{ $product->id }})">
                                            {{ __('admin/add_product.delete') }}
                                        </button>
                                        <a href="{{ route('admin.editProduct', $product->id) }}" data-aos="flip-up"
                                            data-aos-delay="200">{{ __('admin/add_product.edit') }}</a>
                                    </td>
                                </tr>
                                @empty
                                <p>No Products available.</p>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="text-center mt-3 d-flex justify-content-center">
                            <a href="{{ route('admin.addProduct') }}" class="btn btn-sucess" id="submitForm" data-aos="flip-up"
                                data-aos-delay="200">{{ __('admin/add_product.add') }}</a>
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
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

@endsection
@section('page_js')

<script src="app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
        } else {
            window.location.href = "{{ route('customer.index') }}"
        }
    });
</script>

<script>
    function deleteProduct(productId) {
        Swal.fire({
            title: "{{ __('admin/add_product.deletealert') }}",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: "{{ __('admin/add_package.confirm_delete') ?? 'Yes, delete it!' }}",
            cancelButtonText: "{{ __('admin/add_package.cancel') ?? 'Cancel' }}"
        }).then((result) => {
            if (result.isConfirmed) {
                let token = localStorage.getItem("auth_token_pyra12234");

                axios.delete(@json(url('api/products/delete')) + `?product_id=${productId}`, {
                        headers: {
                            "Authorization": `Bearer ${token}`,
                            "Content-Type": "application/json"
                        }
                    })
                    .then(response => {
                        Swal.fire({
                            title: "{{ __('success') ?? 'success!' }}",
                            text: response.data.message,
                            icon: 'success',
                            confirmButtonText: "{{ __('admin/add_package.ok') ?? 'OK' }}"
                        }).then(() => {
                            location.reload();
                        });
                    })
                    .catch(error => {
                        console.error("Error deleting package:", error.response);
                        Swal.fire({
                            title: "{{ __('admin/add_package.error_title') ?? 'Error' }}",
                            text: "{{ __('admin/add_package.delete_failed') ?? 'Failed to delete package.' }}",
                            icon: 'error',
                            confirmButtonText: "{{ __('admin/add_package.ok') ?? 'OK' }}"
                        });
                    });
            }
        });
    }
</script>

@endsection