<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> @yield('title') || {{ config('app.name') }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Smooch&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div>

        <!-- main header -->
        <header class="main-header header-one bgc-yellow">

            <div class="header-top-wrap rel z-5 pt-5 pb-5 rpt-10 rpb-5">
                <div class="container">
                    <div class="header-top">
                     <div class="social-style-one mb-5">
                         <a href="#"><i class="fab fa-facebook-f"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-instagram"></i></a>
                         <a href="#"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                        <ul>
                            <li><a href="/the-kft-team/donate"><b style="color: white;"> Feed A Needy With Just Rs.11/- | Donate Now </b></a></li>
                            <li><b style="color: white;">हर कदम आपके साथ</b></li>
                        </ul>
                    </div>
                </div>
            </div>

             <!--Header-Upper-->
             <div class="header-upper">
                 <div class="container container-1335 clearfix">

                     <div class="header-inner rel d-flex">
                         <div class="logo-outer align-self-center">
                             <div class="logo"><a href="/"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo"></a></div>
                         </div>

                         <div class="nav-outer ms-lg-auto clearfix">
                             <!-- Main Menu -->
                             <nav class="main-menu navbar-expand-lg">
                                 <div class="navbar-header py-10">
                                    <div class="mobile-logo">
                                        <a href="/">
                                             <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                     <!-- Toggle Button -->
                                     <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                         <span class="icon-bar"></span>
                                         <span class="icon-bar"></span>
                                         <span class="icon-bar"></span>
                                     </button>
                                 </div>

                                 <div class="navbar-collapse collapse clearfix">
                                     <ul class="navigation clearfix">
                                         <li class="dropdown"><a href="#">Who We Are</a>
                                             <ul>
                                                <li><a href="/who-we-are/about-us">About Us</a></li>
                                                <li><a href="/who-we-are/vision-mission">Vision & Mission</a></li>
                                                <li><a href="/who-we-are/where-we-work">Where We Work</a></li>
                                                <li><a href="/who-we-are/people-behind-work">People Behind Work</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">Our Work</a>
                                             <ul>
                                                <li><a href="/our-work/health">Health</a></li>
                                                <li><a href="/our-work/education">Education</a></li>
                                                <li><a href="/our-work/livelihood">Livelihood</a></li>
                                                <li><a href="/our-work/privileged-children">Privileged Children</a></li>
                                                <li><a href="/our-work/disaster-relief">Disaster Relief</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">Award & Media</a>
                                             <ul>
                                                <li><a href="/award-and-media/award-recognitions">Award & Recognitions</a></li>
                                                <li><a href="/award-and-media/press-release">Press Release</a></li>
                                                <li><a href="/award-and-media/online-media">Online Media</a></li>
                                                <li><a href="/award-and-media/tv-media">TV Media</a></li>
                                                <li><a href="/award-and-media/gallery">Gallery</a></li>
                                                <li><a href="/award-and-media/video">Video</a></li>
                                             </ul>
                                         </li>
                                         <li><a href="/blog">The KFT Blog</a>
                                         </li>
                                         <li><a href="/contact">Contact Us</a>
                                         </li>
                                     </ul>
                                 </div>
                             </nav>
                             <!-- Main Menu End-->
                         </div>
                         <!-- Menu Button -->
                         <div class="menu-btns">
                             <a href="/the-kft-team/donate" class="theme-btn">
                                 <span class="btn-text normal"><i class="fas fa-heart"></i> Donate Now</span>
                                 <span class="btn-text hover"><i class="fas fa-heart"></i> Donate Now</span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <!--End Header Upper-->
         </header>

         <div class="main">
             @yield('content')
         </div>

                  <!-- footer area start -->
                  <footer class="main-footer footer-two rel z-2 pt-50 pb-40 bgs-cover footer-white" style="background-image: url({{ asset('assets/images/footer/footer-two-bg.png') }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="footer-widget widget_about wow fadeInUp delay-0-2s">
                                    <div class="footer-logo mb-25">
                                        <a href="#"><img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo"></a>
                                    </div>
                                    <p>Foundation awarded Rs. 86,667,390 in funding to 1,306 grants fiscal year 2019.</p>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="footer-widget widget_menu wow fadeInUp delay-0-3s">
                                            <h4 class="footer-title">Who We Are</h4>
                                            <ul>
                                                <li><a href="/who-we-are/about-us">About Us</a></li>
                                                <li><a href="/who-we-are/vision-mission">Vision & Mission</a></li>
                                                <li><a href="/who-we-are/where-we-work">Where We Work</a></li>
                                                <li><a href="/who-we-are/people-behind-work">People Behind Work</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="footer-widget widget_menu wow fadeInUp delay-0-4s">
                                            <h4 class="footer-title">Our Approaches</h4>
                                            <ul>
                                                <li><a href="/award-and-media/award-recognitions">Award</a></li>
                                                <li><a href="/blog">The KFT Blog</a></li>
                                                <li><a href="/award-and-media/online-media">Online Media</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="footer-widget widget_menu wow fadeInUp delay-0-5s">
                                            <h4 class="footer-title">Areas of Focus</h4>
                                            <ul>
                                                <li><a href="/our-work/health">Health</a></li>
                                                <li><a href="/our-work/education">Education</a></li>
                                                <li><a href="/our-work/livelihood">Livelihood</a></li>
                                                <li><a href="/our-work/privileged-children">Privileged Children</a></li>
                                                <li><a href="/our-work/disaster-relief">Disaster Relief</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="footer-widget widget_social wow fadeInUp delay-0-6s">
                                            <h4 class="footer-title">Connect on Social</h4>
                                            <div class="social-style-one">
                                                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                                                <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10">
                                <div class="section-title text-white text-center mb-10 wow fadeInUp delay-0-2s">
                                    <span class="sub-title">Join our email list</span>
                                </div>
                                <form class="newsletter-form wow fadeInUp delay-0-4s" action="#">
                                    <input id="email" type="email" placeholder="Enter your email address" required="">
                                    <button class="theme-btn style-three" type="submit">
                                        <span class="btn-text normal">Subscribe <span>Now</span></span>
                                        <span class="btn-text hover">Subscribe <span>Now</span></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="footer-bottom bgc-yellow text-center py-10">
                    <div class="container">
                        <div class="copyright-text wow fadeInUp delay-0-2s">
                            <p>© Copyright 2023 <a href="/">KF Team</a>. All rights reserved.</p>
                        </div>
                        <div class="footer-bottom-menu wow fadeInUp delay-0-4s">
                            <ul>
                                <li><a href="/">Site Map</a></li>
                                <li><a href="/">Privacy policy</a></li>
                                <li><a href="/">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer area end -->

                <!-- Scroll Top Button -->
                <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

            </div>
            <!--End pagewrapper-->


            <!-- Jquery -->
            <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
            <!-- Bootstrap -->
            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
            <!-- Appear Js -->
            <script src="{{ asset('assets/js/appear.min.js') }}"></script>
            <!-- Slick -->
            <script src="{{ asset('assets/js/slick.min.js') }}"></script>
            <!-- Magnific Popup -->
            <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
            <!-- Nice Select -->
            <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
            <!-- Image Loader -->
            <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
            <!-- Isotope -->
            <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
            <!--  WOW Animation -->
            <script src="{{ asset('assets/js/wow.min.js') }}"></script>
            <!-- Custom script -->
            <script src="{{ asset('assets/js/script.js') }}"></script>

        </body>
        </html>