@extends('layouts.fontend-master')
@section('title')Student Review @endsection
@section('review')active @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>review</li>
                </ul>
                <h2>Student Review</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

           <!-- Start Testimonials Area -->
           <section class="testimonials-area pt-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>What Students Says</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme mb-5">
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

                <div class="testimonials-slides owl-carousel owl-theme mb-5">
                    @foreach ($reviews2 as $row)
                        <div class="single-testimonials-item">
                            <p>{{ $row->comment }}</p>
                            <div class="info">
                                <img src="{{ asset($row->user->image) }}" class="shadow rounded-circle" alt="image">
                                <h3>{{ $row->user->name }}</h3>
                                <span>Student</span>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Testimonials Area -->

@endsection