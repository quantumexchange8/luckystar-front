@extends('layout.layout')

@php
    $footer = 'true';
    $header = 'true';
    $topToBottom = 'true';
@endphp

@section('content')
    <style>
        .badge-free {
            position: absolute;
            background: #28a745;
            color: white;
            font-size: 10px;
            font-weight: bold;
            padding: 2px 6px;
            border-radius: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!-- Start Side Vav -->

    <x-sideVav />
    <!-- End Side Vav -->

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal="slide-up" data-sal-duration="600">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Mobile App</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Mobile App</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-admission-area bg-color-white rbt-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="600">
                    <div class="video-popup-wrapper">
                        <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/video-04.jpg') }}"
                            alt="Video Images">
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="300" data-sal="slide-left" data-sal-duration="600">
                    <div class="addmission-guide-content pl--50 pl_sm--0 pl_md--0 --0">
                        <h3 class="title">Trade Smarter. Invest Better. Anytime, Anywhere.</h3>
                        <p>Step into the world of intelligent investing with our powerful mobile app designed for modern
                            traders. With a sleek interface, robust security, and instant execution, our app empowers you to
                            make informed decisions — wherever you are, whenever you need.</p>
                        <h5>What you can expect?</h5>
                        <div class="col-lg-12 col-md-6 col-12">
                            <ul class="plan-offer-list">
                                <li>
                                    <i class="feather-check"></i> Live Market Data & Charts
                                </li>
                                <li>
                                    <i class="feather-check"></i> Advanced Trading Tools
                                </li>
                                <li>
                                    <i class="feather-check"></i> Secure & Reliable Transactions
                                </li>
                                <li>
                                    <i class="feather-check"></i> Global Market Access
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-counterup-area bg-color-white rbt-section-gap">
        <div class="conter-style-2">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="inner pl--50 pl_sm--0 pl_md--0" data-sal-delay="100" data-sal="slide-left"
                            data-sal-duration="600">
                            <div class="section-title text-start">
                                <span class="subtitle bg-pink-opacity">Why Choose Our App?</span>
                                <h2 class="title">Empowering Traders. <br /> Connecting Opportunities.</h2>
                                <p class="description has-medium-font-size mt--20 mb--0">Join a growing community of
                                    confident investors and smart learners. Whether you're new to trading or sharpening your
                                    skills, our mobile app offers everything you need — all in your pocket.</p>
                            </div>

                            <div class="rbt-feature-wrapper mt--30">

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Flexible Learning Tracks </h6>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-secondary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Anywhere, Anytime Access</h6>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-aperture"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Robust Tools & Support</h6>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6 order-2 order-lg-2">
                        <div class="row row--30">
                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up"
                                data-sal-duration="600">
                                <div class="rbt-counterup rbt-hover-03">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-01.png') }}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="5000">00</span>
                                            </h3>
                                            <span class="subtitle">Active Users &amp; Counting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60" data-sal-delay="300" data-sal="slide-up"
                                data-sal-duration="600">
                                <div class="rbt-counterup rbt-hover-03">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-02.png') }}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="200">00</span>
                                            </h3>
                                            <span class="subtitle">Courses & Strategy Videos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--40" data-sal-delay="500"
                                data-sal="slide-up" data-sal-duration="600">
                                <div class="rbt-counterup rbt-hover-03 transform-sm-none"
                                    data-parallax='{"x": 0, "y": -60}'>
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-03.png') }}"
                                                alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="20000">00</span>
                                            </h3>
                                            <span class="subtitle">Successful Trades Executed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_mobile--40" data-sal-delay="700"
                                data-sal="slide-up" data-sal-duration="600">
                                <div class="rbt-counterup rbt-hover-03 transform-sm-none"
                                    data-parallax='{"x": 0, "y": 60}'>
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-04.png') }}"
                                                alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="10000">00</span>
                                            </h3>
                                            <span class="subtitle">Active Investors Worldwide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area bg-color-extra2">
        <div class="wrapper">
            <div class="container">
                <div class="row" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <div class="col-lg-8">
                        <div class="rbt-cta-5">
                            <div class="content">
                                <h1 class="title">Download Our App & Start Trading Today</h1>
                                <p>Access real-time markets, powerful tools & expert insights — all in one place.</p>
                                <div class="apply-btn">
                                    <a class="rbt-btn btn-gradient radius-round icon-hover" href="#">
                                        <i class="feather-download" style="padding: 5px;"></i>
                                        <span class="btn-text">Download Now</span>
                                    </a>
                                    <span class="badge-free">Free</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <img class="w-lg-100 h-lg-100" src="{{ asset('assets/images/bg/mobileApp-1.png') }}"
                            alt="Mobile App">
                    </div>
                </div>
            </div>
        </div>
        <!-- End CallTo Action Area  -->

        <x-separator />
    @endsection
