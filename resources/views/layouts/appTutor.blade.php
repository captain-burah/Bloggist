<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link href="{{('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" rel="stylesheet" type="text/css"/>
    <link href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
    <style>
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
    </style>  
</head>

<body class="landing-page sidebar-collapse bg-info">
    <!--  Nav  -->
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-md" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="/Landing">
            Enlighten Venture 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <!---   Navbar Right   --->
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToFeatures()">
                        <i class="material-icons">apps</i> Features
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0)" onclick="scrollToPayAsYouGo()">
                      <i class="material-icons">attach_money</i> Pricing
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToWhoAreWe()">
                        <i class="material-icons">supervisor_account</i> Who are we?
                    </a>
                  </li>
                  <li class="nav-item">  <!---- Register item--->
                      @if (Route::has('login')) <!-- if the route has already processed the 'login' route -->
                      <div>
                          @auth <!-- if the route is authenticated -->
                              @isset($url) <!-- if the route has a variable called 'url' -->
                                  @if ($url === "/student") <!-- if the variable url is '/student' -->
                                    <li class="nav-item">
                                      <a href="{{ url(app()->getLocale() . '/student_dashboard') }}" class="nav-link">
                                        <i class="material-icons">dashboard</i> Go to Dashboard
                                      </a>
                                    </li>
                                  @elseif ($url === "/tutors") <!-- if the variable url is '/tutors' -->
                                    <li class="nav-item">
                                      <a href="{{ url(app()->getLocale() . '/tutor') }}" class="nav-link">
                                        <i class="material-icons">dashboard</i> Go to Dashboard
                                      </a>
                                    </li>
                                  @endif
                              @endisset
                          @endauth
                      </div>
                    @endif
                  </li>
  
                  <li class="nav-item">  <!---- Log-In item--->
                    <a class="nav-link"  href="{{ url(app()->getLocale() . '/login/tutor') }}">
                      <i class="material-icons">login</i> {{ __('Log-In')}}
                    </a>
                  </li>
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
    <footer class="footer" data-background-color="black">
        <div class="container">
        <nav class="float-left ">
            <ul>
            <li>
                <a href="#">
                About Us
                </a>
            </li>
            <li>
                <a href="#">
                Licenses
                </a>
            </li>
            <li>
                <a href="#">
                Terms & Conditions
                </a>
            </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, <i class="material-icons text-danger">favorite</i> by
            <a href="{{('https://www.instagram.com/captain_burah')}}" target="_blank" >
            Captain Burah
            </a> for a better world.
            
            
        </div>
        </div>
    </footer>
    <!---------- Footer ----------->

  <!--  Scripts -->
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/moment.min.js')}}"></script>
    <script src="{{('https://cdn.jsdelivr.net/npm/sweetalert2@10')}}"></script>
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/material-kit.min.js?v=2.0.7')}}" type="text/javascript"></script>

    <script>
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

      function scrollToPayAsYouGo() {
        if ($('.section-PayAsYouGo').length != 0) {
          $("html, body").animate({
            scrollTop: $('.section-PayAsYouGo').offset().top
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