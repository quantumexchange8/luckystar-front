@extends('layout.layout')

@php
     $topToBottom='true';
@endphp

@section('content')

    <!-- Start Side Vav -->
    <x-sideVav/>
    <!-- End Side Vav -->

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area -->
        <div class="rbt-banner-area rbt-banner-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pb--120 pt--70">
                        <div class="content">
                            <div class="inner">
                                <div class="rbt-new-badge rbt-new-badge-one">
                                    <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
                                </div>

                                <h1 class="title">
                                    Build The Skills <br> To Drive Your Career.
                                </h1>
                                <p class="description">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                    <strong>Velit
                                        officia consequat.</strong>
                                </p>
                                <div class="slider-btn">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">View Course</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="shape-wrapper" id="scene">
                                <img src="{{ asset('assets/images/banner/banner-01.png') }}" alt="Hero Image">
                                <div class="hero-bg-shape-1 layer" data-depth="0.4">
                                    <img src="{{ asset('assets/images/shape/shape-01.png') }}" alt="Hero Image Background Shape">
                                </div>
                                <div class="hero-bg-shape-2 layer" data-depth="0.4">
                                    <img src="{{ asset('assets/images/shape/shape-02.png') }}" alt="Hero Image Background Shape">
                                </div>
                            </div>

                            <div class="banner-card pb--60 mb--50 swiper rbt-dot-bottom-center banner-swiper-active">
                                <div class="swiper-wrapper">

                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>-40%</span>
                                                        <span>Off</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader
                                                    will be distracted.</p>
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
                                                        <span class="current-price">$70</span>
                                                        <span class="off-price">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/classic-lms-01.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>-40%</span>
                                                        <span>Off</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader
                                                    will be distracted.</p>
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
                                                        <span class="current-price">$70</span>
                                                        <span class="off-price">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('courseDetails') }}">
                                                    <img src="{{ asset('assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>-40%</span>
                                                        <span>Off</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a href="{{ route('courseDetails') }}">React</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader
                                                    will be distracted.</p>
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
                                                        <span class="current-price">$70</span>
                                                        <span class="off-price">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link" href="{{ route('courseDetails') }}">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                </div>
                                <div class="rbt-swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <div class="rbt-categories-area bg-color-white rbt-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">CATEGORIES</span>
                            <h2 class="title">Explore Top Courses Caterories <br /> That Change Yourself</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 text-center" href="{{ route('courseFilterOneToggle') }}">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/category/web-design.png') }}" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">Web Design</h5>
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
                                    <h5 class="title">Graphic Design</h5>
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
                                    <h5 class="title">Personal Development</h5>
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
                                    <h5 class="title">IT and Software</h5>
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
                                    <h5 class="title">Sales Marketing</h5>
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
                                    <h5 class="title">Art & Humanities</h5>
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
                                    <h5 class="title">Mobile Application</h5>
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
                                    <h5 class="title">Finance & Accounting</h5>
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

        <!-- Start Course Area -->
        <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-secondary-opacity">Top Popular Course</span>
                            <h2 class="title">Histudy Course student <br /> can join with us.</h2>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">
                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('courseDetails') }}">
                                    <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                    <div class="rbt-badge-3 bg-white">
                                        <span>-50%</span>
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
                    <!-- End Single Course  -->

                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('courseDetails') }}">
                                    <img src="{{ asset('assets/images/course/course-02.jpg') }}" alt="Card image">
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
                    <!-- End Single Course  -->

                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('courseDetails') }}">
                                    <img src="{{ asset('assets/images/course/course-03.jpg') }}" alt="Card image">
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
                    <!-- End Single Course  -->
                </div>
                <!-- End Card Area -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="load-more-btn mt--60 text-center">
                            <a class="rbt-btn btn-gradient btn-lg hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Load More Course (40)</span>
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
        <div class="rbt-about-area bg-color-white rbt-section-gapTop pb_md--80 pb_sm--80 about-style-1">
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
        <!-- End About Area  -->

        <!-- Start Call To Action  -->
        <div class="rbt-callto-action-area mt_dec--half">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="rbt-callto-action callto-action-default bg-color-white rbt-radius shadow-1">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-5">
                                    <div class="inner">
                                        <div class="rbt-category mb--20">
                                            <a href="#">New Collection</a>
                                        </div>
                                        <h4 class="title mb--15">Online Courses from Histudy</h4>
                                        <p class="mb--15">Top instructors from around the world</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-7">
                                    <div class="video-popup-wrapper mt_lg--10 mt_md--20 mt_sm--20">
                                        <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/video-01.jpg') }}" alt="Video Images">
                                        <a class="rbt-btn rounded-player-2 sm-size popup-video position-to-top with-animation" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                            <span class="play-icon"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rbt-callto-action callto-action-default bg-color-white rbt-radius shadow-1">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="inner">
                                        <div class="rbt-category mb--20">
                                            <a href="#">Top Teacher</a>
                                        </div>
                                        <h4 class="title mb--10">Free Online Courses from Histudy School To Education</h4>
                                        <p class="mb--15">Top instructors from around the world</p>
                                        <div class="read-more-btn">
                                            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm" href="#">
                                                <span data-text="Join Now">Join Now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Call To Action  -->

        <!-- Start Counterup Area  -->
        <div class="rbt-counterup-area bg-color-extra2 rbt-section-gapBottom default-callto-action-overlap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Why Choose Us</span>
                            <h2 class="title">Creating A Community Of <br /> Life Long Learners.</h2>
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
        <!-- End Counterup Area  -->

        <!-- Start Testimonial Area   -->
        <div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb--10">
                                <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                                <h2 class="title">People like histudy education. <br /> No joking - here’s the proof!
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-animation-wrapper no-overlay mt--50">
                <div class="scroll-animation scroll-right-left">

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-01.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Martha Maldonado, <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/google.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-02.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Michael D., <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/yelp.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-03.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Valerie J., <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-04.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Hannah R., <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/bing.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-05.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Pearl B. Hill, <span>Marketing</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-01.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Mandy F. Wood, <span>SR Designer</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/hubs.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-07.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Mildred W. Diaz, <span>Executive</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/bing.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-08.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Christopher, <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-odd">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/yelp.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Fatima, <span>Child</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
            </div>

            <div class="scroll-animation-wrapper no-overlay mt--30">
                <div class="scroll-animation scroll-left-right">

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-01.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Martha Maldonado, <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/google.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-02.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Michael D., <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/yelp.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-03.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Valerie J., <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/bing.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-04.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Hannah R., <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/hubs.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-05.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Pearl B. Hill, <span>Marketing</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/yelp.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-01.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Mandy F. Wood, <span>SR Designer</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/bing.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-07.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Mildred W. Diaz, <span>Executive</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-08.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Christopher, <span>CEO</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->

                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20 bg-theme-gradient-even">
                        <div class="rbt-testimonial-box style-2">
                            <div class="inner">
                                <div class="icons">
                                    <img src="{{ asset('assets/images/icons/yelp.png') }}" alt="Clint Images">
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                    <div class="clint-info-wrapper">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="Clint Images">
                                        </div>
                                        <div class="client-info">
                                            <h5 class="title">Fatima, <span>Child</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                </div>
            </div>
        </div>
        <!-- End Testimonial Area   -->

        <!-- Start Event Area  -->
        <div class="rbt-event-area rbt-section-gap bg-gradient-3">
            <div class="container">
                <div class="row mb--55">
                    <div class="section-title text-center">
                        <span class="subtitle bg-white-opacity">STIMULATED TO TAKE PART IN?</span>
                        <h2 class="title color-white">Upcoming Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper event-activation-1 rbt-arrow-between rbt-dot-bottom-center pb--60 icon-bg-primary">

                            <div class="swiper-wrapper">
                                <!-- Start Single Slide  -->
                                <div class="swiper-slide">
                                    <div class="single-slide">
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
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
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
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
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
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
                                        <div class="rbt-card event-grid-card variation-01 rbt-hover">
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
        <div class="rbt-team-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Our Teacher</span>
                            <h2 class="title">Whose Inspirations You</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">

                    <div class="col-lg-7">
                        <!-- Start Tab Content  -->
                        <div class="rbt-team-tab-content tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="team-tab1" role="tabpanel" aria-labelledby="team-tab1-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-01.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Mames Mary</h4>
                                            <span class="designation theme-gradient">English Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
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
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab2" role="tabpanel" aria-labelledby="team-tab2-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-02.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Robert Song</h4>
                                            <span class="designation theme-gradient">Math Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Education The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
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
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab3" role="tabpanel" aria-labelledby="team-tab3-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-03.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">William Susan</h4>
                                            <span class="designation theme-gradient">React Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>React The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
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
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab4" role="tabpanel" aria-labelledby="team-tab4-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-04.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Soseph Sara</h4>
                                            <span class="designation theme-gradient">Web Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
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
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab5" role="tabpanel" aria-labelledby="team-tab5-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-05.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Thomas Dal</h4>
                                            <span class="designation theme-gradient">Graphic Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
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
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="team-tab6" role="tabpanel" aria-labelledby="team-tab6-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-06.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">Christopher Lisa</h4>
                                            <span class="designation theme-gradient">English Teacher</span>
                                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                        </div>
                                        <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
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
                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                            </li>
                                            <li>
                                                <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="top-circle-shape"></div>
                        </div>
                        <!-- End Tab Content  -->
                    </div>

                    <div class="col-lg-5">
                        <!-- Start Tab Nav  -->
                        <ul class="rbt-team-tab-thumb nav nav-tabs" id="myTab" role="tablist">
                            <li>
                                <a class="active" id="team-tab1-tab" data-bs-toggle="tab" data-bs-target="#team-tab1" role="tab" aria-controls="team-tab1" aria-selected="true">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-01.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab2-tab" data-bs-toggle="tab" data-bs-target="#team-tab2" role="tab" aria-controls="team-tab2" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-02.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab3-tab" data-bs-toggle="tab" data-bs-target="#team-tab3" role="tab" aria-controls="team-tab3" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-03.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a id="team-tab4-tab" data-bs-toggle="tab" data-bs-target="#team-tab4" role="tab" aria-controls="team-tab4" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-04.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab5-tab" data-bs-toggle="tab" data-bs-target="#team-tab5" role="tab" aria-controls="team-tab5" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-05.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a id="team-tab6-tab" data-bs-toggle="tab" data-bs-target="#team-tab6" role="tab" aria-controls="team-tab6" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/team/team-06.jpg') }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <!-- End Tab Content  -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Blog Style -->
        <div class="rbt-rbt-blog-area rbt-section-gap bg-color-extra2">
            <div class="container">
                <div class="row g-5 align-items-center mb--30">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-title">
                            <span class="subtitle bg-pink-opacity">Blog Post</span>
                            <h2 class="title">Post Popular Post.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="read-more-btn text-start text-md-end">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('blog') }}">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">See All Articles</span>
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

        <div class="rbt-newsletter-area newsletter-style-2 bg-color-primary rbt-section-gap">
            <div class="container">
                <div class="row row--15 align-items-center">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <div class="section-title text-center">
                                <span class="subtitle bg-white-opacity">Get Latest Histudy Update</span>
                                <h2 class="title color-white"><strong>Subscribe</strong> Our Newsletter</h2>
                                <p class="description color-white mt--20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam explicabo sit est eos earum reprehenderit inventore nam autem corrupti rerum!</p>
                            </div>
                            <form action="#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Enter Your E-Email">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Subscribe</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </form>
                            <span class="note-text color-white mt--20">No ads, No trails, No commitments</span>

                            <div class="row row--15 mt--50">
                                <!-- Start Single Counter -->
                                <div class="col-lg-3 offset-lg-3 col-md-6 col-sm-6 single-counter">
                                    <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter color-white"><span class="odometer" data-count="500">00</span>
                                                </h3>
                                                <h5 class="title color-white">Successfully Trained</h5>
                                                <span class="subtitle color-white">Learners &amp; counting</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-lg-3 col-md-6 col-sm-6 single-counter mt_mobile--30">
                                    <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                        <div class="inner">
                                            <div class="content">
                                                <h3 class="counter color-white"><span class="odometer" data-count="100">00</span>
                                                </h3>
                                                <h5 class="title color-white">Certification Students</h5>
                                                <span class="subtitle color-white">Online Course</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Footer aera -->
        <footer class="rbt-footer footer-style-1">
            <div class="footer-top">
                <div class="container">
                    <div class="row row--15 mt_dec--30">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
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

                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
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
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
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
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get Contact</h5>
                                <ul class="ft-link">
                                    <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:hr@example.com">pixcels@example.com</a></li>
                                    <li><span>Location:</span> North America, USA</li>
                                </ul>
                                <ul class="social-icon social-default icon-naked justify-content-start mt--20">
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
            </div>
        </footer>
        <!-- End Footer aera -->

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

    </main>
    <!-- End Page Wrapper Area -->
     
@endsection