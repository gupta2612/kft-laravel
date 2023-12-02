@extends('../layout/main')

@section('title') {{ 'Donate Now' }} @endsection

@section('content')
        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Donate Now</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Donate Now</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Donate Form Area start -->
        <section class="donate-form-area py-70 bgs-cover" style="background-image: url({{ asset('assets/images/background/donation-bg.jpg') }})">
            <div class="container">
               <div class="row justify-content-center">
                   <div class="col-xl-9 col-lg-11">
                       <form class="donate-form-wrap wow fadeInUp delay-0-2s" action="#">
                            <div class="section-title mb-30">
                                <h3>Invest in children's education today.</h3>
                                <p>50USD can support a child in learning to read and write for year.</p>
                            </div>
                            <div class="select-donation-price">
                                <div class="radio-item">
                                    <input type="radio" name="sizes" id="pricee50">
                                    <label for="pricee50">50</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="sizes" id="pricee100" checked="">
                                    <label for="pricee100">100</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="sizes" id="pricee150">
                                    <label for="pricee150">150</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="sizes" id="pricee200">
                                    <label for="pricee200">200</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="sizes" id="pricee250">
                                    <label for="pricee250">250</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="sizes" id="pricee300">
                                    <label for="pricee300">300</label>
                                </div>
                            </div>
                            <div class="custom-donation-price">
                                <input type="text" placeholder="Enter Custom Amount">
                                <button class="theme-btn style-three">
                                    <span class="btn-text normal">Contribute Now</span>
                                    <span class="btn-text hover">Contribute Now</span>
                                </button>
                            </div>
                        </form>
                   </div>
               </div>
            </div>
        </section>
        <!-- Donate Form Area end -->

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