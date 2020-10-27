@extends('layouts.fontend-master')
@section('title')my-course @endsection
@section('course')active @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Profile</li>
                </ul>
                <h2><span class="text-warning">Welcome..!</span> {{ Auth::user()->name }}</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

        <!-- Start My Account Area -->
        <section class="my-account-area ptb-100">
            <div class="container">
               @include('user.inc.top-bar')

               <!-- Start Courses Area -->
        <section class="courses-area ptb-100">
            <div class="container">
                <div class="row">
                 @forelse ($courses as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-box mb-30">
                            <div class="courses-image">
                                <a href="{{ url('user/single-course/'.$item->course_id.'/'.$item->course->course_slug) }}" class="d-block"><img src="{{ asset($item->course->image) }}" alt="image"></a>
                            </div>
                            <div class="courses-content">
                                <h3><a href="{{ url('user/single-course/'.$item->course_id.'/'.$item->course->course_slug) }}" class="d-inline-block">{{ $item->course->course_name }}</a></h3>
                                <div class="courses-rating">
                                    <div class="review-stars-rated">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star-half'></i>
                                    </div>

                                    <div class="rating-total">
                                        4.5 (1 rating)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty 
                    <img src="{{ asset('media/no_result.gif') }}" style="margin: 0 auto; margin-top:0" alt="" width="360px" height="360px">
                @endforelse   
                </div>
            </div>
        </section>
        <!-- End Courses Area -->
            </div>
        </section>
        <!-- End My Account Area -->
        <script src="{{ asset('fontend/assets/jquery.form-validator.min.js') }}"></script>
@endsection
