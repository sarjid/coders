@extends('layouts.fontend-master')
@section('title')my-additional-info @endsection
@section('additional-info')active @endsection
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
                                <h3>Additional Info</h3>
                            @if ($exist)
                            <a href="{{ route('additional-info-edit') }}" class="edit">Edit info</a>
                            @else
                            <a href="{{ route('additional-info-add') }}" class="edit">Add info</a>
                            @endif
                            </div>
                            @if ($exist)
                            <address>
                                {{ ucwords(Auth::user()->name) }}
                                <br>
                                {{ ucwords($info->institute) }}
                                 <br>
                                 {{ ucwords($info->address) }}
                                 <br>
                                 {{ ucwords($info->country) }}.
                                 <br>
                             </address>
                            @else
                            <address>
                                {{ ucwords(Auth::user()->name) }}
                                 <br>
                                 {{ Auth::user()->email }}
                                 <br>
                                 {{ Auth::user()->phone }}
                                 <br>
                             </address>
                            @endif
                        </div>

                        <div class="col-lg-6 col-md-6">
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <!-- End My Account Area -->
        <script src="{{ asset('fontend/assets/jquery.form-validator.min.js') }}"></script>
@endsection
