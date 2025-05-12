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
                        <h2 class="breadcrumb__title">Our Instructor</h2>
                        <p class="breadcrumb__desc">Meet Our Expert Faculty</p>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->

            <!-- cta start -->
            <section class="cta pt-40 pb-40">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 mt-30">
                            <div class="section-title section-title--md">
                                <span class="sub-title">Our Dedicated instructor</span>
                                <h2 class="title mb-20">Get to Know Our Expert <br> edubost instructor</h2>
                                <p>As a public institution, EduFord University is dedicated to fostering positive change through
                                    education. We are committed to redefining student success. </p>
                            </div>
                            <div class="admission-btn mt-40">
                                <a class="thm-btn" href="contact.html">talk to an expart
                                    <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z"
                                                fill="#170006"></path>
                                        </svg></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-30">
                            <div class="cta-image text-center">
                                <img src="{{ asset('assets/img/team/team_image.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta end -->

            <!-- team start -->
            <section class="team pt-120 pb-120" data-bg-color="#F1F1E9">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">our honorable teacher </span>
                        <h2 class="title">Our Expert Instructor</h2>
                    </div>
                    <div class="row mt-none-30">
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="team-item">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/team/team_01.jpg') }}" alt="">
                                    <div class="team-social">
                                        <ul class="xb-item--social list-unstyled">
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="#170006" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <span class="plus"><i class="far fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="xb-item--info pt-25">
                                    <h3 class="xb-item--name">James Michael</h3>
                                    <span class="xb-item--desig">Mathematics Instructor</span>
                                </div>
                                <ul class="xb-item--meta ul_li">
                                    <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>1 Courses</li>
                                    <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>Students 60+</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="team-item">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/team/team_02.jpg') }}" alt="">
                                    <div class="team-social">
                                        <ul class="xb-item--social list-unstyled">
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="#170006" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <span class="plus"><i class="far fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="xb-item--info pt-25">
                                    <h3 class="xb-item--name">Amanda Nicole</h3>
                                    <span class="xb-item--desig">English Literature</span>
                                </div>
                                <ul class="xb-item--meta ul_li">
                                    <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>1 Courses</li>
                                    <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>Students 60+</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="team-item">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/team/team_03.jpg') }}" alt="">
                                    <div class="team-social">
                                        <ul class="xb-item--social list-unstyled">
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="#170006" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <span class="plus"><i class="far fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="xb-item--info pt-25">
                                    <h3 class="xb-item--name">David Martinez</h3>
                                    <span class="xb-item--desig">Biology Professor</span>
                                </div>
                                <ul class="xb-item--meta ul_li">
                                    <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>1 Courses</li>
                                    <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>Students 60+</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="team-item">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/team/team_04.jpg') }}" alt="">
                                    <div class="team-social">
                                        <ul class="xb-item--social list-unstyled">
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="#170006" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <span class="plus"><i class="far fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="xb-item--info pt-25">
                                    <h3 class="xb-item--name">William Joseph</h3>
                                    <span class="xb-item--desig">English Literature</span>
                                </div>
                                <ul class="xb-item--meta ul_li">
                                    <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>1 Courses</li>
                                    <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>Students 60+</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="team-item">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/team/team_05.jpg') }}" alt="">
                                    <div class="team-social">
                                        <ul class="xb-item--social list-unstyled">
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="#170006" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <span class="plus"><i class="far fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="xb-item--info pt-25">
                                    <h3 class="xb-item--name">Amanda Nicole</h3>
                                    <span class="xb-item--desig">English Literature</span>
                                </div>
                                <ul class="xb-item--meta ul_li">
                                    <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>1 Courses</li>
                                    <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>Students 60+</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-30">
                            <div class="team-item">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/team/team_06.jpg') }}" alt="">
                                    <div class="team-social">
                                        <ul class="xb-item--social list-unstyled">
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#!"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="#170006" />
                                                    </svg></a></li>
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                        <span class="plus"><i class="far fa-plus"></i></span>
                                    </div>
                                </div>
                                <div class="xb-item--info pt-25">
                                    <h3 class="xb-item--name">John Christopher</h3>
                                    <span class="xb-item--desig">English Literature</span>
                                </div>
                                <ul class="xb-item--meta ul_li">
                                    <li><span><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.87029 3.99439C6.76907 3.07568 8.77017 2.20568 10.8732 1.38439C11.2821 1.22467 11.7163 1.22467 12.1252 1.38439C15.4174 2.67013 18.4596 4.07539 21.251 5.59959C22.03 6.02496 22.03 7.5265 21.251 7.95244C18.4596 9.47664 15.4174 10.8813 12.1252 12.1671C11.7163 12.3268 11.2821 12.3268 10.8732 12.1671C7.58099 10.8813 4.53878 9.47664 1.74738 7.95244C0.96832 7.5265 0.96832 6.02496 1.74738 5.59959C2.38419 5.25182 3.03431 4.91027 3.69732 4.57496"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M17.5884 14.175V14.8479C17.5884 15.1871 17.4395 15.4936 17.2098 15.6255C15.5581 16.5777 13.7251 17.4431 11.7103 18.2219C11.6549 18.2429 11.5975 18.2537 11.5406 18.2537C11.4835 18.2537 11.4262 18.2429 11.3709 18.2219C9.35603 17.4431 7.52297 16.5777 5.87126 15.6255C5.64207 15.4936 5.49316 15.1871 5.49316 14.8479V9.85612"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17.5898 12.4751V9.81525" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.3574 7L9.85071 10.0233V18.3406" stroke="#170006" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.85121 18.3406C10.3212 18.3406 10.7021 18.8594 10.7021 19.4994V21.7361H9.00027V19.4994C9.00027 18.8594 9.38124 18.3406 9.85121 18.3406Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>1 Courses</li>
                                    <li><span><svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.9863 4.10156C12.9863 6.027 11.4254 7.58789 9.5 7.58789C7.57456 7.58789 6.01367 6.027 6.01367 4.10156C6.01367 2.17612 7.57456 0.615232 9.5 0.615232C11.4254 0.615232 12.9863 2.17612 12.9863 4.10156Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.2676 14.9707H15.6523C15.4259 14.9707 15.2422 14.787 15.2422 14.5605V12.5098C15.2422 12.2833 15.4259 12.0996 15.6523 12.0996H16.2676C17.0604 12.0996 17.7031 12.7423 17.7031 13.5352C17.7031 14.328 17.0604 14.9707 16.2676 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.73242 14.9707H3.34766C3.57415 14.9707 3.75781 14.787 3.75781 14.5605V12.5098C3.75781 12.2833 3.57415 12.0996 3.34766 12.0996H2.73242C1.93959 12.0996 1.29688 12.7423 1.29688 13.5352C1.29688 14.328 1.93959 14.9707 2.73242 14.9707Z"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M14.4969 9.89722C13.2932 8.48419 11.5011 7.58767 9.49942 7.58767C7.49774 7.58767 5.70564 8.48419 4.50195 9.89722"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.0625 12.0996V9.31054L9.5 11.7715V20.3848L16.0625 17.9238V14.9707"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2.9375 14.9707V17.9238L9.5 20.3848V11.7715L2.9375 9.31054V12.0996"
                                                    stroke="#170006" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></span>Students 60+</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team end -->

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
