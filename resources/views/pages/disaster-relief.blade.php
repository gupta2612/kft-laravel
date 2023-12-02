@extends('../layout/main')

@section('title') {{ 'Disaster Relief' }} @endsection

@section('content')
        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Disaster Relief</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Disaster Relief</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Our Mission Area start -->
        <section class="our-mission-area py-70 rel z-1 bgs-cover" style="background-image: url({{ asset('assets/images/about/about-bg.png') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="our-mission-image mb-15 rmb-55 wow fadeInRight delay-0-2s">
                            <img src="{{ asset('assets/images/about/about-left.png') }}" alt="About">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="our-mission-content mb-15 rmb-30 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title style-two" style="background-image: url({{ asset('assets/images/background/section-title-bg.png') }});">Our mission is simple</span>
                                <h3>We work for you, and we’re not going anywhere</h3>
                            </div>
                            <p>Friends of the Earth International is highly decentralised: comprising autonomous organisations with a shared analysis of the root causes of today's most pressing environmental and social issues.</p>
                            <p>Roughly half of the 73 member organisations call themselves "Friends of the Earth" in their own languages; the others use different names.</p>
                            <div class="our-mission-btns pt-10">
                                <a href="about.html" class="theme-btn br-10 mt-20">
                                    <span class="btn-text normal">Who We Are?</span>
                                    <span class="btn-text hover">Who We Are?</span>
                                </a>
                                <a class="read-more style-two mt-20" href="/the-kft-team/donate" ><i class="fas fa-heart"></i> Donate For Nature</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Mission Area end -->
        <!-- Causes Area start -->
        <section class="causes-two-area py-70">
            <div class="container">
                <div class="section-title text-center mb-15">
                    <h2>Our Recent Causes</h2>
                    <p>adipisicing elit Rem autem voluptatem obcaecati</p>
                    <span class="line"></span>
                    <img class="drops" src="{{ asset('assets/images/shapes/dorps.png') }}" alt="Drops">
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="cause-item-two wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('assets/images/causes/cause-two1.jpg') }}" alt="Causes">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Energy</a>
                                <span class="price"><span>$149 Raised</span> of $1,000</span>
                                <h5><a href="/the-kft-team/donate">Economic justice and resisting neoliberalism</a></h5>
                                <div class="progress">
                                  <div class="progress-bar" style="width: 50%"><span>20%</span></div>
                                </div>
                            </div>
                            <ul class="cause-footer">
                                <li><i class="fal fa-calendar-minus"></i> 31 Jul, 2022</li>
                                <li><i class="fal fa-tshirt"></i> 21 Donors</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cause-item-two wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="{{ asset('assets/images/causes/cause-two2.jpg') }}" alt="Causes">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Family Health</a>
                                <span class="price"><span>$220 Raised</span> of $1,079</span>
                                <h5><a href="/the-kft-team/donate">Economic justice and resisting neoliberalism</a></h5>
                                <div class="progress">
                                  <div class="progress-bar" style="width: 50%"><span>20%</span></div>
                                </div>
                            </div>
                            <ul class="cause-footer">
                                <li><i class="fal fa-calendar-minus"></i> 31 Jul, 2022</li>
                                <li><i class="fal fa-tshirt"></i> 21 Donors</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cause-item-two wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="{{ asset('assets/images/causes/cause-two3.jpg') }}" alt="Causes">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Water Pollution</a>
                                <span class="price"><span>$180 Raised</span> of $1,610</span>
                                <h5><a href="/the-kft-team/donate">Economic justice and resisting neoliberalism</a></h5>
                                <div class="progress">
                                  <div class="progress-bar" style="width: 50%"><span>20%</span></div>
                                </div>
                            </div>
                            <ul class="cause-footer">
                                <li><i class="fal fa-calendar-minus"></i> 31 Jul, 2022</li>
                                <li><i class="fal fa-tshirt"></i> 21 Donors</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="more-btn-with-text text-center mt-30 wow fadeInUp delay-0-2s">
                    <i>Want to see our focused area’s. <a href="/the-kft-team/donate">Click here to View More</a></i>
                </div>
            </div>
        </section>
        <!-- Causes Area end -->

                <!-- Testimonials Area start -->
                <section class="testimonials-area py-70 rel z-2 bgs-100" style="background-image: url({{ asset('assets/images/testimonials/testimonials-bg.png') }});">
                    <div class="container">
                        <div class="testimonials-active">
                            <div class="testimonial-item">
                                <div class="row align-items-center justify-content-center">
                                   <div class="col-lg-3 col-md-4">
                                       <div class="testimonial-image wow fadeInLeft delay-0-2s">
                                           <img src="{{ asset('assets/images/testimonials/author.png') }}" alt="Author">
                                       </div>
                                   </div>
                                    <div class="col-lg-7 col-md-8">
                                        <div class="testimonial-content wow fadeInRight delay-0-2s">
                                            <div class="section-title text-white mb-15">
                                                <h3>Charitxa Reviews</h3>
                                                <span>adipisicing elit Rem autem voluptatem obcaecati</span>
                                                <img class="drops" src="{{ asset('assets/images/shapes/dorps.png') }}" alt="Drops">
                                            </div>
                                            <p>“ One person can make all the difference for a child across the globe...Children International is living proof that, although helping just one person. ”</p>
                                            <span class="title mt-20">- SHALYNN P, CI SPONSOR SINCE 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="row align-items-center justify-content-center">
                                   <div class="col-lg-3 col-md-4">
                                       <div class="testimonial-image wow fadeInLeft delay-0-2s">
                                           <img src="{{ asset('assets/images/testimonials/author.png') }}" alt="Author">
                                       </div>
                                   </div>
                                    <div class="col-lg-7 col-md-8">
                                        <div class="testimonial-content wow fadeInRight delay-0-2s">
                                            <div class="section-title text-white mb-15">
                                                <h3>Charitxa Reviews</h3>
                                                <span>adipisicing elit Rem autem voluptatem obcaecati</span>
                                                <img class="drops" src="{{ asset('assets/images/shapes/dorps.png') }}" alt="Drops">
                                            </div>
                                            <p>“ One person can make all the difference for a child across the globe...Children International is living proof that, although helping just one person. ”</p>
                                            <span class="title mt-20">- SHALYNN P, CI SPONSOR SINCE 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonials Area end -->
                <!-- Blog Area start -->
                <section class="blog-area-two py-20 rpt-85 rel z-1">
                    <div class="container">
                        <div class="feature-two-wrap mt-30 wow fadeInUp delay-0-2s">
                            <div class="row no-gap justify-content-center">
                                <div class="col-xl-4 col-md-6">
                                    <div class="feature-two-item text-white" style="background-image: url({{ asset('assets/images/features/feature-two-bg1.jpg') }});">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/features/feature-icon1.png') }}" alt="Icon">
                                        </div>
                                        <h5><a href="javascript:void(0)">Give Donation</a></h5>
                                        <p>Lorem ipsum dolor sit amet, cons ili adipiscing  elitnec nec.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="feature-two-item" style="background-image: url({{ asset('assets/images/features/feature-two-bg2.jpg') }});">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/features/feature-icon2.png') }}" alt="Icon">
                                        </div>
                                        <h5><a href="javascript:void(0)">Support Us</a></h5>
                                        <p>Sucker sea toad candiru rocket danio tilefish stingray.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="feature-two-item text-white" style="background-image: url({{ asset('assets/images/features/feature-two-bg3.jpg') }});">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/features/feature-icon3.png') }}" alt="Icon">
                                        </div>
                                        <h5><a href="javascript:void(0)">Become A Volunteer</a></h5>
                                        <p>Midshipman dartfish Modoc suc yellowtail kingfish.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog Area end -->

                @endsection