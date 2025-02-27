@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <div class="row gy-4 posts-list">

                        <div class="col-lg-6">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog1.jpg" class="img-fluid" alt="">
                                </div>

                                <h2 class="title">
                                    <a href="/blog-detail1">
                                        Embracing the Future: <br>
                                        STEAM Education as the Key to Unlocking Tomorrow's Potential
                                    </a>
                                </h2>


                                <div class="content">
                                    <p>
                                        As we enter a new era marked by rapid technological advancements and
                                        unprecedented global challenges, the future of education has never been more
                                        crucial. In this blog post, we will delve into the transformative influence
                                        of STEAM education.
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="/blog-detail1">Read More</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog2.jpg" class="img-fluid" alt="">
                                </div>

                                <h2 class="title">
                                    <a href="/blog-detail2">
                                        Exploring the Intersection of AI and Robotics:<br> Transforming the Future
                                    </a>
                                </h2>
                                <br>

                                <div class="content">
                                    <p>
                                        In recent years, the fields of Artificial Intelligence (AI) and Robotics
                                        have witnessed remarkable advancements, revolutionizing industries and
                                        reshaping the way we interact with technology. In this blog post, we'll
                                        explore the fascinating intersection of AI and robotics
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="/blog-detail2">Read More</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-lg-6">
                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="assets/img/blog3.jpeg" class="img-fluid" alt="">
                                </div>

                                <h2 class="title">
                                    <a href="/blog-detail3">
                                        Empowering Educators:<br> The Importance of Training Teachers in STEAM
                                        Education </a>
                                </h2>

                                <div class="content">
                                    <p>
                                        In today's rapidly evolving world, the demand for STEAM (Science,
                                        Technology, Engineering, Arts, and Mathematics) education has never been
                                        greater. As educators strive to prepare students for success in the 21st
                                        century, training teachers in STEAM education has become increasingly
                                        essential.
                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="/blog-detail3">Read More</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->


                    </div><!-- End blog posts list -->

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div><!-- End blog pagination -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <!--<div class="sidebar-item search-form">-->
                        <!--  <h3 class="sidebar-title">Search</h3>-->
                        <!--  <form action="" class="mt-3">-->
                        <!--    <input type="text">-->
                        <!--    <button type="submit"><i class="bi bi-search"></i></button>-->
                        <!--  </form>-->
                        <!--</div>-->
                        <!-- End sidebar search formn-->

                        <!--<div class="sidebar-item categories">-->
                        <!--  <h3 class="sidebar-title">Categories</h3>-->
                        <!--  <ul class="mt-3">-->
                        <!--    <li><a href="#">General <span>(25)</span></a></li>-->
                        <!--    <li><a href="#">School Portal <span>(12)</span></a></li>-->
                        <!--    <li><a href="#">Student Portal <span>(5)</span></a></li>-->
                        <!--    <li><a href="#">Competitions <span>(22)</span></a></li>-->
                        <!--    <li><a href="#">Alef Bot <span>(8)</span></a></li>-->

                        <!--  </ul>-->
                        <!--</div>-->
                        <!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="assets/img/blog1.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="/blog-detail1">Embracing the Future:</a></h4>

                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog2.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="/blog-detail2">Exploring the Intersection of AI and
                                                Robotics:</a></h4>

                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog3.jpeg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="/blog-detail3"> Empowering Educators:</a></h4>

                                    </div>
                                </div><!-- End recent post item-->


                            </div>

                        </div><!-- End sidebar recent posts-->



                    </div><!-- End Blog Sidebar -->

                </div>

            </div>

        </div>
    </section><!-- End Blog Section -->

</main>
@endsection
