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
              {{ __('Sign Up') }}
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
                <div class="form-row">
      
                  <!--  First Name  -->
                    <div class="form-group col-md-6 pt-0 pr-3">
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
                    <div class="form-group col-md-6 pt-0 pl-3">
                    <input type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" 
                    name="lname" placeholder="{{ __('Second name') }}" value="{{ old('lname') }}" required autofocus>

                    @if ($errors->has('lname'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('lname') }}</strong>
                      </span>
                    @endif
                    </div>
                  <!--  /Last Name  -->
                </div>
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

                <div class="form-row mt-2">
                  <!--  DOB  -->
                    <div class="col-md-6 pr-3">
                      <div class="form-group bmd-form-group is-filled">
                        <label class="label-control bmd-label-static">{{ __('Date Of Birth') }}</label>
                        <input type="text" class="form-control datetimepicker {{ $errors->has('dob') ? ' is-invalid' : '' }}" 
                        name="dob" value="{{ old('dob') }}" autocomplete="off" required >

                        @if ($errors->has('dob'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                  <!--  /DOB  -->

                  <!--  /Gender  -->
                    <div class="form-group col-md-6 pl-3">
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
                  <!--  /Gender  -->
                </div>

                <div class="row">
                  <!--  Batch 01  -->
                      <div class="col-md-6">
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input " 
                              type="radio" name="batch1" id="batch1" 
                              value="a/l" checked>
                              {{ __('Advanced Level') }}
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input " 
                              type="radio" name="batch1" id="batch1" 
                              value="o/l"  >
                              {{ __('Ordinary Level') }}
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                        <div class="form-check form-check-radio">
                          <label class="form-check-label">
                              <input class="form-check-input " 
                              type="radio" name="batch1" id="batch1" 
                              value="other"  >
                              {{ __('Other') }}
                              <span class="circle">
                                  <span class="check"></span>
                              </span>
                          </label>
                        </div>
                    </div>
                  <!--  /Batch 01  -->

                  <!--  Batch 02 -->
                      <div class="form-group col-md-6 mt-2 pt-1">
                        <label for="batch2">{{ __('Year Of Examination') }}</label>
                        <select name="batch2" class="form-control {{ $errors->has('batch2') ? ' is-invalid' : '' }}" 
                         id="batch2" required>
                          <option value="">Choose..</option>
                          <option value="2024">2024</option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                          <option value="1994">1994</option>
                          <option value="1993">1993</option>
                          <option value="1992">1992</option>
                          <option value="1991">1991</option>
                          <option value="1990">1990</option>
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                          <option value="1980">1980</option>
                        </select>
                        @if ($errors->has('batch2'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('batch2') }}</strong>
                          </span>
                        @endif
                      </div>
                  <!--  /Batch 02 -->
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                      name="password" placeholder="{{ __("Password") }}" autocomplete="off" required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                      placeholder="{{ __("Confirm Password") }}" required>
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