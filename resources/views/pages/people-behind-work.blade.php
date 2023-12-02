@extends('../layout/main')

@section('title') {{ 'People Behind Work' }} @endsection

@section('content')


        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">People Behind Work</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">People Behind Work</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Service Details Area start -->
        <section class="service-details-area py-110 rpt-105">
            <div class="container">
                <div class="row">
                   <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="main-sidebar rmb-75">
                            <div class="widget widget-services wow fadeInUp delay-0-2s">
                                <h5 class="widget-title">Who We Are</h5>
                                <ul class="widget-content list-style-three">
                                    <li><a href="/who-we-are/about-us">About Us</a></li>
                                    <li><a href="/who-we-are/vision-mission">Vision & Mission</a></li>
                                    <li><a href="/who-we-are/where-we-work">Where We Work</a></li>
                                    <li class="active"><a href="/who-we-are/people-behind-work">People Behind Work</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-campaign wow fadeInUp delay-0-2s">
                                <div class="priorities-details-campaign">
                                    <div class="campaign-content bgc-yellow">
                                        <div class="section-title">
                                            <span class="sub-title"><i><b>We're Near to Our</b></i></span>
                                            <h3>Campaign</h3>
                                            <p>Foundation awarded ₹86,667,390 in funding to 1,306 grants.</p>
                                        </div>
                                        <div class="cause-price">
                                            <span>Goal <b>₹39,860</b></span>
                                            <span>Raised <b>₹21,160</b></span>
                                        </div>
                                        <div class="progress">
                                          <div class="progress-bar" style="width: 74%"></div>
                                          <span>74%</span>
                                        </div>
                                    </div>
                                    <a href="/the-kft-team/donate" class="theme-btn style-three w-100 d-flex">
                                        <span class="btn-text normal"><i class="fas fa-heart"></i> Take Action</span>
                                        <span class="btn-text hover"><i class="fas fa-heart"></i> Take Action</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="service-details-image wow fadeInUp delay-0-3s">
                            <img src="{{ asset('assets/images/services/service-details.jpg') }}" alt="Service Details">
                        </div>
                        <div class="service-details-content wow fadeInUp delay-0-2s">
                            <div class="icon">
                                <img src="{{ asset('assets/images/services/details-icon.png') }}" alt="Icon">
                            </div>
                            <div class="title">
                                <h4>About Us</h4>
                                <h5>SHORT STORY BEHIND UDAY FOUNDATION</h5>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p><br>
                            <h4>Investment Involved</h4>
                            <p>Lorim ipsuy veli Nam nec tellus ipsuy veli Nam nec tellus a odia odio ibh vulputate cursus. Duis sed odio sit ie t nibh vulputate cursus a sit ipsuy veli Nam nec tellus ipsuy.</p>
                            <ul class="list-style-four mt-25">
                                <li>Odio sit amet nibh vulputate cura sit.</li>
                                <li>Amet nibh vulputate cursus a sit ipsuy.</li>
                                <li>Nam nec tellus a odia odio vulputate.</li>
                                <li>Duis sed odio sit amet nibh putate.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details Area end -->

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