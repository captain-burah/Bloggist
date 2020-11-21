@extends('layouts.appS')

@section('content')
<div class="container ">
  <div class="row col-md-12">
    <div class="pb-5 mb-5 bg-info"></div>
  </div>
  
  <div class="row col-md-12 ml-auto mr-auto">
    
    <div class="col-md-5 ml-auto mr-auto ">
      <div class="py-4 my-1">
        <h2 class="text-dark">{{ __('Join the Student Cast') }}</h2>
        <img src="/img/svg/mobile_login2.svg" alt="" class="img-fluid" style="height: 300px;">
        <div class="text-right">
          <br>
          <a href="#" target="" class="btn btn-danger btn-lg mobile-view " rel="nofollow">
            <i class="fa fa-play"></i>&nbsp {{ __('learn how to register') }}
          </a>
          <h4 class="text-dark"> <a href="javascript:void(0)" onclick="scrollStuReg()" class="text-dark">{{ __('or you can go register now ') }}</a></h4>
      </div>
      </div>
    </div>
    
    <div class="col-md-1"></div>

    <div class="col-md-6 section-StuReg" id="StuReg">
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
            <form class="form" method="POST" id="studentForm" action="{{ route('register') }}" 
            aria-label="{{ __('Register') }}" name="studentForm">
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

                <div class="form-group-row mt-2">
                    <!--  DOB  -->
                        <label class="label-control bmd-label-static">{{ __('Date Of Birth') }}</label>
                        <div class="form-row col-md-12 p-1">
                            <div class="form-group col-md-4  m">
                                <select name="dobDay"
                                id="dobDay" class="form-control {{ $errors->has('dobDay') ? ' is-invalid' : '' }}" required>
                                <option value="">Day</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-4 ">
                                <select name="dobMon"
                                id="dobMon" class="form-control {{ $errors->has('dobMon') ? ' is-invalid' : '' }}" required>
                                <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                    
                                </select>
                            </div>

                            <div class="form-group col-md-4 ">
                                <select name="dobYear"
                                id="dobYear" class="form-control {{ $errors->has('dobYear') ? ' is-invalid' : '' }}" required>
                                    <option value="">Year</option>
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
                                    <option value="1980">1979</option>
                                    <option value="1988">1978</option>
                                    <option value="1987">1977</option>
                                    <option value="1986">1976</option>
                                    <option value="1985">1975</option>
                                    <option value="1984">1974</option>
                                    <option value="1983">1973</option>
                                    <option value="1982">1972</option>
                                    <option value="1981">1971</option>
                                    <option value="1980">1970</option> 
                                    <option value="">Senior Citizen</option>
                                </select>
                            </div>
                        </div>
                        @if ($errors->has('dobDay'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('dobDay') }}</strong>
                            </span>
                        @endif
                    <!--  /DOB  -->
                </div>
                <div class="form-group row mb-0">
                    <!--  /Gender  -->
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
                    <!--  /Gender  -->
                </div>
                <div class="form-group row p-0">
                    <!--  Password  -->
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
                <p class="text-center">Please have yourself read through the privacy policy article before you make any further actions.</p>
                <div class="form-group p-0">
                    <input type="checkbox"/> {{_("I have read & agreed to the ")}} 
                    <a href="">{{_("Privacy Policy")}}</a>{{_(" article and i give my consent to withold & use my information.")}}
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

@section('content')