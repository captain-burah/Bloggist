@extends('layouts.appHome')

@section('content')
  <!---   Cover   --->
  <div class="page-header header-filter dark-filter clear-filter" data-parallax="true" 
  style="background-image: url({{asset('img/bg23.jpg')}}); transform: translate3d(0px, 0px, 0px);">
    <div class="container section-Cover" id="featureCover">
      <div class="row">
          <div class="col-md-5 my-auto text-center">
              <div class="brand mobile-view ">
                  <h2 class="text-white"><span class="text-warning">{{ __('Education')}}</span>{{ __(' for everyone')}}</h2>
                  <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
              <div class="">
                <a href="{{ route('login', app()->getLocale()) }}" class="btn btn-white btn-lg text-dark text-left" 
                  style="min-width: 293.11px;">
                  <i class="fa fa-user"></i>&nbsp {{ __(' Student Login')}}
                </a>
                <a href="{{ url(app()->getLocale() . '/login/tutor')}}" target="" class="btn btn-white btn-lg text-dark text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp {{ __('Tutor Login')}}
                </a>
                <a href="#" target="_blank" class="btn btn-warning btn-lg text-dark text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-university"></i>&nbsp {{ __('Open Academy')}}
                </a>
            </div>
          </div>
          
          <div class="col-md-7 text-right mobile-hide mr-auto ml-auto" >
            <h1 class="">
              <span class="text-warning">{{ __('Education')}}</span>{{ __(' for everyone')}}
            </h1>
            <h4 class="desciption">{{ __('A centralized online environement to exchange your study materials')}}</h4>
              <!-- Carousel Card -->
              <!---
              <div class="card card-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" 
                data-interval="3000">
                  
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('img/bg2.jpg')}}" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Yellowstone National Park, United States
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{asset('img/bg3.jpg')}}" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Somewhere Beyond, United States
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{asset('img/bg.jpg')}}" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Yellowstone National Park, United States
                        </h4>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" 
                  data-slide="prev">
                    <i class="material-icons">keyboard_arrow_left</i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" 
                  data-slide="next">
                    <i class="material-icons">keyboard_arrow_right</i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              --->
              <!-- End Carousel Card -->
            </div>
          </div>
      </div>
    </div>
  </div>
  <!---   Cover   --->
  
  <!---------- Body ----------->
  <div class="main main-raised">
    <div class="container ">
      <!---   Section 01  Features ---> 
      <div class="section-feature" id="featureSection">
        <div class="text-center">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
              <h3 class="text-center text-dark mx-4 my-3">
                {{ __('Our goal is to encourage every student to 
                be part of the next generation Leaders in Sri Lanka.')}}
              </h3>
            </div>
          </div>
          <div class="features py-5">
            <div class="row col-md-11 mx-auto">
              <div class="col-md-6 mx-auto text-right my-auto">
                <h2 class="title mt-0">Be apart of the Community</h2>
                <h1 class="title mt-0" style="font-size: 3.5em;">{{ __('Join Now For Free!')}}</h1>
                <div class="text-left">
                  <img src="{{asset('img/svg/graduation.svg')}}" class="rounded" style="height: 150px; width: auto;">
                </div>
              </div>
              <div class="col-md-6 mx-auto text-left mt-3 my-auto">
                <p class="description" style="font-family: 'Montserrat', sans-serif;font-weight:600;">
                  Students and Tutors can register now for free. Enlighten Venture has given students the opportunity
                  to use the system with no cost to bear. Tutors have the opportunity to choose
                  your subscription plan while using the trial period.
                </p>
                <a href="{{ route('register', app()->getLocale()) }}" 
                  class="btn btn-white btn-lg text-dark text-center  border border-warning" 
                  style="min-width: 200.11px;">
                  <i class="fa fa-user"></i>&nbsp {{ __(' Student')}}
                </a>
                <a href="{{ url(app()->getLocale() . '/tutors')}}" target="" 
                  class="btn btn-white btn-lg text-dark text-center border border-info" rel="nofollow" 
                style="min-width: 200.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp {{ __(' Tutor')}}
                </a>
              </div>
            </div>
          </div>
          </div>
        </div>
      <!---   /Section 01  Features --->
    </div>
    <!---   Section 03  Contact Us --->
    <div class="section section-whoAreWe" style="background-image: url({{ asset('img/bg19.jpg')}}); 
    background-size: cover; background-position: top center; min-height: 700px;"  id="WhoAreWe">
      <div class="container">
        <h1 class="title text-center">The Team</h1>
        <!--- Khaazen --->
        <div class="row">
          <div class="col-md-4 mx-auto">
            <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
              <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
              src="{{ asset('img/faces/tkb.jpeg')}}" rel="nofollow" alt="Card image cap"
              style="">
              <div class="card-header card-header-info">
                <h4 class="text-center description p-0 m-0 text-white">Tuan Burah</h4>
              </div>
              <div class="card-body">
                <h5 class="mt-0 description text-center">CEO, Developer & Founder of Enlighten Venture</h5>
                <p class="description text-center">
                  Member of British Computer Society Royale Charter (MBCS)<br>
                  Matrix Institute of Information Technology (MIIT)
                </p>
                <div class="row col-md-8 mx-auto">
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--- Khaazen --->
        <div class="row ">
          <!--- Yoshell --->
          <div class="col-md-4 my-auto mx-auto">
            <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
              <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
              src="{{ asset('img/faces/dave.jpg')}}" rel="nofollow" alt="Card image cap"
              style="">
              <div class="card-header card-header-info">
                <h4 class="text-center description p-0 m-0 text-white">Yoshell Delile</h4>
              </div>
              <div class="card-body">
                <h5 class="mt-0 description text-center">Founder of Enlighten Venture</h5>
                <p class="description text-center">
                  B.Sc. in Agriculture Resource Management & Technology <br> University of Ruhuna Faculty of Agriculture (URFA)
                </p>
                <div class="row col-md-8 mx-auto">
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--- Yoshell --->
          <!--- Hansaka --->
          <div class="col-md-4 my-auto mx-auto">
            <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
              <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
              src="{{ asset('img/faces/marc.jpg')}}" rel="nofollow" alt="Card image cap"
              style="">
              <div class="card-header card-header-info" style="width: 10rem;">
                <h4 class="text-center description p-0 m-0 text-white">Hansaka Chathurangana</h4>
              </div>
              <div class="card-body">
                <h5 class="mt-0 description text-center">Founder of Enlighten Venture</h5>
                <p class="description text-center">
                  Chartered Accountant Audit <br> Institute of Chatered Accountants of Sri Lanka
                </p>
                <div class="row col-md-8 mx-auto">
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--- Hansaka --->
          <!--- Aatiqa --->
          <div class="col-md-4 my-auto mx-auto">
            <div class="card bg-dark image-preview mx-auto" style="width: 20rem;">
              
              <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
              src="{{ asset('img/faces/avatar.jpg')}}" rel="nofollow" alt="Card image cap"
              style="">
              <div class="card-header card-header-rose">
                <h4 class="text-center description p-0 m-0 text-white">Aatiqa Burah</h4>
              </div>
              <div class="card-body">
                <h5 class="mt-0 description text-center">Designer & Founder of Enlighten Venture</h5>
                <p class="description text-center">
                  Ba. in Information Technology <br> University of Colombo School of Computing (UCSC)
                </p>
                <div class="row col-md-8 mx-auto">
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                  <div class="col-md-4 mx-auto">
                    <a class="nav-link p-2 text-center text-white" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--- Aatiqa --->
        </div>            
      </div>
    </div>
<!---   /Section 03  Contact Us --->
  </div>
  <!---------- Body ----------->

@endsection