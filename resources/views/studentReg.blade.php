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

  <nav class="navbar fixed-top navbar-expand-lg" id="sectionsNav">
    <div class="container ">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/Landing">
          Enlighten Venture  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
         aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link text-capitalize" data-toggle="dropdown">
              <i class="material-icons">apps</i> Choose Your Language
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i>English
              </a>
              <a href="#l" class="dropdown-item">
                <i class="material-icons">content_paste</i> Sinhala
              </a>
              <a href="#l" class="dropdown-item">
                <i class="material-icons">content_paste</i> Tamil
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
            href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i> <span class="text-capitalize">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
            href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i> <span class="text-capitalize">facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
            href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i> <span class="text-capitalize">instagram</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="bg-info mt-4 pt-4"></div>
  <div class=" bg-warning mt-4 pt-4">
    <div class="container ml-auto mr-auto" >
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
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
                <form>
              
                  <div class="form-row pt-0 mt-0">
                    <!--  First Name  -->
                      <div class="form-group col-md-6 pt-0 mt-0">

                        <input type="text" class="form-control" id="stuFName" placeholder="First Name">
                      </div>
                    <!--  /First Name  -->
  
                    <!--  Last Name  -->
                      <div class="form-group col-md-6 pt-0 mt-0">

                          <input type="text" class="form-control" id="stuLName" placeholder="Last Name  ">
                      </div>
                    <!--  /Last Name  -->
                  </div>

                    <!--  Email  -->
                      <div class="form-group pt-1">
                        <input type="email" class="form-control" id="stuEmail" placeholder="Email Address"
                        autocomplete="username">
                      </div>
                    <!--  /Email  -->
  
                  <div class="form-row">
                    <!--  DOB  -->
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group is-filled">
                          <label class="label-control bmd-label-static">Date Of Birth</label>
                          <input type="text" class="form-control datetimepicker" id="stuDob" value="10/05/2016">
                        </div>
                      </div>
                    <!--  /DOB  -->
  
                    <!--  /Gender  -->
                      <div class="form-group col-md-6">
                        <label for="stuGender">Gender</label>
                        <select id="stuGender" class="form-control">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                    <!--  /Gender  -->
                  </div>
  
                  <div class="row">
                    <!--  Batch 01  -->
                        <div class="col-md-6">
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="stuBatch1" id="batch1" 
                                value="option1"  checked>
                                Advanced Level
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                          </div>
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="stuBatch1" id="batch2" 
                                value="option1" ">
                                Ordinary Level
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                          </div>
                          <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="stuBatch1" id="batch3" 
                                value="option1" >
                                Scholarship
                                <span class="circle">
                                    <span class="check"></span>
                                </span>
                            </label>
                          </div>
                      </div>
                    <!--  /Batch 01  -->
  
                    <!--  Batch 02 -->
                        <div class="form-group col-md-6 mt-2 pt-1">
                          <label for="stuBatch2">Year of Examination</label>
                          <select id="stuBatch2" class="form-control">
                            <option>2030</option>
                            <option>2029</option>
                            <option>2028</option>
                            <option>2027</option>
                            <option>2026</option>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option selected>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option>
                            <option>2000</option>
                            <option>1999</option>
                            <option>1998</option>
                            <option>1997</option>
                            <option>1996</option>
                            <option>1995</option>
                            <option>1994</option>
                            <option>1993</option>
                            <option>1992</option>
                            <option>1991</option>
                            <option>1990</option>
                            <option>1989</option>
                            <option>1988</option>
                            <option>1987</option>
                            <option>1986</option>
                            <option>1985</option>
                            <option>1984</option>
                            <option>1983</option>
                            <option>1982</option>
                            <option>1981</option>
                            <option>1980</option>
                          </select>
                        </div>
                    <!--  /Batch 02 -->
                  </div>
                  <div class="row">
                    <!--  Password  -->
                      <div class="col-md-6 pt-0 mt-0  ">
                        <div class="form-group pt-0 mt-0  ">

                          <input type="password" class="form-control" placeholder="New Password" 
                          id="stuPassword" autocomplete="new-password">
                        </div>
                      </div>
                    <!--  /Password  -->
  
                    <!--  Confirm Password  -->
                      <div class="col-md-6 pt-0 mt-0  ">
                        <div class="form-group pt-0 mt-0  ">

                          <input type="password" class="form-control" placeholder="Confirm Password" 
                          id="stuConPassword" autocomplete="confirm-password">
                        </div>
                      </div>
                    <!--  /Confrim Password  -->
                  </div>
  
                  
                  <button type="submit" class="btn btn-block btn-success">Sign Up</button>
                </form>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <footer class="pb-0 mb-0">
          <div class="container text-white pb-0 mb-0">
            <nav class=" pb-0">
              <ul>
                <li class="pb-0 mb-0" >
                  <a href="https://www.instagram.com/captain_burah" target="_blank" class="pb-0 mb-0">
                    Captain Burah
                  </a>
                </li>
                <li class="pb-0 mb-0">
                  <a href="#" class="pb-0 mb-0">
                    About Us
                  </a>
                </li>
                <li class="pb-0 mb-0">
                  <a href="#" class="pb-0 mb-0">
                    Licenses
                  </a>
                </li>
                <li class="pb-0 mb-0">
                  <a href="#" class="pb-0 mb-0">
                    Terms & Conditions
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright pt-0 mt-0  pb-0 mb-0">
              &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons text-danger">favorite</i> by
              <a href="https://www.instagram.com/captain_burah" target="_blank" >
                Captain Burah
              </a><br> for a better world.
                
                
            </div>
          </div>
        </footer>
      </div>
    </div>
    
  </div>
 
    <!-- Cover & Body -->
    <br>
  <div>
    
  </div>
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