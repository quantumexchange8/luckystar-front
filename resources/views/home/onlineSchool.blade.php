@extends('layout.layout')

@php
     $footer='true';
     $topToBottom='true';
     $header='false';
@endphp

@section('content')

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10 rbt-transparent-header">
        <div class="rbt-sticky-placeholder"></div>
        <div class="rbt-header-wrapper  header-not-transparent header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
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
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>

                            <li class="access-icon rbt-mini-cart">
                                <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
                                    <i class="feather-shopping-cart"></i>
                                    <span class="rbt-cart-count">4</span>
                                </a>
                            </li>

                            <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                <a href="#"><i class="feather-user"></i>Admin</a>
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

                            <li class="access-icon rbt-user-wrapper d-block d-xl-none">
                                <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
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
                        </ul>

                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none" href="#">
                                <span data-text="Enroll Now">Enroll Now</span>
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

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-3 header-transperent-spacer">
        <div class="wrapper">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="banner-content ">
                            <div class="inner">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-pink-opacity">THE BEST THEME FOR</span>
                                </div>
                                <h1 class="title">Online Learning <br /> Managemnt System</h1>
                                <p class="description">We are experienced in educationl platform and skilled strategies
                                    for
                                    the success of our online learning.</p>
                                <div class="rating mb--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="rbt-like-total">
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{ asset('assets/images/testimonial/client-03.png') }}" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Mark" tabindex="0"><img src="{{ asset('assets/images/testimonial/client-04.png') }}" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0"><img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="education"></a>
                                        <div class="more-author-text">
                                            <h5 class="total-join-students">Join Over 3000+ Students</h5>
                                            <p class="subtitle">Have a new ideas every week.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="rbt-contact-form contact-form-style-1">
                            <h3 class="title">Get a Free Histudy Online Course</h3>
                            <form id="contact-form">
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
                                    <textarea></textarea>
                                    <label>Message</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-submit-group">
                                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round w-100">
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
        <div class="shape-wrapper">
            <div class="left-shape">
                <img src="{{ asset('assets/images/banner/right-shape.png') }}" alt="Banner Images">
            </div>
            <div class="top-shape">
                <img src="{{ asset('assets/images/banner/top-shape.png') }}" alt="Banner Images">
            </div>
            <div class="marque-images edumarque"></div>
        </div>
    </div>
    <!-- End Banner Area -->

    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Course Category</span>
                        <h2 class="title">Let the journey of organizing <br> your own learning begin</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/web-design.jpg') }}" alt="Category Images">
                                </a>
                            </div>
                            <div class="icons">
                                <img src="{{ asset('assets/images/category/web-design.png') }}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">Web Design</a></h5>
                                <div class="read-more-btn">
                                    <a class="rbt-btn-link" href="{{ route('courseFilterOneToggle') }}">35 Courses<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/graphic-design.jpg') }}" alt="Category Images">
                                </a>
                            </div>
                            <div class="icons">
                                <img src="{{ asset('assets/images/category/graphic-designer.png') }}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">Graphic Design</a></h5>
                                <div class="read-more-btn">
                                    <a class="rbt-btn-link" href="{{ route('courseFilterOneToggle') }}">20 Courses<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/personal-development.jpg') }}" alt="Category Images">
                                </a>
                            </div>
                            <div class="icons">
                                <img src="{{ asset('assets/images/category/personal.png') }}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">Personal Development</a></h5>
                                <div class="read-more-btn">
                                    <a class="rbt-btn-link" href="{{ route('courseFilterOneToggle') }}">15 Courses<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="{{ route('courseFilterOneToggle') }}">
                                    <img src="{{ asset('assets/images/category/image/software.jpg') }}" alt="Category Images">
                                </a>
                            </div>
                            <div class="icons">
                                <img src="{{ asset('assets/images/category/server.png') }}" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="{{ route('courseFilterOneToggle') }}">IT and Software</a></h5>
                                <div class="read-more-btn">
                                    <a class="rbt-btn-link" href="{{ route('courseFilterOneToggle') }}">50 Courses<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="read-more-btn text-center mt--40">
                        <a class="rbt-btn btn-border-gradient hover-icon-reverse radius-round btn-md" href="archive.html">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">VIEW ALL CATEGORIES</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Course Area  -->
    <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">Live Course</span>
                        <h2 class="title">Special live course</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse radius-round" href="#">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">VIEW ALL COURSES</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/course-online-04.jpg') }}" alt="Card image">
                                <div class="rbt-badge-3 bg-white">
                                    <span>-40%</span>
                                    <span>Off</span>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-card-body">

                            <div class="rbt-card-top">
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
                                <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div>
                            </div>

                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i>20 Lessons</li>
                                <li><i class="feather-users"></i>40 Students</li>
                            </ul>
                            <p class="rbt-card-text">React Js long fact that a reader will be distracted by
                                the readable.</p>
                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/client/avater-01.png') }}" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    By <a href="{{ route('profile') }}">Patrick</a> In <a href="#">Languages</a>
                                </div>
                            </div>

                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <span class="current-price">$60</span>
                                    <span class="off-price">$120</span>
                                </div>
                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/course-online-05.jpg') }}" alt="Card image">
                                <div class="rbt-badge-3 bg-white">
                                    <span>-40%</span>
                                    <span>Off</span>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
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
                                <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i>12 Lessons</li>
                                <li><i class="feather-users"></i>50 Students</li>
                            </ul>
                            <p class="rbt-card-text">It is a long established fact that a reader will be distracted
                                by the readable.</p>
                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    By <a href="{{ route('profile') }}">Angela</a> In <a href="#">Development</a>
                                </div>
                            </div>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <span class="current-price">$60</span>
                                    <span class="off-price">$120</span>
                                </div>
                                <a class="rbt-btn-link left-icon" href="{{ route('courseDetails') }}"><i
                                        class="feather-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('courseDetails') }}">
                                <img src="{{ asset('assets/images/course/course-online-06.jpg') }}" alt="Card image">
                                <div class="rbt-badge-3 bg-white">
                                    <span>-40%</span>
                                    <span>Off</span>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (5 Reviews)</span>
                                </div>
                                <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i>8 Lessons</li>
                                <li><i class="feather-users"></i>30 Students</li>
                            </ul>
                            <p class="rbt-card-text">Angular Js long fact that a reader will be distracted by
                                the readable.</p>

                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    By <a href="{{ route('profile') }}">Slaughter</a> In <a href="#">Languages</a>
                                </div>
                            </div>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <span class="current-price">$80</span>
                                    <span class="off-price">$100</span>
                                </div>
                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area  -->

    <div class="service-wrapper bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Histudy Feature</span>
                        <h2 class="title">Check out Histudy's features <br> to win any exam</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row row--15 mt_dec--30">
                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="rbt-flipbox">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-1">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-1.png') }}" alt="card-icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="#">Best Coaching</a></h5>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima error reiciendis.</p>
                                            <a class="rbt-btn-link stretched-link" href="#">Learn More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                        <ul class="rbt-list-style-3 color-white">
                                            <li><i class="feather-youtube"></i> 570 Free Video</li>
                                            <li><i class="feather-book"></i> 35 Subjects</li>
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                        <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                            <span data-text="Learn More">Learn More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="rbt-flipbox">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-2">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-2.png') }}" alt="card-icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="#">Convenient practice</a></h5>
                                            <p>Convenient practice dolor sit adipisicing elit. Minima error reiciendis.</p>
                                            <a class="rbt-btn-link stretched-link" href="#">Learn More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                        <ul class="rbt-list-style-3 color-white">
                                            <li><i class="feather-youtube"></i> 370 Free Video</li>
                                            <li><i class="feather-book"></i> 120 Subjects</li>
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                        <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                            <span data-text="Learn More">Learn More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="rbt-flipbox">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-3">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-3.png') }}" alt="card-icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="#">Video Lecture</a></h5>
                                            <p>Video Lecture sit, amet consectetur adipisicing elit. Minima error reiciendis.</p>
                                            <a class="rbt-btn-link stretched-link" href="#">Learn More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                        <ul class="rbt-list-style-3 color-white">
                                            <li><i class="feather-youtube"></i> 125 Free Video</li>
                                            <li><i class="feather-book"></i> 12 Subjects</li>
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                        <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                            <span data-text="Learn More">Learn More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="rbt-flipbox">
                                <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-4">
                                    <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-4.png') }}" alt="card-icon">
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="#">Live Class</a></h5>
                                            <p>Live Class dolor sit, amet consectetur adipisicing elit. Minima error reiciendis.</p>
                                            <a class="rbt-btn-link stretched-link" href="#">Learn More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                        <ul class="rbt-list-style-3 color-white">
                                            <li><i class="feather-youtube"></i> 124 Free Video</li>
                                            <li><i class="feather-book"></i> 56 Subjects</li>
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                        <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                            <span data-text="Learn More">Learn More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-counterup-area bg_image bg_image_fixed bg_image--18 ptb--170 ptb_md--50 ptb_sm--50 bg-black-overlay" data-black-overlay="1">
        <div class="conter-style-2">
            <div class="container">
                <div class="row g-5">
                    <!-- Start Single Counter  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                        <div class="rbt-counterup style-2">
                            <div class="inner">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                        <div class="rbt-counterup style-2">
                            <div class="inner">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                        <div class="rbt-counterup style-2">
                            <div class="inner">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                        <div class="rbt-counterup style-2">
                            <div class="inner">
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                    </h3>
                                    <span class="subtitle">Certified Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Counter  -->
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-service-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Exam Preparation</span>
                        <h2 class="title">Annual Exam Preparation</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15 mt_dec--30">

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                        <div class="inner">
                            <div class="content">
                                <h4 class="title"><a href="#">BCS Exam</a></h4>
                                <p>Lorem ipsum dolor sit, amet consectetur.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-youtube"></i> 125 Free Video</li>
                                            <li><i class="feather-book"></i> 12 Subjects</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="rbt-btn btn-gradient hover-icon-reverse btn-sm mt--30" href="#">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/service/service-01.png') }}" alt="Education Images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                        <div class="inner">
                            <div class="content">
                                <h4 class="title"><a href="#">Medical Exam</a></h4>
                                <p>Lorem ipsum dolor sit, amet consectetur.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-youtube"></i> 785 Free Video</li>
                                            <li><i class="feather-book"></i> 95 Subjects</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="rbt-btn btn-gradient hover-icon-reverse btn-sm mt--30" href="#">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/service/service-02.png') }}" alt="Education Images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                        <div class="inner">
                            <div class="content">
                                <h4 class="title"><a href="#">University Admit Exam</a></h4>
                                <p>Lorem ipsum dolor sit, amet consectetur.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-youtube"></i> 123 Free Video</li>
                                            <li><i class="feather-book"></i> 85 Subjects</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="rbt-btn btn-gradient hover-icon-reverse btn-sm mt--30" href="#">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/service/service-03.png') }}" alt="Education Images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                        <div class="inner">
                            <div class="content">
                                <h4 class="title"><a href="#">IELTS Exam</a></h4>
                                <p>Lorem ipsum dolor sit, amet consectetur.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-youtube"></i> 150 Free Video</li>
                                            <li><i class="feather-book"></i> 26 Subjects</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-3">
                                            <li><i class="feather-video"></i> Live Class</li>
                                            <li><i class="feather-info"></i> MCQ and CQ Bank</li>
                                        </ul>
                                    </div>
                                </div>
                                <a class="rbt-btn btn-gradient hover-icon-reverse btn-sm mt--30" href="#">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/service/service-03.png') }}" alt="Education Images">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
        </div>
    </div>

    <!-- Start Course Area  -->
    <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Courses</span>
                        <h2 class="title">Histudy All Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="rbt-portfolio-filter filter-tab-button text-center nav nav-tabs" id="rbt-myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true"><span class="filter-text">All
                        Course</span> <span class="course-number">04</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="false"><span
                        class="filter-text">Featured</span> <span class="course-number">02</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button" role="tab" aria-controls="popular" aria-selected="false"><span
                        class="filter-text">Popular</span> <span class="course-number">03</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button" role="tab" aria-controls="trending" aria-selected="false"><span
                        class="filter-text">Trending</span> <span class="course-number">03</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button" role="tab" aria-controls="latest" aria-selected="false"><span
                        class="filter-text">Latest</span> <span class="course-number">04</span></button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content mt--60" id="rbt-myTabContent">

                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                            <div class="row g-5">

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-01.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React Front To Back</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">PHP Beginner + Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>10 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$20</span>
                                                    <span class="off-price">$43</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-03.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (4 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>14 Lessons</li>
                                                <li><i class="feather-users"></i>26 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$23</span>
                                                    <span class="off-price">$45</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-04.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (3 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Langiage Club</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$40</span>
                                                    <span class="off-price">$86</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                            </div>
                        </div>

                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="row g-5">
                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-05.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-06.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Langiage Club</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$145</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                            <div class="row g-5">
                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-01.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>23 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-06.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Langiage Club</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>30 Lessons</li>
                                                <li><i class="feather-users"></i>45 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-05.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (123 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Language Academy Course</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>50 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$56</span>
                                                    <span class="off-price">$77</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                            <div class="row g-5">
                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$75</span>
                                                    <span class="off-price">$85</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-03.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Langiage Club</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$45</span>
                                                    <span class="off-price">$65</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-04.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Language Academy Course</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$85</span>
                                                    <span class="off-price">$95</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-05.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Learning Language School</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>45 Lessons</li>
                                                <li><i class="feather-users"></i>56 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                            </div>
                        </div>

                        <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="row g-5">
                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Angular Zero to Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>50 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$45</span>
                                                    <span class="off-price">$65</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-03.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">English Langiage Club</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$85</span>
                                                    <span class="off-price">$95</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-04.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Language Academy Course</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$95</span>
                                                    <span class="off-price">$105</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Course  -->

                                <!-- Start Single Course  -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{ route('courseDetails') }}">
                                                <img src="{{ asset('assets/images/course/course-online-05.jpg') }}" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
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
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">Learning Language School</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn
                                                    More<i class="feather-arrow-right"></i></a>
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
        </div>
    </div>
    <!-- End Course Area  -->

    <div class="rbt-events-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">Our Events</span>
                        <h2 class="title">Histudy Events</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse radius-round" href="#">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">VIEW ALL EVENTS</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('eventDetails') }}">
                                <img src="{{ asset('assets/images/event/grid-type-01.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-calendar"></i>11 Jan, 2024</li>
                                <li><i class="feather-map-pin"></i>IAC Building</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">International Education Fair 2024</a></h4>
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
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('eventDetails') }}">
                                <img src="{{ asset('assets/images/event/grid-type-02.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Vancouver</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">Painting Art Contest 2020</a></h4>

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
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('eventDetails') }}">
                                <img src="{{ asset('assets/images/event/grid-type-03.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Paris</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}">Histudy Education Fair 2024</a></h4>

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
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('eventDetails') }}">
                                <img src="{{ asset('assets/images/event/grid-type-04.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>IAC Building</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="{{ route('eventDetails') }}"> Elegant Light Box Paper Cut Dioramas</a></h4>

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
                <!-- End Single Event  -->
            </div>
        </div>
    </div>

    <div class="rbt-team-area bg-gradient-8 rbt-section-gap">
        <div class="container">
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-white-opacity">Our Instructor</span>
                        <h2 class="title color-white">Expert Instructor</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn hover-icon-reverse radius-round btn-white" href="#">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">BECAME A INSTRUCTOR</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-05.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-09.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-03.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-07.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-01.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-02.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-04.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-06.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-08.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="rbt-team-modal-thumb nav nav-tabs">
                        <a class="rbt-team-thumbnail" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-10.jpg') }}" alt="Testimonial Images">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Team  -->

            </div>

            <div class="rbt-team-modal modal fade rbt-modal-default" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="inner">
                                <div class="row g-5 row--30 align-items-center">
                                    <div class="col-lg-4">
                                        <div class="rbt-team-thumbnail">
                                            <div class="thumb">
                                                <img class="w-100" src="{{ asset('assets/images/team/team-09.jpg') }}" alt="Testimonial Images">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="rbt-team-details">
                                            <div class="author-info">
                                                <h4 class="title">Mames Mary</h4>
                                                <span class="designation theme-gradient">English Teacher</span>
                                                <span class="team-form">
                                        <i class="feather-map-pin"></i>
                                        <span class="location">CO Miego, AD,USA</span>
                                                </span>
                                            </div>
                                            <p class="mb--15">You can run Histudy easily. Any School, University, College can be use this histudy education template for their educational purpose. A university can be success you.</p>

                                            <p>Run their online leaning management system by histudy education template any where and time.</p>
                                            <ul class="social-icon social-default mt--20 justify-content-start">
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
                                                <li>
                                                    <a href="https://www.linkdin.com/">
                                                        <i class="feather-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="rbt-information-list mt--25">
                                                <li>
                                                    <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                                </li>
                                                <li>
                                                    <a href="mailto:hello@example.com"><i
                                                class="feather-mail"></i>example@gmail.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-circle-shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            <h2 class="title">People like histudy education. <br /> No joking - here’s the proof!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-animation-wrapper mt--50">
            <div class="scroll-animation scroll-right-left">

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-04.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Hannah R. Sutton</h5>
                                    <span>Executive Chairman <i>@ Facebook</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-05.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Pearl B. Hill</h5>
                                    <span>Chairman SR <i>@ Facebook</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mandy F. Wood</h5>
                                    <span>SR Designer <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-07.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mildred W. Diaz</h5>
                                    <span>Executive Officer <i>@ Yelp</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-08.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Christopher H. Win</h5>
                                    <span>Product Designer <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>

        <div class="scroll-animation-wrapper mt--30">
            <div class="scroll-animation scroll-left-right">

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-04.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Hannah R. Sutton</h5>
                                    <span>Executive Chairman <i>@ Facebook</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-05.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Pearl B. Hill</h5>
                                    <span>Chairman SR <i>@ Facebook</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mandy F. Wood</h5>
                                    <span>SR Designer <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-07.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Mildred W. Diaz</h5>
                                    <span>Executive Officer <i>@ Yelp</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/client-08.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Christopher H. Win</h5>
                                    <span>Product Designer <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
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
                                <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <a class="rbt-btn-link" href="#">Read Project Case Study<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>
    </div>

    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area bg-color-white rbt-section-gapBottom">
        <div class="container">
            <div class="row mb--30 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">Our Blog</span>
                        <h2 class="title">Histudy Blog</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse radius-round" href="{{ route('blog') }}">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">VIEW ALL POST</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15">
                <!-- Start Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 height-330 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-01.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a href="{{ route('blogDetails') }}">React</a></h3>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-02.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('blogDetails') }}">Why Is Education So Famous?</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-03.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('blogDetails') }}">Difficult Things About Education.</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="{{ route('blogDetails') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-04.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('blogDetails') }}">Education Is So Famous, But Why?</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('blogDetails') }}">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-gradient-6 rbt-call-to-action-5">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rbt-cta-5">
                            <div class="content">
                                <h1 class="title">Download our mobile app, start learning today</h1>
                                <p>Includes all Course && Features</p>
                                <div class="rbt-button-group justify-content-start">
                                    <a class="rbt-btn btn-gradient" href="#">Get Bundle</a>
                                    <a class="rbt-btn btn-border" href="#">See Features</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-images">
            <img src="{{ asset('assets/images/icons/three-shape.png') }}" alt="Shape Images">
        </div>
    </div>
    <!-- End CallTo Action Area  -->

@endsection