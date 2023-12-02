@extends('../layout/main')

@section('title') {{ 'Online Media' }} @endsection

@section('content')

        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Online Media</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Online Media</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Event Area start -->
        <section class="event-page pt-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="event-item style-two wow fadeInUp delay-0-2s">
                            <div class="content">
                               <div class="date">
                                   <b>17</b>
                                   <span>AUG 2022</span>
                               </div>

                                <h5><a href="javascript:void(0)">WHO helps Samoa & Tokelau to prepare for COVID-19</a></h5>
                                <p>The Feeding America network is the nation’s largest domestic hunger-relief organization, working...</p>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/images/events/event1.jpg') }}" alt="Event">
                                <span class="location"><i class="fas fa-map-marker"></i> India</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 text-center">
                        <ul class="pagination flex-wrap mt-50 rmt-25 wow fadeInUp delay-0-2s">
                            <li class="page-item"><a class="prev" href="#">Prev</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <span class="page-link">
                                    2
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><span class="dots"><i class="fal fa-ellipsis-h"></i></span></li>
                            <li class="page-item"><a class="page-link" href="#">16</a></li>
                            <li class="page-item"><a class="next" href="#">Next</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Event Area end -->

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
                                        <h5><a href="#">Give Donation</a></h5>
                                        <p>Lorem ipsum dolor sit amet, cons ili adipiscing  elitnec nec.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="feature-two-item" style="background-image: url({{ asset('assets/images/features/feature-two-bg2.jpg') }});">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/features/feature-icon2.png') }}" alt="Icon">
                                        </div>
                                        <h5><a href="#">Support Us</a></h5>
                                        <p>Sucker sea toad candiru rocket danio tilefish stingray.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="feature-two-item text-white" style="background-image: url({{ asset('assets/images/features/feature-two-bg3.jpg') }});">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/features/feature-icon3.png') }}" alt="Icon">
                                        </div>
                                        <h5><a href="#">Become A Volunteer</a></h5>
                                        <p>Midshipman dartfish Modoc suc yellowtail kingfish.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog Area end -->

                @endsection