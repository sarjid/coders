@extends('layouts.fontend-master')
@section('title')Register @endsection
@section('fontend-content')
  <!-- Start Register Area -->
  <section class="register-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="register-image">
                <img src="{{ asset('fontend') }}/assets/img/login/reg.jpg" alt="image">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 p-0">
            <div class="register-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="register-form">
                            <h3>Register New Account</h3>
                            <p>Already signed up? <a href="{{ route('login') }}">Log in</a></p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="name" name="name" id="email" placeholder="Your full name " class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Your email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" id="email" placeholder="Your phone number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Your password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" id="password-confirm" placeholder="confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                   
                                </div>

                                <button type="submit">Register</button>

                                <div class="connect-with-social">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Register Area -->
@endsection
