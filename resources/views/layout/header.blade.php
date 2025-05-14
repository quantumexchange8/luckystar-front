<!-- Start Header Area -->
<style>
    .mainmenu-nav>.mainmenu>li>a {
        color: black;
    }

    .popup-mobile-menu {
        background: none;
    }

    .my_switcher {
        z-index: 10000;
    }

    .nav-category-item {
        border-radius: 4px;
        background-color: blueviolet;
    }

    .nav-category-item .image {
        &::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 30%;
            background: rgba(0, 0, 0, 0.3);
            pointer-events: none;
            z-index: 1;
            border-radius: 0px 4px 4px 0px;
        }
    }

    .nav-category-item .image img {
        left: auto;
        right: 0;
        width: 30%;
        border-radius: 0px 4px 4px 0px;
    }

    .thumbnail>a {
        color: white;
        position: relative;
        z-index: 2;
    }

    .thumbnail>a:hover {
        color: rgb(255, 231, 231);
    }

    .thumbnail>a>i {
        color: white;
    }

    .rbt-short-title {
        font-size: 16px;
        padding-bottom: 5px;
        color: blueviolet;
    }
</style>

<header class="rbt-header rbt-header-4 ">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top -->
    <div
        class="rbt-header-top rbt-header-top-1 header-space-betwween bg-not-transparent bg-color-darker top-expended-activation">
        <div class="container-fluid">
            <div class="top-expended-wrapper">
                <div class="top-expended-inner rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left d-none d-xl-block">
                        <div class="rbt-header-content">
                            <!-- Start Header Information List  -->
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i>100k <span
                                                class="d-none d-xxl-block">Followers</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i>500k <span
                                                class="d-none d-xxl-block">Followers</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Header Information List  -->
                        </div>
                    </div>
                    <div class="rbt-header-sec-col rbt-header-center">
                        <div class="rbt-header-content justify-content-start justify-content-xl-center">
                            <div class="header-info">
                                <div class="rbt-header-top-news">
                                    <div class="inner">
                                        <div class="content">
                                            <span
                                                class="rbt-badge variation-02 bg-color-primary color-white radius-round">Hot</span>
                                            <span class="news-text"><img
                                                    src="{{ asset('assets/images/icons/hand-emojji.svg') }}"
                                                    alt="Hand Emojji Images"> Intro price. Get Histudy for Big Sale -95%
                                                off.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                        <div class="rbt-header-content justify-content-start justify-content-lg-end">
                            <div class="header-info d-none d-xl-block">
                                <ul class="social-share-transparent">
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
                                </ul>
                            </div>

                            <div class="rbt-separator d-none d-xl-block"></div>

                            <div class="header-info">
                                <ul class="rbt-dropdown-menu switcher-language">
                                    <li class="has-child-menu">
                                        <a href="#">
                                            <img class="left-image" src="{{ asset('assets/images/icons/en-us.png') }}"
                                                alt="Language Images">
                                            <span class="menu-item">English</span>
                                            <i class="right-icon feather-chevron-down"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">
                                                    <img class="left-image"
                                                        src="{{ asset('assets/images/icons/fr.png') }}"
                                                        alt="Language Images">
                                                    <span class="menu-item">Français</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="left-image"
                                                        src="{{ asset('assets/images/icons/de.png') }}"
                                                        alt="Language Images">
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
                        <button class="topbar-expend-button rbt-round-btn"><i class="feather-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <div class="rbt-header-wrapper header-space-betwween bg-color-white header-sticky">
        <div class="container-fluid">
            <div class="mainbar-row rbt-navigation-start align-items-center">
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="#">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Education Logo Images">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="#">
                            <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}"
                                alt="Education Logo Images">
                        </a>
                    </div>
                </div>
                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('Home') }}">Home</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Services <i class="feather-chevron-down"></i></a>
                                <!-- Start Mega Menu  -->
                                <div class="rbt-megamenu grid-item-2" style="width: 420px;">
                                    <div class="wrapper">
                                        <div class="row row--15">
                                            <div class="col-lg-12 col-xl-12 col-xxl-12 single-mega-item">
                                                <div class="mega-category-item">
                                                    <h2 class="rbt-short-title">TRADING SOFTWARE</h3>
                                                        <!-- Start Single Category  -->
                                                        <div class="nav-category-item bg-gradient-7">
                                                            <div class="thumbnail">
                                                                <div class="image"><img
                                                                        src="{{ asset('assets/images/course/category2.jpg') }}"
                                                                        alt="Mobile App"></div>
                                                                <a href="{{ route('serviceMobileApp') }}">
                                                                    <span>Mobile Application</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Category  -->

                                                        <h2 class="rbt-short-title" style="padding-top:2px;">TRADING
                                                            PLATFORM</h3>
                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item bg-gradient-7">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/course/category5.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceMT5') }}">
                                                                        <span>Meta Trader 5 (MT5)</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Category  -->

                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item bg-gradient-7">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/course/category4.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceMT4') }}">
                                                                        <span>Meta Trader 4 (MT4)</span>
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
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('about') }}">About</a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
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
                                <a href="">
                                    <img src="{{ asset('assets/images/course/course-online-01.jpg') }}"
                                        alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="">React Js</a>
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
                                <a href="">
                                    <img src="{{ asset('assets/images/course/course-online-02.jpg') }}"
                                        alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="">Java Program</a>
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
                                <a href="">
                                    <img src="{{ asset('assets/images/course/course-online-03.jpg') }}"
                                        alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="">Web Design</a>
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
                                <a href="">
                                    <img src="{{ asset('assets/images/course/course-online-04.jpg') }}"
                                        alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="">Web Design</a>
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
    <div class="inner-wrapper" style="color: black;">
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
                            <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}"
                                alt="Education Logo Images">
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
                    <a href="{{ route('Home') }}">Home <i class="feather-chevron-down"></i></a>
                </li>

                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Services <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-4">
                        <div class="wrapper">
                            <div class="row row--15">
                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <div class="mega-category-item">
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img
                                                        src="{{ asset('assets/images/course/category2.jpg') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceMobileApp') }}">
                                                    <span>Mobile Application</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img
                                                        src="{{ asset('assets/images/course/category5.png') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceMT5') }}">
                                                    <span>MetaTrader 5</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->

                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item">
                                            <div class="thumbnail">
                                                <div class="image"><img
                                                        src="{{ asset('assets/images/course/category4.png') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceMT4') }}">
                                                    <span>MetaTrader 4</span>
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
                    <a href="{{route('about')}}">About <i class="feather-chevron-down"></i></a>

                </li>
            </ul>
        </nav>

    </div>
</div>
