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
                    <h2>Our Course List</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Courses Area -->
        <section class="courses-area ptb-100">
            <div class="container">
                <div class="courses-topbar">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="topbar-result-count">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="topbar-ordering-and-search">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-5 offset-lg-4 offset-md-1 col-sm-6">
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-6">
                                        <div class="topbar-search">
                                            <form>
                                                <label><i class="bx bx-search"></i></label>
                                                <input type="text" class="input-search" placeholder="Search here...">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-box without-box-shadow mb-30">
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
                                        
                                        <a href="" class="btn btn-sm btn-info" style="background: #0EB582;" title="buy now">Buy Now</a>
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
                </div>
            </div>
        </section>
        <!-- End Courses Area -->    
@endsection