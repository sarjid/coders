@extends('layouts.fontend-master')
@section('title')Reset Password @endsection
@section('fontend-content')
     <!-- Start Login Area -->
 <section class="login-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="login-image">
                <img src="{{ asset('fontend') }}/assets/img/login-bg.jpg" alt="image">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 p-0">
            <div class="login-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="login-form">
                            <h3>{{ __('Reset Password') }}</h3>
                            <p>return to <a href="{{ route('login') }}">login</a></p>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
        
                                <div class="form-group">
                                    <input type="email" placeholder="Your existing email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                
                                <button type="submit">{{ __('Send Password Reset Link') }}</button>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->
@endsection
