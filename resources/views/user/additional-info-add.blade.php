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
                    <li>Update additional info</li>
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
                <form class="edit-account" action="{{ route('additional-info-store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Job/Institute Name <span class="required">*</span></label>
                                <input type="text" name="institute" class="form-control" value="{{ old('institute') }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Postcode <span class="required">*</span></label>
                                <input type="text" name="zipcode" class="form-control" value="{{ $ip->postal_code }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Country <span class="required">*</span></label>
                                <input type="text" name="country" class="form-control" value="{{ $ip->country }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text" name="city" class="form-control" value="{{ $ip->city }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                            </div>
                        </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Gender <span class="required">*</span></label>
                                    <select name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                      
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn"><i class='bx bx-save icon-arrow before'></i><span class="label">Add Info</span><i class="bx bx-save icon-arrow after"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </section>
        <!-- End My Account Area -->
@endsection
