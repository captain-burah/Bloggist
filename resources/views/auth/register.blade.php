@extends('layouts.appReg')

@section('content')
    <div class="container ">
        <!---- Top Margin Spacing ---->
        <div class="row col-md-12">
            <div class="pb-4 mb-4 bg-info"></div>
        </div>
        <!---- Top Spacing ---->
        <div class="row col-md-12 ml-auto mr-auto">
            <!------ Left Pane ------>
            <div class="col-md-6 ml-auto mr-auto ">
                <div class="py-4 my-1">
                    @isset($url)
                        <h2 class="text-dark">{{ __('Join Our Tutorial Panel') }}</h2>
                    @else
                        <h2 class="text-dark">{{ __('Join the StudentCast') }}</h2>
                    @endisset
                    <div class="text-right">
                        <img src="{{asset('/img/svg/mobile_login2.svg')}}" alt="" class="img-fluid" style="height: 300px;">
                    </div>
                    <br>
                    <div class="row col-md-12 text-right mx-0 px-0">
                        <div class="col-md-8 ml-auto text-right mx-0 px-0">
                            <a href="#" target="" 
                        class="btn btn-white btn-lg mobile-view text-dark border 
                        border-danger animate__animated animate__fadeInLeft animate__delay-1s animate__slow	1s" 
                        rel="nofollow">
                            <i class="fa fa-play text-rose"></i>&nbsp {{ __('learn how to register') }}
                        </a>
                        </div>
                        <div class="col-md-4 ml-auto text-right mx-0 px-0">
                            <h4 class="text-dark">
                                <a href="javascript:void(0)" onclick="scrollToForm()" 
                                class="text-dark">{{ __('or go register now! ') }}</a>
                            </h4>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!------ Left Pane ------>
            <!------ Right Pane ------>
            <div class="col-md-6 px-0 mx-auto section-regForm my-auto" id="regForm">
                <div class="card col-md-12">
                    <!---------------------- SignUp Heading -------------------------------->
                    <div class="card-header card-header-primary text-center ">
                        @isset($url)
                        <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                            {{ __('Sign Up as Tutor') }}
                        </h3>
                        @else
                        <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                            {{ __('Sign Up as Student') }}
                        </h3>
                        @endisset
                        
                        <span class="mb-0 pb-0" style="font-size: .9rem;">
                        {{ __("It's quick & easy") }}
                        </span>
                    </div>
                    <!--------------------- /SignUp Heading -------------------------------->  

                    <!---------------------- SignUp Body -------------------------------->
                    <div class="card-body px-3">
                    @isset($url)
                    <form class="form" method="POST" id="tutorForm" action="{{ url(app()->getLocale() . '/tutor/register') }}" 
                    aria-label="{{ __('Register') }}" name="tutorForm">
                    @else
                    <form class="form" method="POST" id="studentForm" action="" 
                    aria-label="{{ __('Register')}}" name="studentForm">
                    @endisset
                        @csrf
                        <div class="form-group-row">
                            <div class="form-row col-md-12 p-0">
                                <!--  First Name  -->
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

                                <!--  Last Name  -->
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

                        <!--  /Gender  -->
                            <!-- <div class="form-group row mb-0">
                                <div class="form-group col-md-12">
                                    <label for="gender">{{ __('Gender') }}</label>
                                    <select name="gender" class="form-control {{ $errors->has('gender') ? ' is-invalid' : '' }}" 
                                        value="{{ old('gender') }}" required >
                                        <option value="">Choose..</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> -->
                        <!--  /Gender  -->

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
                            <input type="checkbox"/> {{ __("I have read & agreed to the ")}} 
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
             <!------ Right Pane ------>
        </div>
    </div>
@endsection