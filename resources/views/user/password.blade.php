@extends('layouts.fontend-master')
@section('title')edit-profile @endsection
@section('edit-profile')active @endsection
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
                        <div class="row">
                            <div class="col-lg-8 col-md-8 m-auto">
                                <form class="edit-account" action="{{ route('user-update-password') }}" method="POST">
                                    @csrf
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Current Password <span class="required">*</span></label>
                                        <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" value="{{ old('old_password') }}" required data-validation="required" placeholder="your password">
                                        @error('old_password')
                                        <span class="text-danger">{{ $message }}</span> 
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>New Password <span class="required">*</span></label>
                                        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" value="{{ old('new_password') }}" placeholder="new password"  required data-validation="required">
                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span> 
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Retype-Password <span class="required">*</span></label>
                                        <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}" placeholder="re-type password" required data-validation="required">
                                        @error('confirm_password')
                                        <span class="text-danger">{{ $message }}</span> 
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn"><i class='bx bx-save icon-arrow before'></i><span class="label">Change Password</span><i class="bx bx-save icon-arrow after"></i></button>
                                </div>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
