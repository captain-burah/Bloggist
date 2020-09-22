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
    <link href="css/gaia.css" rel="stylesheet"/>

</head>

<body class="index-page sidebar-collapse">
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
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToWhoAreWe()">
                        <i class="material-icons">supervisor_account</i> Who are we?
                    </a>
                  </li>
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
              
                  <li class="dropdown nav-item">
                    <!-----   Register Dropdown   ----->
                      @if (Route::has('login'))
                        @isset($url)
                          <!----------------------------   Student Landing   -------------->
                          @if ($url === "/student")
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="material-icons">how_to_reg</i> Register
                            </a>
                            <div class="dropdown-menu dropdown-with-icons">
                              
                              <a href="{{ url('/student_dashboard') }}" class="dropdown-item"> 
                                <i class="material-icons">child_care</i> Log Out to Register
                              </a>
                            </div>

                          <!----------------------------   Tutor Landing   -------------->
                          @elseif ($url === "/tutors")
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="material-icons">how_to_reg</i> Register
                            </a>
                            <div class="dropdown-menu dropdown-with-icons">

                              <a href="{{ url('/tutor') }}" class="dropdown-item"> 
                                <i class="material-icons">school</i> Log Out to Register
                              </a>
                            </div>
                          @endif
                        @endisset

                        <!----------------------------   Empty URL Landing   -------------->
                        @empty($url)
                          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">how_to_reg</i> Register
                          </a>
                          <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ route('register') }}" class="dropdown-item">
                              <i class="material-icons">child_care</i> Student
                            </a>
                            <a href="{{ url('/register/tutor') }}" class="dropdown-item">
                              <i class="material-icons">school</i> Tutor
                            </a>
                          </div>
                        @endempty

                      @else 
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                          <i class="material-icons">how_to_reg</i> Register
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                          <a href="{{ route('register') }}" class="dropdown-item">
                            <i class="material-icons">child_care</i> Student
                          </a>
                          <a href="{{ url('/register/tutor') }}" class="dropdown-item">
                            <i class="material-icons">school</i> Tutor
                          </a>
                        </div>
                      @endif
                    <!-----   Register Dropdown   ----->
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
  <div class="section section-header">
    <div class="parallax filter filter-color-red">
        <div class="image"
            style="background-image: url('img/header-1.jpeg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="title-area">
                    <p>Free Demo</p>
                    <h1 class="title-modern">Gaia</h1>
                    <h3>Probably the most stylish bootstrap template in the world!</h2>
                    <div class="separator line-separator">♦</div>
                </div>

                <div class="button-get-started">
                    <a href="http://www.creative-tim.com/product/gaia-bootstrap-template" target="_blank" class="btn btn-white btn-fill btn-lg ">
                        Download Demo
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
    


  <!---   Cover   --->



  <div class="main main-raised">
    <!---   Section 01  WhoWeAre? --->
        <div class="section pt-1 section-whoAreWe" id="whoAreWeSection">
            <div class="container">
                <div class="title">
                    <h1 class="">Who are we?</h1>
                </div>
            
            </div>
        </div>
    <!---   Section 01  WhoWeAre? --->


    <!---   Section 02  Features --->
        <div class="section section-feature" id="featureSection">
            <div class="container">
                <div class="title text-right">
                    <h1>Enligthen Your Features</h1>
                </div>
            
            </div>
        </div>
    <!---   Section 02  Features --->
      

    <!---   Section 03  PayAsYouGo --->
      <div class="section section-PayAsYouGo" id="PayAsYouGo">
        <div class="container">
          <div class="title text-lefy">
              <h1>Tutors: Pay As You Go</h1>
          </div>
          
        </div>
      </div>
    <!---   Section 03  PayAsYouGo --->


    <!---   Section 04  Standard Pricing --->
      <div class="section" id="#">
        <div class="container">
          <div class="title text-right">
              <h1>Or Use Our Packages</h1>
          </div>
          
        </div>
      </div>
    <!---   Section 04  Standard Pricing --->
    

    <!---   Section 05  Contact Us --->
        <div class="section section-ContactUs" style="background-image: url('img/bg19.jpg'); 
        background-size: cover; background-position: top center; min-height: 700px;"  id="ContactUs">
          <div class="container">
            <div class="title text-center pb-4">
                <h1><span class="text-warning font-weight-bold">Hurry!</span> Sign Up Now</h1>
            </div>
            <div class="row pt-5">
              <!--  Student Button -->
                <div class="col-lg-5 mx-auto">
                  <div class="card  ">
                      <div class="card-header card-header-warning text-center">
                        <button class="btn btn-block btn-white text-dark"  data-toggle="modal" 
                        data-target="#studentReg">
                          <h4 class=" text-capitalize" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                            <i class="material-icons">child_care</i> Create a Student Account</h4>
                          <div class="ripple-container"></div>
                        </button>
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
                        <button class="btn btn-block btn-white text-dark"  data-toggle="modal" 
                        data-target="#tutorReg">
                          <h4 class=" text-capitalize" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
                            <i class="material-icons">school</i> Join Our Tutor Panel</h4>
                          <div class="ripple-container"></div>
                        </button>
                      </div>
                      <div class="card-body ">
                      </div>
                  </div>
                </div>
              <!--  Tutor Button -->
            </div>
          </div>
        </div>
      <!---   Section 05  Contact Us --->
  </div>
    


  <!-- Student Modal -->
    <div class="modal fade" id="studentReg" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="card card-login">
          <form class="form">
            <!-- Register with API -->
              <div class="card-header card-header-warning text-center">
                <h4 class="card-title">Join with</h4>
                <div class="social-line">
                  <a href="javascript:;" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
            <!-- Register with API -->

            <!-- Register Classic -->
              <p class="description text-center">Or Be Classical</p>
              <div class="card-body">
                <!-- First Name -->
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name">
                    </div>
                  </span>
                <!-- /First Name -->

                <!-- Second Name -->
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons"> &nbsp&nbsp&nbsp&nbsp</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </span>
                <!-- /Second Name -->

                <!-- Email -->
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">mail</i>
                        </span>
                      </div>
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </span>
                <!-- /Email -->

                <!-- DOB ---
                  <span class="bmd-form-group">
                    <div class="input-group">                      
                      <div class="form-row">
                        <div class="form-group col-md-12 mx-auto">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">date_range</i>
                            </span>
                            <div class="form-group col-md-4 mx-auto">
                              <label for="dobDate">Date</label>
                              <select id="dobDate" class="form-control">
                                <option selected>Choose...</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                              <label for="dobMonth">Month</label>
                              <select id="dobMonth" class="form-control">
                                <option selected>Choose...</option>
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4 mx-auto">
                              <label for="dobYear">Year</label>
                              <select id="dobYear" class="form-control">
                                <option selected>Choose...</option>
                                <option>2020</option>
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

                                <option>1979</option>
                                <option>1978</option>
                                <option>1977</option>
                                <option>1976</option>
                                <option>1975</option>
                                <option>1974</option>
                                <option>1973</option>
                                <option>1972</option>
                                <option>1971</option>
                                <option>1970</option>

                                <option>1969</option>
                                <option>1968</option>
                                <option>1967</option>
                                <option>1966</option>
                                <option>1965</option>
                                <option>1964</option>
                                <option>1963</option>
                                <option>1962</option>
                                <option>1961</option>
                                <option>1960</option>

                                <option>1959</option>
                                <option>1958</option>
                                <option>1957</option>
                                <option>1956</option>
                                <option>1955</option>
                                <option>1954</option>
                                <option>1953</option>
                                <option>1952</option>
                                <option>1951</option>
                                <option>1950</option>

                                <option>1949</option>
                                <option>1948</option>
                                <option>1947</option>
                                <option>1946</option>
                                <option>1945</option>
                                <option>1944</option>
                                <option>1943</option>
                                <option>1942</option>
                                <option>1941</option>
                                <option>1940</option>

                                <option>1939</option>
                                <option>1938</option>
                                <option>1937</option>
                                <option>1936</option>
                                <option>1935</option>
                                <option>1934</option>
                                <option>1933</option>
                                <option>1932</option>
                                <option>1931</option>
                                <option>1930</option>

                                <option>1929</option>
                                <option>1928</option>
                                <option>1927</option>
                                <option>1926</option>
                                <option>1925</option>
                                <option>1924</option>
                                <option>1923</option>
                                <option>1922</option>
                                <option>1921</option>
                                <option>1920</option>

                                <option>1919</option>
                                <option>1918</option>
                                <option>1917</option>
                                <option>1916</option>
                                <option>1915</option>
                                <option>1914</option>
                                <option>1913</option>
                                <option>1912</option>
                                <option>1911</option>
                                <option>1910</option>

                                <option>1909</option>
                                <option>1908</option>
                                <option>1907</option>
                                <option>1906</option>
                                <option>1905</option>
                                <option>1904</option>
                                <option>1903</option>
                                <option>1902</option>
                                <option>1901</option>
                                <option>1900</option>
                                
                              </select>
                            </div>
                          </div>
                        </div>
                    </div>
                  </span>
                --- /DOB -->

                <!-- Password -->
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password" autocomplete="">
                    </div>
                  </span>
                <!-- /Password -->

              <!-- Confirm Password -->
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Confirm Password" autocomplete="">
                  </div>
                </span>
              <!-- /Confirm Password -->
              </div>
              
            <!-- Register Classic -->
            <div class="footer text-center">
              <a href="javascript:;" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!--  End Student Modal -->

  <!-- Tutor Modal -->
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
          </script>, All rights reserved, <br>
        made with <i class="material-icons text-danger">favorite</i> by
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

    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
    
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="js/material-kit.min.js?v=2.0.7" type="text/javascript"></script>

    <!--  js library for devices recognition -->
    <script type="text/javascript" src="js/modernizr.js"></script>

    <!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
    <script type="text/javascript" src="js/gaia.js"></script>

   
    <script>
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
      ContactUs
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