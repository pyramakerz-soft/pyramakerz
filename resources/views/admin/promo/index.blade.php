@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section">

        <div class="container mt-3">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase fs-1">{{ __('admin/add_promo.title') }}</h2>
            </div>
            <!-- User Orders Section -->
            <div class="card" data-aos="fade-up" style="border: none !important;">
                <div class="card-body shadow">
                    <!-- <h4 class="mb-3 fs-2">Predefined Packages</h4> -->
                    <div class="table-responsive" id="itemstable" style="display: none;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_promo.code') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_promo.discount_type') }}</th>
                                    <th class="col-3 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_promo.discount_amount') }}</th>
                                    <th class="col-1 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_promo.times_used') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_promo.valid_until') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_product.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="orderslist">
                                @forelse ($promos as $promo)
                                <tr>
                                    <td class="col-2 text-center">{{ $promo->code }}</td>
                                    <td class="col-2 text-center">{{ $promo->discount_type }}</td>
                                    <td class="col-2 text-center">{{ $promo->discount_amount }}</td>
                                    <td class="col-2 text-center">{{ $promo->times_used }}</td>
                                    <td class="col-2 text-center">{{ $promo->valid_until }}</td>
                                    <td class="col-2 text-center">
                                        <button class="dropdown-item text-danger" onclick="deletePromo({{ $promo->id }})">
                                            {{ __('admin/add_promo.delete') }}
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <p>No Promos available.</p>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <a href="{{ route('admin.addPromo') }}" class="btn btn-sucess" id="submitForm" data-aos="flip-up"
                                data-aos-delay="200">{{ __('admin/add_promo.add') }}</a>
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
        }
    });
</script>

<script>
    function deletePromo(promoId) {
        if (!confirm("{{ __('admin/add_promo.deletealert') }}")) {
            return;
        }

        let token = localStorage.getItem("auth_token_pyra12234");

        axios.delete(@json(url('api/promocodes/delete')) + `?promo_id=${promoId}`, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "application/json"
                }
            })
            .then(response => {
                alert(response.data.message);
                location.reload(); // Reload the page to reflect changes
            })
            .catch(error => {
                console.error("Error deleting Promo:", error.response);
                alert("Failed to delete Promo.");
            });
    }
</script>

@endsection