@extends('layouts.appT-2')

@section('content')
    <div class="container ">
        <!--------------------------------------------->
        <div class="row col-md-12">
            <div class="pb-5 mb-5 bg-info"></div>
        </div>
        <!--------------------------------------------->
        <div class="row col-md-12 ml-auto mr-auto">
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <h2 class="text-center">Let's create your profile</h2>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body p-0">
                        <form id="regForm" action="{{ ('/setup_submit')}}">
                            <p class="text-center p-3">
                                The information is vital for us to analyse, track and monitor the progress of all our users, with professional practice and code of ethics, in order to create a better system of use. Please be known, that all the data gathered will be gauranteed to be used in respect to the Data Protection Act 1998, as described in the privacy policy.
                            </p>
                        <div class="tab-content text-center ">
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <h3>Basic Information</h3>
                                <!------- Address-------------------->
                                    <div class="form-group col-md-12 pt-0">
                                        <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" 
                                        name="address" placeholder="{{ __('Enter Your Residential Address  (eg: 112/1, Bandaranayakepura Nugegoda, Colombo)') }}" 
                                        value="{{ old('address') }}" required autofocus >

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <!------ /Address-------------------->

                                <!------- Contact-------------------->
                                    <div class="form-group col-md-12 pt-0">
                                        <input type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" 
                                        name="contact" placeholder="{{ __('Enter Your Contact Number Here  (eg: 0XX 123 4567)') }}" value="{{ old('contact') }}" 
                                        required autofocus >

                                        @if ($errors->has('contact'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <!------ /Contact-------------------->

                                <!------- DOB-------------------->
                                    <div class="form-group-row col-md-6 pt-0 text-left">
                                        <label class="label-control bmd-label-static">{{ __('Date Of Birth') }}</label>
                                        <input type="date" name="dob"
                                        id="dob" class="form-control {{ $errors->has('dob') ? ' is-invalid' : '' }}" required>
                                        
                                            
                                        
                                        @if ($errors->has('dob'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                <!------ /DOB-------------------->
                            </div>
                            
                            <div class="tab">
                                <h3>Education Background</h3>
                                <p>This information will be displayed public for students perspective. You can change or update these details in the profile settings, at your will.</p>
                                <!------ Qualification-------------------->
                                    <div class="form-group col-md-12 pt-0">
                                        <textarea  id="qualification" rows="3" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" placeholder="{{ __('Enter Your Qualifications   eg: B.Sc. in Business Management, M.Sc. in Business Analytics') }}" 
                                            value="{{ old('qualification') }}"  autofocus ></textarea>
                                        
                                        @if ($errors->has('qualification'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('qualification') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <!------ Qualification-------------------->

                                <!------ Alma Mater-------------------->
                                    <div class="form-group col-md-12 pt-0">
                                        <input type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" 
                                        name="school" placeholder="{{ __('Your Alma Mater   eg: school or university') }}" value="{{ old('school') }}" 
                                        required autofocus >

                                        @if ($errors->has('school'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('school') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <!------ Alma Mater-------------------->

                                <!------ Achievements-------------------->
                                    <div class="form-group col-md-12 pt-0">
                                        <textarea  id="achievements" rows="3" class="form-control{{ $errors->has('achievements') ? ' is-invalid' : '' }}" name="achievements" placeholder="{{ __('Student Achievements   eg: Island 1st, District 1st') }}" 
                                            value="{{ old('achievements') }}" autofocus ></textarea>

                                        @if ($errors->has('achievements'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('achievements') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <!------ Achievements-------------------->
                            </div>
                            
                            <div style="overflow:auto;">
                                <div style="float:right;" class="pr-4 pt-4">
                                    <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-md btn-success btn-round" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                            
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection