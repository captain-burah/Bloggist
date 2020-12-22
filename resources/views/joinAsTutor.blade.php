<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="css/material-kit.min.css?v=2.0.7" rel="stylesheet" />

    <style>
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

<body class="landing-page sidebar-collapse">
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
                  <a class="nav-link" href="javascript:void(0)" onclick="scrollToWhoAreWe()">
                      <i class="material-icons">supervisor_account</i> Who are we?
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToPayAsYouGo()">
                    <i class="material-icons">attach_money</i> Pricing
                    </a>
                </li>

                <li class="nav-item">  <!---- Register item--->
                  @if (Route::has('login'))
                      <div>
                          @auth
                              @isset($url)
                                  @if ($url === "/student")
                                    <li class="nav-item">
                                      <a href="{{ url(app()->getLocale() . '/student_dashboard') }}" class="nav-link">
                                        <i class="material-icons">dashboard</i> Go to Dashboard
                                      </a>
                                    </li>
                                  @elseif ($url === "/tutors")
                                    <li class="nav-item">
                                      <a href="{{ url(app()->getLocale() . '/tutor') }}" class="nav-link">
                                        <i class="material-icons">dashboard</i> Go to Dashboard
                                      </a>
                                    </li>
                                  @endif
                              @endisset
                              @empty($url)
                                  <a class="nav-link" href="javascript:void(0)" onclick="scrollToContactUs()">
                                    <i class="material-icons">person_add</i> Register
                                  </a>
                              @endempty
                          @else
                              <a class="nav-link" href="javascript:void(0)" onclick="scrollToContactUs()">
                                <i class="material-icons">person_add</i> Register
                              </a>
                          @endauth
                      </div>
                  @endif
                </li>

                <li class="nav-item">  <!---- Log-In item--->
                  @if (Route::has('login'))
                      <div>
                          @auth
                              @empty($url)
                                  <a class="nav-link"  href="{{ route('login', app()->getLocale()) }}">
                                    <i class="material-icons">login</i> {{ __('Log-In')}}
                                  </a>
                              @endempty
                          @else
                              <a class="nav-link" href="{{ route('login', app()->getLocale()) }}">
                                <i class="material-icons">login</i> {{ __('Log-In')}}
                              </a>
                          @endauth
                      </div>
                  @endif
                </li>
            </ul>
        <!---   Navbar Right   --->
      </div>
    </div>
  </nav>
  <!--  Nav  -->

  <!---   Cover   --->
  <div class="page-header header-filter" data-parallax="true" 
  style="background-image: url(img/city3.jpg); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
      <div class="row ">
          <div class="col-md-5 text-center">
              <div class="brand mobile-view">
                  <h3 class="">Your Story Starts Now</h3>
                  <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
              <div class="">
                <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      {{ __('Language')}}
                  </a>
                  <div class="dropdown-menu dropdown-with-icons">
                    <a href="#" class="dropdown-item">
                      <img class="material-icons" src="{{asset('img/flags/GB.png')}}"/> {{ __(' English')}}
                    </a>
                    <a href="#" class="dropdown-item">
                      <img class="material-icons" src="{{asset('img/flags/LK.png')}}"/> {{ __(' Sinhala')}}
                    </a>
                  </div>
                </li>
                <a href="#" class="btn btn-info btn-lg">
                  <i class="fa fa-university"></i>&nbsp Go To Academy
                </a>
                <a href="#" target="" class="btn btn-success btn-lg" rel="nofollow">
                    <i class="fa fa-hashtag"></i>&nbsp Go To StudentCast
                </a>
                <a href="#" target="_blank" class="btn btn-warning btn-lg" rel="nofollow">
                    <i class="fa fa-graduation-cap"></i>&nbsp View Tutor Panel
                </a>
                <a href="#" onclick="scrollToContactUs()" class="btn btn-danger btn-lg mobile-view" rel="nofollow">
                  <i class="fa fa-play"></i>&nbsp Hurry! Join ASAP
              </a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 text-right mobile-hide" >
            <h1 class="title text-right">Your Story Starts Now</h1>
            
            <a href="#" onclick="scrollToContactUs()"
            class="btn btn-danger btn-raised btn-lg ">
              <i class="fa fa-play"></i> Hurry! Join ASAP
            </a>
          </div>
      </div>
    </div>
  </div>
  <!---   Cover   --->


  <!---------- Body ----------->
  <div class="main main-raised">
    <div class="container">
      <!---   Section 01  Features --->
      <div class="pt-1 section-feature" id="featureSection">
        <div class="text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
            <h1 class="title">Let's talk product</h1>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
            </div>
          </div>
          <div class="features">
            <div class="row">
              
            <div class="col-md-4">
              <div class="info">
              <div class="icon icon-info">
                <i class="material-icons">chat</i>
              </div>
              <h4 class="info-title">StudentCast</h4>
              <p>A discussion forum that connects tutors and students together. All 
                discussions have been categorized under subjects where tutors will
                be notified of their respective subjects.
              </p>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="info">
              <div class="icon icon-success">
                <i class="material-icons">verified_user</i>
              </div>
              <h4 class="info-title">Virtual Learning Environment</h4>
              <p>
                A user friendly environment with unrealistic facilities to satisfy 
                both the students and tutors, to function all your everyday needs.
              </p>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="info">
              <div class="icon icon-danger">
                <i class="material-icons">people_outline</i>
              </div>
              <h4 class="info-title">Free Registrations</h4>
              <p>
                All tutors and students can register for free. Use this opportunity 
                to explore the interface and feel the experience of this masterpiece.
              </p>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
      <!---   /Section 01  Features --->
    </div>

    <!---   Section 02  PayAsYouGo --->
    <div class="section section-PayAsYouGo" id="PayAsYouGo">
      <div class="text-center">
        <!---------- Description Plan ----------->
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
          <h1 class="title">Pricing</h1>
          <h5 class="description">
            This is the paragraph where you can write more details about 
            your product. Keep you user engaged by providing meaningful information.
            Remember that by this time, the user is curious, otherwise he wouldn't 
            scroll to get here. Add a button if you want the user to see more.
          </h5>
          </div>
        </div>
        <!---------- Description Plan ----------->
        <!---------- Starter Plan ----------->
        <div class="row col-md-8 mx-1 mx-auto">
          <div class="card border border-warning">
            <div class="card-header card-header-warning">
              <h3 class="card-title">Starter Plan</h3>
            </div>
            <div class="card-body">
              <h5>
                Storage: Unlimited
                <br><hr class="bg-warning">
                
                Personalised Subdomain
                <br><hr class="bg-warning">
                            
                Fast & Easy Exam & Lesson Module
                <br><hr class="bg-warning">
                            
                Staff Accounts: 10
                <br><hr class="bg-warning">
                            
                Transaction fee: 03 %
                <br><hr class="bg-warning">
                
                Minimum LKR 2,500 /mo onwards
              </h5>
              <a href="#" class="btn btn-white border border-warning text-warning text-capitalize">
                <h5 class="p-0 m-0">Go with Starter Plan</h5>
              </a>
            </div>
          </div>
        </div>
        <!---------- Starter Plan ----------->

        <div class="features">
          <div class="row mx-1">
            <!---------- Pay As You Go ----------->		  
            <div class="col-lg-3">
              <div class="card border border-warning">
                <div class="card-header card-header-warning">
                  <h3 class="card-title">Pay As You Go</h3>
                  <h4 class="category ">Students: Unlimited</h4>
                </div>
                <div class="card-body">
                  <h5>
                    With EV you only pay for what use, helping your 
                    career remain agile, responsive and always 
                    able to meet scale demands.
                    <br><hr class="bg-warning">
                    
                    Pay-as-you-go pricing allows you to easily adapt to 
                    changing needs without overcommitting budgets 
                    and improving your responsiveness to changes.
                    <br><hr class="bg-warning">
                    
                  </h5>
                  <a href="#" class="btn btn-white border border-warning text-dark  text-capitalize">
                    <h5 class="p-0 m-0 font-weight-bold ">Read More</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Pay As You Go ----------->
            <!---------- Beginner ----------->
            <div class="col-lg-3">
              <div class="card border border-primary">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Beginners Path</h3>
                  <h4 class="category">Students: Up to 25</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Storage: 5 GB
                    <br><hr class="bg-primary">
                    
                    Personalised Subdomain
                    <br><hr class="bg-primary">
                                
                    Fast & Easy Exam & Lesson Module
                    <br><hr class="bg-primary">
                                
                    Staff Accounts: 2
                    <br><hr class="bg-primary">
                                
                    Transaction Fee: Free
                    <br><hr class="bg-primary">
                    
                    LKR 5,000 /mo
                    <br>
                  </h5>
                  <a href="#" class="btn btn-white border border-primary text-primary text-capitalize">
                    <h5 class="p-0 m-0">Go with Starter Plan</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Beginner ----------->
            <!---------- Professionals ----------->
            <div class="col-lg-3">
              <div class="card border border-info">
                <div class="card-header card-header-info">
                  <h3 class="card-title">Professionals Path</h3>
                  <h4 class="category">Students: Up to 250</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Storage: 10 GB
                    <br><hr class="bg-info">
                    
                    Personalised Subdomain
                    <br><hr class="bg-info">
                                
                    Fast & Easy Exam & Lesson Module
                    <br><hr class="bg-info">
                                
                    Staff Accounts: 5
                    <br><hr class="bg-info">
                                
                    Transaction Fee: 05 %
                    <br><hr class="bg-info">
                    
                    LKR 10,000 /mo
                    <br>
                  </h5>
                  <a href="#" class="btn btn-white border border-info text-info text-capitalize">
                    <h5 class="p-0 m-0">Go with Starter Plan</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Professionals ----------->
            <!---------- Masters Path ----------->
            <div class="col-lg-3">
              <div class="card border border-success">
                <div class="card-header card-header-success">
                  <h3 class="card-title">Masters Path</h3>
                  <h4 class="category">Students: Unlimited</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Storage: 15 GB
                    <br><hr class="bg-info">
                    
                    Personalised Subdomain
                    <br><hr class="bg-info">
                                
                    Fast & Easy Exam & Lesson Module
                    <br><hr class="bg-info">
                                
                    Staff Accounts: 10
                    <br><hr class="bg-info">
                                
                    Transaction Fee: 05 %
                    <br><hr class="bg-info">
                    
                    LKR 20,000 /mo
                    <br>
                  </h5>
                  <a href="#" class="btn btn-white border border-success text-success text-capitalize">
                    <h5 class="p-0 m-0">Go with Starter Plan</h5>
                  </a>
                </div>
              </div>
            </div>
            <!---------- Masters Path ----------->
          </div>
        </div>
      </div>
    </div>
    <!---   /Section 02  PayAsYouGo --->

    <!---   Section 03  Contact Us --->
        <div class="section section-ContactUs" style="background-image: url('img/bg19.jpg'); 
        background-size: cover; background-position: top center; min-height: 700px;"  id="ContactUs">
          <div class="container">
            <div class="title text-center pb-4">
                <h1><span class="text-warning font-weight-bold ">Hurry!</span> Sign Up Now</h1>
            </div>
            <div class="row pt-5">
              <!--  Student Button -->
                <div class="col-lg-5 mx-auto">
                  <div class="card  ">
                      <div class="card-header card-header-warning text-center " >
                        <a href="/register" 
                        class="btn btn-white btn-block fontOne text-capitalize text-dark" 
                        >
                          <i class="fa fa-university"></i>&nbsp Join As Student
                        </a>

                      </div>
                      <div class="card-body ">
                      </div>
                  </div>
                </div>
              <!--  Student Button -->

              <!--  Tutor Button -->
                <div class="col-lg-5 mx-auto">
                  <div class="card  ">
                      <div class="card-header card-header-info text-center">
                        <a href="/tutor_registration"  class="btn btn-white btn-block fontOne text-capitalize text-dark">
                          <i class="fa fa-graduation-cap"></i>&nbsp Become a Tutor
                        </a>
                      </div>
                      <div class="card-body ">
                      </div>
                  </div>
                </div>
              <!--  Tutor Button -->
            </div>
          </div>
        </div>
    <!---   /Section 03  Contact Us --->
  </div>
  <!---------- Body ----------->

  <!---------- Footer ----------->
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left ">
        <ul>
          <li>
            <a href="https://www.instagram.com/captain_burah" target="_blank">
              Captain Burah
            </a>
          </li>
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
        <a href="https://www.instagram.com/captain_burah" target="_blank" >
          Captain Burah
        </a> for a better world.
          
          
      </div>
    </div>
  </footer>
  <!---------- Footer ----------->

  <!--  Scripts -->
    <!--   Core JS Files   -->
    <script src="js/core/jquery.min.js" type="text/javascript"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="js/plugins/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="js/material-kit.min.js?v=2.0.7" type="text/javascript"></script>

    

   
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