@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')
<main id="main">

    <section class="pricing-section">

        <div class="container mt-3">
            <div class="section-header text-center" data-aos="zoom-in-up">
                <h2 class="fw-bold text-uppercase fs-1">{{ __('admin/add_package.title') }}</h2>
            </div>
            <!-- User Orders Section -->
            <div class="card" data-aos="fade-up" style="border: none !important;">
                <div class="card-body shadow">
                    <!-- <h4 class="mb-3 fs-2">Predefined Packages</h4> -->
                    <div class="table-responsive" id="itemstable" style="display: none;">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_package.name_en') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_package.name_ar') }}</th>
                                    <th class="col-3 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_package.desc') }}</th>
                                    <th class="col-1 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_package.price') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_package.image') }}</th>
                                    <th class="col-2 text-center" style="background-color: var(--color-primary);">{{ __('admin/add_package.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody id="orderslist">
                                @forelse ($packages as $package)
                                <tr>
                                    <td class="col-2 text-center">{{ $package->name }}</td>
                                    <td class="col-2 text-center">{{ $package->ar_name }}</td>
                                    <td class="col-2 text-center">{{ $package->description }}</td>
                                    <td class="col-2 text-center">{{ $package->price }} SAR</td>
                                    <td class="col-2 text-center"><img src="{{ asset("package/$package->image") }}" class="img-fluid" alt=""></td>
                                    <td class="col-2 text-center">
                                        <button class="dropdown-item text-danger" onclick="deletePackage({{ $package->id }})">
                                            {{ __('admin/add_package.delete') }}
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <p>No packages available.</p>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <a href="{{ route('admin.addPackage') }}" class="btn btn-sucess" id="submitForm" data-aos="flip-up"
                                data-aos-delay="200">{{ __('admin/add_package.add') }}</a>
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
    function deletePackage(productId) {
        if (!confirm("{{ __('admin/add_package.deletealert') }}")) {
            return;
        }

        let token = localStorage.getItem("auth_token_pyra12234");

        axios.delete(@json(url('api/packages/delete')) + `?package_id=${productId}`, {
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
                console.error("Error deleting Package:", error.response);
                alertError("Failed to delete Package.");
            });
    }
</script>

@endsection