@extends('layouts.appHome')

@section('content')
  <!---   Cover   --->
  <div class="page-header header-filter dark-filter" data-parallax="true" 
  style="background-image: url({{asset('img/city3.jpg')}}); transform: translate3d(0px, 0px, 0px);">
    <div class="container section-Cover" id="featureCover">
      <div class="row">
          <div class="col-md-5 my-auto text-center">
              <div class="brand mobile-view">
                  <h2 class="text-white"><span class="text-warning">{{ __('Education')}}</span>{{ __(' for everyone')}}</h2>
                  <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
              <div class="animate__animated animate__fadeInUp animate__delay-2s	">
                <a href="{{ route('register', app()->getLocale()) }}" class="btn btn-white btn-lg text-dark text-left" 
                  style="min-width: 293.11px;">
                  <i class="fa fa-user"></i>&nbsp {{ __(' I am a Student')}}
                </a>
                <a href="{{ url(app()->getLocale() . '/tutors')}}" target="" class="btn btn-white btn-lg text-dark text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp {{ __('I am a Tutor')}}
                </a>
                <a href="#" target="_blank" class="btn btn-warning btn-lg text-dark text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-university"></i>&nbsp {{ __('Enter Academy')}}
                </a>
            </div>
          </div>
          
          <div class="col-md-7 text-right mobile-hide mr-auto ml-auto 
          animate__animated animate__fadeInUp animate__animated animate__fadeInUp animate__delay-1s" >
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

    <!---   Section 02  Aims --->
    <div class="section section-Aims text-center ">
      <div class="features bg-primary">
        <div class="row px-3">
          <div class="col-md-4 ">
            <div class="info py-4">
              <h2 class="text-light text-justify my-2">{{ __('Aims')}}</h2>
              <p class="text-justify text-white">
                Enlighten Venture aims to produce the next generation 
                of leaders in Sri Lanka. Our mission is to provide the 
                best all-round education environment for the students & tutors in a caring, disciplined 
                and inspiring environment.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info py-4">
              <h2 class="text-light text-justify my-2">{{ __('Ethos')}}</h2>
              <p class="text-justify text-white">
                True to the principles of its founders, 
                Enlighten Venture has always endeavoured to instill 
                and nurture qualities such as respect, compassion, 
                self-discipline, fairness, dignity, equity, honesty and integrity. 
                As a virtual learning environment (VLE), but with users from many 
                different communities, we believe that these virtues are 
                valued not only by our users, but by members of all professional bodies.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info py-4">
              <h2 class="text-light text-justify my-2">{{ __('Mission')}}</h2>
              <p class="text-white text-justify">
                Our users should leave the VLE confident, articulate, 
                well-balanced and able to think for themselves. 
                They should be comfortable both in operations and in their 
                functionality. We are ambitious and determined, 
                yet sensitive to the needs of our users, supporting the 
                critical and creative thinkers, who are ready to make a 
                positive difference to their country and to the world.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---   /Section 02  Aims --->

    <!---   Section 03  Contact Us --->
    <div class="section section-ContactUs" style="background-image: url({{asset('img/bg19.jpg')}}); 
    background-size: cover; background-position: top center; min-height: 700px;"  id="ContactUs">
      <div class="row container mx-auto">
        <div class="col-md-8 ml-auto mr-auto border border-white">
          <h2 class="text-center title text-dark">{{ __('Leave us your comments ')}}</h2>
          
          <form class="contact-form" method="POST" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating text-white">Your Name</label>
                  <input type="text" class="form-control text-white">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating text-white">Your Email</label>
                  <input type="email" class="form-control text-white">
                </div>
              </div>
            </div>
            <div class="form-group bmd-form-group">
              <label for="exampleMessage" class="bmd-label-floating text-white">Your Message</label>
              <textarea type="text" class="form-control text-white" rows="4" id="exampleMessage"></textarea>
            </div>
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto text-center">
                <button type="submit" class="btn btn-primary btn-raised">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!---   /Section 03  Contact Us --->
  </div>
  <!---------- Body ----------->

@endsection