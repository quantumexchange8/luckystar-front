@extends('layout.layout')

@php
     $topToBottom='true';
     $header='false';
@endphp

@section('content')

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-default">
        <div class="rbt-sticky-placeholder"></div>

        <div class="rbt-header-wrapper shadow-none bg-color-white header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
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
                                                                <a href="12-{{ route('marketplace') }}"><img src="{{ asset('assets/images/splash/demo/h12.jpg') }}" alt="Demo Images"></a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="title"><a href="12-{{ route('marketplace') }}">Marketplace <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
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
                                <span data-text="Join Us Today">Join Us Today</span>
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
                                                    <a href="12-{{ route('marketplace') }}"><img src="{{ asset('assets/images/splash/demo/h12.jpg') }}" alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="12-{{ route('marketplace') }}">Marketplace <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4>
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

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area -->
        <div class="rbt-banner-area rbt-banner-22">
            <div class="wrapper">
                <div class="container">
                    <div class="inner">
                        <div class="shape-wrapper">
                            <div class="shape-1">
                                <img src="{{ asset('assets/images/shape/w-hello.png') }}" alt="Banner Shape">
                            </div>
                            <div class="shape-2 scene">
                                <span data-depth="1">
                                    <img src="{{ asset('assets/images/shape/w-color-elemt.png') }}" alt="Banner Shape">
                                </span>
                            </div>
                            <div class="shape-3 scene">
                                <span data-depth="1">
                                    <img src="{{ asset('assets/images/shape/w-tools-elemt.png') }}" alt="Banner Shape">
                                </span>
                            </div>
                        </div>
                        <div class="content">
                            <h1 class="title">We’re making an course on <span class="theme-gradient cf_boundary">UX/UI <img id="cursorFollower" class="cursorFollower" src="{{ asset('assets/images/shape/w-cursor.png') }}" alt="Cursor Icon"></span> Advanced</h1>
                            <p class="description">Training, Practice, Portfolio, Certificate, And Successful Career All In One.</p>
                            <form action="#" class="newsletter-form-1 radius-round">
                                <input class="rbt-border" type="email" placeholder="Enter Your Email">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Join Wishlist</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </form>
                            <div class="students">
                                <div class="profile-share">
                                    <a href="#" class="avatar" data-tooltip="Mark Jordan" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/art-stu-1.png') }}" alt="education">
                                    </a>
                                    <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/art-stu-3.png') }}" alt="education">
                                    </a>
                                    <a href="#" class="avatar" data-tooltip="Ava Miller" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/art-stu-2.png') }}" alt="education">
                                    </a>
                                </div>
                                <div>
                                    <h6 class="number">2,364</h6>
                                    <p class="number-title">Students already joined</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="shape-shadow">
                            <img src="{{ asset('assets/images/shape/w-shadow.png') }}" alt="Banner Shadow">
                        </div>
                        <div class="browser">
                            <div class="browser-img">
                                <img src="{{ asset('assets/images/banner/w-banner.png') }}" alt="Banner Brwoser">
                            </div>
                            <video autoplay muted loop>
                                <source src="{{ asset('assets/images/video/wishlist-video-01.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-3 overflow-hidden">
            <div class="shape-gd-1">
                <img data-parallax='{"x": 0, "y": 200}' src="{{ asset('assets/images/shape/footer-gd-01.png') }}" alt="Gradient Shape">
            </div>
            <div class="container">
                <div class="footer-5-top">
                    <div class="text-center section-title-2">
                        <div>
                            <img src="{{ asset('assets/images/shape/w-hello.png') }}" alt="Banner Shape">
                        </div>
                        <h2 class="title mb--30">Exploring Course</h2>
                        <form action="#" class="newsletter-form-1 radius-round">
                            <input class="rbt-border" type="email" placeholder="Enter Your Email">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">Join Wishlist</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <h2 class="big-title">UI/UX Design</h2>
            </div>
            <div class="copyright-area copyright-style-1 pt--20 pb--30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <p class="rbt-link-hover text-center text-lg-start">© 2025 <a href="https://www.pixcelsthemes.com">Pixcels Themes.</a> All Rights Reserved</p>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                            <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="{{ route('privacyPolicy') }}">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer aera -->
    </main>

@endsection