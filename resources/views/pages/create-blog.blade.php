@extends('../layout/main')

@section('title') {{ 'Create Blog' }} @endsection

@section('content')
        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Create Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Create Blog</li>
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
                    <div class="col-lg-12">
                        <form id="contact-form" class="contact-form mt-105 rmt-45 wow fadeInUp delay-0-2s" name="contact-form" action="SaveContact" method="POST">
                            @csrf
                           <div class="section-title mb-30">
                               <h5>Have Question? Drop A Line</h5>
                               <p>Your email address will not be published. Required fields are marked *</p>
                           </div>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Complete Name">
                            <span class="has-error with-errors">@error('name')
                                {{ $message }}
                                @enderror</span>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email Address">
                            <span class="has-error with-errors">@error('email')
                                {{ $message }}
                                @enderror</span>
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Subject">
                            <span class="has-error with-errors">@error('subject')
                                {{ $message }}
                                @enderror</span>
                            <textarea name="description" class="form-control" rows="6" placeholder="Description">{{ old('description') }}</textarea>
                            <span class="has-error with-errors">@error('description')
                                {{ $message }}
                                @enderror</span>
                            <div class="mt-10">
                                <button type="submit" class="theme-btn br-10">
                                    <span class="btn-text normal">Submit Now</span>
                                    <span class="btn-text hover">Submit Now</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Page Area end -->

        @endsection