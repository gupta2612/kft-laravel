@extends('../layout/main')

@section('title') {{ 'Contact Us' }} @endsection

@section('content')
        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->


        <!-- Contact Us Page Area start -->
        <section class="contact-us-page pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-2">
                        <div class="br-30 bgc-yellow p-60 mt-200 wow fadeInUp delay-0-3s animated">
                            <h4>Get In Touch:</h4>
                            <p style="color: white;">We are at your disposal 7 days a week!</p>
                            <div class="row justify-content-between mt-40">
                                <div class="col-sm-5">
                                    <div class="info-item mb-30" style="color: white;">
                                        <h6>Address:</h6>
                                        <i>Joda Mandir Marg, Tiwari Tola, Bagaha, Bihar 845101, India</i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-item">
                                        <h6>Online Connect:</h6>
                                        <b style="color: white;"><i><a href="#">connect@kumarfoundationteam.com</a></i></b>
                                    </div>
                                    <div class="info-item">
                                        <h6>Phone:</h6>
                                        <b style="color: white;"><i><a href="calto:+919470813508">+91-9470813508</a></i></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="contact-form" class="contact-form mt-105 rmt-45 wow fadeInUp delay-0-2s" name="contact-form" action="#" method="post">
                           <div class="section-title mb-30">
                               <h5>Have Question? Drop A Line</h5>
                               <p>Your email address will not be published. Required fields are marked *</p>
                           </div>
                            <input type="text" id="name" name="full-name" class="form-control" value="" placeholder="Complete Name" required="">
                            <input type="email" id="contact-email" name="contact-email" class="form-control" value="" placeholder="Email Address" required="">
                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required="">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Description" required=""></textarea>
                            <button type="submit" class="theme-btn mt-10 br-10">
                                <span class="btn-text normal">Submit Now</span>
                                <span class="btn-text hover">Submit Now</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Page Area end -->

        @endsection