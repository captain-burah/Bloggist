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
    <link href="demo/demo.css" rel="stylesheet" />

</head>

<body class="login-page sidebar-collapse">

  @extends('layouts.regNav')


  <div class="bg-info mt-4 pt-4"></div>

  <div class=" bg-warning mt-4 pt-4">
    <div class="container-fluid row" >
        <div class="col-md-4">
          <div class="card" >
            <form class="form" method="" action="">
              <div class="card-header card-header-primary text-center ">
                  <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                    Sign Up 
                  </h3>
                  <span class="mb-0 pb-0" style="font-size: .9rem;">
                    It's quick & easy
                  </span>
              </div>

              <p class="description text-center mb-0 pb-0 mt-1">Student Form</p>
              <div class="card-body">

                <form  method="POST" id="studentForm" action="{{ route('register')}}" name="studentForm">
                  @csrf
                  <div class="form-row">
  
                    <!--  First Name  -->
                      <div class="form-group col-md-6">
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
            </form>
          </div>
        </div>
    </div>
  </div>

  <div class="row col-md-8 mr-auto ml-auto ">
    @extends('layouts.homeFooter')
  </div>
 
    <!-- Cover & Body -->
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js" type="text/javascript"></script>
  <script src="js/core/popper.min.js" type="text/javascript"></script>
  <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>