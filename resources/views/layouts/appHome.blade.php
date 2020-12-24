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
    <link href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" >
    <link href="{{('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />

    <link href="{{asset('device-mockups/device-mockups.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/new-age/landing-page.min.css')}}" rel="stylesheet">

    <style>
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
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-md p-1 m-0" 
    color-on-scroll="100" id="sectionsNav">
        <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand" href="{{('/')}}" >
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
            <!---   Navbar Left   --->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link p-2" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Follow us on Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Like us on Facebook">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2" rel="tooltip" title="" data-placement="bottom" 
                href="#" target="_blank" 
                data-original-title="Follow us on Instagram">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2" rel="tooltip" title="" data-placement="bottom" 
                href="#"
                data-original-title="Call Us On">
                  <i class="fa fa-phone"></i>{{ __(' +94 77 637 1444')}}
                </a>
              </li>
            </ul>
            <!---   Navbar Right   --->
            <!---   Navbar Right   --->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/home')}}" onclick="scrollToFeatures()">
                    {{ __('Home')}}
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="scrollToFeatures()">
                    {{ __('About Us')}}
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/home')}}" onclick="scrollToFeatures()">
                       {{ __('Clients')}}
                  </a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" onclick="scrollToContactUs()">
                      {{ __('Blog')}}
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
  <footer class="bg-dark">
    <div class="container">
      <div class="py-5 row text-secondary">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">
            &copy; 
            <script>
              document.write(new Date().getFullYear())
            </script>,
          <a href="{{('https://www.instagram.com/captain_burah')}}" class="footer-a text-rose  " target="_blank" >
            Captain Burah
          </a>for a better world.
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
        <div class="col-6 col-md text-left">
          <h5 class="font-weight-bold m-0 mt-2">Features</h5>
          <ul class="text-small text-secondary">
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Team feature</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Random feature</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Cool stuff</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Stuff for developers</a></li>
          </ul>
        </div>
        <div class="col-6 col-md text-left">
          <h5 class="font-weight-bold m-0 mt-2">Resources</h5>
          <ul class="list-unstyled text-small">
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Resource</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Resource name</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Another resource</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md text-left">
          <h5 class="font-weight-bold m-0 mt-2">Resources</h5>
          <ul class="list-unstyled text-small">
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Business</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Education</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Government</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md text-left">
          <h5 class="font-weight-bold m-0 mt-2">About</h5>
          <ul class="list-unstyled text-small">
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Team</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Locations</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Privacy</a></li>
            <li class="d-block"><a class="footer-aa py-0 text-capitalize" href="#">Terms</a></li>
          </ul>
        </div>
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

    <!-- Vanilla Javascript -->
    <script>
      $('#studentForm').submit(function (e) {
        if (passValidate() == true ){
            
            let url = '';
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var formData = $(this).serialize(); // get form data
            if ( fetch(url, {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: 'post',
                credentials: "same-origin",
                body: formData
                }).then ((data) => {
                  console.log('Reg Success');
                }) == true) {
                  console.log('true statement works')

            } else (function(response) {
                e.preventDefault(); // prevent the form from 'submitting'
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Something went wrong!',
                  showConfirmButton: false,
                  timer: 2000
                });
                console.log('error');
                $('#studentRegModal').modal('show');
            });
        } else {
              e.preventDefault(); // prevent the form from 'submitting'
              Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Password Error',
                text: 'Please enter a valid password',
                showConfirmButton: false,
                timer: 2000
              })
        }
        
      })
      
          

      function associate_errors(errors, $form) {
          //remove existing error classes and error messages from form groups
          $form.find('.form-group').removeClass('has-errors').find('.help-text').text('');
          errors.foreach(function(value, index)
          {
              //find each form group, which is given a unique id based on the form field's name
              var $group = $form.find('#' + index + '-group');

              //add the error class and set the error text
              $group.addClass('has-errors').find('.help-text').text(value);
          })
      }


      function passValidate() { 
        var res; 
        var str = document.getElementById("stuPass").value; 
        if (str.match(/[a-z]/g) && str.match(/[A-Z]/g) && 
          str.match(/[0-9]/g) && str.match(/[^a-zA-Z\d]/g) && str.length >= 8) 
            return true;
        else 
            return false;
      } 

      function lol(){
        $('#studentForm').submit(function (e) {
          e.preventDefault()  // prevent the form from 'submitting'
          
          var url = ('api/user')// get the target
          var formData = $(this).serialize() // get form data
          if ($.post(url, formData) == true){ // send; response.data will be what is returned
            console.log('successful')
            move(1)

          } else {
            move(2);
            console.log('failled to post data')

            let timerInterval
            Swal.fire({
              title: 'Validating!',
              html: 'Give us a few <b></b> milliseconds.',
              timer: 1500,
              timerProgressBar: true,
              willOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                  const content = Swal.getContent()
                  if (content) {
                    const b = content.querySelector('b')
                    if (b) {
                      b.textContent = Swal.getTimerLeft()
                    }
                  }
                }, 100)
              },
              willClose: () => {
                clearInterval(timerInterval)
              }
            }).then((result) => {
              /* Read more about handling dismissals below */
              if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Something went wrong!',
                  showConfirmButton: false,
                  timer: 3000
                })
              }
              else{
                console.log('I was closed by the User')
              }
            })
            
          }
            
        })
      }

      function move(y) {
        if (y == 1){
          var width = 0;
          var elem = document.getElementById("barStatus1"); 
          
          var id = setInterval(frame, 5);
          function frame() {
            if (width >= 100) {
              //clearInterval(id);
            } else {
              width++; 
              elem.style.width = width + '%'; 
            }
          }
        } else if (y == 2){
          var width = 0;
          var elem = document.getElementById("barStatus2"); 
          
          var id = setInterval(frame, 5);
          function frame() {
            if (width >= 100) {
              //clearInterval(id);
            } else {
              width++; 
              elem.style.width = width + '%'; 
            }
          }
        }
      }


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

      $(document).ready(function() {
        if ($('.datetimepicker').length != 0) {
          //init DateTimePickers
          materialKit.initFormExtendedDatetimepickers();
        }
        if ($('.slider').length != 0) {
          // Sliders Init
          materialKit.initSliders();
        }
      });

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