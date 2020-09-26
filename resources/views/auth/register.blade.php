@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <div class="content">
          <!-- for example router view -->
          <router-view></router-view>
          
          <!-- set progressbar -->
          <vue-progress-bar></vue-progress-bar>
    </div>        <!-- /.row -->
      <!-- /.container-fluid -->
<!-- /.content -->
<!-- /.content-wrapper -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-center"><i class="fas fa-child"></i>&nbsp {{ __('Student Registration') }}</div>

                <div class="card-body card-wall">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="batch" class="col-md-4 col-form-label text-md-right">{{ __('Batch') }}</label>

                            <div class="col-md-3">
                                <select name="batch" id="batch"
                                    class="form-control{{ $errors->has('batch') ? ' is-invalid' : '' }}" name="batch" value="{{ old('batch') }}" required 
                                    style="font-size: .85rem">
                                    <option value="">Select Batch</option>
                                    <option value="O/L">O/Level</option>
                                    <option value="A/L">A/Level</option>
                                </select>
                                @if ($errors->has('batch'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <select name="year" id="year"
                                    class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required 
                                    style="font-size: .85rem">
                                    <option value="">Select Year</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <footer class=" col-12 mastfoot mt-auto text-center">
            <div class="inner">
                <p>designed & developed | &copy <a href="//www.instagram.com/captain_burah" class="footer-a">Captain Burah</a>. All rights reserved.</p>
                </div>
        </footer>
        <!--------------/Footer Section-------------->
    </div>
    
</div>
@endsection
