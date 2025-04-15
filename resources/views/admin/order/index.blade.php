@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section">

        <div class="container mt-3">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase fs-1">{{ __('admin/orders.title') }}</h2>
            </div>
            <!-- User Orders Section -->
            <div class="card" data-aos="fade-up" style="border: none !important;">
                <div class="card-body shadow">
                    <!-- <h4 class="mb-3 fs-2">Predefined Packages</h4> -->
                    <div class="table-responsive" id="itemstable" style="display: none;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.user_email') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.user_school') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.location') }}</th>
                                    <th class="col-3 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.package') }}</th>
                                    <th class="col-1 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.total_price') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.discount_type') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.discount_applied') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.date') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/orders.status') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="orderslist">
                                @forelse ($orders as $order)
                                <tr>
                                    <td class="text-center">{{ $order->user->email }}</td>
                                    <td class="text-center">{{ $order->user->school_name }}</td>
                                    <td class="text-center">{{ $order->user->user_location }}</td>
                                    <td class="text-center">{{ app()->getLocale()==='ar'? $order->plan_name_ar: $order->plan_name }}</td>
                                    <td class="text-center">{{ $order->total_price }} SAR</td>
                                    <td class="text-center">{{ $order->discount_type }}</td>
                                    <td class="text-center">{{ $order->discount_applied }}</td>
                                    <td class="text-center">{{ $order->created_at->format('Y-m-d') }}</td>
                                    <td class="text-center">{{ app()->getLocale()==='ar'? $order->ar_status: $order->status }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.manageOrder', $order->id) }}" class="dropdown-item text-danger">
                                            {{ __('admin/orders.manage') }}
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <p>No Orders found.</p>
                                @endforelse
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
        if (!confirm("{{ __('admin/add_product.deletealert') }}")) {
            return;
        }

        let token = localStorage.getItem("auth_token_pyra12234");

        axios.delete(@json(url('api/products/delete')) + `?product_id=${productId}`, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "application/json"
                }
            })
            .then(response => {
                alertSuccess(response.data.message);
                location.reload(); // Reload the page to reflect changes
            })
            .catch(error => {
                console.error("Error deleting Product:", error.response);
                alertError("Failed to delete Product.");
            });
    }
</script>

@endsection