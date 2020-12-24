@extends('layouts.appSetupTutor')

@section('content')
    <div class="container-fluid">
        <!--------------------------------------------->
        <div class="row col-md-12 pb-3">
            
        </div>
        <!--------------------------------------------->
        <div class="row col-md-12 ml-auto mr-auto">
                <div class="card card-nav-tabs ">
                    <div class="card-header card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <h2 class="text-center">Great! let's get you started</h2>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body p-0">
                        <form id="regForm" action="/setup_finish" method="GET">
                            <div class="tab-content text-center ">
                                <p class="col-md-11 ml-auto mr-auto text-center p-3">
                                    All information gathered will be used for validation analysis, with respect to professional practices in data privacy, to create a better world.
                                </p>
                                

                                <!---------------------------- First Tab: -------------------------->
                                <div class="tab ">
                                    <h3 class="text-dark">I am a</h3>
                                    <!------- Profession -------------------->

                                        <div class="form-group col-md-5  ml-auto mr-auto mt-3">
                                            <div class="input-group">
                                                <select class="custom-select" id="profession" name="profession" data-toggle="tooltip" 
                                                data-placement="top" title="state your profession" tabindex="0" onchange="yesnoCheck(this);">
                                                    <option value="Student">Student</option>
                                                    <option value="Undergraduate">Undergraduate</option>
                                                    <option value="Postgraduate">Postgraduate</option>
                                                    <option value="Professional Tutor">Professional Full Time Tutor</option>
                                                    <option value="Other">Other: state your profession</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div id="ifYes" style="display: none;" class="">
                                                <label for="Other02">State your profession</label>
                                                <textarea type="text" rows="1" id="Other02" name="Other02" class="form-control" 
                                                placeholder="Doctor, Engineer, Chartered Accountant, etc"></textarea>
                                            </div>
                                              
                                        </div>
                                    <!------ /Profession -------------------->
                                </div>


                                <!---------------------------- Second Tab: -------------------------->
                                <div class="tab mt-5">
                                    <h3 class="text-dark">My experience as a tutor</h3>
                                    <!------- Experience -------------------->
                                        <div class="form-group col-md-5  ml-auto mr-auto mt-5 pt-2">
                                            <div class="input-group">
                                                <select class="custom-select" id="experience" name="experience" data-toggle="tooltip" data-placement="top" title="state your experience" tabindex="0">
                                                <option value="Just Starting">Just Starting</option>
                                                <option value="Moderate">Ambitious: over 12 months</option>
                                                <option value="Professional">Professional: over 10 years</option>
                                                </select>
                                            </div>
                                        </div>
                                    <!------ /Experience -------------------->
                                </div>


                                <!---------------------------- Third Tab: -------------------------->
                                <div class="tab ">
                                    <h3>Basic Information</h3>
                                    <!------- Address-------------------->
                                    <div class="form-group row col-md-11 ml-auto mr-auto pt-3">
                                        <label>Your Residential Address</label>
                                    </div>
                                        <div class="form-group row col-md-11 ml-auto mr-auto px-0">
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address01" 
                                                placeholder="{{ __('Address (eg: No. 112/1-B)') }}" 
                                                required autofocus>
                                            </div>
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address02" 
                                                placeholder="{{ __('Town (eg: Bandaranayakepura)') }}" 
                                                required autofocus>
                                            </div>
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address03" 
                                                placeholder="{{ __('City (eg: Nugegoda)') }}" 
                                                required autofocus>
                                            </div>
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address04" 
                                                placeholder="{{ __('District (eg: Colombo)') }}" 
                                                required autofocus>
                                            </div>
                                        </div>
                                    <!------ /Address-------------------->

                                    <!------- Contact-------------------->
                                        <div class="form-group row col-md-11 ml-auto mr-auto pt-3">
                                            <input type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" 
                                            name="contact" placeholder="{{ __('Your Contact (eg: 0XX 123 4567)') }}" value="{{ old('contact') }}" 
                                            required autofocus >

                                            @if ($errors->has('contact'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('contact') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ /Contact-------------------->

                                    <!------- DOB-------------------->
                                        <div class="form-group-row col-md-6 ml-auto mr-auto pt-3 text-left">
                                            <label class="label-control bmd-label-static">{{ __('Date Of Birth') }}</label>
                                            <input type="date" name="dob" id="dob" 
                                            class="form-control {{ $errors->has('dob') ? ' is-invalid' : '' }}" required>
                                            
                                                
                                            
                                            @if ($errors->has('dob'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    <!------ /DOB-------------------->
                                </div>


                                <!---------------------------- Fourth Tab: -------------------------->
                                <div class="tab">
                                    <h3>Education Background</h3>
                                    <!------ Qualification-------------------->
                                        <div class="form-group col-md-11 ml-auto mr-auto pt-0 pb-3">
                                            <textarea  id="qualification" rows="3" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" 
                                                name="qualification" placeholder="{{ __('Your Qualifications')}} &#10;{{ __('eg: B.Sc. in Business Management,')}} &#10; {{ __(' Masters in Business Analytics')}}" value="{{ old('qualification') }}" required autofocus ></textarea>
     
                                            @if ($errors->has('qualification'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('qualification') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ Qualification-------------------->

                                    <!------ Alma Mater-------------------->
                                        <div class="form-group col-md-11 ml-auto mr-auto pt-0 pb-3">
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
                                        <div class="form-group col-md-11 ml-auto mr-auto pt-0 pb-3">
                                            <input type="text" class="form-control{{ $errors->has('achievements') ? ' is-invalid' : '' }}" 
                                            name="achievements" placeholder="{{ __('Student Achievements   eg: Island 1st, District 1st') }}" value="{{ old('achievements') }}" 
                                            required autofocus >
                                            

                                            @if ($errors->has('achievements'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('achievements') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ Achievements-------------------->
                                </div>


                                <!---------------------------- Fifth Tab: -------------------------->
                                <div class="tab">
                                    <h3>Show Us Yourself!</h3>
                                    <!------ Profile Picture-------------------->
                                        <div class="form-group form-file-upload form-file-multiple col-md-6  ml-auto mr-auto pt-0">
                                            <div class="ml-auto mr-auto image-preview mb-5" id="imagePreview">
                                                <img src="{{ asset('img/profile/tutors.png')}}" alt="Image Preview" 
                                                class="image-preview__image ml-auto mr-auto shadow-lg">
                                                <span class="image-preview__default-text mx-auto ">Image Preview</span>
                                            </div>
                                            
                                            <input type="file" class="inputFileHidden" name="profileImg" id="inpFile">
                                            <div class="input-group">
                                                <input type="text" class="form-control inputFileVisible" placeholder="Upload a profile picture">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </button>
                                                </span>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-primary text-small text-capitalize mt-2" data-toggle="tooltip" 
                                            data-placement="bottom" title="Height & Width be 400px">
                                                Recommended Dimensions
                                            </button>
                                        </div>
                                    <!------ Profile Picture-------------------->
                                </div>
                                                                

                                <!---------------------------- Buttons: -------------------------->
                                <div style="overflow:auto;">
                                    <div style="float:right;" class="pr-4 pt-4">
                                        <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-md btn-success btn-round" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>
                                
                                
                                <!---------------------------- Circles Steps: ----------------------->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
@endsection