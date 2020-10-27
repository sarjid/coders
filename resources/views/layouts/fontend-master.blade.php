<!doctype html>
<html lang="zxx">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Revolution Slider CSS -->
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/revolution/css/settings.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/revolution/css/layers.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/revolution/css/navigation.css">
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/bootstrap..min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/odometer.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/viewer.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/slick.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/css/responsive.css">
        <link rel="stylesheet" href="{{ asset('fontend') }}/assets/toastr/toastr.css">

        <title>@yield('title')-W3 Coders</title>

        <link rel="icon" type="image/png" href="{{ asset('fontend') }}/assets/img/favicon.png">
    </head>

    <body>

        <!-- Preloader -->
      <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div> 
        <!-- End Preloader -->

   
        <!-- Start Header Area -->
        <header class="header-area p-relative">

            <div class="top-header top-header-style-four">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <ul class="top-header-contact-info">
                                <li>
                                    Call: 
                                    <a href="tel:502464674">+8801722-260010</a>
                                </li>
                            </ul>

                            <div class="top-header-social">
                                <span>Follow us:</span>
                                <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            @auth
                            <ul class="top-header-login-register">
                                @if (Auth::user()->role_id == 1)
                                @else   
                                <li><a href="{{ route('login') }}"><i class='bx bx-log-in-circle'></i>My Profile</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i> Logout</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                 </li>
                                @endif
                            </ul>
                            @else
                            <ul class="top-header-login-register">
                                <li><a href="{{ route('login') }}"><i class='bx bx-log-in'></i> Login</a></li>
                                <li><a href="{{ route('register') }}"><i class='bx bx-log-in-circle'></i> Register</a></li>
                            </ul>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <!-- marquee area start  -->
            <div style="background: #E9EBEC;">
              <h6><marquee behavior="" direction="">Site Development Work in Progress, We Apologize For The Inconvenience</marquee></h6>
            </div>
            <!-- marquee area end  -->

            <!-- Start Navbar Area -->
            <div class="navbar-area navbar-style-three">
                <div class="raque-responsive-nav">
                    <div class="container">
                        <div class="raque-responsive-menu">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('fontend') }}/assets/img/w-logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="raque-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('fontend') }}/assets/img/w-logo.png" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link @yield('home')">Home</a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('course') }}" class="nav-link @yield('course')">Courses</a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('review') }}" class="nav-link @yield('review')">Review</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ url('blog') }}" class="nav-link @yield('blog')">Blog</a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link @yield('contact')">Contact</a></li>
                                </ul>

                                <div class="others-option">
                                    <a href="{{ url('cart') }}" id="cart" class="cart-wrapper-btn d-inline-block">
                                        <i class='bx bx-cart-alt'></i>
                                        <span id="countQty"></span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
            

            <!-- Start Sticky Navbar Area -->
            <div class="navbar-area navbar-style-three header-sticky">
                <div class="raque-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('fontend') }}/assets/img/w-logo.png" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link @yield('home')">Home </a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('course') }}" class="nav-link @yield('course')">Courses</a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('review') }}" class="nav-link @yield('review')">Review</a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('blog') }}" class="nav-link @yield('blog')">Blog</a>
                                    </li>

                                    <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link @yield('contact')">Contact</a></li>
                                </ul>

                                <div class="others-option">
                                    <a href="{{ url('cart') }}" id="cart" class="cart-wrapper-btn d-inline-block">
                                        <i class='bx bx-cart-alt'></i>
                                        <span id="countQty2"></span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                        
                    </div>
                </div>
            </div>
            <!-- End Sticky Navbar Area -->
        </header>
        <!-- End Header Area -->

        @yield('fontend-content')
        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Contact Us</h3>

                            <ul class="contact-us-link">
                                <li>
                                    <i class='bx bx-map'></i>
                                    <a href="#" target="_blank">Dhaka, Bangladesh</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="#">+8801722260010</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="#">sarjid777@gmail.com</a>
                                </li>
                            </ul>

                            <ul class="social-link">
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Support</h3>

                            <ul class="support-link">
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Condition</a></li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Useful Link</h3>

                            <ul class="useful-link">
                            @php
                                $categories = App\Models\Category::latest()->get();
                            @endphp
                            @foreach ($categories as $item)
                                <li><a href="#">{{ $item->category_name }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Newsletter</h3>

                            <div class="newsletter-box">
                                <p>To get the latest news and latest updates from us.</p>

                                <form  action="{{ url('subscirbe/newsletter') }}" method="POST">
                                    @csrf
                                    <label>Your e-mail address:</label>
                                    <input type="email" class="input-newsletter" placeholder="Enter your email" name="email" required autocomplete="off" data-validation="required">
                                    <button type="submit">Subscribe</button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="logo">
                        <a href="{{ url('/') }}" class="d-inline-block"><img src="{{ asset('fontend') }}/assets/img/white-logo.png" alt="image"></a>
                    </div>
                    <p><i class='bx bx-copyright'></i>{{ Carbon\Carbon::now()->format('Y') }} <a href="index-3.html" target="_blank"></a> Developed By <a href="javascript::void(0)" target="_blank">W3 Coders</a> | All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
   
        <!-- Links of JS files -->
        <script src="{{ asset('fontend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/mixitup.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/parallax.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/jquery.appear.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/odometer.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/particles.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/meanmenu.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/viewer.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/slick.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/form-validator.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/contact-form-script.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/main.js"></script>
        <script src="{{ asset('fontend/assets/toastr/toastr.min.js') }}"></script>
        <script>
            @if(Session::has('message'))
              var type ="{{Session::get('alert-type','info')}}"
              switch(type){
                  case 'info':
                      toastr.info(" {{Session::get('message')}} ");
                      break;
      
                  case 'success':
                      toastr.success(" {{Session::get('message')}} ");
                      break;
                      
                  case 'warning':
                      toastr.warning(" {{Session::get('message')}} ");
                      break;
      
                  case 'error':
                      toastr.error(" {{Session::get('message')}} ");
                      break;
              }
          @endif
          </script>
        <!-- Slider Revolution core JavaScript files -->
        <script src="{{ asset('fontend') }}/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/js/rev-slider-custom.js"></script>
        <script src="{{ asset('fontend') }}/assets/sweetalert2@8.js"></script>
        <script src="{{ asset('fontend') }}/assets/sweetalert.min.js"></script>
        <script src="{{ asset('fontend') }}/assets/showimg.js"></script>
        <script src="{{ asset('fontend') }}/assets/jquery.form-validator.min.js"></script>
        <script>
            $.validate({
              lang: 'en'
            });
          </script>
        
        <script>
               $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

                
   function addToCart(id){
       
       $.ajax({
            type: "GET",
           dataType: "json",
           url: '/add-to/cart/'+id,
           success:function(data){
            countQty();
                // start alert 
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
                     }

        // end alert 
           },
       })
    }

</script>

<script>
    function countQty(){
       $.ajax({
           type: "GET",
           dataType: "json",
           url: "/cart/qty",
           success: function(data){
              $('#countQty').text(data);
              $('#countQty2').text(data);
           }

       })
    }
    countQty();
</script>

        
    </body>

</html>