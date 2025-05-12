<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Edubost - University and College HTML Template')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="images/x-icon" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/recoleta-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Styles / Scripts -->

</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen">
    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- Preloader - Start -->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/img/logo/preloader.png') }}" alt="preloader"></div>
            </div>
        </div>
    </div>
    <!-- Preloader - End -->

    <div class="body_wrap">
        <!-- header start -->
        <header id="xb-header-area" class="header-area is-sticky">
            <div class="header-top_wrap">
                <div class="container">
                    <div class="header-top ul_li_between">
                        <div class="xb-help_desk">
                            <img src="{{ asset('assets/img/icon/hero_top-icon.png') }}" alt="">
                            <p>Help Desk : <span>+1 (415) 555‑0132</span></p>
                        </div>
                        <div class="xb-info">
                            <ul class="ul_li align-items-end">
                                <li>Information For :</li>
                                <li><a href="#!">Students</a></li>
                                <li><a href="#!">Faculty</a></li>
                                <li><a href="#!">Alumni</a></li>
                                <li><a href="#!">Research</a></li>
                                <li><a href="#!">Community</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xb-header">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                            <nav class="main-menu collapse navbar-collapse">
                                <ul>
                                    <li class="menu-item-has-children {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}">Home</a>
                                        <ul class="submenu">
                                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a
                                                    href="{{ route('home') }}">University</a></li>
                                            <li><a href="#">College</a></li>
                                            <li><a href="#">High School</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Admission</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#!">Courses</a>
                                        <ul class="submenu">
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">Course Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#!">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="#">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Event</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Event</a></li>
                                                    <li><a href="#">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Team</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Team</a></li>
                                                    <li><a href="#">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Tuition & Fees</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="xb-header-wrap">
                                <div class="xb-header-menu">
                                    <div class="xb-header-menu-scroll">
                                        <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                        <div class="xb-logo-mobile xb-hide-xl">
                                            <a href="{{ route('home') }}" rel="home"><img
                                                    src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a>
                                        </div>
                                        <div class="xb-header-mobile-search xb-hide-xl">
                                            <form role="search" action="#">
                                                <input type="text" placeholder="Search..." name="s"
                                                    class="search-field">
                                                <button class="search-submit" type="submit"><i
                                                        class="far fa-search"></i></button>
                                            </form>
                                        </div>
                                        <nav class="xb-header-nav">
                                            <ul class="xb-menu-primary clearfix">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="{{ route('home') }}">Home</a>
                                                    <ul class="sub-menu">
                                                        <li class="active"><a href="{{ route('home') }}">University</a>
                                                        </li>
                                                        <li><a href="#">College</a></li>
                                                        <li><a href="#">High School</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Admission</a>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#!">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Courses</a></li>
                                                        <li><a href="#">Course Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#!">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">About Us</a></li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                href="#">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="#">Blog</a></li>
                                                                <li class="menu-item"><a href="#">Blog Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                href="#">Event</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="#">Event</a></li>
                                                                <li class="menu-item"><a href="#">Event Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                href="#">Team</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="#">Team</a></li>
                                                                <li class="menu-item"><a href="#">Team Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item"><a href="#">Tuition & Fees</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="xb-header-menu-backdrop"></div>
                            </div>
                        </div>
                        <div class="header-right ul_li">
                            <a class="header-search header-search-btn" href="javascript:void(0);">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 3.75H15" stroke="#170006" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.5 6H12.75" stroke="#170006" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.75 8.625C15.75 12.5625 12.5625 15.75 8.625 15.75C4.6875 15.75 1.5 12.5625 1.5 8.625C1.5 4.6875 4.6875 1.5 8.625 1.5"
                                        stroke="#170006" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16.5 16.5L15 15" stroke="#170006" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Search
                            </a>
                            <div class="language_dropdown dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="flag">
                                        <img src="{{ asset('assets/img/icon/flag.png') }}" alt="USA">
                                    </span>
                                    <span class="name">English</span>
                                </button>
                                <div class="dropdown-menu">
                                    <ul class="unordered_list_block">
                                        <li class="dropdown-item">
                                            <span class="flag">
                                                <img src="{{ asset('assets/img/icon/flag_saudi_arabia.webp') }}"
                                                    alt="Saudi Arabia">
                                            </span>
                                            <span class="name">Arabic</span>
                                        </li>
                                        <li class="dropdown-item">
                                            <span class="flag">
                                                <img src="{{ asset('assets/img/icon/flag_bangladesh.webp') }}"
                                                    alt="Bangladesh">
                                            </span>
                                            <span class="name">Bangali</span>
                                        </li>
                                        <li class="dropdown-item">
                                            <span class="flag">
                                                <img src="{{ asset('assets/img/icon/flag_usa.webp') }}" alt="USA">
                                            </span>
                                            <span class="name">English</span>
                                        </li>
                                        <li class="dropdown-item">
                                            <span class="flag">
                                                <img src="{{ asset('assets/img/icon/flag_portugal.webp') }}"
                                                    alt="Portugal">
                                            </span>
                                            <span class="name">Portuguese</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-bar-mobile side-menu d-lg-none">
                            <a class="xb-nav-mobile" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                        </div>
                    </div>
                </div>
        </header>
        <!-- header end -->

        <!-- header search start -->
        <div class="header-search-form-wrapper">
            <div class="xb-search-close xb-close"></div>
            <div class="header-search-container">
                <form role="search" class="search-form" action="#">
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><i class="far fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="body-overlay"></div>
        <!-- header search end -->

        <main>
            <!-- breadcrumb start -->
            <section class="breadcrumb bg_img ul_li" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
                <div class="container">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title">Admission to edubost</h2>
                        <p class="breadcrumb__desc">Your Pathway to Joining Our Academic Community</p>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- admission start -->
            <section class="admission pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center mt-none-30">
                        <div class="col-xl-5 mt-30">
                            <div class="section-title section-title--md">
                                <span class="sub-title">Our Dedicated instructor</span>
                                <h2 class="title mb-20">experience eedford with excellent academics and endless opportunities</h2>
                                <p>As a public institution, EduFord University is to fostering positive change through education. We
                                    are committed</p>
                            </div>
                            <div class="admission-btn mt-65">
                                <a class="thm-btn" href="/contact">apply now
                                    <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z"
                                                fill="#170006"></path>
                                        </svg></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 offset-xl-1 mt-30">
                            <div class="admission-iconbox">
                                <div class="admission-iconbox-item ul_li">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/am_01.svg') }}" alt="" />
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Choose from hundreds of programs.</h3>
                                        <p class="xb-item--content">Choose from hundreds of programs" highlights the diverse range
                                            of academic options available.</p>
                                    </div>
                                </div>
                                <div class="admission-iconbox-item ul_li">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/am_02.svg') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Customize your University experience.</h3>
                                        <p class="xb-item--content">Customize your university experience available to tailor your
                                            education your individual needs.</p>
                                    </div>
                                </div>
                                <div class="admission-iconbox-item ul_li">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/am_03.svg') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Choose from hundreds of programs.</h3>
                                        <p class="xb-item--content">Choose from hundreds of programs" highlights the diverse range
                                            of academic options available.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- admission end -->

            <!-- testimonial section start  -->
            <section class="testimonial pt-120 pb-120 pos-rel mb-5">
                <div class="container">
                    <div class="row align-items-center mt-none-30">
                        <div class="col-lg-6 mt-30">
                            <div class="xb-testimonial-left pos-rel">
                                <div class="testimonial-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tes-img">
                                                <img src="{{ asset('assets/img/testimonial/tes-img.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tes-img">
                                                <img src="{{ asset('assets/img/testimonial/tes-img04.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tes-img">
                                                <img src="{{ asset('assets/img/testimonial/tes-img.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tes-img">
                                                <img src="{{ asset('assets/img/testimonial/tes-img04.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-slider-nav swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-nav-item">
                                                <img src="{{ asset('assets/img/testimonial/tes-img02.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-nav-item">
                                                <img src="{{ asset('assets/img/testimonial/tes-img03.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-nav-item">
                                                <img src="{{ asset('assets/img/testimonial/tes-img02.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-nav-item">
                                                <img src="{{ asset('assets/img/testimonial/tes-img03.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-carousel">
                                    <div class="xb-swiper-arrow xb-swiper-arrow-next"><i class="far fa-angle-down"></i></div>
                                    <div class="xb-swiper-arrow xb-swiper-arrow-prev"><i class="far fa-angle-up"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-30">
                            <div class="xb-testimonial-right">
                                <div class="section-title mb-70">
                                    <span class="sub-title">Our Student Stories</span>
                                    <h1 class="title">Happy Student Feedback</h1>
                                </div>
                                <div class="testimonial-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="xb-item--holder">
                                                <div class="xb-item--quote mb-35">
                                                    <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                                </div>
                                                <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                    expert faculty, practical learning experiences, and supportive community have
                                                    prepared me well for my career. The campus life and top-notch facilities."</p>
                                            </div>
                                            <div class="xb-item--author mt-60">
                                                <span class="xb-item--name">Dr. William Harris</span>
                                                <span class="xb-item--desig">Dean of Humanities</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="xb-item--holder">
                                                <div class="xb-item--quote mb-35">
                                                    <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                                </div>
                                                <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                    expert faculty, practical learning experiences, and supportive community have
                                                    prepared me well for my career. The campus life and top-notch facilities."</p>
                                            </div>
                                            <div class="xb-item--author mt-60">
                                                <span class="xb-item--name">Jessica Taylor</span>
                                                <span class="xb-item--desig">Student Council President</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="xb-item--holder">
                                                <div class="xb-item--quote mb-35">
                                                    <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                                </div>
                                                <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                    expert faculty, practical learning experiences, and supportive community have
                                                    prepared me well for my career. The campus life and top-notch facilities."</p>
                                            </div>
                                            <div class="xb-item--author mt-60">
                                                <span class="xb-item--name">Ryan Stewart</span>
                                                <span class="xb-item--desig">IT Services Manager</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="xb-item--holder">
                                                <div class="xb-item--quote mb-35">
                                                    <img src="{{ asset('assets/img/icon/qua.png') }}" alt="">
                                                </div>
                                                <p class="xb-item--content">"Edubost University has been a game-changer for me. The
                                                    expert faculty, practical learning experiences, and supportive community have
                                                    prepared me well for my career. The campus life and top-notch facilities."</p>
                                            </div>
                                            <div class="xb-item--author mt-60">
                                                <span class="xb-item--name">Sarah Parker</span>
                                                <span class="xb-item--desig">Student Affairs Coordinator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xb-tes-shape">
                    <span class="shape shape--one"><img src="{{ asset('assets/img/shape/tes-shape.png') }}" alt=""></span>
                    <span class="shape shape--two"><img src="{{ asset('assets/img/shape/tes-shape02.png') }}" alt=""></span>
                </div>
            </section>
            <!-- testimonial section end  -->

            <!-- fanfact section start -->
            <section class="fanfact pos-rel mt-20 pt-120">
                <div class="container">
                    <div class="fanfact-wrapper">
                        <div class="fanfact-slider swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="xb-fanfact__wrapper pos-rel">
                                        <div class="xb-item--img">
                                            <img src="{{ asset('assets/img/feature/feature-img01.png') }}"
                                                alt="University Institutes">
                                        </div>
                                        <h2 class="xb-item--title">our teaching quality is best <br> from other university</h2>
                                        <div class="xb-item--holder">
                                            <h3 class="xb-item--number">15+</h3>
                                            <h2 class="xb-item--text">Institutes in University</h2>
                                            <p class="xb-item--content">Edubost University hosts a variety of specialized institutes
                                                focused on advancing knowledge.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="xb-fanfact__wrapper pos-rel">
                                        <div class="xb-item--img">
                                            <img src="{{ asset('assets/img/feature/feature-img03.png') }}"
                                                alt="University Libraries">
                                        </div>
                                        <h2 class="xb-item--title">our teaching quality is best <br> from other university</h2>
                                        <div class="xb-item--holder">
                                            <h3 class="xb-item--number">10+</h3>
                                            <h2 class="xb-item--text">library in University</h2>
                                            <p class="xb-item--content">Edubost University hosts a variety of specialized institutes
                                                focused on advancing knowledge.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="xb-fanfact__wrapper pos-rel">
                                        <div class="xb-item--img">
                                            <img src="{{ asset('assets/img/feature/feature-img01.png') }}"
                                                alt="University Institutes">
                                        </div>
                                        <h2 class="xb-item--title">our teaching quality is best <br> from other university</h2>
                                        <div class="xb-item--holder">
                                            <h3 class="xb-item--number">15+</h3>
                                            <h2 class="xb-item--text">Institutes in University</h2>
                                            <p class="xb-item--content">Edubost University hosts a variety of specialized institutes
                                                focused on advancing knowledge.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination ul_li_center"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fanfact section end -->

            <!-- cta start -->
            <section class="cta pt-120 pb-120" data-bg-color="#F1F1E9">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-lg-6 mt-30">
                            <div class="cta-item pos-rel" data-background="assets/img/cta/cta_img1.jpg">
                                <div class="cta-inner">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/cta_icon_01.svg') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Cost and financial aid</h3>
                                    <p class="xb-item--content">Understanding the cost and financial aid options for higher
                                        education is crucial for effective budgeting and planning.</p>
                                    <a class="thm-btn thm-btn--gray" href="contact.html">apply now
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.25 19.4919V20.7499C16.25 21.1639 15.914 21.4999 15.5 21.4999C15.086 21.4999 14.75 21.1639 14.75 20.7499V19.4999H16C16.084 19.4999 16.167 19.4969 16.25 19.4919Z"
                                                    fill="#170006" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.75 19.5H8C5.929 19.5 4.25 17.821 4.25 15.75V12.668L9.964 15.825C11.202 16.509 12.798 16.509 14.036 15.825L14.75 15.431V19.5ZM16.25 14.602L19.75 12.668V15.75C19.75 17.737 18.205 19.363 16.25 19.492V14.602Z"
                                                    fill="#170006" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.75 14.2879L13.552 14.9499C12.608 15.4719 11.392 15.4719 10.448 14.9499L2.134 10.3559C1.568 10.0429 1.25 9.49495 1.25 8.92195C1.25 8.34795 1.568 7.79995 2.134 7.48795L10.448 2.89295C11.392 2.37195 12.608 2.37195 13.552 2.89295L21.866 7.48795C22.432 7.79995 22.75 8.34795 22.75 8.92195C22.75 9.49495 22.432 10.0429 21.866 10.3559L16.25 13.4589V12.7499C16.25 12.5509 16.171 12.3599 16.03 12.2199L12.53 8.71995C12.238 8.42695 11.762 8.42695 11.47 8.71995C11.177 9.01195 11.177 9.48795 11.47 9.77995L14.75 13.0609V14.2879Z"
                                                    fill="#170006" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-30">
                            <div class="cta-item pos-rel" data-background="assets/img/cta/cta_img2.jpg">
                                <div class="cta-inner">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/cta_icon_02.svg') }}" alt="">
                                    </div>
                                    <h3 class="xb-item--title">Visit our campus</h3>
                                    <p class="xb-item--content">Visit Our Campus" invites prospective and their families to
                                        experience our academic environment firsthand. During your visit.</p>
                                    <a class="thm-btn thm-btn--gray" href="contact.html">apply now
                                        <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.25 19.4919V20.7499C16.25 21.1639 15.914 21.4999 15.5 21.4999C15.086 21.4999 14.75 21.1639 14.75 20.7499V19.4999H16C16.084 19.4999 16.167 19.4969 16.25 19.4919Z"
                                                    fill="#170006" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.75 19.5H8C5.929 19.5 4.25 17.821 4.25 15.75V12.668L9.964 15.825C11.202 16.509 12.798 16.509 14.036 15.825L14.75 15.431V19.5ZM16.25 14.602L19.75 12.668V15.75C19.75 17.737 18.205 19.363 16.25 19.492V14.602Z"
                                                    fill="#170006" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.75 14.2879L13.552 14.9499C12.608 15.4719 11.392 15.4719 10.448 14.9499L2.134 10.3559C1.568 10.0429 1.25 9.49495 1.25 8.92195C1.25 8.34795 1.568 7.79995 2.134 7.48795L10.448 2.89295C11.392 2.37195 12.608 2.37195 13.552 2.89295L21.866 7.48795C22.432 7.79995 22.75 8.34795 22.75 8.92195C22.75 9.49495 22.432 10.0429 21.866 10.3559L16.25 13.4589V12.7499C16.25 12.5509 16.171 12.3599 16.03 12.2199L12.53 8.71995C12.238 8.42695 11.762 8.42695 11.47 8.71995C11.177 9.01195 11.177 9.48795 11.47 9.77995L14.75 13.0609V14.2879Z"
                                                    fill="#170006" />
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta end -->

        </main>

        <!-- footer strt -->
        <footer class="footer bg_img pos-rel pt-20" data-background="{{ asset('assets/img/bg/footer-bg.jpg') }}">
            <div class="xb-footer-wrap">
                <div class="container">
                    <div class="footer-cta ul_li_between mb-35">
                        <div class="xb-item--holder ul_li mt-30">
                            <div class="xb-item--icon-avatar ul_li">
                                <span><img src="{{ asset('assets/img/icon/calling-icon01.png') }}" alt=""></span>
                                <div class="xb-item--avatar">
                                    <img src="{{ asset('assets/img/footer/footer-avatar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="xb-item--content">
                                If you have questions, order a free conversation <br> with our consultant.
                            </div>
                        </div>
                        <div class="xb-item--contact mt-30">
                            <span>or use our hotline 24h</span>
                            <h3>+1 (415) 555‑0132</h3>
                        </div>
                    </div>
                </div>
                <div class="xb-footer-main pt-70 pb-60">
                    <div class="container">
                        <div class="row mt-none-30">
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget mt-10">
                                    <div class="xb-item--logo mb-30"><a href="#!"><img
                                                src="{{ asset('assets/img/logo/logo_white.svg') }}" alt=""></a></div>
                                    <span class="xb-item--details">25/1, N.I.A. Post Office, Balewadi, <br> Bristol –
                                        BS1 5TA,
                                        England, <br> United Kingdom</span>
                                    <div class="xb-item--meta mt-20">
                                        <span>Social media</span>
                                        <ul class="xb-item--social_link ul_li">
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.52217 6.77491L15.4785 0H14.0671L8.89516 5.88256L4.76437 0H0L6.24656 8.89547L0 16H1.41155L6.87321 9.78782L11.2356 16H16L9.52183 6.77491H9.52217ZM7.58887 8.97384L6.95596 8.08805L1.92015 1.03974H4.0882L8.15216 6.72795L8.78507 7.61374L14.0677 15.0075H11.8997L7.58887 8.97418V8.97384Z"
                                                            fill="white" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget">
                                    <h3 class="xb-item--title">Admissions</h3>
                                    <ul class="xb-item--links list-unstyled">
                                        <li><a href="#!">How to apply</a></li>
                                        <li><a href="#!">Schedule</a></li>
                                        <li><a href="#!">Procedure</a></li>
                                        <li><a href="#!">Eligibility</a></li>
                                        <li><a href="#!">Fee structure</a></li>
                                        <li><a href="#!">Scholarships</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget chng-mr">
                                    <h3 class="xb-item--title">Quick Links</h3>
                                    <ul class="xb-item--links list-unstyled">
                                        <li><a href="#!">Press & Media</a></li>
                                        <li><a href="#!">Alumni Portal</a></li>
                                        <li><a href="#!">Newsletters</a></li>
                                        <li><a href="#!">Departments</a></li>
                                        <li><a href="#!">People Directory</a></li>
                                        <li><a href="#!">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget change-mr">
                                    <h3 class="xb-item--title">Additional Links</h3>
                                    <ul class="xb-item--links list-unstyled">
                                        <li><a href="#!">Open House</a></li>
                                        <li><a href="#!">Summer School</a></li>
                                        <li><a href="#!">ICCRIP 2024</a></li>
                                        <li><a href="#!">WIC Forum</a></li>
                                        <li><a href="#!">Placements</a></li>
                                        <li><a href="#!">Terms & Condition</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget">
                                    <ul class="xb-item--links-btn list-unstyled">
                                        <li><a class="thm-btn" href="#!">applying</a></li>
                                        <li><a class="thm-btn" href="#!">visiting</a></li>
                                        <li><a class="thm-btn" href="#!">careers</a></li>
                                        <li><a class="thm-btn" href="#!">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pb-25 pt-25">
                    <div class="copyright text-center">
                        <p>Copyright © {{ date('Y') }} <a href="{{ route('home') }}">Edubost</a>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
    </div>

    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif

    <!-- jquery include -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>
