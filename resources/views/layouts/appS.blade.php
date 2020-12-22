<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons     -->
    <link rel="stylesheet" type="text/css" 
    href="{{('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}" />
    <link rel="stylesheet" href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <link href="{{asset('css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
    <link href="{{asset("demo/demo.css")}}" rel="stylesheet" />

</head>

<body class="bg-warning login-page sidebar-collapse">
    <!--  Nav  -->
        <nav class="navbar fixed-top navbar-expand-lg" id="sectionsNav">
            <div class="container ">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url(app()->getLocale() . '/home') }}">
                        {{__('Enlighten Venture  ')}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                    </ul>
                </div>
            </div>
        </nav>
    <!--  Nav  -->

    <!--  Body Content  -->
        <main class="">
            @yield('content')
        </main>
    <!--  Body Content  -->

    <!--  Footer  -->
    <footer class="pt-0 mt-0">
        <div class="container text-dark  pb-0 mb-0">
          <nav class=" pb-0">
            <ul>
                <a class="m-0 text-dark Flink pb-0"><i class="material-icons">language</i></a>
                @foreach (config('app.available_locales') as $locale)
                    <li class="nav-item pb-0">
                        <a @if (app()->getLocale() == $locale) 
                            style="text-decoration: underline;" 
                            class="nav-link" @endif 
                        href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}" class="nav-link Flink">
                            
                            {{ strtoupper($locale )}}
                        </a>
                    </li>
                @endforeach
                <li class="nav-item pb-0">
                    <a class="nav-link pb-2" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                    <i class="fa fa-twitter"></i> <span class="text-capitalize">Twitter</span>
                    </a>
                </li>

                <li class="nav-item  pb-0">
                    <a class="nav-link pb-2" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                    <i class="fa fa-facebook-square"></i> <span class="text-capitalize">facebook</span>
                    </a>
                </li>

                <li class="nav-item pb-0">
                    <a class="nav-link py-2" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                    <i class="fa fa-instagram"></i> <span class="text-capitalize">instagram</span>
                    </a>
                </li>
                <li class="nav-item pb-0 ">
                    <a href="#" class="py-2">
                    Licenses
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="py-2">
                    Terms & Conditions
                    </a>
                </li>
            </ul>
          </nav>
          <div class="copyright pt-0 mt-0  pb-0 mb-0">
            &copy;
              <script>
                document.write(new Date().getFullYear())
              </script> developed by <a href="{{('https://www.instagram.com/captain_burah')}}" target="_blank" class="text-dark" >
              Captain Burah
            </a> for a better world.
          </div>
        </div>
    </footer>
    <!--  Footer  -->


    <!--   Core JS Files   -->
        <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/moment.min.js')}}"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="{{asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>

        <script>
            

            function scrollStuReg() {
                if ($('.section-StuReg').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-StuReg').offset().top
                }, 1000);
                }
            }
        </script>
    <!--   Core JS Files   -->
</body>

</html>