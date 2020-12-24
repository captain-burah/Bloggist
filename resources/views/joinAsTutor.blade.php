@extends('layouts.appTutor')

@section('content')
  <!--- Cover --->
  <div class="page-header header-filter purple-filter" data-parallax="true" 
  style="background-image: url({{ asset('img/bg8.jpg')}}); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
      <div class="row ">
          <div class="col-md-5 text-center">
              <div class="brand mobile-view">
                  <h3 class="">{{ __('Free Registrations Are Now Open')}}</h3>
                  <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
              <div class="">
                <a href="{{ url(app()->getLocale() . '/tutor_registration')}}" 
                  class="btn btn-rose btn-lg mobile-view text-left" rel="nofollow" style="min-width: 293.11px;">
                  <i class="fa fa-play"></i>&nbsp {{ __(' Hurry! Join now')}}
                </a>
                <a href="#" class="btn btn-info btn-lg text-left" 
                style="min-width: 293.11px;">
                  <i class="fa fa-university"></i>&nbsp {{ __('Enter Academy')}}
                </a>
                <a href="#" target="" class="btn btn-primary btn-lg text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-hashtag"></i>&nbsp {{ __('Enter StudentCast')}}
                </a>
                <a href="#" target="_blank" class="btn btn-warning btn-lg text-left" rel="nofollow" 
                style="min-width: 293.11px;">
                    <i class="fa fa-graduation-cap"></i>&nbsp {{ __('View Tutor Panel')}}
                </a>
                
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 text-right mobile-hide" >
            <h1 class="title text-right">{{ __('Free Registrations Are Now Open')}}</h1>
            
            <a href="{{ url(app()->getLocale() . '/tutor_registration')}}"
            class="btn btn-rose btn-raised btn-lg text-left " style="min-width: 293.11px;">
              <i class="fa fa-play"></i>&nbsp {{ __(' Hurry! Join now')}}
            </a>
          </div>
      </div>
    </div>
  </div>
  <!--- Cover --->

  <!--- Body  --->
  <div class="main main-raised border border-primary">
    <div class="container">
      <!---   Section 01  Features --->
      <div class="pt-1 section-feature" id="featureSection">
        <div class="text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
            <h1 class="title">{{ __('What do you get?')}}</h1>
            <h5 class="description">
              {{ __("This is the paragraph where you can write more details about your product. 
              Keep you user engaged by providing meaningful information. 
              Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. 
              Add a button if you want the user to see more.") }}
            </h5>
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
  <!--- Body  --->

@endsection