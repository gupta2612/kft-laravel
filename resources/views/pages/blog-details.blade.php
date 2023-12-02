@extends('../layout/main')

@section('title') {{ 'Water Pollution' }} @endsection

@section('content')
        <!-- Page Banner Start -->
        <section class="page-banner-two bgs-cover pt-70 pb-30 rel z-1" style="background-image: url({{ asset('assets/images/background/banner-blog.jpg') }});">
            <div class="container">
                <div class="banner-inner text-white mt-150 rmt-0">
                    <div class="banner-top pb-20">
                        <div class="section-title wow fadeInLeft delay-0-2s">
                            <a href="#" class="category">Water Pollution</a>
                            <h3>Trip To Space With Jeff Bezos Sells For $28 mn</h3>
                        </div>
                        <ul class="date-author pt-15 rmt-0 wow fadeInRight delay-0-2s">
                            <li><i class="fas fa-calendar"></i> 17 August 2022</li>
                            <li><img src="{{ asset('assets/images/priorities/author.jpg') }}" alt="Author"> by <a href="#"> Helen Blundell</a></li>
                        </ul>
                    </div>
                    <div class="banner-bottom pt-10">
                        <ul class="blog-meta pt-15 wow fadeInLeft delay-0-2s">
                            <li><i class="fal fa-eye"></i> <a href="#">261 Views</a></li>
                        </ul>
                        <div class="social-style-two pt-15 wow fadeInRight delay-0-2s">
                            <h5>Share:</h5>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            <h4>Many Global Charities Refrain</h4><br>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><br>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <div class="row align-items-center pt-50 pb-40">
                                <div class="col-xl-6 col-lg-12 col-md-6 mb-40">
                                    <h4>Investment Involved</h4>
                                    <p>Lorim ipsuy veli Nam nec tellus ipsuy veli Nam nec tellus a odia odio ibh vulputate cursus. Duis sed odio sit ie t nibh vulputate cursus a sit ipsuy veli Nam nec tellus ipsuy.</p>
                                    <ul class="list-style-four mt-25">
                                        <li>Odio sit amet nibh vulputate cura sit.</li>
                                        <li>Amet nibh vulputate cursus a sit ipsuy.</li>
                                        <li>Nam nec tellus a odia odio vulputate.</li>
                                        <li>Duis sed odio sit amet nibh putate.</li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6 mb-40">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/blog/blog-details-middle.jpg') }}" alt="Blog">
                                    </div>
                                </div>
                            </div>
                            <blockquote>
                                <b>“We believe in empowering and equipping local leaders. We help people who are helping people.”</b>
                                <span class="blockquote-footer">Abraham Maslow</span>
                            </blockquote> <br>
                            <h4>Sanitation, And Hygiene Solutions</h4><br>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit ipsuy veli Nam nec tellus ipsuy veli Nam nec tellus a odia o dio ibh vulputate cursus.Duis sed odio sit amet nibh vulputate cursus a sit ipsuy veli Nam nec tellus ipsuy veli t nibh vulputate cursus a sit ipsuy veli Nam nec tellus ipsuy veli Nam nipsuy veli Nam nec tellus a odia odio ib h vulputat i Nam nec tellus a odi e cursus.</p><br>
                            <p>As the demand for services increases, there is often a resource constraint – usually in terms of finance or staff availability. Whilst for most corporate businesses, profit is the driving force, for a charity, decisions will be more complex.</p>
                            <div class="share-tags mt-90">
                                <div class="share-items wow fadeInRight delay-0-2s">
                                    <h6>Share: </h6>
                                    <div class="social-style-four">
                                        <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="tumblr" href="#"><i class="fab fa-tumblr"></i></a>
                                        <a class="behance" href="#"><i class="fab fa-behance"></i></a>
                                        <a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="tag-items wow fadeInLeft delay-0-2s">
                                    <h6>Tags: </h6>
                                    <div class="tag-coulds">
                                        <a href="/blog/blog-details">Enovation</a>
                                        <a href="/blog/blog-details">Minipulation</a>
                                        <a href="/blog/blog-details">Multipurpose</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="admin-comment mt-65 mb-55">
                            <div class="comment-body wow fadeInUp delay-0-2s">
                               <div class="social-style-one">
                                    <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/blog/admin-comment.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h5>About Admin</h5>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur alim Vivamus scele Don malesuada sodales neque in faucibus.</p>
                                </div>
                            </div>
                        </div>

                        <div class="comment-title mb-15">
                            <h4>01 Reviews</h4>
                        </div>

                        <div class="comments pb-25">
                            <div class="comment-body wow fadeInUp delay-0-2s">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/blog/comment-author.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h5>Jockon Dom</h5>
                                        <span class="time">10 months ago</span>
                                    </div>
                                    <p>Cupcake ipsum dolor sit amet. Dragée sweet roll tiramisuet croissant lollipop candy.</p>
                                    <a class="reply" href="#">Reply</a>
                                </div>
                            </div>
                        </div>

                        <form id="comment-form" class="comment-form wow fadeInUp delay-0-2s" name="comment-form" action="#" method="post">
                           <div class="comment-title mb-15">
                               <h5>Post Review</h5>
                               <p>Praising pain was born give you a complete.</p>
                           </div>
                            <input type="text" id="full-name" name="full-name" class="form-control" value="" placeholder="Complete Name" required="">
                            <input type="email" id="blog-email" name="blog-email" class="form-control" value="" placeholder="Email Address" required="">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Review" required=""></textarea>
                            <button type="submit" class="theme-btn mt-10 br-10">
                                <span class="btn-text normal">Submit Now</span>
                                <span class="btn-text hover">Submit Now</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Area end -->

        @endsection