@extends('layouts.fontend-master')
@section('title')contact @endsection
@section('contact')active @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
 <!-- Start Contact Info Area -->
 <section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box mb-30">
                    <div class="icon">
                        <i class='bx bx-envelope'></i>
                    </div>

                    <h3>Email Here</h3>
                    <p><a href="mailto:sarjid777@gmail.com">sarjid777@gmail.com</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box mb-30">
                    <div class="icon">
                        <i class='bx bx-map'></i>
                    </div>

                    <h3>Location Here</h3>
                    <p><a href="javascript::void(0)" target="_blank">Dhaka,Bangladesh</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="contact-info-box mb-30">
                    <div class="icon">
                        <i class='bx bx-phone-call'></i>
                    </div>

                    <h3>Call Here</h3>
                    <p><a href="tel:1234567890">+8801722260010</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="particles-js-circle-bubble-2"></div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Contact Us</span>
            <h2>Drop us Message for any Query</h2>
        </div>

        <div class="contact-form">
            <form  action="{{ url('send/message') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" data-validation="required">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" data-validation="required">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" data-validation="required">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject" data-validation="required">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message" data-validation="required"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                      
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="particles-js-circle-bubble-3"></div>
  
</section>
<!-- End Contact Area -->

@endsection