@if (app()->getLocale() === 'ar'){
<style>
    .footer .footer-content h4::after {
        right: 0;
    }
</style>
}

@endif
<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <img src="{{ asset('assets/img/logo-orange.png') }}" alt="Pyramakerz" class="img-fluid">
                        <p>
                            {{ __('footer.company_description') }}
                        </p>

                    </div>
                    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                        <a href="https://www.facebook.com/Pyramakerzeg/videos" target="_blank" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/pyramakerzeg/" target="_blank" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCEzPUdFHYWrKWNciieQ663Q" target="_blank"
                            class="google-plus"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/pyramakerz-technologies" target="_blank"
                            class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4> {{ __('footer.explore') }}</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.index') }}/"> {{ __('footer.home') }}</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.index') }}/#about"> {{ __('footer.about_us') }}</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.index') }}/#blog"> {{ __('footer.blogs') }}</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.index') }}/#contact"> {{ __('footer.careers') }}</a></li>

                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4> {{ __('footer.our_solutions') }}</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.schools') }}"> {{ __('footer.school_portal') }}</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.students') }}"> {{ __('footer.student_portal') }}</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.competitions') }}"> {{ __('footer.competitions') }}</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('customer.alefBot') }}"> {{ __('footer.alef_bot') }}</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 ">

                    <div class="info">
                        <!-- <h3>Get in touch</h3> -->


                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4> {{ __('footer.location') }}</h4>
                                <p> {{ __('footer.cairo') }}</p>
                                <p> {{ __('footer.alexandria') }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4 class="mt-2"> {{ __('footer.email') }}</h4>
                                <p><a href="mailto:info@pyramakerz.com" target="_blank">info@pyramakerz.com</a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4 class="mt-2"> {{ __('footer.call') }}</h4>
                                <p dir="ltr" style="text-align: left;"><a href="tel:00201220016331" target="_blank">+201220016331</a></p>
                                <p dir="ltr" style="text-align: left;"><a href="tel:002035825247" target="_blank">+2 03 5825247</a></p>

                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div class="container justify-content-center justify-content-lg-between align-items-center">

            <div class="align-items-center ">
                <div class="copyright">
                    <p>
                        &copy; Copyright <strong><span>Pyramakerz</span></strong>. All Rights Reserved
                    </p>
                </div>

            </div>



        </div>
    </div>

</footer><!-- End Footer -->