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
        <header id="xb-header-area" class="header-area header-style-two is-sticky">
            <div class="clg-header-top bg_img pt-10" data-background="{{ asset('assets/img/bg/Overly.html') }}"></div>
            <div class="xb-header">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a>
                        </div>
                        <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                            <nav class="main-menu collapse navbar-collapse">
                                <ul>
                                    <li class="menu-item-has-children active">
                                        <a href="index.html">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">University</a></li>
                                            <li class="active"><a href="home-2.html">College</a></li>
                                            <li><a href="home-3.html">High School</a></li>
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
                                            <a href="index.html" rel="home"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a>
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
                        <div class="header-right">
                            <button class="menu-btn header-search-btn"><img src="{{ asset('assets/img/icon/menu-search.svg') }}" alt="">
                                Search</button>
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
            <section class="hero hero-style-two pos-rel">
                <div class="bg_img hero-bg" data-background="{{ asset('assets/img/hero/hero_img02.jpg') }}">
                    <div class="container">
                        <div class="col-lg-7 col-md-7">
                            <div class="hero__content-wrap">
                                <div class="section-title clr-white pt-25">
                                    <span class="sub-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration=".4s">Welcome to
                                        edubost college</span>
                                    <h1 class="title mb-25 wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".4s">Achieve Your
                                        Dreams <br> At Edubost College</h1>
                                    <p class="content wow fadeInUp" data-wow-delay="400ms" data-wow-duration=".4s">We empower
                                        students to achieve their dreams through diverse.</p>
                                </div>
                                <div class="clg-btn mt-55 wow fadeInUp" data-wow-delay="600ms" data-wow-duration=".4s">
                                    <a class="thm-btn thm-btn--white" href="contact.html">apply now
                                        <span><img src="{{ asset('assets/img/icon/learning.png') }}" alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero section end  -->

            <!-- feature + about section start  -->
            <section class="about pt-100 pb-120 pos-rel">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mt-20">
                            <div class="xb-feature_wrap pos-rel ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('assets/img/icon/about-icon01.png') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Academic Resources</h3>
                                    <span class="xb-item--content">We offers essential resources.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-20">
                            <div class="xb-feature_wrap pos-rel ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('assets/img/icon/about-icon02.png') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Aid & Scholarships</h3>
                                    <span class="xb-item--content">Financial Aid & Scholarships.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-20">
                            <div class="xb-feature_wrap pos-rel ul_li">
                                <div class="xb-item--icon">
                                    <img src="{{ asset('assets/img/icon/about-icon03.png') }}" alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Your Coaching teacher</h3>
                                    <span class="xb-item--content">Our teacher is committed success.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title about-sec-title mb-60 pt-115 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration=".6s">
                        <span class="sub-title">Our academics supports</span>
                        <h1 class="title">Founded in 1970, EduFord College is a global leader in education, committed to quality,
                            innovation, and sustainability, we continue of learning.</h1>
                    </div>
                    <div class="row align-items-center mt-none-30">
                        <div class="col-lg-6 mt-30">
                            <div class="xb-about_left wow fadeInLeft" data-wow-delay="100ms" data-wow-duration=".6s">
                                <video width="100%" height="100%" loop muted playsinline autoplay
                                    poster="{{ asset('assets/img/about/about-img01.jpg') }}">
                                    <source src="about_video.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-30">
                            <div class="xb-about-right ml-40 wow fadeInRight" data-wow-delay="200ms" data-wow-duration=".6s">
                                <h4 class="xb-item--title mb-15">Innovation and Creativity</h4>
                                <p class="xb-item--content">At EduFord College, innovation and creativity are at the heart
                                    ofeducational philosophy. We strive to foster an environment where students encouraged to think
                                    outside the box, explore new ideas, and push the boundaries of conventional learning. Our
                                    programs are designed to inspire originality and critical thinking, equipping students with the
                                    skills to innovate and create in their chosen fields, Through hands-on projects.</p>
                                <div class="about-btn mt-30">
                                    <a class="more-btn" href="about.html">more about us
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.9585 1.66663H8.0418C7.17513 1.66663 6.4668 2.36663 6.4668 3.23329V4.01663C6.4668 4.88329 7.1668 5.58329 8.03346 5.58329H11.9585C12.8251 5.58329 13.5251 4.88329 13.5251 4.01663V3.23329C13.5335 2.36663 12.8251 1.66663 11.9585 1.66663Z"
                                                    fill="#170006" />
                                                <path
                                                    d="M14.3667 4.01665C14.3667 5.34165 13.2834 6.42498 11.9584 6.42498H8.0417C6.7167 6.42498 5.63337 5.34165 5.63337 4.01665C5.63337 3.54998 5.13337 3.25832 4.7167 3.47498C3.5417 4.09998 2.7417 5.34165 2.7417 6.76665V14.6083C2.7417 16.6583 4.4167 18.3333 6.4667 18.3333H13.5334C15.5834 18.3333 17.2584 16.6583 17.2584 14.6083V6.76665C17.2584 5.34165 16.4584 4.09998 15.2834 3.47498C14.8667 3.25832 14.3667 3.54998 14.3667 4.01665ZM10.3167 14.125H6.6667C6.32503 14.125 6.0417 13.8417 6.0417 13.5C6.0417 13.1583 6.32503 12.875 6.6667 12.875H10.3167C10.6584 12.875 10.9417 13.1583 10.9417 13.5C10.9417 13.8417 10.6584 14.125 10.3167 14.125ZM12.5 10.7917H6.6667C6.32503 10.7917 6.0417 10.5083 6.0417 10.1667C6.0417 9.82498 6.32503 9.54165 6.6667 9.54165H12.5C12.8417 9.54165 13.125 9.82498 13.125 10.1667C13.125 10.5083 12.8417 10.7917 12.5 10.7917Z"
                                                    fill="#170006" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-shape">
                    <img src="{{ asset('assets/img/shape/about-shape.png') }}" alt="">
                </div>
            </section>
            <!-- feature + about section end  -->

            <!-- program section start  -->
            <section class="program pt-120 pb-120 bg_img" data-background="{{ asset('assets/img/bg/program-bg.jpg') }}">
                <div class="container">
                    <div class="program-top pos-rel">
                        <div class="section-title mb-60">
                            <span class="sub-title">Our academics offerings</span>
                            <h1 class="title">Explore our programs</h1>
                        </div>
                        <div class="clg-testimonial-carousel">
                            <div class="xb-arrow xb-program-prev"><img src="{{ asset('assets/img/icon/left-arrrow.png') }}" alt=""></div>
                            <div class="xb-arrow xb-program-next"><img src="{{ asset('assets/img/icon/right-arrow01.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="clg-program-wrapper">
                    <div class="program-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="clg-program_inner pos-rel">
                                    <div class="xb-item--img">
                                        <a href="course-single.html"><img src="{{ asset('assets/img/program/program-img02.png') }}" alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--inner mr-80">
                                            <h2 class="xb-item--tilte mb-15"><a href="course-single.html">Graduate Programs</a></h2>
                                            <ul class="xb-item--meta">
                                                <li><img src="{{ asset('assets/img/icon/pro-book.png') }}" alt="">8 lessons</li>
                                                <li><img src="{{ asset('assets/img/icon/pro-man.png') }}" alt="">450 students</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clg-pro-btn">
                                        <a href="course-single.html"><img src="{{ asset('assets/img/icon/right-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-program_inner pos-rel">
                                    <div class="xb-item--img">
                                        <a href="course-single.html"><img src="{{ asset('assets/img/program/program-img03.png') }}" alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--inner mr-80">
                                            <h2 class="xb-item--tilte mb-15"><a href="course-single.html">Arts in Communication</a>
                                            </h2>
                                            <ul class="xb-item--meta">
                                                <li><img src="{{ asset('assets/img/icon/pro-book.png') }}" alt="">8 lessons</li>
                                                <li><img src="{{ asset('assets/img/icon/pro-man.png') }}" alt="">450 students</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clg-pro-btn">
                                        <a href="course-single.html"><img src="{{ asset('assets/img/icon/right-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-program_inner pos-rel">
                                    <div class="xb-item--img">
                                        <a href="course-single.html"><img src="{{ asset('assets/img/program/program-img01.png') }}" alt=""></a>
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--inner mr-80">
                                            <h2 class="xb-item--tilte mb-15"><a href="course-single.html">computer science -CS</a>
                                            </h2>
                                            <ul class="xb-item--meta">
                                                <li><img src="{{ asset('assets/img/icon/pro-book.png') }}" alt="">8 lessons</li>
                                                <li><img src="{{ asset('assets/img/icon/pro-man.png') }}" alt="">450 students</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clg-pro-btn">
                                        <a href="course-single.html"><img src="{{ asset('assets/img/icon/right-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- program section end  -->

            <!-- fanfact section start  -->
            <section class="fanfact pt-120 pb-120">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Explore us</span>
                        <h2 class="title">Edubost By The Numbers</h2>
                    </div>
                    <div class="row mt-none-30">
                        <div class="col-lg-4 mt-30">
                            <div class="clg-fanfact">
                                <div class="xb-fanfact_item clr-gray">
                                    <span class="xb-item--number">15+</span>
                                    <span class="xb-item--contant">Understanding the <br> average class size</span>
                                </div>
                                <div class="xb-fanfact_wrap mt-30">
                                    <div class="fanfact-img">
                                        <img src="{{ asset('assets/img/fanfact/fanfact-img01.png') }}" alt="">
                                    </div>
                                    <div class="xb-fanfact_item">
                                        <span class="xb-item--number">91%</span>
                                        <span class="xb-item--contant">Of first-year students they are receiving some financial
                                            aid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="clg-fanfact">
                                <div class="xb-fanfact_wrap clr-primary mb-30">
                                    <div class="fanfact-img">
                                        <img src="{{ asset('assets/img/fanfact/fanfact-img02.png') }}" alt="">
                                    </div>
                                    <div class="xb-fanfact_item">
                                        <span class="xb-item--number">91%</span>
                                        <span class="xb-item--contant">Of first-year students return for their second year</span>
                                    </div>
                                </div>
                                <div class="xb-fanfact_item clr-heading">
                                    <span class="xb-item--number">18,000+</span>
                                    <span class="xb-item--contant">Internship opportunities available to students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-30">
                            <div class="clg-fanfact">
                                <div class="xb-fanfact_item clr-violate">
                                    <span class="xb-item--number">$18k - $35k</span>
                                    <span class="xb-item--contant">Exploring the range of merit scholarships</span>
                                </div>
                                <div class="xb-fanfact_wrap clr-gray mt-30">
                                    <div class="fanfact-img">
                                        <img src="{{ asset('assets/img/fanfact/fanfact-img03.png') }}" alt="">
                                    </div>
                                    <div class="xb-fanfact_item">
                                        <span class="xb-item--number">60%</span>
                                        <span class="xb-item--contant">Exploring opportunities for students to study abroad</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fanfact section end  -->

            <!-- cta section start  -->
            <section class="cta">
                <div class="cta-wrapper bg_img pt-115 pb-120" data-background="{{ asset('assets/img/cta/cta-bg.jpg') }}">
                    <div class="container">
                        <div class="xb-cta-wrap z-1 pos-rel">
                            <div class="section-title text-center mb-40">
                                <span class="sub-title">Let's Get Started</span>
                                <h2 class="title mb-35">Where all belong</h2>
                                <p class="cta-content">We believe education is enriched by the unique perspectives and experiences
                                    each student brings, and we are committed to fostering an environment that celebrates and values
                                    diversity in all its forms. It is central to our mission to embrace and encourage diversity,
                                    equity and inclusion (DE&I).</p>
                            </div>
                            <div class="cta-btn btns justify-content-center ul_li">
                                <a class="thm-btn thm-btn--white" href="courses.html">find the right program
                                    <span><img src="{{ asset('assets/img/icon/book.svg') }}" alt=""></span>
                                </a>
                                <a class="thm-btn thm-btn--white" href="contact.html">start you application
                                    <span><img src="{{ asset('assets/img/icon/learning.png') }}" alt=""></span>
                                </a>
                                <a class="thm-btn thm-btn--white" href="contact.html">request information
                                    <span><img src="{{ asset('assets/img/icon/warning.png') }}" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta section end  -->

            <!-- testimonial section start  -->
            <section class="testimonial pt-120 pb-120">
                <div class="container">
                    <div class="clg-testimonial-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="clg-testimonial pos-rel">
                                    <div class="xb-item--holder pos-rel">
                                        <div class="xb-item--quote">
                                            <img src="{{ asset('assets/img/icon/qua-02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--content">
                                            <p>"EduFord College has truly exceeded my expectations in every way. The
                                                state-of-the-art facilities, from the cutting-edge labs to the well-equipped
                                                classrooms, have created an ideal environment for learning. The faculty are
                                                incredibly supportive, always ready to offer guidance and encouragement."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-testimonial pos-rel">
                                    <div class="xb-item--holder pos-rel">
                                        <div class="xb-item--quote">
                                            <img src="{{ asset('assets/img/icon/qua-02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--content">
                                            <p>"EduFord College has truly exceeded my expectations in every way. The
                                                state-of-the-art facilities, from the cutting-edge labs to the well-equipped
                                                classrooms, have created an ideal environment for learning. The faculty are
                                                incredibly supportive, always ready to offer guidance and encouragement."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-testimonial pos-rel">
                                    <div class="xb-item--holder pos-rel">
                                        <div class="xb-item--quote">
                                            <img src="{{ asset('assets/img/icon/qua-02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--content">
                                            <p>"EduFord College has truly exceeded my expectations in every way. The
                                                state-of-the-art facilities, from the cutting-edge labs to the well-equipped
                                                classrooms, have created an ideal environment for learning. The faculty are
                                                incredibly supportive, always ready to offer guidance and encouragement."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-testimonial pos-rel">
                                    <div class="xb-item--holder pos-rel">
                                        <div class="xb-item--quote">
                                            <img src="{{ asset('assets/img/icon/qua-02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--content">
                                            <p>"EduFord College has truly exceeded my expectations in every way. The
                                                state-of-the-art facilities, from the cutting-edge labs to the well-equipped
                                                classrooms, have created an ideal environment for learning. The faculty are
                                                incredibly supportive, always ready to offer guidance and encouragement."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-testimonial pos-rel">
                                    <div class="xb-item--holder pos-rel">
                                        <div class="xb-item--quote">
                                            <img src="{{ asset('assets/img/icon/qua-02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--content">
                                            <p>"EduFord College has truly exceeded my expectations in every way. The
                                                state-of-the-art facilities, from the cutting-edge labs to the well-equipped
                                                classrooms, have created an ideal environment for learning. The faculty are
                                                incredibly supportive, always ready to offer guidance and encouragement."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="clg-testimonial pos-rel">
                                    <div class="xb-item--holder pos-rel">
                                        <div class="xb-item--quote">
                                            <img src="{{ asset('assets/img/icon/qua-02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--content">
                                            <p>"EduFord College has truly exceeded my expectations in every way. The
                                                state-of-the-art facilities, from the cutting-edge labs to the well-equipped
                                                classrooms, have created an ideal environment for learning. The faculty are
                                                incredibly supportive, always ready to offer guidance and encouragement."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clg-slider-nav-inner pos-rel">
                        <div class="clg-tes-slider_nav swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="clg-testimonial_author">
                                        <div class="xb-item--avater">
                                            <img src="{{ asset('assets/img/testimonial/clg-tes-img01.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--holder">
                                            <div class="xb-item--name">David Martinez</div>
                                            <div class="xb-item--desig">MBA in Project 2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clg-testimonial_author">
                                        <div class="xb-item--avater">
                                            <img src="{{ asset('assets/img/testimonial/clg-tes-img02.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--holder">
                                            <div class="xb-item--name">David Martinez</div>
                                            <div class="xb-item--desig">MBA in Project 2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clg-testimonial_author">
                                        <div class="xb-item--avater">
                                            <img src="{{ asset('assets/img/testimonial/clg-tes-img03.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--holder">
                                            <div class="xb-item--name">David Martinez</div>
                                            <div class="xb-item--desig">MBA in Project 2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clg-testimonial_author">
                                        <div class="xb-item--avater">
                                            <img src="{{ asset('assets/img/testimonial/clg-tes-img04.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--holder">
                                            <div class="xb-item--name">David Martinez</div>
                                            <div class="xb-item--desig">MBA in Project 2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clg-testimonial_author">
                                        <div class="xb-item--avater">
                                            <img src="{{ asset('assets/img/testimonial/clg-tes-img05.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--holder">
                                            <div class="xb-item--name">David Martinez</div>
                                            <div class="xb-item--desig">MBA in Project 2016</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clg-testimonial_author">
                                        <div class="xb-item--avater">
                                            <img src="{{ asset('assets/img/testimonial/clg-tes-img03.png') }}" alt="">
                                        </div>
                                        <div class="xb-item--holder">
                                            <div class="xb-item--name">David Martinez</div>
                                            <div class="xb-item--desig">MBA in Project 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clg-testimonial-carousel ul_li">
                            <div class="xb-swiper-arrow tm-swiper-arrow-prev"><svg width="18" height="15" viewBox="0 0 18 15"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 14C7.83333 12.8333 6.2 9.9 1 7.5C2.83333 6.83333 6.8 4.7 8 1.5" stroke="white"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7.5H1.5" stroke="white" stroke-width="2" />
                                </svg></div>
                            <div class="xb-swiper-arrow tm-swiper-arrow-next"><svg width="18" height="15" viewBox="0 0 18 15"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 14C10.1667 12.8333 11.8 9.9 17 7.5C15.1667 6.83333 11.2 4.7 10 1.5" stroke="white"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M0 7.5H16.5" stroke="white" stroke-width="2" />
                                </svg></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial section end  -->

            <!-- event section start  -->
            <section class="event clg-event-bg pos-rel pt-115 pb-120">
                <div class="container">
                    <div class="z-2 pos-rel">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Events</span>
                            <h1 class="title">Upcoming Events</h1>
                        </div>
                        <div class="clg-event-wrap mt-20 ul_li_between">
                            <div class="xb-item--left ul_li mt-20">
                                <div class="xb-item--date text-center">
                                    <span class="xb-item--moth">Aug</span>
                                    <span class="xb-item--number">25</span>
                                </div>
                                <div class="xb-item--holder mt-20">
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">Mastering the Fundamentals
                                            of Mediation Certificate Training</a></h2>
                                    <p class="xb-item--content">15 CNDR presents its' annual 40-hour comprehensive mediation
                                        practitioner training. Held completely in-person on the UC Law SF Campus.</p>
                                </div>
                            </div>
                            <div class="xb-item--right mt-20">
                                <span class="xb-item--time">11:00 AM 2:00 PM</span>
                                <div class="event-btn mt-25">
                                    <a class="more-btn" href="event-single.html">get a ticket
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.9585 1.6665H8.0418C7.17513 1.6665 6.4668 2.3665 6.4668 3.23317V4.0165C6.4668 4.88317 7.1668 5.58317 8.03346 5.58317H11.9585C12.8251 5.58317 13.5251 4.88317 13.5251 4.0165V3.23317C13.5335 2.3665 12.8251 1.6665 11.9585 1.6665Z"
                                                    fill="#170006" />
                                                <path
                                                    d="M14.3667 4.01689C14.3667 5.34189 13.2834 6.42523 11.9584 6.42523H8.0417C6.7167 6.42523 5.63337 5.34189 5.63337 4.01689C5.63337 3.55023 5.13337 3.25856 4.7167 3.47523C3.5417 4.10023 2.7417 5.34189 2.7417 6.76689V14.6086C2.7417 16.6586 4.4167 18.3336 6.4667 18.3336H13.5334C15.5834 18.3336 17.2584 16.6586 17.2584 14.6086V6.76689C17.2584 5.34189 16.4584 4.10023 15.2834 3.47523C14.8667 3.25856 14.3667 3.55023 14.3667 4.01689ZM10.3167 14.1252H6.6667C6.32503 14.1252 6.0417 13.8419 6.0417 13.5002C6.0417 13.1586 6.32503 12.8752 6.6667 12.8752H10.3167C10.6584 12.8752 10.9417 13.1586 10.9417 13.5002C10.9417 13.8419 10.6584 14.1252 10.3167 14.1252ZM12.5 10.7919H6.6667C6.32503 10.7919 6.0417 10.5086 6.0417 10.1669C6.0417 9.82523 6.32503 9.54189 6.6667 9.54189H12.5C12.8417 9.54189 13.125 9.82523 13.125 10.1669C13.125 10.5086 12.8417 10.7919 12.5 10.7919Z"
                                                    fill="#170006" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clg-event-wrap mt-20 ul_li_between">
                            <div class="xb-item--left ul_li mt-20">
                                <div class="xb-item--date text-center">
                                    <span class="xb-item--moth">July</span>
                                    <span class="xb-item--number">28</span>
                                </div>
                                <div class="xb-item--holder mt-20">
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">International Training
                                            Program</a></h2>
                                    <p class="xb-item--content">International Training Program: Promoting Mediation Through Private
                                        and Court-Connected Mediation Centers The Center for Negotiation and Dispute Resolution.</p>
                                </div>
                            </div>
                            <div class="xb-item--right mt-20">
                                <span class="xb-item--time">11:00 AM 2:00 PM</span>
                                <div class="event-btn mt-25">
                                    <a class="more-btn" href="event-single.html">get a ticket
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.9585 1.6665H8.0418C7.17513 1.6665 6.4668 2.3665 6.4668 3.23317V4.0165C6.4668 4.88317 7.1668 5.58317 8.03346 5.58317H11.9585C12.8251 5.58317 13.5251 4.88317 13.5251 4.0165V3.23317C13.5335 2.3665 12.8251 1.6665 11.9585 1.6665Z"
                                                    fill="#170006" />
                                                <path
                                                    d="M14.3667 4.01689C14.3667 5.34189 13.2834 6.42523 11.9584 6.42523H8.0417C6.7167 6.42523 5.63337 5.34189 5.63337 4.01689C5.63337 3.55023 5.13337 3.25856 4.7167 3.47523C3.5417 4.10023 2.7417 5.34189 2.7417 6.76689V14.6086C2.7417 16.6586 4.4167 18.3336 6.4667 18.3336H13.5334C15.5834 18.3336 17.2584 16.6586 17.2584 14.6086V6.76689C17.2584 5.34189 16.4584 4.10023 15.2834 3.47523C14.8667 3.25856 14.3667 3.55023 14.3667 4.01689ZM10.3167 14.1252H6.6667C6.32503 14.1252 6.0417 13.8419 6.0417 13.5002C6.0417 13.1586 6.32503 12.8752 6.6667 12.8752H10.3167C10.6584 12.8752 10.9417 13.1586 10.9417 13.5002C10.9417 13.8419 10.6584 14.1252 10.3167 14.1252ZM12.5 10.7919H6.6667C6.32503 10.7919 6.0417 10.5086 6.0417 10.1669C6.0417 9.82523 6.32503 9.54189 6.6667 9.54189H12.5C12.8417 9.54189 13.125 9.82523 13.125 10.1669C13.125 10.5086 12.8417 10.7919 12.5 10.7919Z"
                                                    fill="#170006" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clg-event-wrap mt-20 ul_li_between">
                            <div class="xb-item--left ul_li mt-20">
                                <div class="xb-item--date text-center">
                                    <span class="xb-item--moth">sep</span>
                                    <span class="xb-item--number">22</span>
                                </div>
                                <div class="xb-item--holder mt-20">
                                    <h2 class="xb-item--title border-effect"><a href="event-single.html">Supreme Court Annual Review
                                            and Preview</a></h2>
                                    <p class="xb-item--content">Join us in the ARC of the 200 McAllister St. building to celebrate
                                        the new collage year with the Center for Business Law. Come meet CBL Faculty, Advisors.</p>
                                </div>
                            </div>
                            <div class="xb-item--right mt-20">
                                <span class="xb-item--time">11:00 AM 2:00 PM</span>
                                <div class="event-btn mt-25">
                                    <a class="more-btn" href="event-single.html">get a ticket
                                        <span>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.9585 1.6665H8.0418C7.17513 1.6665 6.4668 2.3665 6.4668 3.23317V4.0165C6.4668 4.88317 7.1668 5.58317 8.03346 5.58317H11.9585C12.8251 5.58317 13.5251 4.88317 13.5251 4.0165V3.23317C13.5335 2.3665 12.8251 1.6665 11.9585 1.6665Z"
                                                    fill="#170006" />
                                                <path
                                                    d="M14.3667 4.01689C14.3667 5.34189 13.2834 6.42523 11.9584 6.42523H8.0417C6.7167 6.42523 5.63337 5.34189 5.63337 4.01689C5.63337 3.55023 5.13337 3.25856 4.7167 3.47523C3.5417 4.10023 2.7417 5.34189 2.7417 6.76689V14.6086C2.7417 16.6586 4.4167 18.3336 6.4667 18.3336H13.5334C15.5834 18.3336 17.2584 16.6586 17.2584 14.6086V6.76689C17.2584 5.34189 16.4584 4.10023 15.2834 3.47523C14.8667 3.25856 14.3667 3.55023 14.3667 4.01689ZM10.3167 14.1252H6.6667C6.32503 14.1252 6.0417 13.8419 6.0417 13.5002C6.0417 13.1586 6.32503 12.8752 6.6667 12.8752H10.3167C10.6584 12.8752 10.9417 13.1586 10.9417 13.5002C10.9417 13.8419 10.6584 14.1252 10.3167 14.1252ZM12.5 10.7919H6.6667C6.32503 10.7919 6.0417 10.5086 6.0417 10.1669C6.0417 9.82523 6.32503 9.54189 6.6667 9.54189H12.5C12.8417 9.54189 13.125 9.82523 13.125 10.1669C13.125 10.5086 12.8417 10.7919 12.5 10.7919Z"
                                                    fill="#170006" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="xb-btn text-center mt-60">
                            <a class="thm-btn thm-btn--stroke-black" href="event.html">view all events
                                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.9585 1.6665H8.0418C7.17513 1.6665 6.4668 2.3665 6.4668 3.23317V4.0165C6.4668 4.88317 7.1668 5.58317 8.03346 5.58317H11.9585C12.8251 5.58317 13.5251 4.88317 13.5251 4.0165V3.23317C13.5335 2.3665 12.8251 1.6665 11.9585 1.6665Z"
                                            fill="#170006" />
                                        <path
                                            d="M14.3667 4.01689C14.3667 5.34189 13.2834 6.42523 11.9584 6.42523H8.0417C6.7167 6.42523 5.63337 5.34189 5.63337 4.01689C5.63337 3.55023 5.13337 3.25856 4.7167 3.47523C3.5417 4.10023 2.7417 5.34189 2.7417 6.76689V14.6086C2.7417 16.6586 4.4167 18.3336 6.4667 18.3336H13.5334C15.5834 18.3336 17.2584 16.6586 17.2584 14.6086V6.76689C17.2584 5.34189 16.4584 4.10023 15.2834 3.47523C14.8667 3.25856 14.3667 3.55023 14.3667 4.01689ZM10.3167 14.1252H6.6667C6.32503 14.1252 6.0417 13.8419 6.0417 13.5002C6.0417 13.1586 6.32503 12.8752 6.6667 12.8752H10.3167C10.6584 12.8752 10.9417 13.1586 10.9417 13.5002C10.9417 13.8419 10.6584 14.1252 10.3167 14.1252ZM12.5 10.7919H6.6667C6.32503 10.7919 6.0417 10.5086 6.0417 10.1669C6.0417 9.82523 6.32503 9.54189 6.6667 9.54189H12.5C12.8417 9.54189 13.125 9.82523 13.125 10.1669C13.125 10.5086 12.8417 10.7919 12.5 10.7919Z"
                                            fill="#170006" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clg-event-shape">
                    <div class="shape shape--one">
                        <img src="{{ asset('assets/img/shape/man-01.png') }}" alt="">
                    </div>
                    <div class="shape shape--two">
                        <img src="{{ asset('assets/img/shape/man-02.png') }}" alt="">
                    </div>
                    <div class="shape shape--three">
                        <img src="{{ asset('assets/img/shape/Vector01.png') }}" alt="">
                    </div>
                    <div class="shape shape--four">
                        <img src="{{ asset('assets/img/shape/Vector02.png') }}" alt="">
                    </div>
                    <div class="shape shape--five">
                        <img src="{{ asset('assets/img/shape/Vector03.png') }}" alt="">
                    </div>
                    <div class="shape shape--six">
                        <img src="{{ asset('assets/img/shape/Vector04.png') }}" alt="">
                    </div>
                    <div class="shape shape--seven">
                        <img src="{{ asset('assets/img/shape/Vector05.png') }}" alt="">
                    </div>
                    <div class="shape shape--eight">
                        <img src="{{ asset('assets/img/shape/Vector06.png') }}" alt="">
                    </div>
                    <div class="shape shape--nine">
                        <img src="{{ asset('assets/img/shape/Vector07.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- event section end  -->

            <!-- news section start  -->
            <section class="news news-bg pt-110 pb-165 bg_img" data-background="{{ asset('assets/img/bg/news-bg.jpg') }}">
                <div class="container">
                    <div class="xb-news-top ul_li_between mb-10">
                        <div class="section-title mb-20">
                            <span class="sub-title">Our academics news</span>
                            <h1 class="title">our latest news</h1>
                        </div>
                        <div class="news-btn mb-20">
                            <a class="thm-btn thm-btn--stroke-black" href="blog-2.html">more news
                                <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z"
                                            fill="#170006" />
                                    </svg></span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-20 mt-25">
                            <div class="news-wrap xb-news-left">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/news-img01.jpg') }}" alt="">
                                    <a href="blog-single.html" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant mt-25">
                                    <ul class="xb-item--meta list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Farugia</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">By Farugia</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="blog-single.html">EduFord College
                                            Announces New State-of-the-Art Science Building..</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-20 mt-25">
                            <div class="news-wrap xb-news-rihgt pb-25 mb-25 ul_li">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/news-img02.png') }}" alt="">
                                    <a href="blog-single.html" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant">
                                    <ul class="xb-item--meta list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Farugia</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">By Farugia</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="blog-single.html">EduFord Celebrates
                                            Record Number of Graduates in 2024..</a></h3>
                                </div>
                            </div>
                            <div class="news-wrap xb-news-rihgt pb-25 mb-25 ul_li">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/news-img03.png') }}" alt="">
                                    <a href="blog-single.html" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant">
                                    <ul class="xb-item--meta  list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Farugia</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">By Farugia</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="blog-single.html">EduFord Celebrates
                                            Record Number of Graduates in 2024..</a></h3>
                                </div>
                            </div>
                            <div class="news-wrap xb-news-rihgt ul_li">
                                <div class="xb-item--img pos-rel">
                                    <img src="{{ asset('assets/img/news/news-img04.png') }}" alt="">
                                    <a href="blog-single.html" class="div-link"></a>
                                </div>
                                <div class="xb-news-contant">
                                    <ul class="xb-item--meta list-unstyled ul_li">
                                        <li><img src="{{ asset('assets/img/icon/profile-circle.svg') }}" alt="">By Farugia</li>
                                        <li><img src="{{ asset('assets/img/icon/note.svg') }}" alt="">By Farugia</li>
                                    </ul>
                                    <h3 class="xb-item--title mt-10 border-effect"><a href="blog-single.html">EduFord Celebrates
                                            Record Number of Graduates in 2024..</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- news section end  -->

        </main>

        <!-- footer strt -->
        <footer class="footer clg-footer bg_img pos-rel" data-background="{{ asset('assets/img/bg/footer-bg02.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11 text-center">
                        <div class="clg-footer-cta">
                            <ul class="xb-contact ul_li list-unstyled">
                                <li>+61-8-8967 5983 <span class="ml-10"><img src="{{ asset('assets/img/icon/calling-icon01.png') }}"
                                            alt=""></span></li>
                                <li><span class="mr-10"><img src="{{ asset('assets/img/icon/email01.svg') }}" alt=""></span>edubost@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clg-footer-main">
                    <div class="clg-footer_widget mb-70">
                        <ul class="xb-links list-unstyled ul_li_between">
                            <li><a href="#!">How to apply</a></li>
                            <li><a href="#!">Schedule</a></li>
                            <li><a href="#!">Scholarships</a></li>
                            <li><a href="#!">About Us</a></li>
                            <li><a href="#!">Courses</a></li>
                            <li><a href="#!">News</a></li>
                            <li><a href="#!">Events</a></li>
                            <li><a href="#!">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clg-footer-newsletter">
                <div class="container">
                    <div class="clg-footer_wrap ul_li">
                        <div class="xb-item--details mt-20">
                            <p>25/1, N.I.A. Post Office, Balewadi, Bristol – BS1 5TA, England, United Kingdom</p>
                        </div>
                        <div class="xb-item--email mt-20">
                            <div class="xb-input-field pos-rel">
                                <input type="text" placeholder="Enter your email">
                                <div class="xb-img">
                                    <img src="{{ asset('assets/img/icon/email.svg') }}" alt="">
                                </div>
                                <button class="xb-field-btn"><img src="{{ asset('assets/img/icon/arrow01.png') }}" alt=""></button>
                            </div>
                        </div>
                        <div class="xb-item--meta mt-20">
                            <span>Social media</span>
                            <ul class="xb-item--social_link ul_li mt-15">
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
            </div>
            <div class="footer-bottom pt-35 pb-35">
                <div class="copyright text-center">
                    <p>Copyright © 2024 <a href="index.html">Edubost</a>. All rights reserved.</p>
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
