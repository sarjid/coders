@extends('layouts.fontend-master')
@section('title')my-account @endsection
@section('dashboard')active @endsection
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
              
               <div class="myAccount-content">
                <div class="myAccount-addresses">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="addresses-title">
                                <h3>My Account Info</h3>
                            </div>
                            <address>
                               {{ Auth::user()->name }}
                                <br>
                                {{ Auth::user()->email }}
                                <br>
                                {{ Auth::user()->phone }}
                                <br>
                            </address>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="addresses-title">
                                <h3>Course Info</h3>
                            </div>
                            <address>
                                Total Enroll Course <span class="badge badge-pill badge-success">{{ count($enroll) }}</span>
                                <br>
                                Total Completed Course <span class="badge badge-pill badge-success">{{ count($enroll) }}</span>
                            </address>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <!-- End My Account Area -->
        
@endsection
