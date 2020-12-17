@extends('layouts.homeApp')

@section('content')
  <!---   Cover   --->
  <div class="page-header header-filter purple-filter clear-filter section-cover" data-parallax="true" 
  style="background-image: url({{asset('img/bg3-2.jpg')}}); transform: translate3d(0px, 0px, 0px);" id="coverSection">
    <div class="container text-center mx-auto my-auto d-flex align-content-center flex-wrap" >
      <h1 class="cover-heading mx-auto">
        {{ __('Your journey starts now!')}}
      </h1>
      <div class="col-md-6 mx-auto">
        <a href="#" class="btn btn-danger btn-lg" style="min-width: 212.91px;">
          <i class="fa fa-graduation-cap"></i>
          &nbsp {{ __('I am a Student')}}
        </a>
        <a href="#" target="" class="btn btn-info btn-lg" rel="nofollow" style="min-width: 212.91px;">
            <i class="fa fa-university"></i>
            &nbsp {{ __('I am a Tutor')}}
        </a>
        <a href="#" target="" class="btn btn-success btn-lg" rel="nofollow" style="min-width: 212.91px;">
          <i class="fa fa-hashtag"></i>
          &nbsp {{ __('See all Courses')}}
        </a>
      </div>
      <div class="footer-head">
        <p class="p-4 text-light">
          {{ __('Developed & Coded by')}} 
          
          <span class="badge badge badge-light text-dark">
            <i class="fa fa-hashtag text-info"></i> Captain Burah</span>
        </p>
      </div>
    </div>
    
  </div>
  <!---   Cover   --->

  <!---------- Body ----------->
  <div class="main ">
    <div class="bg-info">
      <div class="container">
        
        <!---   Section 01  Features --->
        <section class="text-center section-feature text-white" id="featureSection">
          <div class="container">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <div class="card card-nav-tabs text-right">
                  <div class="card-body">
                    <blockquote class="blockquote mb-0 ">
                      <h4 class="lead">
                        {{('"In learning you will teach, and in teaching you will learn."')}}
                      </h4>
                      <p class="lead">{{('- Phil Collins')}}</p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!---   /Section 01  Features --->
      </div>
    </div>
    <!--- Section 02 Demonstration --->
    <section class="features bg-white text-dark" id="features">
      <div class="container">
        <div class="section-heading text-center ">
          <h2>Unlimited Features, Unlimited Fun</h2>
          <p class="text-muted">Check out what you can learn from here!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="{{asset('img/new-age/iphone5.jpg')}}" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Student Cast</h3>
                    <p class="text-muted">Unique discussion forum dedicated for students & tutors!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-emotsmile text-primary"></i>
                    <h3>Flexible Use</h3>
                    <p class="text-muted">Tutors are capable to choose from an array of subscriptions!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Free</h3>
                    <p class="text-muted">A complimentary for all students and tutors!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Secured</h3>
                    <p class="text-muted">A secured transaction gateway by Sampath Bank PLC!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- Section 02 Demonstration --->

    <!---   Section 03  Technology --->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" 
          style="background-image: url({{asset('img/new-age/bg-showcase-1.jpg')}});"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text container">
            <h2>Responsive Helpdesk</h2>
            <p class="lead mb-0">
              If you encounter any uncomfortable situation, do remember the helpdesk is available for you 24hrs.
            </p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" 
          style="background-image: url({{asset('img/new-age/bg-showcase-2.jpg')}});"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Updated with the latest Ui & Ux</h2>
            <p class="lead mb-0">
              Newly improved with cutting edge and user friendly. 
              EV is leading the way in responsive Virtual Learning Environment! 
              
            </p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" 
          style="background-image: url({{asset('img/new-age/bg-showcase-3.jpg')}});"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Easy to Use &amp; Customize</h2>
            <p class="lead mb-0">
              Students need not to struggle anymore, you've to just login, choose your lessons & voila!
              <br><br>Tutors have to add your lesson contents 
              and medias  , and your new tutor page will be ready to go!
            </p>
          </div>
        </div>
      </div>
    </section>
    <!---   Section 03  Technology --->

    <!---   Section 04  Contact Us --->
    <div class="section section-ContactUs" style="background-image: url({{asset('img/bg19.jpg')}}); 
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
                    <a href="{{route('register', app()->getLocale()) }}" 
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
                    <a href="{{url('{locale}/tutor_registration') }}"  class="btn btn-white btn-block fontOne text-capitalize text-dark">
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
    <!---   /Section 04  Contact Us --->
  </div>
  <!---------- Body ----------->
@endsection