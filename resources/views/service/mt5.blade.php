@extends('layout.layout')

@php
    $footer = 'true';
    $header = 'true';
    $topToBottom = 'true';
@endphp

@section('content')
    <style>
        .split-wrapper {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .card-hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            padding: 50px;
        }

        .card-hover:hover {
            transform: translateY(-5px);
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
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <div class="section-title text-center">
                            <div id="animatedHeading" class="rbt-elements-area">
                                <h2 class="title">MetaTrader 5
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">(MT5)</b>
                                                <b class="is-hidden theme-gradient">Precision. Speed. Control.</b>
                                                <b class="is-hidden theme-gradient">Next-Level Trading Starts with MT5</b>
                                            </span>
                                        </span>
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">MT5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-split-area bg-color-white overflow-hidden" style="padding-top:30px;" data-sal-delay="0"
        data-sal="slide-up" data-sal-duration="800">
        <div class="wrapper">
            <div class="rbt-splite-style">
                <div class="split-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12 col-xl-12 col-12">
                            <div class="split-inner">
                                <div class="shape">
                                    <img src="{{ asset('assets/images/course/category5.png') }}" style="border-radius: 8px;"
                                        alt="Shape Images">
                                </div>
                                <h5 class="description sal-animate" data-sal="slide-up" data-sal-duration="400"
                                    data-sal-delay="300"> MetaTrader 5 (MT5) is the next-generation trading platform built
                                    for serious traders who demand speed, flexibility, and precision.
                                </h5>
                                <h5 class="description sal-animate" data-sal="slide-up" data-sal-duration="400"
                                    data-sal-delay="300">
                                    Designed to handle
                                    global markets with ease, MT5 offers a seamless trading experience across all your
                                    devices.
                                </h5>
                                <h5>
                                    — empowering you to stay ahead, wherever opportunity strikes —
                                </h5>
                                <!-- Start List Style  -->
                                <div class="col-lg-6 col-md-8 col-12"
                                    style="margin-left: auto;margin-right:auto; padding-top:50px;">
                                    <div class="bg-gradient-7 rbt-shadow-box">
                                        <ul class="plan-offer-list rbt-list-white-opacity ">
                                            <li class="color-white">
                                                <i class="feather-check"></i> Multi-Asset Trading
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> 21 Timeframes & Advanced Charting
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> One-Click Trading
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> Powerful Strategy Tester
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> Mobile & Web Trading
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End List Style  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-tab-area bg-color-white " data-sal-delay="0" data-sal="slide-up" data-sal-duration="800">
        <div class="container">
            <div class="row row row--30 align-items-center">
                <div class="col-md-8 col-lg-7 col-xl-6 mt_md--40 mt_sm--40 order-2 order-lg-1"
                    style="margin-left: auto; margin-right:auto;">
                    <div class="rbt-default-tab" style="box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); border-radius:20px;">
                        <ul class="nav nav-tabs tab-button" role="tablist"
                            style=" border-bottom: 1px solid rgb(236, 233, 233);">
                            <li class="nav-item tabs__tab " role="presentation">

                                <button class="nav-link active" id="home-tab-5" data-bs-toggle="tab"
                                    data-bs-target="#android" type="button" role="tab" aria-controls="android"
                                    aria-selected="true">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/android.png') }}" width="45px"
                                            height="45px" alt="Icons Images" style="padding: 10px;">Android
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item tabs__tab " role="presentation">
                                <button class="nav-link" id="home-tab-5" data-bs-toggle="tab" data-bs-target="#windows"
                                    type="button" role="tab" aria-controls="windows" aria-selected="true">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/windows.png') }}" width="45px"
                                            height="45px" alt="Icons Images" style="padding: 10px;">Windows
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item tabs__tab " role="presentation">
                                <button class="nav-link" id="home-tab5" data-bs-toggle="tab" data-bs-target="#Mac"
                                    type="button" role="tab" aria-controls="Mac" aria-selected="false">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/mac-os-logo.png') }}" width="45px"
                                            height="45px" alt="Icons Images" style="padding: 10px;">Mac
                                    </div>
                                </button>
                            </li>
                        </ul>
                        <div class="rainbow-tab-content tab-content" style="border-radius: 0 0 20px 20px;">
                            <div class="tab-pane fade show active" id="android" role="tabpanel"
                                aria-labelledby="android" style="text-align: center;">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><img
                                                src="{{ asset('assets/images/icons/android-light.png') }}" width="45px"
                                                height="45px" alt="Icons Images" style="padding: 10px;"></i></span>
                                    </span>
                                </a>
                            </div>

                            <div class="tab-pane fade" id="windows" role="tabpanel" aria-labelledby="windows"
                                style="text-align: center;">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><img
                                                src="{{ asset('assets/images/icons/windows-light.png') }}" width="45px"
                                                height="45px" alt="Icons Images" style="padding: 10px;"></i></span>
                                    </span>
                                </a>
                            </div>

                            <div class="tab-pane fade" id="Mac" role="tabpanel" aria-labelledby="Mac"
                                style="text-align: center;">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><img
                                                src="{{ asset('assets/images/icons/apple-light.png') }}" width="45px"
                                                height="45px" alt="Icons Images" style="padding: 10px;"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Course Area -->
    <div class="rbt-course-area rbt-section-gapBottom rbt-section-gap">
        <div class="container">
            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="0" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 style_2 card-hover">
                        <div class="rbt-card-body">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/mt5-1.png') }}" width="60px" height="60px"
                                    alt="Icons Images" style="margin-bottom: 20px;">
                            </div>
                            <h5 class="rbt-card-title">Automated Trading and Expert Signals
                            </h5>
                            <p class="rbt-card-text" style="font-size: 18px;">Maximize your strategy with MT5’s built-in
                                support for automated
                                trading and professional forex trading signals. Choose from thousands of verified signal
                                providers in the MetaTrader Market and automatically mirror the trades of top-performing
                                professionals. </p>
                            <br />
                            <p class="rbt-card-text" style="font-size: 18px;">
                                You can also explore and purchase over 2,000 expert advisors (EAs) and
                                technical indicators to customize and automate your trading experience.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="0" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 style_2 card-hover">
                        <div class="rbt-card-body">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/mt5-2.png') }}" width="60px" height="60px"
                                    alt="Icons Images" style="margin-bottom: 20px;">
                            </div>
                            <h5 class="rbt-card-title">Stay Ahead with Real-Time Alerts
                            </h5>
                            <p class="rbt-card-text" style="font-size: 18px;">Never miss a market opportunity. MT5’s
                                built-in alert and news system keeps you informed of key economic events and market
                                movements—no external calendar needed. </p>
                            <br />
                            <p class="rbt-card-text" style="font-size: 18px;">Get real-time updates directly in your
                                trading terminal to help you make timely and informed decisions.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 style_2 card-hover">
                        <div class="rbt-card-body">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/mt5-3.png') }}" width="60px" height="60px"
                                    alt="Icons Images" style="margin-bottom: 20px;">
                            </div>
                            <h5 class="rbt-card-title">Enhanced Performance and Trading Tools
                            </h5>
                            <p class="rbt-card-text" style="font-size: 18px;">MT5 offers a significant edge over MT4,
                                including faster trade execution, tighter spreads, and superior charting capabilities.</p>
                            <br />
                            <p class="rbt-card-text" style="font-size: 18px;"> Analyze market trends across 21 timeframes,
                                take advantage of advanced order types, and execute your strategy with precision using a
                                more flexible and responsive trading environment.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 style_2 card-hover">
                        <div class="rbt-card-body">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icons/mt5-4.png') }}" width="60px" height="60px"
                                    alt="Icons Images" style="margin-bottom: 20px;">
                            </div>
                            <h5 class="rbt-card-title">Trade Anywhere, Anytime
                            </h5>
                            <p class="rbt-card-text" style="font-size: 18px;">Trade seamlessly across desktop, mobile, and
                                web with MT5. Whether you're at home or on the move, MT5 ensures uninterrupted access to the
                                markets. </p>
                            <br />
                            <p class="rbt-card-text" style="font-size: 18px;">The MT5 mobile app delivers full trading
                                functionality on smartphones and tablets, while MT5 WebTrader lets you trade instantly from
                                any browser without downloads or installations. Start trading in minutes—whether you're a
                                new client or upgrading from MT4.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-03 style_2 card-horizontal card-hover"
                        style="grid-template-columns: 5fr 1fr;">
                        <div class="rbt-card-body">
                            <h6>
                                <span class="theme-gradient">Seamless Integration</span>
                            </h6>

                            <h5 class="rbt-card-title">Advanced Market Depth with Lucky Star Integration</h5>
                            <p class="rbt-card-text" style="font-size: 18px;">Through its deep integration with Lucky
                                Star,
                                MT5 provides direct access to institutional-grade liquidity. View market depth in real time
                                and identify key price levels where large volumes are positioned. </p>
                            <br />
                            <p class="rbt-card-text" style="font-size: 18px;"> Paired with MT5’s dual accounting modes
                                (hedging and netting), this platform delivers advanced risk management tools tailored for
                                precision trading.

                            </p>
                        </div>

                        <div class="rbt_card-img-wrap blend-top">
                            <div class="rbt-card-img">
                                <img src="{{ asset('assets/images/service/mt5-1.jpg') }}" alt="mt5-1"
                                    style="max-width: unset;border-radius: 10px 10px 0 0;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div>
        </div>
    </div>
    <!-- End Course Area -->

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area bg-gradient-8" style="padding: 30px 0;">
        <div class="rbt-callto-action rbt-cta-default style-6">
            <div class="container">
                <div class="row g-5 align-items-center content-wrapper">
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="inner">
                            <div class="content text-start">
                                <h2 class="title color-white mb--0">Trade With Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="inner-content text-start">
                            <p class="color-white"> Start Your Trading Journey with Lucky Star Today! Join our community of
                                successful traders and
                                experience the power of our advanced trading platform.
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="call-to-btn text-start text-xl-end">
                            <a class="rbt-btn btn-white hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Try It Now</span>
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
@endsection
