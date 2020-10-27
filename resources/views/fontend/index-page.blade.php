@extends('layouts.fontend-master')
@section('title')Home @endsection
@section('home')active @endsection
@section('fontend-content')
            
     <!-- Start Slider Area -->
     {{-- <div class="slider_area">
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3049" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('fontend') }}/assets/img/main-banner1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="First Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('fontend') }}/assets/img/main-banner1.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        
                        <div class="tp-caption NotGeneric-Icon tp-resizeme" id="slide-3049-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Weapon is Education
                        </div>

                        <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3049-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','-15','-15']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Your Course to Success
                        </div>

                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme" id="slide-3049-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Education can be passport to the future if it does believe.
                        </div>

                        <div class="tp-caption NotGeneric-btn tp-resizeme" id="slide-3045-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['115','115','115','115']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <a href="courses-2-columns-style-1.html" class="default-btn"><i class='bx bx-move-horizontal icon-arrow before'></i><span class="label">View Courses</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('fontend') }}/assets/img/main-banner2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Second Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('fontend') }}/assets/img/main-banner2.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 500" data-offsetend="0 -500" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption NotGeneric-Icon tp-resizeme" id="slide-3049-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Weapon is Education
                        </div>
                        
                        <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3045-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','-15','-15']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Short online courses
                        </div>

                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme" id="slide-3045-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Education can be passport to the future if it does believe.
                        </div>

                        <div class="tp-caption NotGeneric-btn tp-resizeme" id="slide-3045-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['115','115','115','115']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <a href="courses-2-columns-style-1.html" class="default-btn"><i class='bx bx-move-horizontal icon-arrow before'></i><span class="label">View Courses</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-3046" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{ asset('fontend') }}/assets/img/main-banner3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Third Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('fontend') }}/assets/img/main-banner3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-1" id="slide-3046-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Weapon is Education
                        </div>
                        
                        <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-3" id="slide-3046-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','-15','-15']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'>
                            Humanities & Social Sciences
                        </div>

                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-2" id="slide-3046-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.1,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            Education can be passport to the future if it does believe.
                        </div>

                        <div class="tp-caption NotGeneric-btn tp-resizeme" id="slide-3045-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['115','115','115','115']" data-width="none" data-height="none" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <a href="courses-2-columns-style-1.html" class="default-btn"><i class='bx bx-move-horizontal icon-arrow before'></i><span class="label">View Courses</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div> --}}
    <!-- End Slider Area -->  
         <!-- Start Language Banner Area -->
         <section class="language-banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="language-banner-content">
                            <h1>Learning Coding is Easier!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                            <a href="{{ url('course') }}" class="default-btn"><i class='bx bx-user-circle icon-arrow before'></i><span class="label">Enroll Course</span><i class="bx bx-user-circle icon-arrow after"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="language-banner-image">
                            <img src="{{ asset("media/slider/1.png") }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="lang-shape1"><img src="{{ asset("fontend") }}/assets/img/lang-shape1.png" alt="image"></div>
        </section>
        <!-- End Language Banner Area -->
            <!-- Start About Area -->
            <section class="about-area ptb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-image">
                                <img src="{{ asset('fontend') }}/assets/img/about/2.jpg" class="shadow" alt="image">
                                {{-- <img src="{{ asset('fontend') }}/assets/img/about/3.jpg" class="shadow" alt="image"> --}}
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-12">
                            <div class="about-content">
                                <span class="sub-title">About Us</span>
                                <h2>Learn New Skills to go ahead for Your Career</h2>
                                <h6>We can support student forum 24/7 for all students.</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
    
                                <div class="features-text">
                                    <h5><i class='bx bx-planet'></i>A place where you can achieve</h5>
                                    <p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>
                                </div>
    
                                <a href="{{ url('course') }}" class="default-btn"><i class='bx bx-move-horizontal icon-arrow before'></i><span class="label">View Courses</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Area -->
    
            <!-- Start Courses Categories Area -->
            <section class="courses-categories-area bg-image pt-100 pb-70">
                <div class="container">
                    <div class="section-title text-left">
                        <span class="sub-title">Courses Categories</span>
                        <h2>Browse Trending Categories</h2>
                    </div>
    
                    <div class="courses-categories-slides owl-carousel owl-theme">
                    @foreach ($categories as $cat)
                    @php
                        $courseCount = App\Models\Course::where('category_id',$cat->id)->get();
                    @endphp
                        <div class="single-categories-courses-box mb-30">
                            <div class="icon">
                                <i class='bx bx-layer'></i>
                            </div>
                            <h3>{{ $cat->category_name }}</h3>
                            <span>{{ count($courseCount) }} Courses</span>
                            <a href="#" class="link-btn"></a>
                        </div>
                    @endforeach
                    </div>
                </div>
    
                <div id="particles-js-circle-bubble-2"></div>
            </section>
            <!-- End Courses Categories Area -->
    
            <!-- Start Funfacts Area -->
            <section class="funfacts-area pt-100">
                <div class="container">
                    <div class="funfacts-inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="single-funfact">
                                    <div class="icon">
                                        <i class='bx bxs-group'></i>
                                    </div>
                                    <h3 class="odometer" data-count="1">00</h3>
                                    <p>Expert Instructors</p>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="single-funfact">
                                    <div class="icon">
                                        <i class='bx bx-book-reader'></i>
                                    </div>
                                    <h3 class="odometer" data-count="{{ count($course) }}">00</h3>
                                    <p>Total Courses</p>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="single-funfact">
                                    <div class="icon">
                                        <i class='bx bx-user-pin'></i>
                                    </div>
                                    <h3 class="odometer" data-count="{{ count($students) }}">00</h3>
                                    <p>Happy Students</p>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="single-funfact">
                                    <div class="icon">
                                        <i class='bx bxl-deviantart'></i>
                                    </div>
                                    <h3 class="odometer" data-count="654">00</h3>
                                    <p>Creative Events</p>
                                </div>
                            </div>
                        </div>
    
                        <div id="particles-js-circle-bubble"></div>
                    </div>
                </div>
            </section>
            <!-- End Funfacts Area -->
    
            <!-- Start Courses Area -->
            <section class="courses-area pt-100 pb-70">
                <div class="container">
                    <div class="section-title text-left">
                        <span class="sub-title">Discover Courses</span>
                        <h2>Our Popular Online Courses</h2>
                        <a href="{{ url('course') }}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">All Courses</span><i class="bx bx-show-alt icon-arrow after"></i></a>
                    </div>
    
                    <div class="shorting-menu">
                        <button class="filter" data-filter="all">All ({{ count($course) }})</button>
                        @foreach ($categories as $row)
                        @php
                        $course = App\Models\Course::where('category_id',$row->id)->get();
                        @endphp
                        <button class="filter" data-filter=".filter{{ $row->id }}">{{ $row->category_name }} ({{ count($course) }})</button>
                        @endforeach
                        {{-- <button class="filter" data-filter=".design">Design (05)</button>
                        <button class="filter" data-filter=".development">Development (04)</button>
                        <button class="filter" data-filter=".language">Language (02)</button>
                        <button class="filter" data-filter=".management">Management (03)</button>
                        <button class="filter" data-filter=".photography">Photography (04)</button> --}}
                    </div>
    
                    <div class="shorting">
                        <div class="row">
                        @foreach ($categories as $cat)
                        @php
                            $courses = App\Models\Course::where('category_id',$cat->id)->latest()->limit(6)->get();
                           
                        @endphp
                          @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-6 mix filter{{ $cat->id }} design language">
                                <div class="single-courses-box mb-30">
                                    <div class="courses-image">

                                        <a href="{{ url('course/details') }}/{{ $course->id }}/{{ $course->course_slug}}" class="d-block"><img src="{{ asset($course->image) }}" alt="image"></a>
                                        <div class="courses-tag">
                                            <a href="{{ url('course/details/'.$course->id.'/'.$course->course_slug) }}" class="d-block">{{ $course->category->category_name }}</a>
                                        </div>
                                    </div>
        
                                    <div class="courses-content">
                                        <div class="course-author d-flex align-items-center">
                                            <img src="{{ asset('media/avatar.png') }}" class="rounded-circle mr-2" alt="image">
                                            <span>Sarjid Islam</span>
                                        </div>
        
                                        <h3><a href="{{ url('course/details/'.$course->id.'/'.$course->course_slug) }}" class="d-inline-block">{{ $course->course_name }}</a></h3>
        
                                        <div class="courses-rating">
                                        @if ( $course->course_fee == NULL )
                                            <form action="{{ route('enroll-free') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $course->id }}">
                                              <button type="submit" class="btn btn-sm btn-info text-center" style="background: #FF1949;" title="Enroll For Free now">Enroll Now</button>
                                           
                                            <strong class="btn btn-sm btn-info" tyle="background: #0EB582;" > 100% Discount</strong>
                                        </form>
                                        @else
                                                <a href="javascript::void(0)" id="{{ $course->id }}" onclick="addToCart(this.id)" class="btn btn-sm btn-danger" title="add to cart" style="background:#FF1949; "><i class='bx bx-cart-alt' style="color:white; font-size:20px;"></i></a>
                                                
                                                <a href="{{ url('buy-now/'.$course->id) }}" class="btn btn-sm btn-info" style="background: #0EB582;" title="buy now">Buy Now</a>
                                        @endif
                                        </div>
                                    </div>
        
                                    <div class="courses-box-footer">
                                        <ul>
                                            <li class="students-number">
                                                <i class='bx bx-user'></i> 2.6K students
                                            </li>
        
                                            <li class="courses-lesson">
                                                @php
                                                     $video = App\Models\Video::where('course_id',$course->id)->latest()->get();
                                                @endphp
                                                <i class='bx bx-book-open'></i> {{ count($video) }} Videos
                                            </li>
                                            <li class="courses-price">
                                                @if ( $course->course_fee == NULL )
                                                Free
                                                @else
                                                {{ $course->course_fee }}Tk
                                                @endif
                                          
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                         @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Courses Area -->
               <!-- Start Testimonials Area -->
           <section class="testimonials-area pt-60 mb-5">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>What Students Says</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme shadow">
                    @foreach ($reviews as $item)
                        <div class="single-testimonials-item">
                            <p>{{ $item->comment }}</p>
                            <div class="info">
                                <img src="{{ asset($item->user->image) }}" class="shadow rounded-circle" alt="image">
                                <h3>{{ $item->user->name }}</h3>
                                <span>Student</span>
                            </div>
                        </div>
                  @endforeach
                </div>
            </div>
         </section>
        <!-- End Testimonials Area -->
  
         

          
        <!-- Start How It Works Area -->
            <section class="how-it-works-area pt-100 pb-70">
                <div class="container">
                    <div class="section-title">
                        <span class="sub-title">Find Courses</span>
                        <h2>How It Works?</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-work-process mb-30">
                                <div class="icon">
                                    <i class='bx bx-search-alt'></i>
                                </div>
                                <h3>Search Courses</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent rreloquentiam id.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-work-process mb-30">
                                <div class="icon">
                                    <i class='bx bx-info-square'></i>
                                </div>
                                <h3>View Course Details</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent rreloquentiam id.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                            <div class="single-work-process mb-30">
                                <div class="icon">
                                    <i class='bx bx-like'></i>
                                </div>
                                <h3>Apply, Enroll or Register</h3>
                                <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent rreloquentiam id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- End How It Works Area -->
        
           <!-- Start Mission Area -->
           <section class="mission-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="mission-content">
                    <div class="section-title text-left">
                        <span class="sub-title">Discover Mission</span>
                        <h2>Why our platform in better</h2>
                    </div>

                    <div class="mission-slides owl-carousel owl-theme">
                        <div>
                            <h3>Quality can be better than quantity in this platform</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="javascript::void(0)" class="default-btn"><i class='bx bx-user-pin icon-arrow before'></i><span class="label">Learn More</span><i class="bx bx-user-pin icon-arrow after"></i></a>
                        </div>

                        <div>
                            <h3>A place where you can achieve</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="javascript::void(0)" class="default-btn"><i class='bx bx-user-pin icon-arrow before'></i><span class="label">Learn More</span><i class="bx bx-user-pin icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mission Area -->
            <!-- Start Count Down Area -->
            <section class="countdown-area ptb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="countdown-content">
                                <h2>Hurry Up! Join Laravel Course With W3 Coders</h2>
                                <a href="#" class="sign-up-btn">Sign Up <i class='bx bx-log-in'></i></a>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-12">
                            <div class="countdown-timer text-center">
                                <div id="timer">
                                    <div id="days"></div>
                                    <div id="hours"></div>
                                    <div id="minutes"></div>
                                    <div id="seconds"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Count Down Area -->

@endsection