<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Tickets</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/blocks.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/layouts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/modules.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/widgets-styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="{{ asset('front/css/rtl.css') }}">-->

    <!--External fonts-->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

    <!-- Header -->

    <div class="top-bar top-bar-dark">
        <div class="container">
            <div class="top-bar-contact">
                <div class="contact-item">
                    <img src="{{ asset('front/img/united-states-of-america.png') }}" class="flags" alt="flag">
                    <select>
                        <option value="1">English</option>
                        <option value="2">Germany</option>
                        <option value="3">Ukrainian</option>
                    </select>
                </div>

                <div class="contact-item">
                    +234 703 5621 550
                </div>

                <div class="contact-item">
                    <a href="#">info@tickets.com</a>
                </div>

                <div class="contact-item">
                    <span>Mon. - Fri.</span> 10:00 - 21:00
                </div>
            </div>

            <div class="login-block">
                <img src="{{ asset('front/img/signin_dark.png') }}" class="sign-in">
                <a href="#">Sign in</a>
            </div>

            <div class="follow_us">
                <span>Follow us:</span>
                <div class="socials">

                    <a href="" class="social__item">
                        <img src="front/svg/circle-facebook.svg" alt="facebook">
                    </a>

                    <a href="" class="social__item">
                        <img src="front/svg/twitter.svg" alt="twitter">
                    </a>

                    <a href="" class="social__item">
                        <img src="front/svg/google.svg" alt="google">
                    </a>

                    <a href="" class="social__item">
                        <img src="front/svg/youtube.svg" alt="youtube">
                    </a>

                </div>
            </div>

            <a href="#" class="top-bar-close" id="top-bar-close-js">
                <span></span>
                <span></span>
            </a>

        </div>
    </div>

    <header class="header" id="site-header">

        <div class="container">

            <div class="header-content-wrapper">

                <a href="#" id="top-bar-js" class="top-bar-link">TOPBAR</a>

                <div class="logo">
                    <a href="/" class="full-block-link"></a>
                    <img src="{{ asset('front/img/logo-eye.png') }}" alt="Seosight">
                    <div class="logo-text">
                        <div class="logo-title">Seosight</div>
                        <div class="logo-sub-title">Movies, Concerts, Events...</div>
                    </div>
                </div>

                <nav id="primary-menu" class="primary-menu">

                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span class="mob-menu--title">Menu</span>
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
                    </a>

                    <!-- menu-icon-wrapper -->

                    <ul class="primary-menu-menu">
                        <li class="menu-item-has-children">
                            <a href="index.html">Home</a>
                        </li>

                        <li class="">
                            <a href="03_services.html">Services</a>
                            <ul class="dropdown">
                                <li class="megamenu-item-info">
                                    <h5 class="megamenu-item-info-title">List of Services</h5>
                                    <p class="megamenu-item-info-text">Choose a Service</p>
                                </li>
                                <li class="hover-ver2">
                                    <a href="05_service_details_localseo.html"><i class="seoicon-pin-map"></i>
                                        Local SEO
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="07_service_email_marketing.html"><i class="seoicon-mail-send"></i>
                                        Email Marketing
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="06_service_detail.html"><i class="seoicon-chat-comment"></i>
                                        Social Media Marketing
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="04_service_detail_seo.html">
                                        <i class="seoicon-search"></i>
                                        Search Engine Optimization
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="08_service_ppc_management.html"><i class="seoicon-button"></i>
                                        Pay Per Click Management
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="03_services.html">
                                        <i class="seoicon-pie-graph-split"></i>
                                        Services Promo List
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="#">Case Studies</a>
                            <ul class="dropdown">
                                <li class="">
                                    <a href="11_case_studies.html">
                                        Case Studies Page
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="12_project_details_ver_01.html">
                                        Project details ver1
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="13_project_details_ver_02.html">
                                        Project details ver2
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-megamenu menu-item-has-children">
                            <a href="#">Pages</a>

                            <div class="megamenu" style="background-image: url('{{ asset('front/img/menu-bg.png') }}');">
                                <div class="megamenu-row">

                                    <div class="col3">
                                        <ul>
                                            <li class="megamenu-item-info">
                                                <h5 class="megamenu-item-info-title">Standard Pages</h5>
                                                <p class="megamenu-item-info-text">Pages that every website needs.</p>
                                            </li>

                                            <li>
                                                <a href="02_abouts.html">Our Agency<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="21_seo_analysis.html">SEO Analysis<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                            <li>
                                                <a href="10_testimonials.html">Testimonials <i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="09_our_clients.html">Our Special Clients<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="34_pricing-tables.html">Pricing Packages<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="404.html">404 Page<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul>
                                            <li class="megamenu-item-info">
                                                <h5 class="megamenu-item-info-title">Features</h5>
                                                <p class="megamenu-item-info-text">Features of Our Digital Agency.</p>
                                            </li>

                                            <li>
                                                <a href="36_slider-with-photo.html">Main slider with photo<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="25_navigation-flat.html">Stunning Headers<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                            <li>
                                                <a href="37_navigation-with-photo.html">Sub-headers with photo<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                            <li>
                                                <a href="38_photo-elements.html">Photo elements<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                            <li>
                                                <a href="32_testimonials.html">Our Testimonials<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul>

                                            <li class="megamenu-item-info">
                                                <h5 class="megamenu-item-info-title">Web Elements</h5>
                                                <p class="megamenu-item-info-text">Awesome header and title style
                                                    variations and many more.</p>
                                            </li>

                                            <li>
                                                <a href="typography.html">Typography<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="33_charts_counters.html">Charts &amp; Graphs<i class="seoicon-right-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="buttons.html">Buttons<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                            <li>
                                                <a href="28_popup-search.html">Popup Search<i class="seoicon-right-arrow"></i></a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="col3">
                                        <ul>
                                            <li>
                                                <div class="google-logo">
                                                    <img src="{{ asset('front/img/google-logo.png') }}" alt="logo">
                                                </div>

                                                <p class="google-text">The Yoast Analytics plugin lets you easily
                                                    connect your website to Google Analytics and keep track of all
                                                    your site traffic and key metrics in real-time.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="">
                            <a href="14_blog.html">Blog</a>
                        </li>
                        <li class="">
                            <a href="#">Shop</a>
                            <ul class="dropdown">
                                <li class="">
                                    <a href="16_shop.html">
                                        Shop Page
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="17_product_details.html">
                                        Product Details
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="20_checkout.html">
                                        Checkout
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="19_cart.html">
                                        Shopping Cart
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="">
                            <a href="22_contacts.html">Contacts</a>
                        </li>
                    </ul>
                </nav>

                <ul class="nav-add">
                    <!-- <li class="cart">

                        <a href="#" class="js-cart-animate">
                            <i class="seoicon-basket"></i>
                            <span class="cart-count">1</span>
                        </a>

                        <div class="cart-popup-wrap">
                            <div class="popup-cart">
                                <h4 class="title-cart">No products in the cart!</h4>
                                <p class="subtitle">Please make your choice.</p>
                                <div class="btn btn-small btn--dark">
                                    <span class="text">view all catalog</span>
                                </div>
                            </div>
                        </div>

                    </li> -->

                    <li class="search search_main">
                        <a href="#" class="js-open-search">
                            <i class="seoicon-loupe"></i>
                        </a>
                    </li>
                </ul>

                <div class="user-menu open-overlay">
                    <a href="#" class="user-menu-content  js-open-aside">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>

        </div>

    </header>
    <!-- ... End Header -->

    <!-- Right-menu -->

    <div class="mCustomScrollbar" data-mcs-theme="dark">

        <div class="popup right-menu">

            <div class="right-menu-wrap">

                <div class="user-menu-close js-close-aside">
                    <a href="#" class="user-menu-content  js-clode-aside">
                        <span></span>
                        <span></span>
                    </a>
                </div>

                <div class="logo">
                    <a href="index.html" class="full-block-link"></a>
                    <img src="{{ asset('front/img/logo-eye.png') }}" alt="Seosight">
                    <div class="logo-text">
                        <div class="logo-title">Seosight</div>
                    </div>
                </div>

                <p class="text">Investigationes demonstraverunt lectores legere me lius quod
                    ii legunt saepius est etiam processus dynamicus.
                </p>

            </div>

                <div class="widget login">

                    <h4 class="login-title">Sign In to Your Account</h4>
                    <input class="email input-standard-grey" placeholder="Username or Email" type="text">
                    <input class="password input-standard-grey" placeholder="Password" type="password">
                    <div class="login-btn-wrap">

                        <div class="btn btn-medium btn--dark btn-hover-shadow">
                            <span class="text">login now</span>
                            <span class="semicircle"></span>
                        </div>

                        <div class="remember-wrap">

                            <div class="checkbox">
                                <input id="remember" type="checkbox" name="remember" value="remember">
                                <label for="remember">Remember Me</label>
                            </div>

                        </div>

                    </div>

                    <div class="helped">Lost your password?</div>
                    <div class="helped">Register Now</div>

                </div>



            <div class="widget contacts">

                <h4 class="contacts-title">Get In Touch</h4>
                <p class="contacts-text">Lorem ipsum dolor sit amet, duis metus ligula amet in purus,
                    vitae donec vestibulum enim, tincidunt massa sit, convallis ipsum.
                </p>

                <div class="contacts-item">
                    <img src="{{ asset('front/img/contact4.png') }}" alt="phone">
                    <div class="content">
                        <a href="#" class="title">8 800 567.890.11</a>
                        <p class="sub-title">Mon-Fri 9am-6pm</p>
                    </div>
                </div>

                <div class="contacts-item">
                    <img src="{{ asset('front/img/contact5.png') }}" alt="phone">
                    <div class="content">
                        <a href="#" class="title">info@seosight.com</a>
                        <p class="sub-title">online support</p>
                    </div>
                </div>

                <div class="contacts-item">
                    <img src="{{ asset('front/img/contact6.png') }}" alt="phone">
                    <div class="content">
                        <a href="#" class="title">Melbourne, Australia</a>
                        <p class="sub-title">795 South Park Avenue</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- ... End Right-menu -->

    <div class="content-wrapper">
        <div class="header-spacer"></div>

        @yield('content')

    <!-- Counters -->

    <div class="container-fluid">
        <div class="row bg-green-color">
            <div class="container">
                <div class="row">
                    <div class="counters">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="counter-item">
                                <div class="counter-numbers counter">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="96" data-from="2">96%</span>
                                    <div class="units">%</div>
                                </div>
                                <span class="counter-title">Client Retention</span>
                                <div class="counter-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="counter-item">
                                <div class="counter-numbers counter">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="10" data-from="0">10</span>
                                </div>
                                <span class="counter-title">Years of Service</span>
                                <div class="counter-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="counter-item">
                                <div class="counter-numbers counter">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="70" data-from="2">230+</span>
                                    <div class="units">+</div>
                                </div>
                                <span class="counter-title">Professionals</span>
                                <div class="counter-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="counter-item">
                                <div class="counter-numbers counter">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="690" data-from="400">690+</span>
                                    <div class="units">+</div>
                                </div>
                                <span class="counter-title">Satisfied Clients</span>
                                <div class="counter-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Counters -->


    <!-- Recent-case -->

    <div class="container">
        <div class="row medium-padding120">
            <div class="recent-case align-center">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="heading align-center">
                                <h4 class="h1 heading-title">Recent Case Studies</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">Claritas est etiam processus dynamicus,
                                    qui sequitur mutationem consuetudium.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{ asset('front/img/case1.jpg') }}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{ asset('front/img/case2.jpg') }}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">Claritas est etiam processus dynamicus</h6>
                                </div>
                            </div>

                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="{{ asset('front/img/case3.jpg') }}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="11_case_studies.html" class="btn btn-medium btn--dark">
                        <span class="text">All Projects</span>
                        <span class="semicircle"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- End Recent-case -->


    <!-- Testimonial-slider -->

    <div class="container-fluid">
        <div class="row">
            <div class="testimonial-slider scrollme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Happy Clients
                                    About Us</h4>
                                <div class="heading-line">
                                    <span class="short-line bg-yellow-color"></span>
                                    <span class="long-line bg-yellow-color"></span>
                                </div>
                                <p class="heading-text c-white">Claritas est etiam processus dynamicus, qui lectorum.
                                </p>
                            </div>
                            <div class="signature js-animate-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="60">
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4"
                                          d="M24.78 42.5C11.28 41.06.96 36 1.16 26.86 1.62 11.6 16.76 3.6 28.13 3.25c5.44-.16 9.8 2.38 10.2 5.8.86 7.66-19.23 15.62-19.23 15.62s17.86-6.57 24.66 2.2c2.8 3.6-11.8 10.65-11.8 10.65s-8.8 3.35-7.65-.24c1.78-5.52 16.8-10.1 18.42-10.3 3.17-.4 7.1-.4 8 .12 1.33.78-1.7 4.14-.94 4.86.76.72 3.82-2.55 3.94-1.97.12.57-.64 2.63.58 3 1.2.38 2.3-1.1 4.28-1.5 1.97-.4 1.83-.44 3.6-.12 1.76.32 2.1.64 3.47 1.4 1.36.74.86 2.22 1.96 1.6 1.1-.6 1.43-4.16 2.44-4.04 1.02.1.03 5.38 1.63 4.5 1.6-.85 4.74-7.97 4.74-7.97s-.82 4.04 0 3.93c3.14-.4 8.12-2.57 14.48-3.36 6.37-.78 8.67-.35 11 .24 1.92.48 2.67 2.3 2.67 2.3"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4"
                                          d="M113.7 15.75s-1.1-2.78-3.6-2.08c-5.83 1.62-16.2 7.68-16.44 15.63-.46 16.3 21.1 11.14 22.7 11 13.6-1.2 17.38-9.96 17.36-14.48-.06-14.3-19.07-10.3-21.07-10.07-7.9.92-10.48 1.57-10.48 1.57"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M119.7 1.05c-2.53 13.9-5.1 27.83-2.53 41.44" stroke-linecap="round"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M133.6 27.8c-6.62-.42-12.6.37-17.36 3.35"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4"
                                          d="M131.52 32.77s3.95-.13 8.34-.93c2.4-.43 5-1.73 7.87-1.85 2.87-.12 1.74 1.44 3.6 1.38 4.62-.14 7.98-.3 14.92-.7 6.95-.4 9.76-2.76 12.86-.92 1.7 1 1.4 3.13 1.4 3.13"
                                          stroke-linecap="round"></path>
                                    <path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M153.52 31.03s2.27-2.74-.7-3.35c-3.36-.7-3.7 2.43-3.7 2.43"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">

                            <div class="testimonial-item">
                                <!-- Slider main container -->
                                <div class="swiper-container testimonial__thumb overflow-visible" data-effect="fade" data-loop="false">

                                    <div class="swiper-wrapper">
                                        <div class="testimonial-slider-item swiper-slide">
                                            <div class="testimonial-content">
                                                <p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
                                                    nihil imperdiet doming id quod mazim.
                                                </p>
                                                <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                                <a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

                                            </div>
                                            <div class="avatar" data-swiper-parallax="-50">
                                                <img src="{{ asset('front/img/avatar.png') }}" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="testimonial-slider-item swiper-slide">
                                            <div class="testimonial-content">
                                                <p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
                                                    nihil imperdiet doming id quod mazim.
                                                </p>
                                                <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                                <a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

                                            </div>
                                            <div class="avatar" data-swiper-parallax="-50">
                                                <img src="{{ asset('front/img/avatar.png') }}" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="testimonial-slider-item swiper-slide">
                                            <div class="testimonial-content">
                                                <p class="text" data-swiper-parallax="-200">Nam liber tempor cum soluta nobis eleifend option congue
                                                    nihil imperdiet doming id quod mazim.
                                                </p>
                                                <a href="#" class="author" data-swiper-parallax="-150">Jonathan Simpson</a>
                                                <a href="#" class="company" data-swiper-parallax="-150">Envato Market</a>

                                            </div>
                                            <div class="avatar" data-swiper-parallax="-50">
                                                <img src="{{ asset('front/img/avatar.png') }}" alt="avatar">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>

                                    <div class="quote">
                                        <i class="seoicon-quotes"></i>
                                    </div>
                                </div>

                                <div class="testimonial__thumb-img">
                                    <img src="{{ asset('front/img/testimonial1.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-img">
                    <img src="{{ asset('front/img/testimonial2.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <!-- End Testimonial-slider -->


    <!-- Clients -->

    <div class="section">
        <div class="client-carousel medium-padding120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="heading align-center">
                            <h4 class="h1 heading-title">Partners</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">Qui mutationem consuetudium. </p>
                        </div>
                    </div>
                </div>

                <div class="theme-module clients-slider-module">

                    <div class="swiper-container pagination-bottom" data-show-items="4">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img src="{{ asset('front/img/client1-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img src="{{ asset('front/img/client2-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img src="{{ asset('front/img/client3-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img src="{{ asset('front/img/client4-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                        </div>

                        <!--Prev Next Arrows-->
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>

                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Clients -->


    <!-- Subscribe Form -->

    <div class="container-fluid bg-green-color">
        <div class="row">
            <div class="container">

                <div class="row">

                    <div class="subscribe scrollme">

                        <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                            <h4 class="subscribe-title">Email Newsletters!</h4>
                            <form class="subscribe-form" method="post" action="import.php">
                                <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                                <button class="subscr-btn">subscribe
                                    <span class="semicircle--right"></span>
                                </button>
                            </form>
                            <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

                        </div>

                        <div class="images-block">
                            <img src="{{ asset('front/img/subscr-gear.png') }}" alt="gear" class="gear">
                            <img src="{{ asset('front/img/subscr1.png') }}" alt="mail" class="mail">
                            <img src="{{ asset('front/img/subscr-mailopen.png') }}" alt="mail" class="mail-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Subscribe Form -->
</div>



<!-- Footer -->

<footer class="footer js-fixed-footer" id="site-footer">
    <div class="container">
        <div class="row">

            <div class="info">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h3 class="heading-title">Seosight Company!</h3>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham
                            liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt
                            lectores legere me lius quod ii legunt saepius parum claram.
                        </p>
                    </div>

                    <div class="socials">
                        <a href="" class="social__item">
                            <img src="svg/circle-facebook.svg" alt="facebook">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/twitter.svg" alt="twitter">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/google.svg" alt="google">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/youtube.svg" alt="youtube">
                        </a>
                        <a href="" class="social__item">
                            <img src="svg/rss.svg" alt="rss">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="services">
                        <div class="heading">
                            <h3 class="heading-title">Services Provided</h3>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <ul class="list list--primary">
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">SEO Services</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Pay-per-click</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Social Media</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Web Analytics</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Content Management</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Blog Management</a>
                            </li>
                        </ul>

                        <ul class="list list--primary">
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Virtual Marketing</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Email Marketing</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <a href="#">Keyword Analytics</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="contacts">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">8 800 567.890.11</a>
                            <p class="sub-title">Mon-Fri 9am-6pm</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" points="  54,17 32,36 10,17 " stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10.9" x2="26" y1="48" y2="36"/><path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><g><circle cx="45.4" cy="38.3" fill="#DCE9EE" r="0.9"/><path d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z" fill="#f15b26"/></g></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">info@seosight.com</a>
                            <p class="sub-title">online support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   " stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polygon><circle cx="32" cy="32" fill="none" r="4" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle><path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">Melbourne, Australia</a>
                            <p class="sub-title">795 South Park Avenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span>
                        Copyright © 2016 <a href="index.html" class="sub-footer__link">Seosight,</a>
                        Designed by <a href="https://themeforest.net/user/themefire/portfolio">themefire</a>
                    </span>

                    <span>Developed by <a href="https://themeforest.net/user/crumina/portfolio">Crumina</a></span>
                    <span>Only on <a href="https://themeforest.net/user/crumina/portfolio">Envato Market</a></span>

                    <a class="back-to-top" href="#">
                        <svg class="back-to-top">
                            <use xlink:href="#to-top"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- End Footer -->

<svg style="display:none;">
    <symbol id="arrow-left" viewBox="122.9 388.2 184.3 85">
        <path d="M124.1,431.3c0.1,2,1,3.8,2.4,5.2c0,0,0.1,0.1,0.1,0.1l34.1,34.1c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4
        c1.6-1.6,2.4-3.7,2.4-5.9s-0.9-3.9-2.4-5.5l-19.9-19.5h11.1c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3h-17.6c-1.1,0-2.1,0.6-2.5,1.6
        c-0.4,1-0.2,2.1,0.6,2.9l24.4,24.4c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9
        l-34.2-34.2c0,0,0,0,0,0c-0.6-0.6-0.8-1.4-0.9-1.9c0,0,0,0,0,0c0-0.2,0-0.4,0-0.6c0.1-0.6,0.3-1.1,0.7-1.6c0-0.1,0.1-0.1,0.2-0.2
        l34.1-34.1c0.6-0.6,1.3-0.9,2.1-0.9s1.6,0.3,2.1,0.9c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1l-24.4,24.4c-0.8,0.8-1,2-0.6,3
        c0.4,1,1.4,1.7,2.5,1.7h125.7c1.5,0,2.7-1,2.7-2.5c0-1.5-1.2-2.5-2.7-2.5H152.6l19.9-20.1c1.6-1.6,2.4-3.8,2.4-6s-0.9-4.4-2.4-6
        c-1.6-1.6-3.7-2.5-5.9-2.5s-4.3,0.9-5.9,2.4l-34.1,34.1c-0.2,0.2-0.3,0.3-0.5,0.5c-1.1,1.2-1.8,2.8-2,4.4
        C124.1,430.2,124.1,430.8,124.1,431.3C124.1,431.3,124.1,431.3,124.1,431.3z"></path>
        <path d="M283.3,427.9h14.2c1.7,0,3,1.3,3,3c0,1.7-1.4,3-3,3H175.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h122.4
        c4.6,0,8.4-3.9,8.4-8.5c0-4.6-3.8-8.5-8.4-8.5h-14.2c-1.5,0-2.7,1-2.7,2.5C280.7,426.9,281.8,427.9,283.3,427.9z"></path>
    </symbol>
    <symbol id="arrow-right" viewBox="122.9 388.2 184.3 85">
        <path d="M305.9,430.2c-0.1-2-1-3.8-2.4-5.2c0,0-0.1-0.1-0.1-0.1l-34.1-34.1c-1.6-1.6-3.7-2.5-5.9-2.5c-2.2,0-4.3,0.9-5.9,2.4
        c-1.6,1.6-2.4,3.7-2.4,5.9s0.9,4.1,2.4,5.7l19.9,19.6h-11.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h17.6c1.1,0,2.1-0.7,2.5-1.7
        c0.4-1,0.2-2.2-0.6-2.9l-24.4-24.5c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.6,0.3,2.1,0.9
        l34.2,34.2c0,0,0,0,0,0c0.6,0.6,0.8,1.4,0.9,1.9c0,0,0,0,0,0c0,0.2,0,0.4,0,0.6c-0.1,0.6-0.3,1.1-0.7,1.6c0,0.1-0.1,0.1-0.2,0.2
        l-34.1,34.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1l24.4-24.4c0.8-0.8,1-1.9,0.6-2.9
        c-0.4-1-1.4-1.6-2.5-1.6H158.1c-1.5,0-2.7,1-2.7,2.5c0,1.5,1.2,2.5,2.7,2.5h119.3l-19.9,20c-1.6,1.6-2.4,3.7-2.4,6s0.9,4.4,2.4,5.9
        c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4l34.1-34.1c0.2-0.2,0.3-0.3,0.5-0.5c1.1-1.2,1.8-2.8,2-4.4
        C305.9,431.3,305.9,430.8,305.9,430.2C305.9,430.2,305.9,430.2,305.9,430.2z"></path>
        <path d="M146.7,433.9h-14.2c-1.7,0-3-1.3-3-3c0-1.7,1.4-3,3-3h122.4c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3H132.4
        c-4.6,0-8.4,3.9-8.4,8.5c0,4.6,3.8,8.5,8.4,8.5h14.2c1.5,0,2.7-1,2.7-2.5C149.3,434.9,148.1,433.9,146.7,433.9z"></path>
    </symbol>
    <symbol id="to-top" viewBox="0 0 32 32">
        <path d="M17,22 L25.0005601,22 C27.7616745,22 30,19.7558048 30,17 C30,14.9035809 28.7132907,13.1085075 26.8828633,12.3655101
         L26.8828633,12.3655101 C26.3600217,9.87224935 24.1486546,8 21.5,8 C20.6371017,8 19.8206159,8.19871575 19.0938083,8.55288165
         C17.8911816,6.43144875 15.6127573,5 13,5 C9.13400656,5 6,8.13400656 6,12 C6,12.1381509 6.00400207,12.275367 6.01189661,12.4115388
          L6.01189661,12.4115388 C4.23965876,13.1816085 3,14.9491311 3,17 C3,19.7614237 5.23249418,22 7.99943992,22 L16,22 L16,16 L12.75,19.25
           L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z" id="cloud-upload"></path>
    </symbol>

</svg>

<!-- Overlay Search -->

<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form>
                    <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay Search -->

<!-- JS Script -->
<script type="text/javascript" src="/js/app.js"></script>
<script src="{{ asset('front/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('front/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('front/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('front/js/theme-plugins.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="{{ asset('front/js/form-actions.js') }}"></script>

<script src="{{ asset('front/js/velocity.min.js') }}"></script>
<script src="{{ asset('front/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('front/js/animation.velocity.min.js') }}"></script>



<!-- ...end JS Script -->

</body>
</html>
