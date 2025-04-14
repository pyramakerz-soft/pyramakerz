@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section">
        <div class="container mt-3">
            <div class="section-header text-center" data-aos="zoom-in">
                <h2 class="fw-bold text-uppercase fs-1">{{ __('admin/orders.manage') }}</h2>
            </div>

            <!-- Order Information Section -->
            <div class="card mb-4 shadow" data-aos="zoom-in">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-6 justify-content-center">
                            <h4 class="fs-2 mb-3">{{ __('admin/orders.info') }}</h4>
                        </div>
                        <div>
                            <h4> {{ __('admin/orders.date') }}:
                                <span>{{ $order->created_at->format('Y-m-d') }}</span>
                            </h4>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="col-md-6 justify-content-center">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>{{ __('admin/orders.user_name') }}</th>
                                        <td><span id="user-name">{{ $order->user->name }}</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin/orders.user_email') }}</th>
                                        <td><span id="user-email">{{ $order->user->email }}</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin/orders.user_school') }}</th>
                                        <td><span id="user-email">{{ $order->user->school_name }}</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin/orders.location') }}</th>
                                        <td><span id="user-email">{{ $order->user->user_location }}</span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 justify-content-center">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>{{ __('admin/orders.package') }}</th>
                                        <td><span>{{ app()->getLocale() === 'ar' ? $order->plan_name_ar : $order->plan_name }}</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin/orders.total_price') }}</th>
                                        <td><span>{{ $order->total_price }} SAR</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin/orders.discount_type') }}</th>
                                        <td><span>{{ $order->discount_type }}</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('admin/orders.discount_applied') }}</th>
                                        <td><span>{{ $order->discount_applied }}</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 shadow" data-aos="zoom-in-up">
                <div class="card-body">
                    <!-- Order Status Update Section -->
                    <div class="mt-2">
                        <h4 class="fs-2 mb-3">{{ __('admin/orders.status') }}</h4>
                        <form id="update-status-form">
                            @csrf
                            <div class="mb-3">
                                <!-- <label for="status" class="form-label">{{ __('admin/orders.status') }}</label> -->
                                <select id="status" class="form-control">
                                    <option value="Processing" data-ar="قيد التجهيز" {{ $order->status === 'Processing' ? 'selected' : '' }}>{{__('admin/orders.processing')}}</option>
                                    <option value="Under Review" data-ar="قيد المراجعة" {{ $order->status === 'processing' ? 'selected' : '' }}>{{__('admin/orders.under_review')}}</option>
                                    <option value="Confirmed" data-ar="مؤكد" {{ $order->status === 'completed' ? 'selected' : '' }}>{{__('admin/orders.completed')}}</option>
                                    <option value="canceled" data-ar="ملغي" {{ $order->status === 'canceled' ? 'selected' : '' }}>{{__('admin/orders.cancelled')}}</option>
                                </select>

                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('admin/orders.update_status') }}</button>
                        </form>
                        <p id="status-message" class="mt-2"></p>
                    </div>
                </div>
            </div>
            <!-- Products Section -->
            <div class="card" data-aos="fade-up" style="border: none !important;">
                <div class="card-body shadow">
                    <h4 class="mb-3 fs-2">{{ __('admin/orders.components') }}</h4>
                    <div class="table-responsive" id="itemstable" style="display: none;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.name_en') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.name_ar') }}</th>
                                    <th class="col-3 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.desc') }}</th>
                                    <th class="col-1 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.price') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.image') }}</th>
                                </tr>
                            </thead>
                            <tbody id="orderslist">
                                @forelse ($order->products as $product)
                                <tr>
                                    <td class="col-2 text-center">{{ $product->name }}</td>
                                    <td class="col-2 text-center">{{ $product->ar_name }}</td>
                                    <td class="col-2 text-center">{{ $product->description }}</td>
                                    <td class="col-2 text-center">{{ $product->price }} SAR</td>
                                    <td class="col-2 text-center"><img src="{{ asset("products/$product->image") }}" class="img-fluid" alt=""></td>
                                </tr>
                                @empty
                                <p>No Products found.</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection

@section('page_js')

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
                        window.location.href = "{{ route('customer.index') }}";
                    }
                })
                .catch(error => {
                    console.error("Failed to fetch user:", error);
                });
        }

        // Handle Order Status Update
        document.getElementById("update-status-form").addEventListener("submit", function(event) {
            event.preventDefault();


            let statusSelect = document.getElementById('status');
            let status = statusSelect.value;
            let arStatus = statusSelect.options[statusSelect.selectedIndex].getAttribute('data-ar');


            let formData = new FormData();
            formData.append("status", status);
            formData.append("ar_status", arStatus);
            formData.append("orderId", "{{ $order->id }}");

            axios.post(@json(url('/api/admin/updateOrderStatus')), formData, {
                    headers: {
                        "Authorization": `Bearer ${token}`,
                        "Content-Type": "multipart/form-data"
                    }
                })
                .then(response => {
                    document.getElementById("status-message").innerText = "{{ __('success_status') }}";
                    document.getElementById("status-message").style.color = "green";
                })
                .catch(error => {
                    document.getElementById("status-message").innerText = "Failed to update status.";
                    document.getElementById("status-message").style.color = "red";
                    console.error("Error updating status:", error);
                });
        });
    });
</script>

@endsection