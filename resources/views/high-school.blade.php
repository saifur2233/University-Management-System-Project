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

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen home-three">
    <!-- backtotop - start -->
    <div class="xb-backtotop style-2">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- Preloader - Start -->
    <div id="preloader" class="preloader-two">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/img/logo/preloader-2.png') }}" alt="preloader"></div>
            </div>
        </div>
    </div>
    <!-- Preloader - End -->

    <div class="body_wrap">
        <!-- header start -->
        <header id="xb-header-area" class="header-area header-style-two header-style-three is-sticky">
            <div class="xb-header">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/logo-2.svg') }}" alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                            <nav class="main-menu collapse navbar-collapse">
                                <ul>
                                    <li class="menu-item-has-children active">
                                        <a href="index.html">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">University</a></li>
                                            <li><a href="home-2.html">College</a></li>
                                            <li class="active"><a href="home-3.html">High School</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="admission.html">Admission</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#!">Courses</a>
                                        <ul class="submenu">
                                            <li><a href="courses.html">Courses</a></li>
                                            <li><a href="course-single.html">Course Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#!">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-single.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="event.html">Event</a>
                                                <ul class="submenu">
                                                    <li><a href="event.html">Event</a></li>
                                                    <li><a href="event-single.html">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="team.html">Team</a>
                                                <ul class="submenu">
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-single.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="tuition-fees.html">Tuition & Fees</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="xb-header-wrap">
                                <div class="xb-header-menu">
                                    <div class="xb-header-menu-scroll">
                                        <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                        <div class="xb-logo-mobile xb-hide-xl">
                                            <a href="index.html" rel="home"><img src="{{ asset('assets/img/logo/logo-2.svg') }}" alt=""></a>
                                        </div>
                                        <div class="xb-header-mobile-search xb-hide-xl">
                                            <form role="search" action="#">
                                                <input type="text" placeholder="Search..." name="s" class="search-field">
                                                <button class="search-submit" type="submit"><i
                                                        class="far fa-search"></i></button>
                                            </form>
                                        </div>
                                        <nav class="xb-header-nav">
                                            <ul class="xb-menu-primary clearfix">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="index.html">Home</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">University</a></li>
                                                        <li><a href="home-2.html">College</a></li>
                                                        <li><a href="home-3.html">High School</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="admission.html">Admission</a>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#!">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="courses.html">Courses</a></li>
                                                        <li><a href="course-single.html">Course Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#!">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                href="blog.html">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="blog.html">Blog</a></li>
                                                                <li class="menu-item"><a href="blog-single.html">Blog
                                                                        Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                href="event.html">Event</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="event.html">Event</a></li>
                                                                <li class="menu-item"><a href="event-single.html">Event
                                                                        Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a
                                                                href="team.html">Team</a>
                                                            <ul class="sub-menu">
                                                                <li class="menu-item"><a href="team.html">Team</a></li>
                                                                <li class="menu-item"><a href="team-single.html">Team
                                                                        Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item"><a href="tuition-fees.html">Tuition & Fees</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="xb-header-menu-backdrop"></div>
                            </div>
                        </div>
                        <div class="hs-header-right ul_li">
                            <div class="xb-search pos-rel">
                                <a class="header-search-btn" href="javascript:void(0);"><svg width="18" height="18"
                                        viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    </svg></a>
                            </div>
                            <div class="hs-header-btn">
                                <a class="thm-btn thm-btn--stroke-black hover-2" href="tel:555-666-7777"><span><svg width="22"
                                            height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.1513 9.85383C15.7572 9.85383 15.4455 9.533 15.4455 9.148C15.4455 8.80883 15.1063 8.103 14.538 7.48883C13.9788 6.893 13.3647 6.54466 12.8513 6.54466C12.4572 6.54466 12.1455 6.22383 12.1455 5.83883C12.1455 5.45383 12.4663 5.133 12.8513 5.133C13.768 5.133 14.7305 5.628 15.5738 6.51716C16.3622 7.35133 16.8663 8.38716 16.8663 9.13883C16.8663 9.533 16.5455 9.85383 16.1513 9.85383Z"
                                                fill="#161A2C" />
                                            <path
                                                d="M19.4611 9.85415C19.0669 9.85415 18.7553 9.53331 18.7553 9.14831C18.7553 5.89415 16.1061 3.25415 12.8611 3.25415C12.4669 3.25415 12.1553 2.93331 12.1553 2.54831C12.1553 2.16331 12.4669 1.83331 12.8519 1.83331C16.8853 1.83331 20.1669 5.11498 20.1669 9.14831C20.1669 9.53331 19.8461 9.85415 19.4611 9.85415Z"
                                                fill="#161A2C" />
                                            <path
                                                d="M10.8072 13.0258L7.80967 16.0233C7.47967 15.73 7.15884 15.4275 6.84717 15.1158C5.90301 14.1625 5.05051 13.1633 4.28967 12.1183C3.53801 11.0733 2.93301 10.0283 2.49301 8.99248C2.05301 7.94748 1.83301 6.94831 1.83301 5.99498C1.83301 5.37165 1.94301 4.77581 2.16301 4.22581C2.38301 3.66665 2.73134 3.15331 3.21717 2.69498C3.80384 2.11748 4.44551 1.83331 5.12384 1.83331C5.38051 1.83331 5.63717 1.88831 5.86634 1.99831C6.10467 2.10831 6.31551 2.27331 6.48051 2.51165L8.60717 5.50915C8.77217 5.73831 8.89134 5.94915 8.97384 6.15081C9.05634 6.34331 9.10217 6.53581 9.10217 6.70998C9.10217 6.92998 9.03801 7.14998 8.90967 7.36081C8.79051 7.57165 8.61634 7.79165 8.39634 8.01165L7.69967 8.73581C7.59884 8.83665 7.55301 8.95581 7.55301 9.10248C7.55301 9.17581 7.56217 9.23998 7.58051 9.31331C7.60801 9.38665 7.63551 9.44165 7.65384 9.49665C7.81884 9.79915 8.10301 10.1933 8.50634 10.67C8.91884 11.1466 9.35884 11.6325 9.83551 12.1183C10.1655 12.4391 10.4863 12.7508 10.8072 13.0258Z"
                                                fill="#161A2C" />
                                            <path
                                                d="M20.139 16.8025C20.139 17.0592 20.0931 17.325 20.0015 17.5817C19.974 17.655 19.9465 17.7283 19.9098 17.8017C19.754 18.1317 19.5523 18.4433 19.2865 18.7367C18.8373 19.2317 18.3423 19.5892 17.7831 19.8183C17.774 19.8183 17.7648 19.8275 17.7556 19.8275C17.2148 20.0475 16.6281 20.1667 15.9956 20.1667C15.0606 20.1667 14.0615 19.9467 13.0073 19.4975C11.9531 19.0483 10.899 18.4433 9.85397 17.6825C9.49647 17.4167 9.13897 17.1508 8.7998 16.8667L11.7973 13.8692C12.054 14.0617 12.2831 14.2083 12.4756 14.3092C12.5215 14.3275 12.5765 14.355 12.6406 14.3825C12.714 14.41 12.7873 14.4192 12.8698 14.4192C13.0256 14.4192 13.1448 14.3642 13.2456 14.2633L13.9423 13.5758C14.1715 13.3467 14.3915 13.1725 14.6023 13.0625C14.8131 12.9342 15.024 12.87 15.2531 12.87C15.4273 12.87 15.6106 12.9067 15.8123 12.9892C16.014 13.0717 16.2248 13.1908 16.454 13.3467L19.4881 15.5008C19.7265 15.6658 19.8915 15.8583 19.9923 16.0875C20.084 16.3167 20.139 16.5458 20.139 16.8025Z"
                                                fill="#161A2C" />
                                        </svg></span>call us now
                                </a>
                            </div>
                        </div>
                        <div class="header-bar-mobile side-menu d-lg-none">
                            <a class="xb-nav-mobile" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                        </div>
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
            <!-- hero section start  -->
            <section class="hero hero-style-three ul_li pos-rel" data-background="{{ asset('assets/img/bg/hero_bg02.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero__content-wrap">
                                <div class="section-title clr-white pt-25">
                                    <span class="sub-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".4s">Welcome to
                                        edubost high school</span>
                                    <h1 class="title mb-25 wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".4s">Your Future
                                        Begins at edubost high school</h1>
                                    <p class="content wow fadeInUp" data-wow-delay="400ms" data-wow-duration=".4s">We are dedicated
                                        to providing an exceptional education that prepares students for success in school, careers,
                                        and life.</p>
                                </div>
                                <div class="hs-btn mt-35 wow fadeInUp" data-wow-delay="600ms" data-wow-duration=".4s">
                                    <a class="thm-btn thm-btn--two" href="contact.html">register now
                                        <span><img src="{{ asset('assets/img/icon/learning01.png') }}" alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-right">
                                <img class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration=".6s"
                                    src="{{ asset('assets/img/hero/hero_img03.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero section end  -->

            <!-- feature + about section start  -->
            <section class="about hs-about pt-115 pb-115 pos-rel">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('assets/img/icon/teacher-icon.png') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Honorable Expert Teacher</h3>
                                    <span class="xb-item--content">Our team of dedicated teachers is committed to inspiring.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li pl-15">
                                <div class="xb-item--icon bg_blue">
                                    <img src="{{ asset('assets/img/icon/book-white.png') }}" alt="">
                                </div>
                                <div class="xb-item--holder pr-35">
                                    <h3 class="xb-item--title">Conprehensive curriculum</h3>
                                    <span class="xb-item--content">Edubost High School offers rigorous and diverse curriculum
                                        designed.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-30 mt-30">
                            <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li">
                                <div class="xb-item--icon bg_green">
                                    <img src="{{ asset('assets/img/icon/customer-support.png') }}" alt="">
                                </div>
                                <div class="xb-item--holder pr-15">
                                    <h3 class="xb-item--title">Student Support Service</h3>
                                    <span class="xb-item--content">Edubost High School is dedicated to the well-being & every
                                        student.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pt-100">
                        <div class="col-lg-6">
                            <div class="hs-about_left mt-20">
                                <div class="about-img wow skewIn">
                                    <img src="{{ asset('assets/img/about/about-img02.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hs-about-right ml-70 mt-20 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration=".6s">
                                <div class="section-title mb-20">
                                    <span class="sub-title">about us</span>
                                    <h1 class="title">Making today’s learning tomorrow’s workplace from high school</h1>
                                    <p class="hs-content mt-25">We are committed to preparing our students for the of the modern
                                        workforce. Our curriculum integrates practical skills.</p>
                                </div>
                                <ul class="xb-item--list list-unstyled">
                                    <li>A strong school community.</li>
                                    <li>Available in three timezones.</li>
                                    <li>Student Leadership Initiatives.</li>
                                </ul>
                                <div class="xb-btn mt-35">
                                    <a class="thm-btn thm-btn--stroke-black hover-2" href="contact.html">apply now
                                        <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 4.84993V16.7399C22 17.7099 21.21 18.5999 20.24 18.7199L19.93 18.7599C18.29 18.9799 15.98 19.6599 14.12 20.4399C13.47 20.7099 12.75 20.2199 12.75 19.5099V5.59993C12.75 5.22993 12.96 4.88993 13.29 4.70993C15.12 3.71993 17.89 2.83993 19.77 2.67993H19.83C21.03 2.67993 22 3.64993 22 4.84993Z"
                                                    fill="#170006"></path>
                                                <path
                                                    d="M10.71 4.70993C8.87999 3.71993 6.10999 2.83993 4.22999 2.67993H4.15999C2.95999 2.67993 1.98999 3.64993 1.98999 4.84993V16.7399C1.98999 17.7099 2.77999 18.5999 3.74999 18.7199L4.05999 18.7599C5.69999 18.9799 8.00999 19.6599 9.86999 20.4399C10.52 20.7099 11.24 20.2199 11.24 19.5099V5.59993C11.24 5.21993 11.04 4.88993 10.71 4.70993ZM4.99999 7.73993H7.24999C7.65999 7.73993 7.99999 8.07993 7.99999 8.48993C7.99999 8.90993 7.65999 9.23993 7.24999 9.23993H4.99999C4.58999 9.23993 4.24999 8.90993 4.24999 8.48993C4.24999 8.07993 4.58999 7.73993 4.99999 7.73993ZM7.99999 12.2399H4.99999C4.58999 12.2399 4.24999 11.9099 4.24999 11.4899C4.24999 11.0799 4.58999 10.7399 4.99999 10.7399H7.99999C8.40999 10.7399 8.74999 11.0799 8.74999 11.4899C8.74999 11.9099 8.40999 12.2399 7.99999 12.2399Z"
                                                    fill="#170006"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xb-shape">
                    <img src="{{ asset('assets/img/shape/angle-shape01.png') }}" alt="">
                </div>
            </section>
            <!-- feature + about section end  -->

            <!-- program section start  -->
            <section class="program pt-115 pb-120">
                <div class="container">
                    <div class="section-title text-center mb-30">
                        <span class="sub-title">Our academics offerings</span>
                        <h1 class="title">Explore our programs</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="hs-program_inner">
                                <div class="bg_img" data-background="{{ asset('assets/img/program/hs-pro_bg01.png') }}">
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Technical Education..</h3>
                                        <div class="xb-item--link">
                                            <a href="course-single.html">Read More <span><svg width="20" height="16"
                                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                            fill="white" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/program/hs-program01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="hs-program_inner">
                                <div class="bg_img" data-background="assets/img/program/hs-pro_bg02.png">
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Advanced Mathematics..</h3>
                                        <div class="xb-item--link">
                                            <a href="course-single.html">Read More <span><svg width="20" height="16"
                                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                            fill="white" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/program/hs-program02.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="hs-program_inner">
                                <div class="bg_img" data-background="assets/img/program/hs-pro_bg03.png">
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Writing and Literature..</h3>
                                        <div class="xb-item--link">
                                            <a href="course-single.html">Read More <span><svg width="20" height="16"
                                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                            fill="white" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/program/hs-program03.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="hs-program_inner">
                                <div class="bg_img" data-background="assets/img/program/hs-pro_bg04.png">
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">Environmental Science..</h3>
                                        <div class="xb-item--link">
                                            <a href="course-single.html">Read More <span><svg width="20" height="16"
                                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                            fill="white" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/program/hs-program04.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="hs-program_inner">
                                <div class="bg_img" data-background="assets/img/program/hs-pro_bg05.png">
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">World Languages class..</h3>
                                        <div class="xb-item--link">
                                            <a href="course-single.html">Read More <span><svg width="20" height="16"
                                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                            fill="white" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/program/hs-program05.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="hs-program_inner">
                                <div class="bg_img" data-background="{{ asset('assets/img/program/hs-pro_bg06.png') }}">
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--title">drawing class..</h3>
                                        <div class="xb-item--link">
                                            <a href="course-single.html">Read More <span><svg width="20" height="16"
                                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                            fill="white" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="xb-item--img">
                                        <img src="{{ asset('assets/img/program/hs-program06.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hs-pro-bottom ul_li_between mt-30">
                        <div class="xb-content mt-20">
                            <p>Discover dreams, and change the world! <br>
                                Enjoy access to modern classrooms, cutting-edge laboratories.</p>
                        </div>
                        <div class="pro-btn mt-20">
                            <a class="thm-btn thm-btn--stroke-black hover-2" href="#!">view all programs
                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 4.84993V16.7399C22 17.7099 21.21 18.5999 20.24 18.7199L19.93 18.7599C18.29 18.9799 15.98 19.6599 14.12 20.4399C13.47 20.7099 12.75 20.2199 12.75 19.5099V5.59993C12.75 5.22993 12.96 4.88993 13.29 4.70993C15.12 3.71993 17.89 2.83993 19.77 2.67993H19.83C21.03 2.67993 22 3.64993 22 4.84993Z"
                                            fill="#170006"></path>
                                        <path
                                            d="M10.71 4.70993C8.87999 3.71993 6.10999 2.83993 4.22999 2.67993H4.15999C2.95999 2.67993 1.98999 3.64993 1.98999 4.84993V16.7399C1.98999 17.7099 2.77999 18.5999 3.74999 18.7199L4.05999 18.7599C5.69999 18.9799 8.00999 19.6599 9.86999 20.4399C10.52 20.7099 11.24 20.2199 11.24 19.5099V5.59993C11.24 5.21993 11.04 4.88993 10.71 4.70993ZM4.99999 7.73993H7.24999C7.65999 7.73993 7.99999 8.07993 7.99999 8.48993C7.99999 8.90993 7.65999 9.23993 7.24999 9.23993H4.99999C4.58999 9.23993 4.24999 8.90993 4.24999 8.48993C4.24999 8.07993 4.58999 7.73993 4.99999 7.73993ZM7.99999 12.2399H4.99999C4.58999 12.2399 4.24999 11.9099 4.24999 11.4899C4.24999 11.0799 4.58999 10.7399 4.99999 10.7399H7.99999C8.40999 10.7399 8.74999 11.0799 8.74999 11.4899C8.74999 11.9099 8.40999 12.2399 7.99999 12.2399Z"
                                            fill="#170006"></path>
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- program section end  -->

            <!-- fanfact + principal section start  -->
            <section class="fanfact hs-fanfact_bg pt-120 pb-90 pos-rel">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Our achievements</span>
                        <h1 class="title">you can count on us</h1>
                    </div>
                    <div class="hs-fanfact_wrapper">
                        <div class="row mt-none-30">
                            <div class="col-lg-3 col-md-6 mt-30">
                                <div class="hs-fanfact_inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/teacher-icon01.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder pos-rel">
                                        <h2 class="xb-item--number">4,000+</h2>
                                        <span><svg width="266" height="57" viewBox="0 0 266 57" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0132 11.796C12.9019 8.92931 15.5192 6.94812 18.5195 6.87104L258.083 0.716251C262.46 0.603807 265.864 4.49148 265.175 8.8151L258.44 51.1012C257.898 54.4992 254.968 57 251.527 57H7.49864C2.78284 57 -0.58381 52.4316 0.812534 47.9273L12.0132 11.796Z"
                                                    fill="#FDB714" />
                                            </svg></span>
                                    </div>
                                    <span class="xb-item--profile">college profiles</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-30">
                                <div class="hs-fanfact_inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/stamp.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder pos-rel">
                                        <h2 class="xb-item--number">45Million+</h2>
                                        <span><svg width="266" height="57" viewBox="0 0 266 57" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0132 11.796C12.9019 8.92931 15.5192 6.94812 18.5195 6.87104L258.083 0.716251C262.46 0.603807 265.864 4.49148 265.175 8.8151L258.44 51.1012C257.898 54.4992 254.968 57 251.527 57H7.49864C2.78284 57 -0.58381 52.4316 0.812534 47.9273L12.0132 11.796Z"
                                                    fill="#D9293A" />
                                            </svg></span>
                                    </div>
                                    <span class="xb-item--profile">in scholarship value</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-30">
                                <div class="hs-fanfact_inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/counter-icon.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder pos-rel">
                                        <h2 class="xb-item--number">3Million+</h2>
                                        <span><svg width="265" height="57" viewBox="0 0 265 57" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.5132 11.796C12.4019 8.92931 15.0192 6.94812 18.0195 6.87104L257.583 0.716251C261.96 0.603807 265.364 4.49148 264.675 8.8151L257.94 51.1012C257.398 54.4992 254.468 57 251.027 57H6.99864C2.28284 57 -1.08381 52.4316 0.312534 47.9273L11.5132 11.796Z"
                                                    fill="#2F76CF" />
                                            </svg></span>
                                    </div>
                                    <span class="xb-item--profile">students registered / year</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-30">
                                <div class="hs-fanfact_inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="{{ asset('assets/img/icon/clock01.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder pos-rel">
                                        <h2 class="xb-item--number">26 Hours</h2>
                                        <span><svg width="266" height="57" viewBox="0 0 266 57" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0132 11.796C12.9019 8.92931 15.5192 6.94812 18.5195 6.87104L258.083 0.716251C262.46 0.603807 265.864 4.49148 265.175 8.8151L258.44 51.1012C257.898 54.4992 254.968 57 251.527 57H7.49864C2.78284 57 -0.58381 52.4316 0.812534 47.9273L12.0132 11.796Z"
                                                    fill="#34D171" />
                                            </svg></span>
                                    </div>
                                    <span class="xb-item--profile">of time savings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hs-principle pt-105">
                        <div class="row align-items-center">
                            <div class="col-lg-7 mt-30">
                                <div class="hs-principle-left pos-rel wow skewIn">
                                    <img src="{{ asset('assets/img/fanfact/principle-img.png') }}" alt="">
                                    <div class="xb-img">
                                        <div class="image image--one">
                                            <img src="{{ asset('assets/img/fanfact/principle-img01.png') }}" alt="">
                                        </div>
                                        <div class="image image--two">
                                            <img src="{{ asset('assets/img/fanfact/principle-img02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 mt-30">
                                <div class="hs-principle-right wow fadeInLeft" data-wow-delay="200ms" data-wow-duration=".6s">
                                    <div class="section-title mb-40">
                                        <span class="sub-title">embracing young peoples curosity</span>
                                        <h1 class="title mb-25">meet the Dedicated principal to Success</h1>
                                        <p class="xb-conten">As an educator and leader for over 35 years, and a father for almost as
                                            long, I understand there are few decisions in life as important as the choice of school
                                            for your child. We want them to grow up to be healthy, capable adults; adaptable,
                                            resilient and prepared for life beyond High school. preparing our students to make
                                            meaningful contributions to society.we aim to set them on a path to success, both in
                                            their personal lives and in the broader community.</p>
                                    </div>
                                    <ul class="xb-teacher_list list-unstyled">
                                        <li class="xb-mouseenter active">
                                            <a href="team.html">Meet our principal</a>
                                        </li>
                                        <li class="xb-mouseenter">
                                            <a href="team.html">Meet our honorable teacher</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-fan_shape">
                    <img src="{{ asset('assets/img/shape/angle-white.png') }}" alt="">
                </div>
            </section>
            <!-- fanfact + principal section end  -->

            <!-- testimonial section start  -->
            <section class="testimonial  pt-120 pb-130">
                <div class="section-title text-center mb-60">
                    <span class="sub-title">our testimonial</span>
                    <h1 class="title">why student love us</h1>
                </div>
                <div class="hs-testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hs-testimonial_wrapper">
                                <div class="xb-item--inner">
                                    <div class="xb-item--rating ul_li mb-30">
                                        <span class="xb-item--number">4.0</span>
                                        <span class="xb-item--star">
                                            <img src="{{ asset('assets/img/icon/rating01.png') }}" alt="">
                                        </span>
                                    </div>
                                    <p class="xb-item--content">"The quality of education and the supportive community at Edubost
                                        High School have truly helped me excel. The teachers are exceptional and care about student
                                        success."</p>
                                </div>
                                <div class="xb-item--author ul_li">
                                    <div class="xb-item--avater mr-10">
                                        <img src="{{ asset('assets/img/testimonial/hs-tes-img03.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name">James Michael</h3>
                                        <span class="xb-item--desig">James Michael</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hs-testimonial_wrapper">
                                <div class="xb-item--inner">
                                    <div class="xb-item--rating ul_li mb-30">
                                        <span class="xb-item--number">4.9</span>
                                        <span class="xb-item--star">
                                            <img src="{{ asset('assets/img/icon/rating01.png') }}" alt="">
                                        </span>
                                    </div>
                                    <p class="xb-item--content">"The quality of education and the supportive community at Edubost
                                        High School have truly helped me excel. The teachers are exceptional and care about student
                                        success."</p>
                                </div>
                                <div class="xb-item--author ul_li">
                                    <div class="xb-item--avater mr-10">
                                        <img src="{{ asset('assets/img/testimonial/hs-tes-img01.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name">James Michael</h3>
                                        <span class="xb-item--desig">James Michael</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hs-testimonial_wrapper">
                                <div class="xb-item--inner">
                                    <div class="xb-item--rating ul_li mb-30">
                                        <span class="xb-item--number">4.7</span>
                                        <span class="xb-item--star">
                                            <img src="{{ asset('assets/img/icon/rating01.png') }}" alt="">
                                        </span>
                                    </div>
                                    <p class="xb-item--content">"Edubost High School’s focus on career readiness and real-world
                                        learning has prepared me well for the future. The hands-on career programs have been
                                        invaluable."</p>
                                </div>
                                <div class="xb-item--author ul_li">
                                    <div class="xb-item--avater mr-10">
                                        <img src="{{ asset('assets/img/testimonial/hs-tes-img02.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name">Jennifer Lynn</h3>
                                        <span class="xb-item--desig">September 22, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hs-testimonial_wrapper">
                                <div class="xb-item--inner">
                                    <div class="xb-item--rating ul_li mb-30">
                                        <span class="xb-item--number">4.8</span>
                                        <span class="xb-item--star">
                                            <img src="{{ asset('assets/img/icon/rating01.png') }}" alt="">
                                        </span>
                                    </div>
                                    <p class="xb-item--content">"After over a decade at Edubost High School, I’m continually to
                                        student success. The collaborative and innovative environment makes it a fantastic place to
                                        teach."</p>
                                </div>
                                <div class="xb-item--author ul_li">
                                    <div class="xb-item--avater mr-10">
                                        <img src="{{ asset('assets/img/testimonial/hs-tes-img03.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name">Michael Edward</h3>
                                        <span class="xb-item--desig">December 18, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="hs-testimonial_wrapper">
                                <div class="xb-item--inner">
                                    <div class="xb-item--rating ul_li mb-30">
                                        <span class="xb-item--number">4.9</span>
                                        <span class="xb-item--star">
                                            <img src="{{ asset('assets/img/icon/rating01.png') }}" alt="">
                                        </span>
                                    </div>
                                    <p class="xb-item--content">"Edubost High School provided my child with exceptional support and
                                        opportunities. The emphasis on both and personal development has been outstanding."</p>
                                </div>
                                <div class="xb-item--author ul_li">
                                    <div class="xb-item--avater mr-10">
                                        <img src="{{ asset('assets/img/testimonial/hs-tes-img01.png') }}" alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <h3 class="xb-item--name">Nicole Marie</h3>
                                        <span class="xb-item--desig">August 30, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial section end  -->

            <!-- cta section start  -->
            <section class="cta pos-rel bg_img z-1 pt-120 pb-120 mb-none-55">
                <div class="hs-cta_bg bg_img" data-background="{{ asset('assets/img/bg/cta-bg02.png') }}"></div>
                <div class="container">
                    <div class="hs-cta-inner pb-170">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">What makes us different?</span>
                            <h1 class="title">Why student’s love edubost school</h1>
                        </div>
                        <ul class="xb-item--list list-unstyled ul_li">
                            <li><span><img src="{{ asset('assets/img/icon/Check-icon.svg') }}" alt=""></span>Opportunities to socialise</li>
                            <li><span><img src="{{ asset('assets/img/icon/Check-icon.svg') }}" alt=""></span>A flexible school</li>
                            <li><span><img src="{{ asset('assets/img/icon/Check-icon.svg') }}" alt=""></span>Teacher-led education</li>
                        </ul>
                        <div class="text-center">
                            <p class="xb-item--content">We empower students to achieve their dreams through diverse programs, modern
                                facilities, and a supportive community.</p>
                        </div>
                        <div class="hs-btn text-center mt-30">
                            <a class="thm-btn thm-btn--two" href="contact.html">apply now
                                <span><img src="{{ asset('assets/img/icon/learning01.png') }}" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hs-cta_shape">
                    <div class="shape"><img src="{{ asset('assets/img/cta/cta-bg01.png') }}" alt=""></div>
                </div>
            </section>
            <!-- cta section end  -->

            <!-- news section start  -->
            <section class="news news-bg">
                <div class="container">
                    <div class="xb-news-top text-center mb-40">
                        <div class="section-title wow fadeInUp">
                            <span class="sub-title">Our academics news</span>
                            <h1 class="title">our latest news</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-none-30">
                        <div class="col-lg-4 col-md-6 mt-20">
                            <div class="news-wrap xb-news-left hs-news wow fadeInUp" data-wow-delay="100ms" data-wow-duration=".4s">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/hs-news_img01.jpg') }}" alt="">
                                    <a href="#!" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant mt-25">
                                    <ul class="xb-item--meta list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Joseph</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">28/10/ 2024</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="#!">Exciting New Extracurricular
                                            Starting This Semester..</a></h3>
                                </div>
                                <div class="xb-link text-center mt-35">
                                    <a href="#!">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                    fill="white" />
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-20">
                            <div class="news-wrap xb-news-left hs-news wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".4s">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/hs-news_img02.jpg') }}" alt="">
                                    <a href="#!" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant mt-25">
                                    <ul class="xb-item--meta list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Jennifer</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">26/12/ 2024</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="#!">Student Achievement Awards
                                            Highlights Top Performers..</a></h3>
                                </div>
                                <div class="xb-link text-center mt-35">
                                    <a href="#!">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                    fill="white" />
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-20">
                            <div class="news-wrap xb-news-left hs-news wow fadeInUp" data-wow-delay="300ms" data-wow-duration=".4s">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/hs-news_img03.jpg') }}" alt="">
                                    <a href="#!" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant mt-25">
                                    <ul class="xb-item--meta list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Nicole</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">28/11/ 2024</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="#!">Annual Art Show Showcases Student
                                            Creativity and Talent..</a></h3>
                                </div>
                                <div class="xb-link text-center mt-35">
                                    <a href="#!">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z"
                                                    fill="white" />
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-btn text-center mt-40 wow fadeInUp" data-wow-delay="400ms" data-wow-duration=".4s">
                        <a class="thm-btn thm-btn--stroke-black hover-2" href="blog.html">More news
                            <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z"
                                        fill="#161A2C" />
                                </svg></span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- news section end  -->

        </main>

        <!-- footer strt -->
        <footer class="footer footer-style-three bg_img mt-100 pos-rel" data-background="{{ asset('assets/img/bg/footer-bg03.jpg') }}">
            <div class="xb-footer-wrap">
                <div class="xb-footer-main hs-footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget mt-10">
                                    <div class="xb-item--logo mb-30"><a href="#!"><img src="{{ asset('assets/img/logo/logo_white.svg') }}"
                                                alt=""></a></div>
                                    <span class="xb-item--details">25/1, N.I.A. Post Office, Balewadi, <br> Bristol – BS1 5TA,
                                        England, <br> United Kingdom</span>
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
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-6 mt-30">
                                <div class="footer-widget">
                                    <ul class="xb-item--links-btn list-unstyled">
                                        <li><a class="thm-btn" href="#!">applying</a></li>
                                        <li><a class="thm-btn" href="#!">visiting</a></li>
                                        <li><a class="thm-btn" href="#!">careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hs-footer-contact mt-90 ul_li_between">
                            <ul class="xb-item--social_link ul_li mt-20">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.52217 6.77491L15.4785 0H14.0671L8.89516 5.88256L4.76437 0H0L6.24656 8.89547L0 16H1.41155L6.87321 9.78782L11.2356 16H16L9.52183 6.77491H9.52217ZM7.58887 8.97384L6.95596 8.08805L1.92015 1.03974H4.0882L8.15216 6.72795L8.78507 7.61374L14.0677 15.0075H11.8997L7.58887 8.97418V8.97384Z"
                                                fill="#161A2C" />
                                        </svg></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <ul class="xb-item--contact list-unstyled mt-20">
                                <li>
                                    <span class="xb-item--text">Contact Number</span>
                                    <h3 class="xb-item--number">+61-8-8967 5983</h3>
                                </li>
                            </ul>
                            <ul class="xb-item--contact list-unstyled mt-20">
                                <li>
                                    <span class="xb-item--text">Emergency Number:</span>
                                    <h3 class="xb-item--number">+61-8-8967 5983</h3>
                                </li>
                            </ul>
                            <ul class="xb-item--contact list-unstyled mt-20">
                                <li>
                                    <span class="xb-item--text">Our Email:</span>
                                    <h3 class="xb-item--number">edubost@gmail.com</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pb-35 pt-35">
                    <div class="copyright text-center">
                        <p>Copyright © 2024 <a href="index.html">Edubost</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <div class="hs-footer-shape">
                <div class="shape shape--one">
                    <img src="{{ asset('assets/img/bg/overly.jpg') }}" alt="">
                </div>
                <div class="shape shape--two">
                    <img src="{{ asset('assets/img/shape/angle-shape02.png') }}" alt="">
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
