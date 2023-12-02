@extends('../layout/main')

@section('title') {{ 'Health' }} @endsection

@section('content')

        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Health</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Health</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- About Area Four Start -->
        <section class="about-four pt-50 pb-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-four-content rmb-55 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-15">
                                <span class="sub-title style-two" style="background-image: url({{ asset('assets/images/background/section-title-bg.png') }});">You can make a difference!</span>
                                <h3>Charitxa relieves the suffering of those affected <span>by conflict</span></h3>
                            </div>
                            <p>Across the globe, 617 million children are missing basic math and reading skills. We’re a nonprofit delivering the education they need, and we need your help. You can change the course of a child’s life.</p>
                            <ul class="list-style-three">
                                <li>Personalized learning</li>
                                <li>Trusted content</li>
                                <li>Tools to empower teachers</li>
                            </ul>
                            <a href="/the-kft-team/donate" class="theme-btn style-three mt-45">
                                <span class="btn-text normal"><i class="fas fa-heart"></i> Donate Now</span>
                                <span class="btn-text hover"><i class="fas fa-heart"></i> Donate Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-four-image text-center wow fadeInRight delay-0-2s">
                            <img src="{{ asset('assets/images/about/about-four.png') }}" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area Four End -->

        <!-- Services Area start -->
        <section class="pt-40 pb-40 counter-four-area z-1 bgs-cover" style="background-image: url({{ asset('assets/images/background/counter-four-bg.jpg') }});">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-9">
                        <div class="row justify-content-center">
                           <div class="col-lg-10">
                                <div class="section-title mb-15">
                                    <span class="sub-title style-two" style="background-image: url({{ asset('assets/images/background/section-title-bg.png') }});">Medical Research & Clinical Care</span>
                                    <h2 style="color: white;">Charitxa Medical Services</h2>
                                </div>
                           </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item wow fadeInUp delay-0-2s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services/icon1.png') }}" alt="Icon">
                                    </div>
                                    <h5><a href="javascript:void(0)">Ophthalmology</a></h5>
                                    <p>Aliq is notm hendr erit a augue insu image tes.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services/icon2.png') }}" alt="Icon">
                                    </div>
                                    <h5><a href="javascript:void(0)">Pulmonary</a></h5>
                                    <p>Aliq is notm hendr erit a augue insu image tes.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item wow fadeInUp delay-0-6s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services/icon3.png') }}" alt="Icon">
                                    </div>
                                    <h5><a href="javascript:void(0)">Cardiology</a></h5>
                                    <p>Aliq is notm hendr erit a augue insu image tes.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item wow fadeInUp delay-0-2s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services/icon4.png') }}" alt="Icon">
                                    </div>
                                    <h5><a href="javascript:void(0)">Gastroenterology</a></h5>
                                    <p>Aliq is notm hendr erit a augue insu image tes.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item wow fadeInUp delay-0-4s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services/icon5.png') }}" alt="Icon">
                                    </div>
                                    <h5><a href="javascript:void(0)">Urology</a></h5>
                                    <p>Aliq is notm hendr erit a augue insu image tes.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item wow fadeInUp delay-0-6s">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/services/icon6.png') }}" alt="Icon">
                                    </div>
                                    <h5><a href="javascript:void(0)">Vaccination</a></h5>
                                    <p>Aliq is notm hendr erit a augue insu image tes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- HServices Area end -->

        <!-- Causes Area start -->
        <section class="causes-area py-70 rel z-1">
            <div class="container">
               <div class="section-title text-center mb-15 wow fadeInUp delay-0-2s">
                   <h2>Our Recent Causes</h2>
                   <p>adipisicing elit Rem autem voluptatem obcaecati</p>
                   <span class="line"></span>
                   <img class="drops" src="{{ asset('assets/images/shapes/dorps.png') }}" alt="Drops">
               </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="cause-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="{{ asset('assets/images/causes/cause1.jpg') }}" alt="Causes">
                                <div class="donation-raised">
                                   <span class="price">₹12,385</span>
                                    <span class="text">Donation Raised</span>
                                </div>
                            </div>
                            <div class="content">
                               <span class="goal-price"><i class="fas fa-heart"></i> Goal : ₹170,000</span>
                                <h5><a href="#">Donate Dry Ration & Food</a></h5>
                                <span class="location"><i class="fas fa-map-marker"></i> Bihar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cause-item wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="{{ asset('assets/images/causes/cause2.jpg') }}" alt="Causes">
                                <div class="donation-raised">
                                   <span class="price">₹1,410</span>
                                    <span class="text">Donation Raised</span>
                                </div>
                            </div>
                            <div class="content">
                               <span class="goal-price"><i class="fas fa-heart"></i> Goal : ₹170,000</span>
                                <h5><a href="#">Death Anniversary Food Donation</a></h5>
                                <span class="location"><i class="fas fa-map-marker"></i> India</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cause-item wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="{{ asset('assets/images/causes/cause3.jpg') }}" alt="Causes">
                                <div class="donation-raised">
                                   <span class="price">₹16,010</span>
                                    <span class="text">Donation Raised</span>
                                </div>
                            </div>
                            <div class="content">
                               <span class="goal-price"><i class="fas fa-heart"></i> Goal : ₹170,000</span>
                                <h5><a href="#">Birthdays Food Donation</a></h5>
                                <span class="location"><i class="fas fa-map-marker"></i> India</span>
                            </div>
                        </div>
                    </div>
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