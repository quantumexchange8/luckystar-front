<footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden mt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Edu-cause">
                            </a>
                        </div>
                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}" alt="Edu-cause">
                            </a>
                        </div>

                        <p class="description mt--20">We’re always in search for talented
                            and motivated people. Don’t be shy introduce yourself!
                        </p>

                        <ul class="social-icon social-default justify-content-start">
                            <li><a href="https://www.facebook.com/">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li><a href="https://www.twitter.com">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li><a href="https://www.linkdin.com/">
                                    <i class="feather-linkedin"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="contact-btn mt--30">
                            <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Contact With Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Useful Links</h5>
                        <ul class="ft-link">
                            <li>
                                <a href="">Marketplace</a>
                            </li>
                            <li>
                                <a href="">kindergarten</a>
                            </li>
                            <li>
                                <a href="">University</a>
                            </li>
                            <li>
                                <a href="">GYM Coaching</a>
                            </li>
                            <li>
                                <a href="">FAQ</a>
                            </li>
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Our Company</h5>
                        <ul class="ft-link">
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="">Become Teacher</a>
                            </li>
                            <li>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <a href="">Instructor</a>
                            </li>
                            <li>
                                <a href="">Events</a>
                            </li>
                            <li>
                                <a href="">Course</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Get Contact</h5>
                        <ul class="ft-link">
                            <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                            <li><span>E-mail:</span> <a href="mailto:hr@example.com">admin@example.com</a></li>
                        </ul>

                        <form class="newsletter-form mt--20" action="#">
                            <h6 class="w-600">Newsletter</h6>
                            <p class="description">2000+ Our students are subscribe Around the World.<br> Don’t be shy
                            introduce yourself!</p>

                            <div class="form-group right-icon icon-email mb--20">
                                <label for="email">Enter Your Email Here</label>
                                <input id="email" type="email">
                            </div>

                            <div class="form-group mb--0">
                                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                                    <span data-text="Submit Now">Submit Now</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © {{ now()->year }} <a href="https://www.pixcelsthemes.com/">Lucky Star.</a> All Rights Reserved</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="">Privacy policy</a></li>
                        <li><a href="">Subscription</a></li>
                        <li><a href="">Login & Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>