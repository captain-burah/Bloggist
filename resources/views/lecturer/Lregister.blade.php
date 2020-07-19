@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!------------------ Card Header---------------------------------->
            <div class="card">
                <div class="card-header bg-dark text-center"><i class="fas fa-graduation-cap"></i>&nbsp {{ __('Lecturer Registration') }}</div>

        <!------------------ Card Body---------------------------------->
                <div class="card-body card-wall">

                <!------------------ Form---------------------------------->
                    <form method="POST" action="{{ url('tutor/register') }}" aria-label="{{ __('Reg') }}">
                        @csrf

                    <!------------------ First Name---------------------------------->
                        <div class="form-group row">
                            <label for="Fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="Fname" type="text" placeholder="Sherlock" class="form-control{{ $errors->has('Fname') ? ' is-invalid' : '' }}" 
                                name="Fname" value="{{ old('Fname') }}" required autofocus>

                                @if ($errors->has('Fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!------------------ Last Name---------------------------------->
                        <div class="form-group row">
                            <label for="Lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="Lname" type="text" placeholder="Holmes" class="form-control{{ $errors->has('Lname') ? ' is-invalid' : '' }}" 
                                name="Lname" value="{{ old('Lname') }}" required autofocus>

                                @if ($errors->has('Lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!------------------ Email---------------------------------->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="sher_locked@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!------------------ Password---------------------------------->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="********" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!------------------ Confirm Password---------------------------------->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="********" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    <!------------------ Subdomain Name---------------------------------->
                        <div class="form-group row">
                            <label for="subdomain" class="col-md-4 col-form-label text-md-right">{{ __('Subdomain Name') }}</label>

                            <div class="col-md-6">
                                <input id="subdomain" type="text" placeholder="(sherlockholmes).venture.lk" class="form-control{{ $errors->has('subdomain') ? ' is-invalid' : '' }}" 
                                name="subdomain" value="{{ old('subdomain') }}" required>

                                @if ($errors->has('subdomain'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subdomain') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!------------------ Submit Button---------------------------------->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Register Now!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    <!------------------ Footer Section---------------------------------->
        <footer class=" col-12 mastfoot mt-auto text-center">
            <div class="inner">
                <p>designed & developed | &copy <a href={{ __('www.instagram.com/captain_burah') }} class="footer-a">Captain Burah</a>. All rights reserved.</p>
                </div>
        </footer>
    </div>
    
</div>
@endsection
