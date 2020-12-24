@extends('layouts.appT')

@section('content')
  <div class="container ">
    <div class="row col-md-12">
      <div class="pb-5 mb-5 bg-info"></div>
    </div>
    
    <div class="row col-md-12 ml-auto mr-auto">
      <div class="col-md-5 ml-auto mr-auto ">
        <div class="py-4 my-1">
          <h2 class="text-dark">{{ __('Join the Tutor panel') }}</h2>
          <img src="{{asset('/img/svg/mobile_login2.svg')}}" alt="" class="img-fluid" style="height: 300px;">
          <div class="text-right">
            <br>
            <a href="#" target="" class="btn btn-danger btn-lg mobile-view border border-dark shadow-lg" rel="nofollow">
              <i class="fa fa-play"></i>&nbsp {{ __('learn how to register') }}
            </a>
            <h4 class="text-dark"> <a href="javascript:void(0)" onclick="scrollLecReg()" class="text-dark">
              {{ __('or you can go register now') }}</a></h4>
        </div>
        </div>
      </div>
      
      <div class="col-md-1"></div>

      <div class="col-md-6 section-LecReg" id="LecReg">
        <div class="card">
          <!---------------------- SignUp Heading -------------------------------->
            <div class="card-header card-header-primary text-center ">
              <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                {{ __('Sign Up') }}
              </h3>
              <span class="mb-0 pb-0" style="font-size: .9rem;">
                {{ __("It's quick & easy") }}
              </span>
            </div>

            <p class="description text-center mb-0 pb-0 mt-1">{{ __('Student Form') }}</p>
          <!--------------------- /SignUp Heading -------------------------------->  

          <!---------------------- SignUp Body -------------------------------->
            <div class="card-body">
              <form class="form" method="POST" id="tutorForm" action="{{ url(app()->getLocale() . '/tutor/register') }}" 
              aria-label="{{ __('Register') }}" name="tutorForm">
                  @csrf

                  <div class="form-group-row">
                    <div class="form-row col-md-12 p-0">
                      <!--  First Name  fname-->
                          <div class="form-group col-md-6 pt-0">
                              <input type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" 
                              name="fname" placeholder="{{ __('First name') }}" value="{{ old('fname') }}" required autofocus>

                              @if ($errors->has('fname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('fname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      <!--  /First Name  -->

                      <!--  Last Name  lname-->
                          <div class="form-group col-md-6 pt-0">
                              <input type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" 
                              name="lname" placeholder="{{ __('Last name') }}" value="{{ old('lname') }}" required autofocus>

                              @if ($errors->has('lname'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('lname') }}</strong>
                              </span>
                              @endif
                          </div>
                      <!--  /Last Name  -->
                    </div>
                  </div>
                  
                  <!--  Email  email-->
                      <div class="form-group p-0">
                          <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                          name="email" placeholder="{{ __('E-mail Address') }}"
                          autocomplete="" value="{{ old('email') }}" required>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  <!--  /Email  -->
                  
                  <!--  /Gender  gender
                  <div class="form-group row mb-0">
                      <div class="form-group col-md-12">
                          <label for="gender">{{ __('Gender') }}</label>
                          <select name="gender" class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}" 
                              value="{{ old('gender') }}" required >
                              <option value="">{{ __('Choose..')}}</option>
                              <option value="male">{{ __('Male')}}</option>
                              <option value="female">{{ __('Female')}}</option>
                          </select>

                          @if ($errors->has('gender'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('gender') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                  /Gender  -->
                  
                  <div class="form-group row p-0">
                    <!--  Password  password & password_confirmation-->
                      <div class="col-md-6">
                          <input id="password" type="password" 
                          class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                          name="password" placeholder="{{ __("Password") }}" autocomplete="off" required>

                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>

                      <div class="col-md-6">
                          <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" 
                          placeholder="{{ __("Confirm Password") }}" required>
                      </div>
                    <!--  Password  -->
                  </div>
                  <div class="form-group p-0">
                      <input type="checkbox" name="privacyPolicy"/> {{ __("I have read & agreed to the ")}} 
                      <a href="">{{ __("Privacy Policy")}}</a>{{ __(" article and i give my consent to withold & use my information.")}}
                  </div>
                  <button type="submit" class="btn btn-block btn-success">
                    {{ __('Register') }}
                  </button>
              </form>
            </div>
          <!--------------------- /SignUp Body -------------------------------->
        </div>
      </div>

    </div>
  </div>
@endsection