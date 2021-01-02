<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link href="{{('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="{{('https://fonts.gstatic.com')}}">
    <link href="{{('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap')}}" rel="stylesheet">
    <link href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">
    <link href="{{('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;600;700;900&display=swap')}}" rel="stylesheet">
    <!-- CSS Files -->
    
    <link href="{{ asset('css/material-kit.css?v=2.0.7')}}" rel="stylesheet" />
    <link href="{{('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('device-mockups/device-mockups.min.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css')}}">
    
    <style>
      .fontClass{
        font-family: 'Source Sans Pro', sans-serif;
        letter-spacing: -0.8px;
      }
      .fontH{
        font-weight: 600;
        font-size: 1.6em
      }
      .fontP{
        font-weight:600;
        font-size: 1.4em
      }
      .carousel-img{
        max-width:100%;
        height: 100%;
        display: block;
      }
        .image-preview__image{
          max-width: 200px;
          max-height: 200px;
          border-radius: 50%;
          border: 2px solid #dddddd;
      }
      .image-preview{
          min-width: 200px;
          min-height: 200px;
          border-radius: 50%;
          
          
                          
          /* default text */
          display: flex;
          align-items: center;
          justify-contents: center;
          font-weight: bold;
          color: #cccccc;
      }
      
      .image-preview__image{
          display: block;
          width: 100%;
      }
      .image-preview__default-text{
          display: none;
          width: 100%;
      }

      .border-3 {
        border-width:3px !important;
      }
      #searchBar::placeholder {
        font-size: 1.2rem;
        color: white;
      }

      .separator {
        color: #c5a47e;
        margin: 0 auto 20px;
        max-width: 240px;
        text-align: center;
        position: relative;
      }
      .separator:before, .separator:after {
        display: block;
        width: 40%;
        content: " ";
        margin-top: 10px;
        border: 1px solid #c5a47e;
      }
      .separator:before {
        float: left;
      }
      .separator:after {
        float: right;
      }

      .separator-danger {
        color: #e78b90;
      }
      .separator-danger:before, .separator-danger:after {
        border-color: #e78b90;
      }
      .filter .separator {
        color: #FFFFFF;
      }
      .filter .separator:before, .filter .separator:after {
        border-color: #FFFFFF;
      }
      .section-header .separator {
        color: #fff;
        margin: 30px auto;
      }
      .line-separator:before, .line-separator:after {
        border-color: white;
      }

      @media screen and (min-width: 0px) and (max-width: 720px) {
        .mobile-hide{ display: none !important; } 
        .mobile-view{ display:flexbox !important; }
      }
      
      @media screen and (min-width: 720px){
        .mobile-view{ display: none !important;}
      }


      .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem;
      }

      .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d;
      }

      .blockquote-footer::before {
        content: "\2014 \00A0";
      }
      .blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        border-right: 5px solid #eee !important;
        border-left: 0px !important;
      }

      .blockquote p {
        font-size: 1.063rem;
        font-style: italic;
      }

      .blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857143;
        color: #777;
      }

      .fontOne{
          font-size: 1rem;
        }

      #progressBar {
        position: relative;
        width: 100%;
        height: 5px;
        background-color: #ddd;
      }

      #barStatus1 {
        position: absolute;
        width: 0%;
        height: 100%;
        background-color: #4CAF50;
      }
      #barStatus2 {
        position: absolute;
        width: 0%;
        height: 100%;
        background-color: #F44336;
      }
      
      
      .footer-aa:hover{
        color: #ffffff;
      }
      .footer-aa:active {
        color: #ffffff;
      }
      .footer-head {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
      }
    </style>  
</head>

<body class="index-page sidebar-collapse bg-dark">
    <!--  Nav  -->
    <nav class="navbar navbar-transparent bg-dark navbar-color-on-scroll fixed-top navbar-expand-md " 
    color-on-scroll="100" id="sectionsNav">
        <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand" href="{{('/')}}" >
              Enlighten Venture 
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" 
              aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Menu</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse">
            <!---   Navbar Left   --->
            <ul class="navbar-nav mx-auto text-center">
              <!--- Register --->
              <li class="nav-item mx-4">
                <a class="nav-link" href="javascript:void(0)" onclick="scrollToFeatures()">
                    {{ __('Register')}}
                </a>
              </li>
              <!------ Register ------>

              <!------ About Us ------>
              <li class="nav-item mx-4">
                <a class="nav-link" href="{{ url(app()->getLocale() . '/about_us')}}">
                    {{ __('About')}}
                </a>
              </li>
              <!------ About Us ------>

              <!------ Pages ------>
              <li class="dropdown nav-item mx-4">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                {{__('Pages')}}
                </a>
                <div class="dropdown-menu dropdown-with-icons">
                  <a class="dropdown-item"
                  href="{{ url(app()->getLocale() . '/tutors')}}">
                    {{ __('Tutors Home')}}
                  </a>
                  <a class="dropdown-item"
                  href="{{ url('#AcademyPage')}}">
                    {{ __('Open Academy')}}
                  </a>
                  <a class="dropdown-item"
                  href="{{ url('#TutorPanel')}}">
                    {{ __('Open Tutor Panel')}}
                  </a>
                  <a class="dropdown-item"
                  href="{{ url('#StudentCast')}}">
                    {{ __('Open StudentCast')}}
                  </a>
                </div>
              </li>
              <!------ Pages ------>
              
            </ul>
            <!---   Navbar Right   --->
            <!---   Navbar Right   --->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Follow us on Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Like us on Facebook">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Follow us on Instagram">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link p-3" rel="tooltip" title="" data-placement="bottom" 
                href="#"
                data-original-title="Call Us On">
                  <i class="fa fa-phone"></i>{{ __(' +94 77 637 1444')}}
                </a>
              </li>
            -->
            </ul>
            <!---   Navbar Right   --->
          </div>
        </div>
    </nav>
    <!--  Nav  -->

    <!-- Body -->
    <main>
        @yield('content')
    </main>
    <!-- Body -->
  <!---------- Footer ----------->
  <footer class="bg-dark">
    <div class="container">
      <div class="py-5 row text-secondary">
        <div class="col-12 col-md my-auto">
          <small class="d-block mb-3 text-muted">
            &copy; 
            <script>
              document.write(new Date().getFullYear())
            </script>,
          <a href="{{('https://www.instagram.com/captain_burah')}}" class="footer-a text-rose" target="_blank" >
            Captain Burah
          </a>for a better world. Made in Laravel 8.
          </small>
          <ul>
          <a class="m-0 text-secondary Flink pb-0 footer-aa"><i class="material-icons">language</i></a>
          @foreach (config('app.available_locales') as $locale)
              <li class="nav-item pb-0 footer-aa">
                  <a @if (app()->getLocale() == $locale) 
                      style="text-decoration: underline;" 
                      class="nav-link footer-aa" @endif 
                  href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}" class="nav-link Flink footer-aa">
                      
                      {{ strtoupper($locale )}}
                  </a>
              </li>
          @endforeach
          </ul>
        </div>
        <div class="col-md-6">
          <div class="row col-md-12 pb-5">
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">Features</h5>
              <ul class="text-small text-secondary">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Home</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Tutors Home</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Cool stuff</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Stuff for developers</a></li>
              </ul>
            </div>
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">Resources</h5>
              <ul class="list-unstyled text-small">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Resource</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Resource name</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Another resource</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Final resource</a></li>
              </ul>
            </div>
          </div>
          <div class="row col-md-12 ">
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">Help</h5>
              <ul class="list-unstyled text-small">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Payment Gateways</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Tutors Payout</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Government</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Gaming</a></li>
              </ul>
            </div>
            <div class="col-6 col-md text-left">
              <h5 class="font-weight-bold m-0 mt-2">About</h5>
              <ul class="list-unstyled text-small">
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Team & DevOps</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Privacy Policy</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Copyright License</a></li>
                <li class="d-block"><a class="footer-aa py-0 pr-0 text-capitalize" href="#">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </div>
  </footer>
  <!---------- Footer ----------->

  <!--  Scripts -->
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/moment.min.js')}}"></script>
    <script src="{{ asset('js/material-kit.min.js?v=2.0.7')}}" type="text/javascript"></script>
    
    <!-- Vanilla Javascript -->
    <script>
      $(document).ready(function(){
        $('.loop1').owlCarousel({
            center:false,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:true
                }
            }
        });
        $('.loop2').owlCarousel({
            center:true,
            loop:true,
            autoplay:true,
            margin:10,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:2,
                    nav:true,
                    loop:true
                }
            }
        })
      });
      function detectScreen(x){
        if (x == 1){
          if (( window.innerWidth <= 700 ) || ( window.innerHeight <= 600 )){
            var screenSize = 'mobile';
            //return document.getElementById('studentReg').style.display='block';
            window.location.href = '/student_registration';
          }
          else{
            //var screenSize = 'notMobile';
            //return window.location.href = 'http://www.google.com';

            var studentRegModal = document.getElementById('studentReg');
            //console.log(studentRegModal.dataset.target);
            studentRegModal.dataset.target = "#studentRegModal";
            //console.log(studentRegModal.dataset.target);
          }
        }
        else if (x == 2){
          if (( window.innerWidth <= 800 ) || ( window.innerHeight <= 600 )){
            //var screenSize = 'mobile';
            //return document.getElementById('studentReg').style.display='block';
            window.location.href = '/tutor_registration';
          }
          else{
            //var screenSize = 'notMobile';
            //return window.location.href = 'http://www.google.com';
            var studentRegModal = document.getElementById('tutorReg');
            console.log(studentRegModal.dataset.target);
            studentRegModal.dataset.target = "#tutorRegModal";
            console.log(studentRegModal.dataset.target);
          }
        }
      }

      function scrollToCover() {
        if ($('.section-cover').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-cover').offset().top
          }, 1000);
        }
      }

      function scrollToWhoAreWe() {
        if ($('.section-whoAreWe').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-whoAreWe').offset().top
          }, 1000);
        }
      }

      function scrollToFeatures() {
        if ($('.section-feature').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-feature').offset().top
          }, 1000);
        }
      }
      
      function scrollToContactUs() {
        if ($('.section-ContactUs').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-ContactUs').offset().top
          }, 1000);
        }
      }
      
    </script>
  <!-- /Scripts -->
</body>

</html>