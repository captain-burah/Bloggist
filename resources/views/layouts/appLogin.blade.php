
<!--
=========================================================
Enlighten Venture
=========================================================
Copyright 2020 Captain Burah (https://www.instagram.com/captain_burah)

Coded by Khaazen Burah

=========================================================
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link href="{{('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" rel="stylesheet" type="text/css"/>
    <link href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" >
    <link href="{{('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />

    <link href="{{asset('device-mockups/device-mockups.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/new-age/landing-page.min.css')}}" rel="stylesheet">
</head>

<body class="login-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand " href="{{ url(app()->getLocale() . '/home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item ">
                    <a href="#" class="dropdown-toggle nav-link text-capitalize" data-toggle="dropdown">
                    <i class="material-icons">language</i> {{__('Language')}}
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        @foreach (config('app.available_locales') as $locale)
                            <a @if (app()->getLocale() == $locale) 
                                style="text-decoration: underline;" 
                                class="dropdown-item text-white bg-success" @endif 
                            href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}" class="dropdown-item">
                                
                                {{ strtoupper($locale )}}
                            </a>
                        @endforeach
                    </div>
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                        href="" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                        href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                        href="" target="_blank" data-original-title="Follow us on Instagram" 
                        rel="nofollow">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                @else 
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout')}}
                            </a>

                            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>


    <!--   Core JS Files   -->
        <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/moment.min.js')}}"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
    <!--   Core JS Files   -->
</body>

</html>