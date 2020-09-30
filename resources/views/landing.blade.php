<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>
        Virtual Venture 2021
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="css/material-kit.min.css?v=2.0.7" rel="stylesheet" />
    <link rel="stylesheet" href="sweetalert2.min.css" />
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
                  
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToContactUs()">
                    <i class="material-icons">person_add</i> Register
                    </a>
                  </li>

                  <li class="dropdown nav-item">
                      <!-----   Log In Auth   ----->
                          @if (Route::has('login'))
                              @isset($url)
                                  <!----------------------------   Student Landing   -------------->
                                  @if ($url === "/student")
                                      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                          <i class="material-icons">apps</i> {{ Auth::user()->name}}
                                      </a>
                                      <div class="dropdown-menu dropdown-with-icons">
                                          <a href="{{ url('/student_dashboard') }}" class="dropdown-item"> 
                                              <i class="material-icons">child_care</i> My Dashboard
                                          </a>
                                      </div>

                                  <!----------------------------   Tutor Landing   -------------->
                                  @elseif ($url === "/tutors")
                                      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                          <i class="material-icons">apps</i> {{ Auth::guard('lecturer')->user()->Fname }}
                                      </a>
                                      <div class="dropdown-menu dropdown-with-icons">
                                          <a href="{{ url('/tutor') }}" class="dropdown-item"> 
                                              <i class="material-icons">school</i> My Dashboard
                                          </a>
                                      </div>
                                  @endif
                              @endisset

                              <!----------------------------   Empty URL Landing   -------------->
                              @empty($url)
                                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                      <i class="material-icons">apps</i> Log In
                                  </a>
                                  <div class="dropdown-menu dropdown-with-icons">
                                      <a href="{{ route('login') }}" class="dropdown-item">
                                          <i class="material-icons">child_care</i> Student
                                      </a>
                                      <a href="{{ url('/login/tutor') }}" class="dropdown-item">
                                          <i class="material-icons">school</i> Tutor
                                      </a>
                                  </div>
                              @endempty

                          @else 
                              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                  <i class="material-icons">apps</i> Log In
                              </a>
                              <div class="dropdown-menu dropdown-with-icons">
                                  <a href="{{ route('login') }}" class="dropdown-item">
                                      <i class="material-icons">child_care</i> Student
                                  </a>
                                  <a href="{{ url('/login/tutor') }}" class="dropdown-item">
                                      <i class="material-icons">school</i> Tutor
                                  </a>
                              </div>
                          @endif
                      <!-----   Log In Auth   ----->
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-center" rel="tooltip" title="" data-placement="bottom" 
                      href="https://www.facebook.com/CaptainBurah" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                      <i class="fa fa-facebook-square"></i>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-center" rel="tooltip" title="" data-placement="bottom" 
                      href="https://www.instagram.com/captain_burah" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                      <i class="fa fa-instagram"></i>
                      </a>
                  </li>
              </ul>
          <!---   Navbar Right   --->
        </div>
      </div>
    </nav>
  <!--  Nav  -->
  <!---   Cover   --->
    <div class="page-header header-filter" data-parallax="true" 
    style="background-image: url(img/bg13.jpg); transform: translate3d(0px, 0px, 0px);">
      <div class="container">
        <div class="row ">
            <div class="col-md-5 text-center">
                <div class="brand">
                    <h3 class="">Sri Lanka's Next Peak of Education.</h3>
                    <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
                </div>
                <div class="">
                  <a href="#" class="btn btn-info btn-lg">
                    <i class="fa fa-university"></i>&nbsp Go To Academy
                  </a>
                  <a href="#" target="" class="btn btn-success btn-lg" rel="nofollow">
                      <i class="fa fa-hashtag"></i>&nbsp Go To StudentCast
                  </a>
                  <a href="#" target="_blank" class="btn btn-warning btn-lg" rel="nofollow">
                      <i class="fa fa-graduation-cap"></i>&nbsp View Tutor Panel
                  </a>
                  <a href="#" target="_blank" class="btn btn-danger btn-lg mobile-view" rel="nofollow">
                    <i class="fa fa-play"></i>&nbsp Hurry! Join ASAP
                </a>
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 text-right mobile-hide" >
              <h1 class="title text-right">Your Story Starts Now</h1>
              <div class="blockquote bg-dark">
                <p>
                  You are born to the future (today), now forge your future you <br>want to live with what you have today.
                </p>
                <small class="">
                  - my father -
                </small>
              </div>
              <a href="#" onclick="scrollToContactUs()"
              class="btn btn-danger btn-raised btn-lg text-capitalize ">
                <i class="fa fa-play"></i> Hurry! Join asap
              </a>
            </div>
        </div>
      </div>
    </div>
  <!---   Cover   --->



  <div class="main main-raised">
    <!---   Section 02  Features --->
        <div class="section pt-1 section-feature" id="featureSection">
          <div class="container">
              <div class="title">
                  <h1>Enligthen Your Features</h1>
              </div>
          
          </div>
      </div>
    <!---   /Section 02  Features --->

    <!---   Section 01  WhoAreWe? --->
        <div class="section section-whoAreWe" id="whoAreWeSection">
            <div class="container">
                <div class="title text-right">
                    <h1 class="">Who We Are?</h1>
                </div>
            
            </div>
        </div>
    <!---   /Section 01  WhoAreWe? --->


    <!---   Section 03  PayAsYouGo --->
      <div class="section section-PayAsYouGo" id="PayAsYouGo">
        <div class="container">
          <div class="title text-lefy">
              <h1>Tutors: Pay As You Go</h1>
          </div>
          
        </div>
      </div>
    <!---   /Section 03  PayAsYouGo --->


    <!---   Section 04  Standard Pricing --->
      <div class="section" id="#">
        <div class="container">
          <div class="title text-right">
              <h1>Or Use Our Packages</h1>
          </div>
          
        </div>
      </div>
    <!---   /Section 04  Standard Pricing --->
  

    <!---   Section 05  Contact Us --->
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
                        <a href="/student_registration" 
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
                        <a id="tutorReg" class="btn btn-white btn-block fontOne text-capitalize text-dark" 
                        data-toggle="modal" data-target="#" onclick="detectScreen(2)">
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
    <!---   /Section 05  Contact Us --->
  </div>
    


  <!-- Student Modal -->
    <div class="modal fade " id="studentRegModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-signup card-plain">
            <div class="modal-header bg-dark pb-2 border-bottom border-dark">

              <div class="card-header card-header-warning text-center">
                <div>
                  <h2 class="modal-title mb-0 pb-0 font-weight-bold" >
                    Sign Up 
                  </h2>
                  <span class="" style="font-size: 1.1rem;">
                    It's quick & easy
                  </span>
                </div>  
              </div>
              <button type="button" class="close mt-2 pt-4" data-dismiss="modal" aria-label="Close">
                <i class="material-icons mt-3 text-white" style="font-size: 1.5rem">clear</i>
              </button>
            </div>
            <div id="progressBar">
              <div id="barStatus1"></div>
              <div id="barStatus2"></div>
            </div>
            <div class="modal-body">


              <form  method="POST" id="studentForm" action="{{ route('register')}}" name="studentForm">
                @csrf
                <div class="form-row">

                  <!--  First Name  -->
                    <div class="form-group col-md-6">
                      <label for="fname">{{ __('First Name') }}</label>
                      <input type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" 
                      name="fname" placeholder="Sherlock" value="{{ old('fname') }}" required autofocus>

                      @if ($errors->has('fname'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('fname') }}</strong>
                          </span>
                      @endif
                    </div>
                  <!--  /First Name  -->

                  <!--  Last Name  -->
                    <div class="form-group col-md-6">
                    <label for="lname">{{ __('Last Name') }}</label>
                    <input type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" 
                    name="lname" placeholder="Holmes" value="{{ old('lname') }}" required autofocus>

                    @if ($errors->has('lname'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('lname') }}</strong>
                      </span>
                    @endif
                    </div>
                  <!--  /Last Name  -->
                </div>
                <div class="mt-2">
                  <!--  Email  -->
                    <div class="form-group">
                      <label for="email">{{ __('E-Mail Address') }}</label>
                      <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                      name="email" placeholder="someone@somemail.com"
                      autocomplete="off" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                  <!--  /Email  -->
                </div>

                <div class="form-row mt-2">
                  <!--  DOB  -->
                    <div class="col-md-6">
                      <div class="form-group bmd-form-group is-filled">
                        <label class="label-control bmd-label-static">{{ __('Date Of Birth') }}</label>
                        <input type="text" class="form-control datetimepicker {{ $errors->has('dob') ? ' is-invalid' : '' }}" 
                        name="dob" value="{{ old('dob') }}" autocomplete="off" required >

                        @if ($errors->has('dob'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                  <!--  /DOB  -->

                  <!--  /Gender  -->
                    <div class="form-group col-md-6">
                      <label for="gender">{{ __('Gender') }}</label>
                      <select name="gender" class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}" 
                        value="{{ old('gender') }}" required >
                        <option value="">Choose..</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>

                      @if ($errors->has('gender'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                      @endif
                    </div>
                  <!--  /Gender  -->
                </div>

                <div class="row">
                  <!--  Batch 01  -->
                      <div class="col-md-6">
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input " 
                              type="radio" name="batch1" id="batch1" 
                              value="option1" checked>
                              {{ __('Advanced Level') }}
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input " 
                              type="radio" name="batch1" id="batch2" 
                              value="option1"  >
                              {{ __('Ordinary Level') }}
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input " 
                              type="radio" name="batch1" id="batch3" 
                              value="option1"  >
                              {{ __('Scholarship') }}
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>

                        
                    </div>
                  <!--  /Batch 01  -->

                  <!--  Batch 02 -->
                      <div class="form-group col-md-6 mt-2 pt-1">
                        <label for="batch2">{{ __('Year Of Examination') }}</label>
                        <select name="batch2" class="form-control {{ $errors->has('batch2') ? ' is-invalid' : '' }}" required>
                          <option value="">Choose..</option>
                          <option value="2024">2024</option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                          <option value="1994">1994</option>
                          <option value="1993">1993</option>
                          <option value="1992">1992</option>
                          <option value="1991">1991</option>
                          <option value="1990">1990</option>
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                          <option value="1980">1980</option>
                        </select>
                        @if ($errors->has('batch2'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('batch2') }}</strong>
                          </span>
                        @endif
                      </div>
                  <!--  /Batch 02 -->
                </div>
                <div class="row mt-3">
                  <!--  Password  -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        name="password" id="stuPass" autocomplete="off" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                  <!--  /Password  -->
                </div>

                
                <button type="submit" class="btn btn-block btn-success">
                  {{ __('Register') }}
                </button>
              </form>


            </div>
            <div class="modal-footer bg-dark mb-0 p-2">
              <button type="button" class="btn btn-white btn-link" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--  End Student Modal -->

  <!-- Tutor Modal -->
    <div class="modal fade " id="tutorRegModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-signup card-plain">
            <div class="modal-header bg-dark pb-2 border-bottom border-dark">

              <div class="card-header card-header-info text-center">
                <div>
                  <h2 class="modal-title mb-0 pb-0 font-weight-bold" >
                    Sign Up 
                  </h2>
                  <span class="" style="font-size: 1.1rem;">
                    It's quick & easy
                  </span>
                </div>
              </div>
              <button type="button" class="close mt-2 pt-4" data-dismiss="modal" aria-label="Close">
                <i class="material-icons mt-3 text-white" style="font-size: 1.5rem">clear</i>
              </button>
            </div>
            <div class="modal-body">
              <form>
                
                <div class="form-row">
                  <!--  First Name  -->
                    <div class="form-group col-md-6">
                      <label for="email">First Name</label>
                      <input type="text" class="form-control" id="Fname" placeholder="Sherlock">
                    </div>
                  <!--  /First Name  -->

                  <!--  Last Name  -->
                    <div class="form-group col-md-6">
                      <label for="email">Last Name</label>
                        <input type="text" class="form-control" id="Lname" placeholder="Holmes  ">
                    </div>
                  <!--  /Last Name  -->
                </div>
                <div class="mt-2">
                  <!--  Email  -->
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="someone@somemail.com"
                      autocomplete="username">
                    </div>
                  <!--  /Email  -->
                </div>

                <div class="form-row mt-2">
                  <!--  DOB  -->
                    <div class="col-md-6">
                      <div class="form-group bmd-form-group is-filled">
                        <label class="label-control bmd-label-static">Date Of Birth</label>
                        <input type="text" class="form-control datetimepicker" id="dob" value="10/05/2016">
                      </div>
                    </div>
                  <!--  /DOB  -->

                  <!--  /Gender  -->
                    <div class="form-group col-md-6">
                      <label for="gender">Gender</label>
                      <select id="gender" class="form-control">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Female</option>
                      </select>
                    </div>
                  <!--  /Gender  -->
                </div>

                <div class="row mt-3">
                  <!--  Password  -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="tutorPassword" autocomplete="new-password">
                      </div>
                    </div>
                  <!--  /Password  -->
                  
                  <!--  Confirm Password  -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="stuPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="tutorConPassword" autocomplete="confrim-password">
                      </div>
                    </div>
                  <!--  /Confrim Password  -->
                </div>

                
                <button type="submit" class="btn btn-block btn-success">Sign Up</button>
              </form>
            </div>
            <div class="modal-footer bg-dark mb-0 p-2">
              <button type="button" class="btn btn-white btn-link" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--  End Tutor Modal -->

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


  <!--  Scripts -->
    <!--   Core JS Files   -->
    <script src="js/core/jquery.min.js" type="text/javascript"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="js/plugins/moment.min.js"></script>
    <script src="sweetalert2.min.js" type="text/javascript"></script>
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