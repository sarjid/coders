@extends('layouts.fontend-master')
@section('title')Login @endsection
@section('fontend-content')
     <!-- Start Login Area -->
 <section class="login-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="login-image">
                <img src="{{ asset('fontend') }}/assets/img/login/log2.jpg" alt="image">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 p-0">
            <div class="login-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="login-form">
                            <h3>Welcome To login</h3>
                            <p>Have Not Account ?<a href="{{ route('register') }}">Sign up</a></p>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" placeholder="Your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" placeholder="Your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <button type="submit">Login</button>
                                
                                <div class="forgot-password">
                                 @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                 @endif
                                </div>
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
