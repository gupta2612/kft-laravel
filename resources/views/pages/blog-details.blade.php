@extends('../layout/main')

@foreach ($collection as $item)
@section('title') {{ $item->title }} @endsection
@endforeach

@section('content')
        <!-- Page Banner Start -->
        @foreach ($collection as $item)
        <section class="page-banner-two bgs-cover pt-70 pb-30 rel z-1" style="background-image: url({{ asset('assets/images/background/'.$item->image) }});">
            <div class="container">
                <div class="banner-inner text-white mt-150 rmt-0">
                    <div class="banner-top pb-20">
                        <div class="section-title wow fadeInLeft delay-0-2s">
                            <a href="javascript:void(0)" class="category">{{ $item->categories_name }}</a>
                            <h3>{{ $item->title }}</h3>
                        </div>
                        <ul class="date-author pt-15 rmt-0 wow fadeInRight delay-0-2s">
                            <li><i class="fas fa-calendar"></i> {{ $item->date }}</li>
                            <li><img src="{{ asset('assets/images/priorities/author.jpg') }}" alt="Author"> by <a href="javascript:void(0)">&nbsp; {{ $item->user_name }}</a></li>
                        </ul>
                    </div>
                    <div class="banner-bottom pt-10">
                        <ul class="blog-meta pt-15 wow fadeInLeft delay-0-2s">
                            <li><i class="fal fa-eye"></i> <a href="#">261 Views</a></li>
                        </ul>
                        <div class="social-style-two pt-15 wow fadeInRight delay-0-2s">
                            <h5>Share:</h5>
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- Page Banner End -->


        <!-- Blog Details Area start -->
        <section class="blog-details-area py-110 rpt-105">
            <div class="container">
                <div class="row">
                   <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="main-sidebar rmb-75">
                            <div class="widget widget-recent-post wow fadeInUp delay-0-2s">
                                <h5 class="widget-title">Recent Posts</h5>
                                <ul class="widget-content">
                                    @foreach ($RecentData as $RecentDatas)
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('assets/images/background/'.$RecentDatas->image) }}" alt="Post">
                                        </div>
                                        <div class="content">
                                            <h6><a href="/blog/blog-details/{{ $RecentDatas->id }}/{{ $RecentDatas->slug }}">
                                            {{ $RecentDatas->title }}</a></h6>
                                            <a class="date" href="javascript:void(0)"><i class="far fa-calendar-alt"></i>{{ $RecentDatas->date }}</a>
                                        </div>
                                    </li>
                                    @endforeach
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
                    <div class="col-lg-8">
                        @foreach ($collection as $item)
                        <div class="blog-details-content">

                           <h4>{{ $item->title }}</h4><br>
                                {!! $item->content !!}
                            <div class="share-tags mt-90">
                                <div class="share-items wow fadeInRight delay-0-2s">
                                    <h6>Share: </h6>
                                    <div class="social-style-four">
                                        <a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                        <a class="tumblr" href="javascript:void(0)"><i class="fab fa-tumblr"></i></a>
                                        <a class="behance" href="javascript:void(0)"><i class="fab fa-behance"></i></a>
                                        <a class="pinterest" href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="tag-items wow fadeInLeft delay-0-2s">
                                    <h6>Tags: </h6>
                                    <div class="tag-coulds">
                                        <a href="javascript:void(0)">{{ $item->tags }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Area end -->

        @endsection