@extends('layout.layout')

@php
     $footer='true';
     $header='false';
     $topToBottom='true';
@endphp

@section('content')

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-8 rbt-transparent-header">
        <div class="rbt-sticky-placeholder"></div>
        <!-- Start Header Top  -->
        <div class="rbt-header-top rbt-header-top-1 variation-height-60 header-space-betwween bg-color-transparent top-expended-activation">
            <div class="container">
                <div class="top-expended-wrapper">
                    <div class="top-expended-inner rbt-header-sec align-items-center ">
                        <div class="rbt-header-sec-col rbt-header-left">
                            <div class="rbt-header-content">
                                <div class="header-info d-none d-lg-block">
                                    <ul class="rbt-information-list">
                                        <li>
                                            <a href="#"><i class="feather-help-circle"></i>Have any Question?</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                            <div class="rbt-header-content justify-content-start justify-content-lg-end">
                                <div class="header-info">
                                    <ul class="rbt-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <img class="left-image" src="{{ asset('assets/images/icons/en-us.png') }}" alt="Language Images">
                                                <span class="menu-item">English</span>
                                                <i class="right-icon feather-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="{{ asset('assets/images/icons/fr.png') }}" alt="Language Images">
                                                        <span class="menu-item">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="{{ asset('assets/images/icons/de.png') }}" alt="Language Images">
                                                        <span class="menu-item">Deutsch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info">
                                    <ul class="rbt-dropdown-menu currency-menu">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <span class="menu-item">USD</span>
                                                <i class="right-icon feather-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu hover-reverse">
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">EUR</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">GBP</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="top-bar-expended d-block d-lg-none">
                            <button class="topbar-expend-button rbt-round-btn"><i class="color-body feather-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top  -->


        <div class="rbt-header-wrapper  header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-end align-items-center">
                    <div class="header-left">
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
                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="#">
                                <span data-text="Join Now">Join Now</span>
                            </a>
                        </div>

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

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-7 bg-gradient-1 theme-shape header-transperent-spacer">
        <div class="wrapper w-100">
            <div class="container">
                <div class="row g-5 justify-content-between align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="content">
                            <div class="inner">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                                </div>
                                <h1 class="title">Innovative <span class="theme-gradient">Language Academic</span> Platform
                                    for Your Career.</h1>
                                <div class="rbt-like-total">
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/testimonial/client-04.png') }}" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Mark" tabindex="0"><img src="{{ asset('assets/images/testimonial/client-05.png') }}" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0"><img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="education"></a>
                                        <div class="more-author-text">
                                            <h5 class="total-join-students">Join Over 3000+ Students</h5>
                                            <p class="subtitle">Have a new ideas every week.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-button-group justify-content-start mt--30">
                                    <a class="rbt-btn btn-gradient rbt-switch-btn" href="#">
                                        <span data-text="Sign Up Now">Sign Up Now</span>
                                    </a>
                                    <a class="rbt-btn btn-border rbt-switch-btn" href="#">
                                        <span data-text="Find Courses">Find Courses</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail-wrapper">
                            <div class="thumbnail text-end">
                                <img src="{{ asset('assets/images/banner/language-club.png') }}" alt="Education Images">
                            </div>
                            <div class="card-info bounce-slide">
                                <div class="inner">
                                    <div class="name">Hillery. <span>/ USA</span></div>
                                    <div class="rating-wrapper d-block d-sm-flex">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>(Google Review)</span>
                                    </div>
                                </div>
                                <div class="notify-icon">
                                    <img src="{{ asset('assets/images/testimonial/client-12.png') }}" alt="Client Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/web-design.jpg') }}" alt="Category Images">
                                    <div class="read-more-btn">
                                        <span class="rbt-btn btn-sm btn-white radius-round">20 Courses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">Web Design</a></h5>
                                <p class="description">Web App Application</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/graphic-design.jpg') }}" alt="Category Images">
                                    <div class="read-more-btn">
                                        <span class="rbt-btn btn-sm btn-white radius-round">15 Courses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">Graphic Design</a></h5>
                                <p class="description">Design is Art</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/personal-development.jpg') }}" alt="Category Images">
                                    <div class="read-more-btn">
                                        <span class="rbt-btn btn-sm btn-white radius-round">9 Courses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">Personal Development</a></h5>
                                <p class="description">Web App Application</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/software.jpg') }}" alt="Category Images">
                                    <div class="read-more-btn">
                                        <span class="rbt-btn btn-sm btn-white radius-round">15 Courses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">IT and Software</a></h5>
                                <p class="description">Web App Application</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
            </div>
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-course-card-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row align-items-center mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Our Language Courses</span>
                        <h2 class="title">Language Courses</h2>
                        <p class="description has-medium-font-size mt--20">Language Academy Courses?</p>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/language-academy-01.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Courses</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('courseDetails') }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="{{ asset('assets/images/shape/united-kingdom.svg') }}" alt="united-kingdom">
                            </div>
                            <div class="card-count">21 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/language-academy-02.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">French Courses</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('courseDetails') }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="{{ asset('assets/images/shape/france.svg') }}" alt="Education Images">
                            </div>
                            <div class="card-count">21 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/language-academy-03.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">German Courses</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('courseDetails') }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="{{ asset('assets/images/shape/germany.svg') }}" alt="Education Images">
                            </div>
                            <div class="card-count">21 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/language-academy-04.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">italian Courses</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('courseDetails') }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="{{ asset('assets/images/shape/italy.svg') }}" alt="Education Images">
                            </div>
                            <div class="card-count">5 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/language-academy-05.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">japan Courses</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('courseDetails') }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="{{ asset('assets/images/shape/japan.svg') }}" alt="Education Images">
                            </div>
                            <div class="card-count">5 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/language-academy-06.jpg') }}" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover btn-md">
                                    <span class="btn-text">Read More</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('courseDetails') }}">korea Courses</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('courseDetails') }}"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                        <div class="card-information">
                            <div class="card-flag">
                                <img src="{{ asset('assets/images/shape/south-korea.svg') }}" alt="Education Images">
                            </div>
                            <div class="card-count">5 programs</div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Card Style -->

    <div class="rbt-counterup-area rbt-section-gapBottom bg-gradient-1">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Why Choose Us</span>
                        <h2 class="title">Why Choose Histudy</h2>
                        <p class="description has-medium-font-size mt--20 mb--0">Language Academic?</p>
                    </div>
                </div>
            </div>
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
                                <h3 class="counter"><span class="odometer" data-count="500">00</span>
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
                                <h3 class="counter"><span class="odometer" data-count="800">00</span>
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
                                <h3 class="counter"><span class="odometer" data-count="1000">00</span>
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
                                <h3 class="counter"><span class="odometer" data-count="100">00</span>
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

    <div class="rbt-about-area about-style-1 rbt-section-gapTop pb--30 pb_md--80 pb_sm--80 bg-color-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
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
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Histudy <br /> Learning Platform</h2>
                        </div>

                        <p class="description mt--30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                        <!-- Start Feature List  -->

                        <div class="rbt-feature-wrapper mt--20 ml_dec_20">
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
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">More About Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-countdown-area bg_image bg_image--6 bg_image_fixed rbt-section-gap" data-black-overlay="5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-start">
                            <span class="subtitle bg-white-opacity">Why Choose Us</span>
                            <h2 class="title color-white">Free Resources Learning English for Beginner</h2>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white opacity-7">Learning new technology, data sience, university, communicate to global world and build a bright future with our histudy.</p>
                        </div>
                        <div class="countdown-style-1 mt--50">
                            <div class="countdown" data-date="2025-12-30">
                                <div class="countdown-container days">
                                    <span class="countdown-value">87</span>
                                    <span class="countdown-heading">Days</span>
                                </div>
                                <div class="countdown-container hours">
                                    <span class="countdown-value">23</span>
                                    <span class="countdown-heading">Hours</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span class="countdown-value">38</span>
                                    <span class="countdown-heading">Minutes</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span class="countdown-value">27</span>
                                    <span class="countdown-heading">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 w-100">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                        </div>
                        <h3 class="title">Sign Up for Free Resources</h3>
                        <form id="contact-form" class="w-100">
                            <div class="form-group">
                                <input name="con_name" type="text">
                                <label>Name</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="con_email" type="email">
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="text">
                                <label>Phone</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-submit-group mt--40">
                                <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">GET IT NOW</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area rbt-section-gap bg-gradient-1">
        <div class="container">
            <div class="row mb--55 row--30 align-items-end">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Our Posts</span>
                        <h2 class="title">Histudy News</h2>
                        <p class="description has-medium-font-size mt--20">Language Academy Blog.</p>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('blogDetails') }}">Is lms The Most Trending
                                    Thing Now?</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Learn
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
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-grid-02.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('blogDetails') }}">Learn How More Money With
                                    lms.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Learn
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
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-grid-03.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('blogDetails') }}">Understand The Background Of
                                    lms.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Learn
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
    <!-- End Blog Style -->

@endsection