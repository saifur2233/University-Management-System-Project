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
                        <h2 class="breadcrumb__title">Our Courses</h2>
                        <p class="breadcrumb__desc">Empowering Wide Range of Learning Opportunities</p>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- courses start -->
            <section class="courses pt-120 pb-120">
                <div class="container">
                    <div class="text-center">
                        <div class="program-menu mb-70 text-center">
                            <button class="active" data-filter="*">ALL</button>
                            <button data-filter=".cat1" class="">Development</button>
                            <button data-filter=".cat2">Construction</button>
                            <button data-filter=".cat3">Science</button>
                            <button data-filter=".cat4">Art & Design</button>
                            <button data-filter=".cat5">Marketing</button>
                        </div>
                    </div>
                    <div class="row grid mt-none-30">
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1 cat4">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img01.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Medical</span>
                                        <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="#!">MBA in Biomedical Engineering..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">200 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3 cat5 cat4">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img02.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Management</span>
                                        <div class="xb-item--rating"><span>4.5</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Advanced
                                            Construction..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">250 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat5 cat3">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img03.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Construction</span>
                                        <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Management and
                                            Strategic..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">280 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1 cat2">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img04.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Engineering</span>
                                        <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Mechanical
                                            Engineering..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">220 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat5 cat4">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img05.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Energy</span>
                                        <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Sustainable
                                            Energy..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">200 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat4">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img06.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Real Estate</span>
                                        <div class="xb-item--rating"><span>4.9</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Real Estate and
                                            Urban..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">230 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat5 cat2 cat3">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img07.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Business</span>
                                        <div class="xb-item--rating"><span>4.9</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">BA in International
                                            Business..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">200 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2 cat4">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img08.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Engineering</span>
                                        <div class="xb-item--rating"><span>5.0</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">MBA in Mechanical
                                            Engineering..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">220 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">16 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1 cat5 cat3">
                            <div class="xb-program__wrapper mt-30">
                                <div class="xb-item--img text-center">
                                    <a href="course-single.html"><img src="{{ asset('assets/img/program/pro-img09.png') }}" alt=""></a>
                                </div>
                                <div class="xb-item--holder">
                                    <div class="xb-item--deprt ul_li_between">
                                        <span class="xb-item--group"># Digital Art</span>
                                        <div class="xb-item--rating"><span>4.9</span> <img src="{{ asset('assets/img/icon/rating.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="xb-item--title border-effect-2"><a href="course-single.html">BFA in Digital Art and
                                            Design..</a></h2>
                                    <ul class="xb-item--meta ul_li">
                                        <li><img src="{{ asset('assets/img/icon/meta-icon01.png') }}" alt="">280 Seat</li>
                                        <li><img src="{{ asset('assets/img/icon/clock.png') }}" alt="">14 Semester</li>
                                    </ul>
                                    <div class="xb-item--dep-btn">
                                        <a href="course-single.html">enroll now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- courses end -->

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
