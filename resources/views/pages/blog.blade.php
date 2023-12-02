@extends('../layout/main')

@section('title') {{ 'Blog' }} @endsection

@section('content')
        <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover pt-145 rpt-135 pb-95" style="background-image: url({{ asset('assets/images/background/banner.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white">
                    <h2 class="page-title wow fadeInRight delay-0-2s">Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="/"><i class="fas fa-home-lg-alt"></i> home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Blog Page Area start -->
        <section class="blog-page-area py-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-four-item wow fadeInUp delay-0-2s">
                                    <div class="image br-30">
                                        <img src="{{ asset('assets/images/blog/blog-four1.jpg') }}" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>By <a href="#">James Colies</a></li>
                                            <li>22 Comments</li>
                                        </ul>
                                        <h5><a href="/blog/blog-details">How to get start fundraising for kids</a></h5>
                                        <a class="date" href="#">26 Aug 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-four-item wow fadeInUp delay-0-4s">
                                    <div class="image br-30">
                                        <img src="{{ asset('assets/images/blog/blog-four2.jpg') }}" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>By <a href="#">James Colies</a></li>
                                            <li>22 Comments</li>
                                        </ul>
                                        <h5><a href="/blog/blog-details">Students take the initiative to help children </a></h5>
                                        <a class="date" href="#">26 Aug 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-four-item wow fadeInUp delay-0-2s">
                                    <div class="image br-30">
                                        <img src="{{ asset('assets/images/blog/blog-four3.jpg') }}" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>By <a href="#">James Colies</a></li>
                                            <li>22 Comments</li>
                                        </ul>
                                        <h5><a href="/blog/blog-details">The right guideline to donate for homeless people</a></h5>
                                        <a class="date" href="#">30 mar 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-four-item wow fadeInUp delay-0-4s">
                                    <div class="image br-30">
                                        <img src="{{ asset('assets/images/blog/blog-four4.jpg') }}" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>By <a href="#">James Colies</a></li>
                                            <li>22 Comments</li>
                                        </ul>
                                        <h5><a href="/blog/blog-details">How does the malnutrition affect children?</a></h5>
                                        <a class="date" href="#">30 mar 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-four-item wow fadeInUp delay-0-2s">
                                    <div class="image br-30">
                                        <img src="{{ asset('assets/images/blog/blog-four5.jpg') }}" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>By <a href="#">James Colies</a></li>
                                            <li>22 Comments</li>
                                        </ul>
                                        <h5><a href="/blog/blog-details">Mauris gravida lacus metus ac sagittis</a></h5>
                                        <a class="date" href="#">30 mar 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-four-item wow fadeInUp delay-0-4s">
                                    <div class="image br-30">
                                        <img src="{{ asset('assets/images/blog/blog-four6.jpg') }}" alt="Blog">
                                    </div>
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>By <a href="#">James Colies</a></li>
                                            <li>22 Comments</li>
                                        </ul>
                                        <h5><a href="/blog/blog-details">Nulla quam neque, interdum vitae fermentum</a></h5>
                                        <a class="date" href="#">30 mar 2022</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <ul class="pagination flex-wrap mt-45 rmt-25 wow fadeInUp delay-0-2s">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="main-sidebar rmt-75">
                            <div class="widget widget-recent-post wow fadeInUp delay-0-2s">
                                <h5 class="widget-title">Recent Posts</h5>
                                <ul class="widget-content">
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/widgets/post1.jpg') }}" alt="Post">
                                        </div>
                                        <div class="content">
                                            <h6><a href="/blog/blog-details">This is How I Relax on Lazy Sundays</a></h6>
                                            <a class="date" href="#"><i class="far fa-calendar-alt"></i>June 16, 2022</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/widgets/post2.jpg') }}" alt="Post">
                                        </div>
                                        <div class="content">
                                            <h6><a href="/blog/blog-details">Going Shopping in New Dress & a Hat</a></h6>
                                            <a class="date" href="#"><i class="far fa-calendar-alt"></i>June 16, 2022</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/widgets/post3.jpg') }}" alt="Post">
                                        </div>
                                        <div class="content">
                                            <h6><a href="/blog/blog-details">How an Island Forms in River And Stones</a></h6>
                                            <a class="date" href="#"><i class="far fa-calendar-alt"></i>June 16, 2022</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-causes wow fadeInUp delay-0-2s">
                                <h5 class="widget-title">Recent Causes</h5>
                                <div class="widget-content">
                                    <div class="widget-cause-item">
                                        <img src="{{ asset('assets/images/widgets/cause1.jpg') }}" alt="Cause">
                                        <div class="content">
                                            <h6><a href="/the-kft-team/donate">Help Water Retention</a></h6>
                                            <span class="price">55% of <span class="goal">$500,000 Goal</span></span>
                                        </div>
                                    </div>
                                    <div class="widget-cause-item">
                                        <img src="{{ asset('assets/images/widgets/cause2.jpg') }}" alt="Cause">
                                        <div class="content">
                                            <h6><a href="/the-kft-team/donate">Povert People Save</a></h6>
                                            <span class="price">55% of <span class="goal">$500,000 Goal</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-campaign wow fadeInUp delay-0-2s">
                                <div class="priorities-details-campaign">
                                    <div class="campaign-content bgc-yellow">
                                        <div class="section-title">
                                            <span class="sub-title"><i><b>We're Near to Our</b></i></span>
                                            <h3>Campaign</h3>
                                            <p>Foundation awarded $86,667,390 in funding to 1,306 grants.</p>
                                        </div>
                                        <div class="cause-price">
                                            <span>Goal <b>$39,860</b></span>
                                            <span>Raised <b>$21,160</b></span>
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
                </div>
            </div>
        </section>
        <!-- Blog Page Area end -->

        @endsection