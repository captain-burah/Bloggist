@extends('layouts.appS')

@section('content')
<div class="container ">
  <div class="row col-md-12">
    <div class="pb-5 mb-5 bg-info"></div>
  </div>
  
  <div class="row col-md-12 ml-auto mr-auto">
    <div class="col-md-6">
      <div class="card">
          <div class="card-header card-header-primary text-center ">
            <h3 class="card-title mb-0 pb-0 font-weight-bold" >
              {{ __('Sign In') }}
            </h3>
            <span class="mb-0 pb-0" style="font-size: .9rem;">
              {{ __("It's quick & easy") }}
            </span>
          </div>

          <p class="description text-center mb-0 pb-0 mt-1">{{ __('Student Form') }}</p>

          <div class="card-body">
            <form class="form" method="POST" id="studentForm" action="{{ route('register') }}" 
            aria-label="{{ __('Register') }}" name="studentForm">
                @csrf

                <div class="mt-2">
                  <!--  Email  -->
                    <div class="form-group p-0">
                      <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                      name="email" placeholder="{{ __('Email address') }}"
                      autocomplete="" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                  <!--  /Email  -->
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                      name="password" placeholder="{{ __("Password") }}" autocomplete="off" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-success">
                  {{ __('Register') }}
                </button>
            </form>
          </div>
        
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5 ml-auto mr-auto ">
      <div class="py-4 my-1">
        <h2 class="text-dark">{{ __('Join the Student Cast') }}</h2>
        <img src="/img/svg/mobile_login2.svg" alt="" class="img-fluid" style="height: 300px;">
        <div class="text-right">
          <h4>Watch a video on,</h4>
          <a href="#" target="" class="btn btn-danger btn-lg mobile-view " rel="nofollow">
            <i class="fa fa-play"></i>&nbsp {{ __('How to register? ') }}
          </a>
      </div>
      </div>
    </div>
    
  </div>
</div>
<script>
  
</script>  
@section('content')