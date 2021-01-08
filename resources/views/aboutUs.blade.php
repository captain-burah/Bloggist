@extends('layouts.appHome')

@section('content')
  <!---   Cover   --->
  <div class="page-header header-filter dark-filter clear-filter" data-parallax="true" 
  style="background-image: url({{asset('img/bg23.jpg')}}); transform: translate3d(0px, 0px, 0px);">
    <div class="container section-Cover" id="featureCover">
      <div class="row">
          <div class="col-md-10 my-auto mx-auto text-center">
              <div class="brand mobile-view ">
                <h1 class="text-left">
                  <span class="text-warning">{{ __('Who')}}</span>{{ __(' are we?')}}
                </h1>
                <h4 class="desciption">{{ __('a young man who had a glimmer of hope in bringing change')}}</h4>
                <div class="separator line-separator text-white  pb-0 pt-0">♦</div>
              </div>
          </div>
          <div class="col-md-11 mx-auto my-auto text-right mobile-hide" >
            <h1 class="text-left" style="font-size: 4.5em;">
              <span class="text-warning" >{{ __('Who')}}</span>{{ __(' are we?')}}
            </h1>
            <h4 class="desciption">{{ __('a young man who had a glimmer of hope to bring change')}}</h4>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!---   Cover   --->
  
  <!---------- Body ----------->
  <div class="main main-raised">
    <!---   Section   Specs --->
    <div class="section text-center pb-0 pt-5 mt-0">
      <div class="features bg-white">
        <!---  First row --->
        <div class="row container col-md-12 mx-auto px-3 py-0">
          <div class="col-md-3 my-auto">
            <div class="text-center mobile-hide">
              <img src="{{asset('img/svg/dev4.svg')}}" class="rounded " style="height: auto; width: 20vw;">
            </div>
          </div>

          <div class="col-md-6 border-bottom border-default pt-3 pb-4 my-auto">
            <p class="text-dark text-center fontClass fontH" style="font-size: 2.5em; line-height: 1;">
              {{ __('Everything turns out great when we work together')}}
            </p>
            <p class="text-center description fontClass fontP" style="font-size: 1.4em; font-weight: 400;line-height: 1.5;">
              {{('As we all have witnessed our time pass by relentlessly within the period of the Covid-19 crisis, our team spent most of their time
              building, what we call the "Enlighten Venture", in their homes. For 10 whole months, their time was not spent in vain but with dedicated efforts,
              trying to perfect a system that would change the face of education around the country. Guided by an individual, stubborn to succeed, 
              pushed his way through hard times with sickness & pain, brought his team to their optimum state of progress.')}}
            </p>
          </div>

          <div class="col-md-3 my-auto">
            <div class="text-center mobile-hide">
              <img src="{{asset('img/svg/dev3.svg')}}" class="rounded " style="height: auto; width: 20vw;">
            </div>
          </div>
        </div>
        <!---  First row --->
      </div>
    </div>
    <!---   /Section   Specs --->


    <!---   Section 03  Contact Us --->
    <div class="section section-whoAreWe" style="background-image: url({{ asset('img/bg19.jpg')}}); 
    background-size: cover; background-position: top center; min-height: 700px;"  id="WhoAreWe">
      <div class="container col-md-12">
        <div class="col-md-10 mx-auto">
          <p class="text-secondary text-center my-0 fontClass fontH mt-0 mb-3" style="font-size: 3.5em; line-height: 1;">
            {{ __('Our')}}
            <span class="text-dark my-0 fontClass "> {{ __('Team')}}</span>
          </p>
        </div>
        <div class="row">
          <!--- Khaazen --->
          <div class="col-md-4 mx-auto">
            <div class="card bg-light image-preview mx-auto" style="width: 22rem;">
              <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
              src="{{ asset('img/faces/tkb2.png')}}" rel="nofollow" alt="Card image cap"
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
          <!--- Khaazen --->
          <!--- Aatiqa --->
          <div class="col-md-4 my-auto mx-auto">
            <div class="card bg-light image-preview mx-auto" style="width: 22rem;">
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
        
        <div class="row ">
          <!--- Yoshell --->
          <div class="col-md-4 my-auto mx-auto">
            <div class="card bg-light image-preview mx-auto" style="width: 22rem;">
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
            <div class="card bg-light image-preview mx-auto" style="width: 22rem;">
              <img class="image-preview__image card-img-top img-raised rounded-circle img-fluid mt-3" 
              src="{{ asset('img/faces/marc.jpg')}}" rel="nofollow" alt="Card image cap"
              style="">
              <div class="card-header card-header-info" style="width: 11rem;">
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
          
        </div>            
      </div>
    </div>
    <!---   /Section 03  Contact Us --->
  </div>
  <!---------- Body ----------->

@endsection