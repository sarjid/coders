@extends('layouts.fontend-master')
@section('title')Course @endsection
@section('course')active @endsection
@section('fontend-content')
        <!-- Start Page Title Area -->
        <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Courses</li>
                    </ul>
                    <h2>{{ $course->course_name }}</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
          <!-- Start Courses Details Area -->
          <section class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="courses-details-header">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="courses-title">
                                <h2>{{ $course->course_name }}</h2>
                                {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p> --}}
                            </div>

                            <div class="courses-meta">
                                <ul>
                                    <li>
                                        <i class='bx bx-folder-open'></i>
                                        <span>Category</span>
                                        <a href="#">{{ $course->category->category_name }}</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-group'></i>
                                        <span>Students Enrolled</span>
                                        <a href="#">1.3K</a>
                                    </li>
                                    {{-- <li>
                                        <i class='bx bx-calendar'></i>
                                        <span>Last Updated</span>
                                        <a href="#">01/14/2020</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="courses-price">
                                <div class="courses-review">
                                    <div class="review-stars">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <span class="reviews-total d-inline-block">({{ count($reviews) }})</span>
                                </div>

                                <div class="price">
                                    @if ($course->course_fee == NULL)
                                    Free
                                       @else 
                                       {{ $course->course_fee }}Tk
                                    @endif
                                </div>
                                @if ( $course->course_fee == NULL )
                                    <form action="{{ route('enroll-free') }}" method="POST">
                                        @csrf
                                    <input type="hidden" name="id" value="{{ $course->id }}">
                                    <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Enroll Course</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                                </form>
                                @else
                                <a href="{{ url('buy-now/'.$course->id) }}" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Buy Course</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-image text-center">
                            {{-- <img src="{{ asset($course->image) }}" alt="image"> --}}
                         
                            {{-- <iframe  height="100%" src="https://www.youtube.com/embed/dvmudCIBvQM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                            <div class="myVideos" style="width:100%">
                                <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                <iframe width="853" height="480"  src="https://www.youtube.com/embed/{{ $orverview->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        </div>

                        <div class="courses-details-desc">
                            <h3>Course Video</h3>
                            <div class="courses-accordion">
                                <ul class="accordion">
                               @foreach ($sections as $section)
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                           {{ $section->section_name }}
                                        </a>
        
                                        <div class="accordion-content">
                                            <ul class="courses-lessons">
                                               @php
                                                   $lessons = App\Models\Video::where('section_id',$section->id)->get();
                                               @endphp
                                                @foreach ($lessons as $lesson)
                                                <li class="single-lessons">
                                                    <div class="d-md-flex d-lg-flex align-items-center">
                                                        <a href="#" class="lessons-title">{{ $lesson->video_title }}</a>
                                                        <span class="preview">Preview</span>
                                                    </div>

                                                    <div class="lessons-info">
                                                        <span class="duration" data-toggle="tooltip" data-placement="top" title="Duration"><i class='bx bx-time'></i> {{ $lesson->video_length }}</span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                             
                                {{-- section loop end  --}}
                                </ul>
                            </div>

                            <h3>What you'll learn</h3>

                            <div class="why-you-learn">
                                <ul>
                                @foreach ($learns as $learn)
                                    <li>
                                        <span>
                                            <i class='bx bx-check'></i>
                                            {{ $learn }}
                                        </span>
                                    </li>
                                @endforeach
                                </ul>
                            </div>

                            <h3>Requirements</h3>

                            <ul class="requirements-list">
    
                                @foreach ($requirements as $require)
                                <li>{{ $require }}</li>

                                @endforeach
                            </ul>


                            <h3>Meet Your Instructors</h3>

                            <div class="courses-author">
                                <div class="author-profile-header"></div>
                                <div class="author-profile">
                                    <div class="author-profile-title">
                                        <img src="{{ asset('media/avatar.png') }}" class="shadow-sm rounded-circle" alt="image">

                                        <div class="author-profile-title-details d-flex justify-content-between">
                                            <div class="author-profile-details">
                                                <h4>Sarjid Islam Habil</h4>
                                                <span class="d-block">Author, Teacher</span>
                                            </div>

                                        </div>
                                    </div>
                                    <p>James Anderson is a celebrated photographer, author, and teacher who brings passion to everything he does.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>

                            <div class="courses-review-comments">
                                <h3>{{ count($reviews) }} Reviews</h3>
                                @foreach ($reviews as $item)
                                <div class="user-review">
                                    <img src="{{ asset($item->user->image) }}" class="rounded-circle" alt="image">
                                    
                                    <div class="review-rating">
                                        <div class="review-stars">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>

                                        <span class="d-inline-block"></span>
                                    </div>

                                    <span class="d-block sub-comment">{{ $item->user->name }}</span>
                                    <p>{{ $item->comment }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="courses-sidebar-information">
                            <ul>
                             
                                <li>
                                    <span><i class='bx bx-video-recording'></i> Video:</span>
                                    {{ count($videos) }}
                                </li>
                                <li>
                                    <span><i class='bx bx-time'></i> Duration:</span>
                                    @php
                                       $total_min = App\Models\Video::where('course_id',$course->id)->sum('video_length');
                                        $minutes = $total_min;
                                        $hours = floor($minutes / 60);
                                        $min = $minutes - ($hours * 60);
                                        $hour = $hours.':'.$min;
                                    @endphp
                                   {{ $hour }} Hours +
                                </li>
                                <li>
                                    <span><i class='bx bxs-graduation'></i> Subject:</span>
                                    {{ $course->category->category_name }}
                                </li>
                                <li>
                                    <span><i class='bx bxs-badge-check'></i> Level:</span>
                                    Introductory
                                </li>
                                <li>
                                    <span><i class='bx bx-support'></i> Language:</span>
                                    Bangla
                                </li>
                                <li>
                                    <span><i class='bx bx-certification'></i> Support:</span>
                                    Yes
                                </li>
                            </ul>
                        </div>

                        <div class="courses-sidebar-syllabus">
                            <h3>Course Syllabus</h3>
                            <h4>Lessons</h4>

                            <div class="courses-list">
                                <ul>
                                    @foreach ($sections as $sec)
                                    <li>
                                        {{ $sec->section_name }}
                                    </li>
                                    @endforeach
                                  
                                </ul>
                            </div>
                          
                        </div>

                        <div class="courses-purchase-info">
                            <h4>Interested in this course for your Business or Team?</h4>
                            <p>Train your employees in the most in-demand topics, with edX for Business.</p>

                            <a href="javascript::void(0)" class="d-inline-block">Purchase now</a>
                            <a href="javascript::void(0)" class="d-inline-block">Request Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Courses Details Area -->
@endsection