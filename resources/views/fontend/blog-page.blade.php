@extends('layouts.fontend-master')
@section('title')blog @endsection
@section('blog')active @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Blog</li>
                </ul>
                <h2>Blog Post</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/1.jpg" alt="image">
                                    </a>
        
                                    <div class="tag">
                                        <a href="#">Learning</a>
                                    </div>
                                </div>
        
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user1.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">Steven Smith</a>
                                        </li>
                                        <li><a href="#">August 30, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">World largest elephant toothpaste experiment in 2019</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/2.jpg" alt="image">
                                    </a>
    
                                    <div class="tag">
                                        <a href="#">Education</a>
                                    </div>
                                </div>
    
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user2.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">Lina D'Souja</a>
                                        </li>
                                        <li><a href="#">August 29, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">Most Popular Education Posts Of The Week 20-26 Aug</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/3.jpg" alt="image">
                                    </a>
    
                                    <div class="tag">
                                        <a href="#">Management</a>
                                    </div>
                                </div>
    
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user3.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">David Malan</a>
                                        </li>
                                        <li><a href="#">August 28, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">How to enhance education quality management system</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/4.jpg" alt="image">
                                    </a>
    
                                    <div class="tag">
                                        <a href="#">Ideas</a>
                                    </div>
                                </div>
    
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user5.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">David Warner</a>
                                        </li>
                                        <li><a href="#">August 27, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">Global education: Ideas for the way move forward</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/5.jpg" alt="image">
                                    </a>
    
                                    <div class="tag">
                                        <a href="#">Workforce</a>
                                    </div>
                                </div>
    
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user6.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">Olivar Waise</a>
                                        </li>
                                        <li><a href="#">August 26, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">New report reimagines the broader education workforce</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/6.jpg" alt="image">
                                    </a>
    
                                    <div class="tag">
                                        <a href="#">Education</a>
                                    </div>
                                </div>
    
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user2.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">Lina D'Souja</a>
                                        </li>
                                        <li><a href="#">August 29, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">What’s Going On in This Picture? | Jan. 13, 2020</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/7.jpg" alt="image">
                                    </a>
        
                                    <div class="tag">
                                        <a href="#">Learning</a>
                                    </div>
                                </div>
        
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user1.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">Steven Smith</a>
                                        </li>
                                        <li><a href="#">August 30, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">Connecting Math and Science to Reading and Writing</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post mb-30">
                                <div class="post-image">
                                    <a href="single-blog.html" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/8.jpg" alt="image">
                                    </a>
    
                                    <div class="tag">
                                        <a href="#">Education</a>
                                    </div>
                                </div>
    
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-author">
                                            <img src="{{ asset('fontend') }}/assets/img/user2.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                                            By: <a href="#" class="d-inline-block">Lina D'Souja</a>
                                        </li>
                                        <li><a href="#">August 29, 2019</a></li>
                                    </ul>
                                    <h3><a href="single-blog.html" class="d-inline-block">How to Introduce Meditation to the High School</a></h3>
                                    <a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pagination-area text-center">
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="page-numbers">4</a>
                                <a href="#" class="page-numbers">5</a>
                                <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <section class="widget widget_search">
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="bx bx-search-alt"></i></button>
                            </form>
                        </section>

                        <section class="widget widget_raque_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            <article class="item">
                                <a href="single-blog.html" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2019-06-30">June 10, 2019</time>
                                    <h4 class="title usmall"><a href="single-blog.html">Making Peace With The Feast Or Famine Of Freelancing</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="single-blog.html" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2019-06-30">June 21, 2019</time>
                                    <h4 class="title usmall"><a href="single-blog.html">I Used The Web For A Day On A 50 MB Budget</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="single-blog.html" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <time datetime="2019-06-30">June 30, 2019</time>
                                    <h4 class="title usmall"><a href="single-blog.html">How To Create A Responsive Popup Gallery?</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>

                            <ul>
                                <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                                <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                                <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                                <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                                <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                            </ul>
                        </section>

                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Raque Tags</h3>

                            <div class="tagcloud">
                                <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Raque <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                            </div>
                        </section>

                        <section class="widget widget_instagram">
                            <h3 class="widget-title">Instagram</h3>

                            <ul>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/1.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/2.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="assets/img/blog/3.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/4.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/5.jpg" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('fontend') }}/assets/img/blog/6.jpg" alt="image">
                                    </a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_contact">
                            <div class="text">
                                <div class="icon">
                                    <i class='bx bx-phone-call'></i>
                                </div>
                                <span>Emergency</span>
                                <a href="">+8801722-260010</a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection