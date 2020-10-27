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
                        <div class="col-lg-6 col-md-6">
                            <form class="edit-account" action="{{ route('user-update-profile') }}" method="POST">
                                @csrf
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Full Name <span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" required>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}">
                                    @error('email')
                                       <span class="text-danger">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ Auth::user()->phone }}">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class='bx bx-save icon-arrow before'></i><span class="label">Update Profile</span><i class="bx bx-save icon-arrow after"></i></button>
                            </div>
                        </form>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <form class="edit-account" action="{{ route('user-profile-image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="col-lg-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <label>Profile Picture <span class="required">*</span></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required onchange="readURL1(this);">
                                    <img src="#" id="two"> <br>
                                    <small class="text-danger"><em>try to upload 580*610px image</em> </small>
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span> 
                                 @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class='bx bx-save icon-arrow before'></i><span class="label">Upload Image</span><i class="bx bx-save icon-arrow after"></i></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->
        <script src="{{ asset('fontend/assets/jquery.form-validator.min.js') }}"></script>
@endsection
