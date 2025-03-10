@extends('layouts.layout')
@section('page_css')
@include('layouts.main_css')
@endsection
@section('content')

<main id="main" class="mt-5">
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header" data-aos="zoom-in-up" data-aos-delay="200">
                <h2>Add Product </h2>
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
                                <label>English Name:</label>
                                <input type="text" name="en_name" class="form-control" id="en_name" placeholder="English Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label>Arabic Name:</label>
                                <input type="text" class="form-control" name="ar_name" id="ar_name" placeholder="Arabic Name" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
                        </div>
                        <div class="form-group mt-3">
                            <label>Price:</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="Price" required step="0.01" min="0">
                        </div>
                        <div class="form-group mt-3">
                            <label>Upload Image:</label>
                            <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" data-aos="flip-up" data-aos-delay="200">Add Product</button>
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

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
@endsection
<!-- Vendor JS Files -->
@section('page_js')

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

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

        let formData = new FormData();
        formData.append("en_name", document.getElementById("en_name").value);
        formData.append("ar_name", document.getElementById("ar_name").value);
        formData.append("description", document.getElementById("description").value);
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
                alert("Product added successfully!");
                // console.log(response.data);
                document.getElementById("product-form").reset();
            })
            .catch(error => {
                console.error("Error adding product:", error.response);
                alert("Failed to add product.");
            });
    });
</script>
@endsection