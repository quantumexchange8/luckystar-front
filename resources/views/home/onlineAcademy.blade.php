@extends('layout.layout')

@php
     $topToBottom='true';
     $header='false';
@endphp

@section('content')

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-4 rbt-header-4-container-var">
        <div class="rbt-sticky-placeholder"></div>

        <!-- Start Header Top -->
        <div class="rbt-header-top rbt-header-top-1 header-space-betwween bg-color-white rbt-border-bottom d-none d-xl-block">
            <div class="container">
                <div class="rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="rbt-separator"></div>
                            <div class="header-info">
                                <ul class="social-share-transparent version-02">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="rbt-header-sec-col rbt-header-right">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <ul class="rbt-secondary-menu">
                                    <li><a href="{{ route('myAccount') }}">My Account</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                </ul>
                            </div>
                            <div class="rbt-separator"></div>
                            <div class="header-info">
                                <div class="header-right-btn d-flex">
                                    <a class="rbt-btn rbt-switch-btn btn-gradient btn-xs" href="#">
                                        <span data-text="Register Now">Register Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <div class="rbt-header-wrapper header-space-betwween shadow-none bg-color-white header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-start align-items-center">
                    <div class="header-left">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo-black.png') }}" alt="Education Logo Images">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#">Home <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu menu-skin-dark">
                                        <div class="wrapper">
                                            <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('mainDemo') }}"><img src="{{ asset('assets/images/splash/demo/h1.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('mainDemo') }}">Home Demo <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('marketplace') }}"><img src="{{ asset('assets/images/splash/demo/h12.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('marketplace') }}">Marketplace <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('kindergarten') }}"><img src="{{ asset('assets/images/splash/demo/h4.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('kindergarten') }}">kindergarten <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('universityClassic') }}"><img src="{{ asset('assets/images/splash/demo/h13.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('universityClassic') }}">University Classic <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('homeElegant') }}"><img src="{{ asset('assets/images/splash/demo/h14.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('homeElegant') }}">Home Elegant <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('gymCoaching') }}"><img src="{{ asset('assets/images/splash/demo/h9.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('gymCoaching') }}">Gym Coaching <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('onlineSchool') }}"><img src="{{ asset('assets/images/splash/demo/h3.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('onlineSchool') }}">Online School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('universityStatus') }}"><img src="{{ asset('assets/images/splash/demo/h6.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('universityStatus') }}">University Status <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('homeTechnology') }}"><img src="{{ asset('assets/images/splash/demo/h15.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('homeTechnology') }}">Home Technology <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('instructorPortfolio') }}"><img src="{{ asset('assets/images/splash/demo/h7.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('instructorPortfolio') }}">Instructor Portfolio <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('languageAcademy') }}"><img src="{{ asset('assets/images/splash/demo/h8.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('languageAcademy') }}">Language Academy <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('singleCourse') }}"><img src="{{ asset('assets/images/splash/demo/h11.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('singleCourse') }}">Single Course <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('onlineCourse') }}"><img src="{{ asset('assets/images/splash/demo/h10.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('onlineCourse') }}">Online Course <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('classicLms') }}"><img src="{{ asset('assets/images/splash/demo/h5.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('classicLms') }}">Classic Lms <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('courseSchool') }}"><img src="{{ asset('assets/images/splash/demo/h2.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('courseSchool') }}">Course School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('udemyAffiliate') }}"><img src="{{ asset('assets/images/splash/demo/h16.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('udemyAffiliate') }}">Udemy Affiliate <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('onlineAcademy') }}"><img src="{{ asset('assets/images/splash/demo/h17.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('onlineAcademy') }}">Online Academy <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('instructorsCoaches') }}"><img src="{{ asset('assets/images/splash/demo/h18.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('instructorsCoaches') }}">Instructor Coaches <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('modernUniversity') }}"><img src="{{ asset('assets/images/splash/demo/h19.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('modernUniversity') }}">Modern University <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('multilingual') }}"><img src="{{ asset('assets/images/splash/demo/h20.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('multilingual') }}">Multilingual <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('artDesignSchool') }}"><img src="{{ asset('assets/images/splash/demo/h21.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('artDesignSchool') }}">Art Design School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('wishlist') }}"><img src="{{ asset('assets/images/splash/demo/h22.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('wishlist') }}">Wishlist <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('coaching') }}"><img src="{{ asset('assets/images/splash/demo/h23.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('coaching') }}">Coaching <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('healthWellnessInstitute') }}"><img src="{{ asset('assets/images/splash/demo/h24.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('healthWellnessInstitute') }}">Health Institute <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('lifeCoach') }}"><img src="{{ asset('assets/images/splash/demo/h25.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('lifeCoach') }}">Life Coach <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                                <!-- Start Single Demo  -->
                                                <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                                    <div class="demo-single">
                                                        <div class="inner">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('islamicCenter') }}"><img src="{{ asset('assets/images/splash/demo/h26.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="{{ route('islamicCenter') }}">Islamic Center <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Demo  -->

                                            </div>

                                            <div class="load-demo-btn-wrap">
                                                <div class="load-demo-btn text-center">
                                                    <span class="color-white b3">Scroll to view more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                              </svg></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="with-megamenu has-menu-child-item">
                                    <a href="#">Courses <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-2">
                                        <div class="wrapper">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mega-top-banner">
                                                        <div class="content">
                                                            <h4 class="title">Developer hub</h4>
                                                            <p class="description">Start building fast, with code samples, key resources and more.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                                    <h3 class="rbt-short-title">Course Layout</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('courseFilterOneToggle') }}">Filter One Toggle</a></li>
                                                        <li><a href="{{ route('courseFilterOneOpen') }}">Filter One Open</a></li>
                                                        <li><a href="{{ route('courseFilterTwoToggle') }}">Filter Two Toggle</a></li>
                                                        <li><a href="{{ route('courseFilterTwoOpen') }}">Filter Two Open</a></li>
                                                        <li><a href="{{ route('courseWithTab') }}">Course With Tab</a></li>
                                                        <li><a href="{{ route('courseWithTabTwo') }}">Course With Tab Two</a></li>
                                                        <li><a href="{{ route('courseCard2') }}">Course Card Two</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                                    <h3 class="rbt-short-title">Course Layout</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('courseCard3') }}">Course Card Three</a></li>
                                                        <li><a href="{{ route('courseMasonry') }}">Course Masonry</a></li>
                                                        <li><a href="{{ route('courseWithSidebar') }}">Course With Sidebar</a></li>
                                                        <li><a href="{{ route('courseDetails') }}">Course Details</a></li>
                                                        <li><a href="{{ route('courseDetails2') }}">Course Details Two</a></li>
                                                        <li><a href="{{ route('lesson') }}">Course Lesson <span class="rbt-badge-card">New</span></a></li>
                                                        <li><a href="{{ route('createCourse') }}">Create Course <span class="rbt-badge-card">New</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="nav-quick-access">
                                                        <li><a href="#"><i class="feather-folder-minus"></i> Quick Start Guide</a></li>
                                                        <li><a href="#"><i class="feather-folder-minus"></i> For Open Source</a></li>
                                                        <li><a href="#"><i class="feather-folder-minus"></i> API Status</a></li>
                                                        <li><a href="#"><i class="feather-folder-minus"></i> Support</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Dashboard
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('instructorDashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ route('instructorProfile') }}">Profile</a></li>
                                                <li><a href="{{ route('instructorEnrolledCourses') }}">Enrolled Courses</a></li>
                                                <li><a href="{{ route('instructorWishlist') }}">Wishlist</a></li>
                                                <li><a href="{{ route('instructorReviews') }}">Reviews</a></li>
                                                <li><a href="{{ route('instructorMyQuizAttempts') }}">My Quiz Attempts</a></li>
                                                <li><a href="{{ route('instructorOrderHistory') }}">Order History</a></li>
                                                <li><a href="{{ route('instructorCourse') }}">My Course</a></li>
                                                <li><a href="{{ route('instructorAnnouncements') }}">Announcements</a></li>
                                                <li><a href="{{ route('instructorQuizAttempts') }}">Quiz Attempts</a></li>
                                                <li><a href="{{ route('instructorAssignments') }}">Assignments</a></li>
                                                <li><a href="{{ route('instructorSettings') }}">Settings</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('studentDashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ route('studentProfile') }}">Profile</a></li>
                                                <li><a href="{{ route('studentEnrolledCourses') }}">Enrolled Courses</a></li>
                                                <li><a href="{{ route('studentWishlist') }}">Wishlist</a></li>
                                                <li><a href="{{ route('studentReviews') }}">Reviews</a></li>
                                                <li><a href="{{ route('studentMyQuizAttempts') }}">My Quiz Attempts</a></li>
                                                <li><a href="{{ route('studentOrderHistory') }}">Order History</a></li>
                                                <li><a href="{{ route('studentSettings') }}">Settings</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#">Pages <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-4">
                                        <div class="wrapper">
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                                    <h3 class="rbt-short-title">Get Started</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('aboutus01') }}">About Us</a></li>
                                                        <li><a href="{{ route('aboutus02') }}">About Us 02</a></li>
                                                        <li><a href="{{ route('eventGrid') }}">Event Grid</a></li>
                                                        <li><a href="{{ route('eventList') }}">Event List</a></li>
                                                        <li><a href="{{ route('eventSidebar') }}">Event Sidebar</a></li>
                                                        <li><a href="{{ route('eventDetails') }}">Event Details</a></li>
                                                        <li><a href="{{ route('academyGallery') }}">Academy Gallery</a></li>
                                                        <li><a href="{{ route('admissionGuide') }}">Admission Guide</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                                    <h3 class="rbt-short-title">Get Started</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('profile') }}">Profile</a></li>
                                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                        <li><a href="{{ route('becomeTeacher') }}">Become a Teacher</a></li>
                                                        <li><a href="{{ route('instructor') }}">Instructor</a></li>
                                                        <li><a href="{{ route('faqs') }}">FAQS</a></li>
                                                        <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                                        <li><a href="{{ route('pageError') }}">404 Page</a></li>
                                                        <li><a href="{{ route('maintenance') }}">Maintenance</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                                    <h3 class="rbt-short-title">Shop Pages</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('shop') }}">Shop <span class="rbt-badge-card">Sale Anything</span></a></li>
                                                        <li><a href="{{ route('singleProduct') }}">Single Product</a></li>
                                                        <li><a href="{{ route('cart') }}">Cart Page</a></li>
                                                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                        <li><a href="{{ route('wishlist') }}">Wishlist Page</a></li>
                                                        <li><a href="{{ route('myAccount') }}">My Acount</a></li>
                                                        <li><a href="{{ route('login') }}">Login & Register</a></li>
                                                        <li><a href="{{ route('subscription') }}">Subscription</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                                    <div class="mega-category-item">
                                                        <!-- Start Single Category  -->
                                                        <div class="nav-category-item">
                                                            <div class="thumbnail">
                                                                <div class="image"><img src="{{ asset('assets/images/course/category-2.png') }}" alt="Course images"></div>
                                                                <a href="{{ route('courseFilterOneToggle') }}">
                                                                    <span>Online Education</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Category  -->

                                                        <!-- Start Single Category  -->
                                                        <div class="nav-category-item">
                                                            <div class="thumbnail">
                                                                <div class="image"><img src="{{ asset('assets/images/course/category-1.png') }}" alt="Course images"></div>
                                                                <a href="{{ route('courseFilterOneToggle') }}">
                                                                    <span>Language Club</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Category  -->

                                                        <!-- Start Single Category  -->
                                                        <div class="nav-category-item">
                                                            <div class="thumbnail">
                                                                <div class="image"><img src="{{ asset('assets/images/course/category-4.png') }}" alt="Course images"></div>
                                                                <a href="{{ route('courseFilterOneToggle') }}">
                                                                    <span>University Status</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Category  -->

                                                        <!-- Start Single Category  -->
                                                        <div class="nav-category-item">
                                                            <div class="thumbnail">
                                                                <a href="{{ route('courseFilterOneToggle') }}">
                                                                    <span>Course School</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Category  -->

                                                        <!-- Start Single Category  -->
                                                        <div class="nav-category-item">
                                                            <div class="thumbnail">
                                                                <div class="image"><img src="{{ asset('assets/images/course/category-9.png') }}" alt="Course images"></div>
                                                                <a href="{{ route('courseFilterOneToggle') }}">
                                                                    <span>Academy</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Category  -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#">Elements <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-3">
                                        <div class="wrapper">
                                            <div class="row row--15 single-dropdown-menu-presentation">
                                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('styleGuide') }}">Style Guide <span class="rbt-badge-card">Hot</span></a></li>
                                                        <li><a href="{{ route('accordion') }}">Accordion</a></li>
                                                        <li><a href="{{ route('advancetab') }}">Advance Tab</a></li>
                                                        <li><a href="{{ route('about') }}">About <span class="rbt-badge-card">New</span></a></li>
                                                        <li><a href="{{ route('brand') }}">Brand</a></li>
                                                        <li><a href="{{ route('button') }}">Button</a></li>
                                                        <li><a href="{{ route('badge') }}">Badge</a></li>
                                                        <li><a href="{{ route('card') }}">Card</a></li>
                                                        <li><a href="#">& More Coming</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('callToAction') }}">Call To Action</a></li>
                                                        <li><a href="{{ route('counterup') }}">Counter</a></li>
                                                        <li><a href="{{ route('category') }}">Categories</a></li>
                                                        <li><a href="{{ route('header') }}">Header Style</a></li>
                                                        <li><a href="{{ route('newsletter') }}">Newsletter</a></li>
                                                        <li><a href="{{ route('team') }}">Team</a></li>
                                                        <li><a href="{{ route('social') }}">Social</a></li>
                                                        <li><a href="{{ route('listStyle') }}">List Style</a></li>
                                                        <li><a href="#">& More Coming</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-4 col-xxl-4 single-mega-item">
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                                        <li><a href="{{ route('progressbar') }}">Progressbar</a></li>
                                                        <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                                                        <li><a href="{{ route('service') }}">Service</a></li>
                                                        <li><a href="{{ route('split') }}">Split Area</a></li>
                                                        <li><a href="{{ route('search') }}">Search Style</a></li>
                                                        <li><a href="{{ route('instagram') }}">Instagram Style</a></li>
                                                        <li><a href="#">& More Coming</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="btn-wrapper">
                                                        <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none" href="#">
                                                            <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Visit Histudy Template</span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#">Blog <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-3">
                                        <div class="wrapper">
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                    <h3 class="rbt-short-title">Blog Styles</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('blogList') }}">Blog List</a></li>
                                                        <li><a href="{{ route('blog') }}">Blog Grid</a></li>
                                                        <li><a href="{{ route('blogGridMinimal') }}">Blog Grid Minimal</a></li>
                                                        <li><a href="{{ route('blogWithSidebar') }}">Blog With Sidebar</a></li>
                                                        <li><a href="{{ route('blogDetails') }}">Blog Details</a></li>
                                                        <li><a href="{{ route('postFormatStandard') }}">Post Format Standard</a></li>
                                                        <li><a href="{{ route('postFormatGallery') }}">Post Format Gallery</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                    <h3 class="rbt-short-title">Get Started</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="{{ route('postFormatQuote') }}">Post Format Quote</a></li>
                                                        <li><a href="{{ route('postFormatAudio') }}">Post Format Audio</a></li>
                                                        <li><a href="{{ route('postFormatVideo') }}">Post Format Video</a></li>
                                                        <li><a href="#">Media Under Title <span class="rbt-badge-card">Coming</span></a></li>
                                                        <li><a href="#">Sticky Sidebar <span class="rbt-badge-card">Coming</span></a></li>
                                                        <li><a href="#">Auto Masonry <span class="rbt-badge-card">Coming</span></a></li>
                                                        <li><a href="#">Meta Overlaid <span class="rbt-badge-card">Coming</span></a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                    <div class="rbt-ads-wrapper">
                                                        <a class="d-block" href="#"><img src="{{ asset('assets/images/service/mobile-cat.jpg') }}" alt="Education Images"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <!-- Navbar Icons -->
                        <ul class="quick-access">
                            <li class="access-icon rbt-user-wrapper right-align-dropdown">
                                <a class="rbt-round-btn" href="#">
                                    <i class="feather-user"></i>
                                </a>
                                <div class="rbt-user-menu-list-wrapper">
                                    <div class="inner">
                                        <div class="rbt-admin-profile">
                                            <div class="admin-thumbnail">
                                                <img src="{{ asset('assets/images/team/avatar.jpg') }}" alt="User Images">
                                            </div>
                                            <div class="admin-info">
                                                <span class="name">PixcelsIT</span>
                                                <a class="rbt-btn-link color-primary" href="{{ route('profile') }}">View Profile</a>
                                            </div>
                                        </div>
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="{{ route('instructorDashboard') }}">
                                                    <i class="feather-home"></i>
                                                    <span>My Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="feather-bookmark"></i>
                                                    <span>Bookmark</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('instructorEnrolledCourses') }}">
                                                    <i class="feather-shopping-bag"></i>
                                                    <span>Enrolled Courses</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('instructorWishlist') }}">
                                                    <i class="feather-heart"></i>
                                                    <span>Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('instructorReviews') }}">
                                                    <i class="feather-star"></i>
                                                    <span>Reviews</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('instructorMyQuizAttempts') }}">
                                                    <i class="feather-list"></i>
                                                    <span>My Quiz Attempts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('instructorOrderHistory') }}">
                                                    <i class="feather-clock"></i>
                                                    <span>Order History</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('instructorQuizAttempts') }}">
                                                    <i class="feather-message-square"></i>
                                                    <span>Question & Answer</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="#">
                                                    <i class="feather-book-open"></i>
                                                    <span>Getting Started</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="{{ route('instructorSettings') }}">
                                                    <i class="feather-settings"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="feather-log-out"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="access-icon rbt-mini-cart">
                                <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
                                    <i class="feather-shopping-cart"></i>
                                    <span class="rbt-cart-count">4</span>
                                </a>
                            </li>
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <div class="rbt-search-dropdown">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="#">
                                <input type="text" placeholder="What are you looking for?">
                                <div class="submit-btn">
                                    <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="rbt-separator-mid">
                        <hr class="rbt-separator m-0">
                    </div>

                    <div class="row g-4 pt--30 pb--60">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h5 class="rbt-title-style-2">Our Top Course</h5>
                            </div>
                        </div>

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('courseDetails') }}">
                                        <img src="{{ asset('assets/images/course/course-online-01.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Js</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$15</span>
                                            <span class="off-price">$25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('courseDetails') }}">
                                        <img src="{{ asset('assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Java Program</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('courseDetails') }}">
                                        <img src="{{ asset('assets/images/course/course-online-03.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('courseDetails') }}">
                                        <img src="{{ asset('assets/images/course/course-online-04.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$20</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>

                </div>
            </div>
            <!-- End Search Dropdown  -->
        </div>

    </header>
    <!-- Mobile Menu Section -->

    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Education Logo Images">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Histudy is a education website template. You can customize all.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Home <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu menu-skin-dark">
                            <div class="wrapper">
                                <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('mainDemo') }}"><img src="{{ asset('assets/images/splash/demo/h1.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('mainDemo') }}">Home Demo <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('marketplace') }}"><img src="{{ asset('assets/images/splash/demo/h12.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('marketplace') }}">Marketplace <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('kindergarten') }}"><img src="{{ asset('assets/images/splash/demo/h4.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('kindergarten') }}">kindergarten <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('universityClassic') }}"><img src="{{ asset('assets/images/splash/demo/h13.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('universityClassic') }}">University Classic <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('homeElegant') }}"><img src="{{ asset('assets/images/splash/demo/h14.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('homeElegant') }}">Home Elegant <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('gymCoaching') }}"><img src="{{ asset('assets/images/splash/demo/h9.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('gymCoaching') }}">Gym Coaching <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('onlineSchool') }}"><img src="{{ asset('assets/images/splash/demo/h3.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('onlineSchool') }}">Online School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('universityStatus') }}"><img src="{{ asset('assets/images/splash/demo/h6.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('universityStatus') }}">University Status <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('homeTechnology') }}"><img src="{{ asset('assets/images/splash/demo/h15.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('homeTechnology') }}">Home Technology <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('instructorPortfolio') }}"><img src="{{ asset('assets/images/splash/demo/h7.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('instructorPortfolio') }}">Instructor Portfolio <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('languageAcademy') }}"><img src="{{ asset('assets/images/splash/demo/h8.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('languageAcademy') }}">Language Academy <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('singleCourse') }}"><img src="{{ asset('assets/images/splash/demo/h11.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('singleCourse') }}">Single Course <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('onlineCourse') }}"><img src="{{ asset('assets/images/splash/demo/h10.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('onlineCourse') }}">Online Course <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('classicLms') }}"><img src="{{ asset('assets/images/splash/demo/h5.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('classicLms') }}">Classic Lms <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('courseSchool') }}"><img src="{{ asset('assets/images/splash/demo/h2.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('courseSchool') }}">Course School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('udemyAffiliate') }}"><img src="{{ asset('assets/images/splash/demo/h16.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('udemyAffiliate') }}">Udemy Affiliate <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('onlineAcademy') }}"><img src="{{ asset('assets/images/splash/demo/h17.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('onlineAcademy') }}">Online Academy <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('instructorsCoaches') }}"><img src="{{ asset('assets/images/splash/demo/h18.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('instructorsCoaches') }}">Instructor Coaches <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('modernUniversity') }}"><img src="{{ asset('assets/images/splash/demo/h19.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('modernUniversity') }}">Modern University <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('multilingual') }}"><img src="{{ asset('assets/images/splash/demo/h20.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('multilingual') }}">Multilingual <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('artDesignSchool') }}"><img src="{{ asset('assets/images/splash/demo/h21.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('artDesignSchool') }}">Art Design School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('wishlist') }}"><img src="{{ asset('assets/images/splash/demo/h22.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('wishlist') }}">Wishlist <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('coaching') }}"><img src="{{ asset('assets/images/splash/demo/h23.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('coaching') }}">Coaching <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('healthWellnessInstitute') }}"><img src="{{ asset('assets/images/splash/demo/h24.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('healthWellnessInstitute') }}">Health Institute <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('lifeCoach') }}"><img src="{{ asset('assets/images/splash/demo/h25.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('lifeCoach') }}">Life Coach <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="{{ route('islamicCenter') }}"><img src="{{ asset('assets/images/splash/demo/h26.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="{{ route('islamicCenter') }}">Islamic Center <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                </div>

                                <div class="load-demo-btn-wrap">
                                    <div class="load-demo-btn text-center">
                                        <span class="color-white b3">Scroll to view more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                              </svg></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item">
                        <a href="#">Courses <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-2">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mega-top-banner">
                                            <div class="content">
                                                <h4 class="title">Developer hub</h4>
                                                <p class="description">Start building fast, with code samples, key resources and more.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Course Layout</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('courseFilterOneToggle') }}">Filter One Toggle</a></li>
                                            <li><a href="{{ route('courseFilterOneOpen') }}">Filter One Open</a></li>
                                            <li><a href="{{ route('courseFilterTwoToggle') }}">Filter Two Toggle</a></li>
                                            <li><a href="{{ route('courseFilterTwoOpen') }}">Filter Two Open</a></li>
                                            <li><a href="{{ route('courseWithTab') }}">Course With Tab</a></li>
                                            <li><a href="{{ route('courseWithTabTwo') }}">Course With Tab Two</a></li>
                                            <li><a href="{{ route('courseCard2') }}">Course Card Two</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Course Layout</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('courseCard3') }}">Course Card Three</a></li>
                                            <li><a href="{{ route('courseMasonry') }}">Course Masonry</a></li>
                                            <li><a href="{{ route('courseWithSidebar') }}">Course With Sidebar</a></li>
                                            <li><a href="{{ route('courseDetails') }}">Course Details</a></li>
                                            <li><a href="{{ route('courseDetails2') }}">Course Details Two</a></li>
                                            <li><a href="{{ route('lesson') }}">Course Lesson <span class="rbt-badge-card">New</span></a></li>
                                            <li><a href="{{ route('createCourse') }}">Create Course <span class="rbt-badge-card">New</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="nav-quick-access">
                                            <li><a href="#"><i class="feather-folder-minus"></i> Quick Start Guide</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> For Open Source</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> API Status</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="has-dropdown has-menu-child-item">
                        <a href="#">Dashboard
                            <i class="feather-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('instructorDashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('instructorProfile') }}">Profile</a></li>
                                    <li><a href="{{ route('instructorEnrolledCourses') }}">Enrolled Courses</a></li>
                                    <li><a href="{{ route('instructorWishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('instructorReviews') }}">Reviews</a></li>
                                    <li><a href="{{ route('instructorMyQuizAttempts') }}">My Quiz Attempts</a></li>
                                    <li><a href="{{ route('instructorOrderHistory') }}">Order History</a></li>
                                    <li><a href="{{ route('instructorCourse') }}">My Course</a></li>
                                    <li><a href="{{ route('instructorAnnouncements') }}">Announcements</a></li>
                                    <li><a href="{{ route('instructorQuizAttempts') }}">Quiz Attempts</a></li>
                                    <li><a href="{{ route('instructorAssignments') }}">Assignments</a></li>
                                    <li><a href="{{ route('instructorSettings') }}">Settings</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('studentDashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('studentProfile') }}">Profile</a></li>
                                    <li><a href="{{ route('studentEnrolledCourses') }}">Enrolled Courses</a></li>
                                    <li><a href="{{ route('studentWishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('studentReviews') }}">Reviews</a></li>
                                    <li><a href="{{ route('studentMyQuizAttempts') }}">My Quiz Attempts</a></li>
                                    <li><a href="{{ route('studentOrderHistory') }}">Order History</a></li>
                                    <li><a href="{{ route('studentSettings') }}">Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Pages <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-4">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('aboutus01') }}">About Us</a></li>
                                            <li><a href="{{ route('aboutus02') }}">About Us 02</a></li>
                                            <li><a href="{{ route('eventGrid') }}">Event Grid</a></li>
                                            <li><a href="{{ route('eventList') }}">Event List</a></li>
                                            <li><a href="{{ route('eventSidebar') }}">Event Sidebar</a></li>
                                            <li><a href="{{ route('eventDetails') }}">Event Details</a></li>
                                            <li><a href="{{ route('academyGallery') }}">Academy Gallery</a></li>
                                            <li><a href="{{ route('admissionGuide') }}">Admission Guide</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('profile') }}">Profile</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            <li><a href="{{ route('becomeTeacher') }}">Become a Teacher</a></li>
                                            <li><a href="{{ route('instructor') }}">Instructor</a></li>
                                            <li><a href="{{ route('faqs') }}">FAQS</a></li>
                                            <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ route('pageError') }}">404 Page</a></li>
                                            <li><a href="{{ route('maintenance') }}">Maintenance</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Shop Pages</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('shop') }}">Shop <span class="rbt-badge-card">Sale Anything</span></a></li>
                                            <li><a href="{{ route('singleProduct') }}">Single Product</a></li>
                                            <li><a href="{{ route('cart') }}">Cart Page</a></li>
                                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            <li><a href="{{ route('wishlist') }}">Wishlist Page</a></li>
                                            <li><a href="{{ route('myAccount') }}">My Acount</a></li>
                                            <li><a href="{{ route('login') }}">Login & Register</a></li>
                                            <li><a href="{{ route('subscription') }}">Subscription</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <div class="mega-category-item">
                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-2.png') }}" alt="Course images"></div>
                                                    <a href="{{ route('courseFilterOneToggle') }}">
                                                        <span>Online Education</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-1.png') }}" alt="Course images"></div>
                                                    <a href="{{ route('courseFilterOneToggle') }}">
                                                        <span>Language Club</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-4.png') }}" alt="Course images"></div>
                                                    <a href="{{ route('courseFilterOneToggle') }}">
                                                        <span>University Status</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <a href="{{ route('courseFilterOneToggle') }}">
                                                        <span>Course School</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-9.png') }}" alt="Course images"></div>
                                                    <a href="{{ route('courseFilterOneToggle') }}">
                                                        <span>Academy</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Elements <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-3">
                            <div class="wrapper">
                                <div class="row row--15 single-dropdown-menu-presentation">
                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('styleGuide') }}">Style Guide <span class="rbt-badge-card">Hot</span></a></li>
                                            <li><a href="{{ route('accordion') }}">Accordion</a></li>
                                            <li><a href="{{ route('advancetab') }}">Advance Tab</a></li>
                                            <li><a href="{{ route('about') }}">About <span class="rbt-badge-card">New</span></a></li>
                                            <li><a href="{{ route('brand') }}">Brand</a></li>
                                            <li><a href="{{ route('button') }}">Button</a></li>
                                            <li><a href="{{ route('badge') }}">Badge</a></li>
                                            <li><a href="{{ route('card') }}">Card</a></li>
                                            <li><a href="#">& More Coming</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('callToAction') }}">Call To Action</a></li>
                                            <li><a href="{{ route('counterup') }}">Counter</a></li>
                                            <li><a href="{{ route('category') }}">Categories</a></li>
                                            <li><a href="{{ route('header') }}">Header Style</a></li>
                                            <li><a href="{{ route('newsletter') }}">Newsletter</a></li>
                                            <li><a href="{{ route('team') }}">Team</a></li>
                                            <li><a href="{{ route('social') }}">Social</a></li>
                                            <li><a href="{{ route('listStyle') }}">List Style</a></li>
                                            <li><a href="#">& More Coming</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                            <li><a href="{{ route('progressbar') }}">Progressbar</a></li>
                                            <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                                            <li><a href="{{ route('service') }}">Service</a></li>
                                            <li><a href="{{ route('split') }}">Split Area</a></li>
                                            <li><a href="{{ route('search') }}">Search Style</a></li>
                                            <li><a href="{{ route('instagram') }}">Instagram Style</a></li>
                                            <li><a href="#">& More Coming</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-wrapper">
                                            <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none" href="#">
                                                <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Visit Histudy Template</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Blog <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-3">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">Blog Styles</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('blogList') }}">Blog List</a></li>
                                            <li><a href="{{ route('blog') }}">Blog Grid</a></li>
                                            <li><a href="{{ route('blogGridMinimal') }}">Blog Grid Minimal</a></li>
                                            <li><a href="{{ route('blogWithSidebar') }}">Blog With Sidebar</a></li>
                                            <li><a href="{{ route('blogDetails') }}">Blog Details</a></li>
                                            <li><a href="{{ route('postFormatStandard') }}">Post Format Standard</a></li>
                                            <li><a href="{{ route('postFormatGallery') }}">Post Format Gallery</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="{{ route('postFormatQuote') }}">Post Format Quote</a></li>
                                            <li><a href="{{ route('postFormatAudio') }}">Post Format Audio</a></li>
                                            <li><a href="{{ route('postFormatVideo') }}">Post Format Video</a></li>
                                            <li><a href="#">Media Under Title <span class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Sticky Sidebar <span class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Auto Masonry <span class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Meta Overlaid <span class="rbt-badge-card">Coming</span></a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <div class="rbt-ads-wrapper">
                                            <a class="d-block" href="#"><img src="{{ asset('assets/images/service/mobile-cat.jpg') }}" alt="Education Images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
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
                </div>
            </div>

        </div>
    </div>
    <!-- Start Side Vav -->

    <x-sideVav/>

    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <main class="rbt-main-wrapper">

        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-17">
            <div class="wrapper">
                <div class="shape-wrap">
                    <div class="shape-bg">
                        <img src="{{ asset('assets/images/shape/o-bg-1.png') }}" alt="Banner Shape">
                    </div>
                    <div class="shadow-bg">
                        <img src="{{ asset('assets/images/shape/o-shadow-bg.png') }}" alt="Banner Shape">
                    </div>
                    <div class="shape-1">
                        <img src="{{ asset('assets/images/shape/o-shape-1.png') }}" alt="Banner Shape">
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('assets/images/shape/o-shape-2.png') }}" alt="Banner Shape">
                    </div>
                    <div class="union">
                        <img src="{{ asset('assets/images/shape/o-union.png') }}" alt="Banner Shape">
                    </div>
                    <div class="star scene">
                        <span data-depth="1">
                            <img src="{{ asset('assets/images/shape/o-star.png') }}" alt="Banner Shape">
                        </span>
                    </div>
                    <div class="dot-shape-1">
                        <img src="{{ asset('assets/images/shape/o-dots-1.png') }}" alt="Banner Shape">
                    </div>
                    <div class="dot-shape-2">
                        <span>
                            <img src="{{ asset('assets/images/shape/o-dots-2.png') }}" alt="Banner Shape">
                        </span>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="inner position-relative">
                                <h6 class="subtitle">
                                    <span class="trustpilot-dark"><img src="{{ asset('assets/images/shape/o-trustpilot.png') }}" alt="trustpilot"></span>
                                    <span class="trustpilot-white"><img src="{{ asset('assets/images/shape/o-trustpilot-dark.png') }}" alt="trustpilot"></span>
                                    Excellent 4.9 out of 5
                                </h6>
                                <h1 class="title">Education Is The Best Key <span class="theme-gradient">Success In Life</span></h1>
                                <p class="description">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. <span class="fw-500">Velit officia consequat.</span></p>
                                <div class="button-group">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Get Started</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                    <a class="rbt-btn btn-border hover-icon-reverse popup-video" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Watch Video</span>
                                        <span class="btn-icon"><i class="feather-play"></i></span>
                                        <span class="btn-icon"><i class="feather-play"></i></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="line-arrow scene">
                                    <span data-depth="1">
                                        <img src="{{ asset('assets/images/shape/o-line-arrow.png') }}" alt="Banner Shape">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="banner-wrap">
                                <div class="banner">
                                    <img src="{{ asset('assets/images/banner/o-banner.png') }}" alt="Banner">
                                </div>
                                <div class="feature" data-parallax='{"x": 40, "y": 0}'>
                                    <span>
                                        <img src="{{ asset('assets/images/shape/o-icon-1.png') }}" alt="">
                                    </span>
                                    <div>
                                        <h6 class="feature-title">Your</h6>
                                        <p class="feature-description">Admissoin Complete</p>
                                    </div>
                                </div>
                                <div class="enrolled" data-parallax='{"x": -40, "y": 0}'>
                                    <div class="enrolled-cont">
                                        <span>
                                            <img src="{{ asset('assets/images/shape/o-icon-2.png') }}" alt="">
                                        </span>
                                        <div>
                                            <h6 class="feature-title">36k+</h6>
                                            <p class="feature-description">Enrolled Students</p>
                                        </div>
                                    </div>
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                            <img src="{{ asset('assets/images/shape/art-stu-2.png') }}" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                            <img src="{{ asset('assets/images/shape/art-stu-1.png') }}" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                            <img src="{{ asset('assets/images/shape/art-stu-3.png') }}" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                            <img src="{{ asset('assets/images/shape/i-team.png') }}" alt="education">
                                        </a>
                                    </div>
                                </div>
                                <div class="feature item-2" data-parallax='{"x": 0, "y": 30}'>
                                    <span>
                                        <img src="{{ asset('assets/images/shape/o-icon-3.png') }}" alt="">
                                    </span>
                                    <div>
                                        <h6 class="feature-title">99%</h6>
                                        <p class="feature-description">Satisfied</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->

        <!-- Start Category Area  -->
        <div class="rbt-category-area category-section-02 bg-color-white rbt-section-gap">
            <div class="gradient-shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">CATEGORIES</span>
                            <h2 class="title w-600">Explore Top Courses Caterories <br> That <span class="theme-gradient">Change Yourself</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20 rbt-index-upper-2">
                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/web-design.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Web Design</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">25 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/design.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Graphic Design</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">30 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/personal.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Personal Development</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">20 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/server.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">IT and Software</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/pantone.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Sales Marketing</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/paint-palette.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Art & Humanities</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/smartphone.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Mobile Application</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/infographic.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title w-600">Finance & Accounting</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">15 Courses<i class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->
                </div>
            </div>
        </div>
        <!-- End Category Area  -->

        <!-- Start Course Area -->
        <div class="rbt-course-area rbt-sec-cir-shadow-1 bg-color-extra2 rbt-section-gap">
            <div class="gradient-shape-top"></div>
            <div class="gradient-shape-bottom"></div>
            <div class="container">
                <div class="row mb--30">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Top Popular Course</span>
                            <h2 class="title w-600">Histudy Course Student <br> Can <span class="theme-gradient">Join With Us</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row mb--40">
                    <div class="col-lg-12">
                        <ul class="rbt-course-tab-button nav nav-tabs" id="rbt-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active" id="development-tab" data-bs-toggle="tab" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="true"><span class="filter-text">Development</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="ui_ux-tab" data-bs-toggle="tab" data-bs-target="#ui-ux" type="button" role="tab" aria-controls="ui-ux" aria-selected="false"><span class="filter-text">UI/UX Design</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false"><span class="filter-text">Marketing</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab" aria-controls="business" aria-selected="false"><span class="filter-text">Business</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="language-tab" data-bs-toggle="tab" data-bs-target="#language" type="button" role="tab" aria-controls="language" aria-selected="false"><span class="filter-text">Language</span></button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="rbt-myTabContent">
                            <div class="tab-pane fade active show" id="development" role="tabpanel" aria-labelledby="development-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-03.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('/assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Popular Course</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="ui-ux" role="tabpanel" aria-labelledby="ui_ux-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-03.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('/assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Popular Course</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Popular Course</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-03.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('/assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-03.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('/assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Popular Course</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                            <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                                <div class="row g-5">

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-03.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('/assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>8 Lessons</li>
                                                    <li><i class="feather-users"></i>30 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                                </h4>
                                                <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (10 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$50</h6>
                                                        <span class="off-price version-02">$130</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-01.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>20 Lessons</li>
                                                    <li><i class="feather-users"></i>40 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                                </h4>
                                                <p class="rbt-card-text">React Js long fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$60</h6>
                                                        <span class="off-price version-02">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                    <!-- Start Single Course  -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rbt-card variation-04 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-02.jpg') }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Popular Course</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader will be distracted by the readable.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <h6 class="current-price mb-0">$80</h6>
                                                        <span class="off-price version-02">$190</span>
                                                    </div>
                                                    <a class="rbt-btn-link color-primary" href="{{ route('courseDetails') }}">Enroll Course<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Course  -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt--55">
                    <div class="col-lg-12">
                        <div class="load-more-btn text-center">
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="{{ route('courseWithTabTwo') }}">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Courses</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Course Area -->

        <!-- Start About Area  -->
        <div class="rbt-about-area bg-color-white rbt-section-gap about-style-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="thumbnail-wrapper style_2">
                            <div class="thumbnail image-1">
                                <img data-parallax='{"x": 0, "y": -20}' src="{{ asset('assets/images/about/about-01.png') }}" alt="Education Images">
                            </div>
                            <div class="thumbnail image-2 d-none d-xl-block">
                                <img data-parallax='{"x": 0, "y": 60}' src="{{ asset('assets/images/about/about-02.png') }}" alt="Education Images">
                            </div>
                            <div class="thumbnail image-3 d-none d-md-block">
                                <img data-parallax='{"x": 0, "y": 80}' src="{{ asset('assets/images/about/about-03.png') }}" alt="Education Images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner pl--50 pl_sm--0 pl_md--0">
                            <div class="section-title text-start">
                                <span class="subtitle bg-primary-opacity">Why Choose Us</span>
                                <h2 class="title">Know About <span class="theme-gradient">Histudy</span> <br> Learning Platform</h2>
                            </div>

                            <!-- Start Feature List  -->

                            <div class="rbt-feature-wrapper mt--30 ml_dec_20">
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Flexible Classes</h6>
                                        <p class="feature-description">It is a long established fact that a reader will
                                            be distracted by this on readable content of when looking at its layout.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Learn From Anywhere</h6>
                                        <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-secondary-opacity">
                                        <i class="feather-award"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Skill-Based Learning</h6>
                                        <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content of when looking at its layout.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- End Feature List  -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counterup Start  -->
            <div class="container">
                <div class="pt_md--80 pt_sm--80 pt--30">
                    <div class="row g-5 hanger-line">
                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                                <div class="top-circle-shape"></div>
                                <div class="inner">
                                    <div class="rbt-round-icon">
                                        <img src="{{ asset('assets/images/icons/counter-01.png') }}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter w-600"><span class="odometer rbt-font-primary" data-count="500">00</span>
                                        </h3>
                                        <span class="subtitle">Learners &amp; counting</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                            <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                                <div class="top-circle-shape"></div>
                                <div class="inner">
                                    <div class="rbt-round-icon">
                                        <img src="{{ asset('assets/images/icons/counter-02.png') }}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter w-600"><span class="odometer rbt-font-primary" data-count="800">00</span>
                                        </h3>
                                        <span class="subtitle">Courses & Video</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                            <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                                <div class="top-circle-shape"></div>
                                <div class="inner">
                                    <div class="rbt-round-icon">
                                        <img src="{{ asset('assets/images/icons/counter-03.png') }}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter w-600"><span class="odometer rbt-font-primary" data-count="1000">00</span>
                                        </h3>
                                        <span class="subtitle">Certified Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                            <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                                <div class="top-circle-shape"></div>
                                <div class="inner">
                                    <div class="rbt-round-icon">
                                        <img src="{{ asset('assets/images/icons/counter-04.png') }}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter w-600"><span class="odometer rbt-font-primary" data-count="100">00</span>
                                        </h3>
                                        <span class="subtitle">Registered Enrolls</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->
                    </div>
                </div>
            </div>
            <!-- Counterup End -->
        </div>
        <!-- End About Area  -->

        <!-- Start Event Area  -->
        <div class="rbt-event-area event-style-2 rbt-section-gap bg-gradient-7">
            <div class="container">
                <div class="row mb--55">
                    <div class="section-title text-center">
                        <span class="subtitle bg-white-opacity">STIMULATED TO TAKE PART IN?</span>
                        <h2 class="title w-600 color-white">Upcoming Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper event-activation-1 rbt-arrow-between rbt-dot-bottom-center pb--60 icon-bg-primary">

                            <div class="swiper-wrapper">
                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card shadow-none event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('eventDetails') }}">
                                                    <img src="{{ asset('assets/images/event/grid-type-02.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Mar</span>
                                                        <span>2024</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>Vancouver</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">Painting Art Contest 2020 for histudy
                                                        Clud</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="{{ route('eventDetails') }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->
                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card shadow-none event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('eventDetails') }}">
                                                    <img src="{{ asset('assets/images/event/grid-type-04.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Jan</span>
                                                        <span>2024</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>IAC Building</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">Elegant Light Box Paper Cut Dioramas in
                                                        UK</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="{{ route('eventDetails') }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->

                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card shadow-none event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('eventDetails') }}">
                                                    <img src="{{ asset('assets/images/event/grid-type-05.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Mar</span>
                                                        <span>2024</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>Vancouver</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">Most Effective Ways for Education's
                                                        Problem</a></h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="{{ route('eventDetails') }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->

                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card shadow-none event-grid-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('eventDetails') }}">
                                                    <img src="{{ asset('assets/images/event/grid-type-01.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>11 Jan</span>
                                                        <span>2024</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>IAC Building</li>
                                                    <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">International Education Fair 2024</a>
                                                </h4>

                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="{{ route('eventDetails') }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide  -->
                            </div>

                            <div class="rbt-swiper-arrow rbt-arrow-left">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-left"></i>
                                    <i class="rbt-icon-top feather-arrow-left"></i>
                                </div>
                            </div>

                            <div class="rbt-swiper-arrow rbt-arrow-right">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-right"></i>
                                    <i class="rbt-icon-top feather-arrow-right"></i>
                                </div>
                            </div>

                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Event Area  -->

        <!-- Start Testimonial Area -->
        <div class="rbt-testimonial-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            <h2 class="title w-600">Student's <span class="theme-gradient">Feedback</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <!-- Start Single Testimonial  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/testimonial/client-01.png') }}" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Martha Maldonado</h5>
                                        <span>Executive Chairman <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/testimonial/client-02.png') }}" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Michael D. Lovelady</h5>
                                        <span>CEO <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/testimonial/client-03.png') }}" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Valerie J. Creasman</h5>
                                        <span>Executive Designer <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
                <!-- Start Brand -->
                <div class="mt--80">
                    <div class="rbt-brand-title-wrap">
                        <h5 class="rbt-brand-title w-600 text-center mb-0">Making <span class="theme-gradient">sensitive clients</span> more valuable for <span class="theme-gradient">companies</span> like</h5>
                    </div>
                    <ul class="brand-list brand-style-3 justify-content-start justify-content-lg-between mt--30">
                        <li><a href="#"><img src="{{ asset('assets/images/brand/partner-5.webp') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/brand/partner-1.webp') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/brand/partner-6.webp') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/brand/partner-3.webp') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/brand/partner-1.webp') }}" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/brand/partner-6.webp') }}" alt="Brand Image"></a></li>
                    </ul>
                </div>
                <!-- Start Brand -->
            </div>
        </div>
        <!-- End Testimonial Area -->

        <!-- Start Blog Area -->
        <div class="rbt-blog-area rbt-sec-cir-shadow-1 rbt-section-gap bg-color-extra2">
            <div class="gradient-shape-top version-02"></div>
            <div class="gradient-shape-bottom version-02"></div>
            <div class="container">
                <div class="row mb--60 g-5 align-items-end">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">News & Blog</span>
                            <h2 class="title w-600">Have a Look on <span class="theme-gradient">Our Update</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="load-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('blog') }}">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View All Posts</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('courseDetails') }}">
                                    <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="Card image"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Difficult Things About Education.</a></h5>
                                <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="{{ route('courseDetails') }}">Read
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('courseDetails') }}">
                                    <img src="{{ asset('assets/images/blog/blog-grid-02.jpg') }}" alt="Card image"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Learn How More Money With
                                        lms.</a></h5>
                                <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="{{ route('courseDetails') }}">Read
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('courseDetails') }}">
                                    <img src="{{ asset('assets/images/blog/blog-grid-03.jpg') }}" alt="Card image"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Understand The Background Of
                                        lms.</a></h5>
                                <p class="rbt-card-text">There are many variations of passages of Ipsum available,</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="{{ route('courseDetails') }}">Read
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Blog Area -->

        <!-- Start Footer aera -->
        <footer class="rbt-footer rbt-footer-shadow-1 footer-style-1 bg-color-white">
            <div class="gradient-shadow-top"></div>
            <div class="gradient-shadow-bottom"></div>
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
                                        <a href="{{ route('marketplace') }}">Marketplace</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('kindergarten') }}">kindergarten</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('universityClassic') }}">University</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gymCoaching') }}">GYM Coaching</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faqs') }}">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('aboutus01') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('privacyPolicy') }}">Privacy policy</a>
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
                                        <a href="{{ route('becomeTeacher') }}">Become Teacher</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instructor') }}">Instructor</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('eventList') }}">Events</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('courseFilterOneToggle') }}">Course</a>
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
                                    <li><span>Address:</span> <a href="#">15205 North Kierland Blvd.</a></li>
                                </ul>

                                <h6 class="w-600 mt--25">Newsletter</h6>
                                <form action="#" class="newsletter-form-1 version-02 mt--15 radius-round">
                                    <input class="rbt-border" type="email" placeholder="Enter Your E-Email">
                                    <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-md" type="submit">
                                        <span data-text="Subscribe">Subscribe</span>
                                    </button>
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
                            <p class="rbt-link-hover text-center text-lg-start">Copyright © 2025 <a href="https://www.pixcelsthemes.com/">Pixcels Themes.</a> All Rights Reserved</p>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="{{ route('privacyPolicy') }}">Privacy policy</a></li>
                                <li><a href="{{ route('subscription') }}">Subscription</a></li>
                                <li><a href="{{ route('login') }}">Login & Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </footer>
        <!-- End Footer aera -->
         
    </main>

@endsection