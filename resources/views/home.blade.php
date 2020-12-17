@extends('layouts.homeApp')

@section('content')
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

@endsection