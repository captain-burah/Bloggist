<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Venture 2021</title>
        <link href="{{ asset('css/app.css') }}" type="style/css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            a,
            a:focus,
            a:hover {
            color: #fff;
            }
    
            /* Custom default button */
            .btn-secondary,
            .btn-secondary:hover,
            .btn-secondary:focus {
            color: #000;
            text-shadow: none; /* Prevent inheritance from `body` */
            background-color: #fff;
            border: .05rem solid rgb(170, 170, 170);
            opacity: .6;
            }
    
    
            /*
            * Base structure
            */
    
            html,
            body {
            height: 100%;
            font-family: 'Raleway', sans-serif;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            font-weight: 100;
            
            }
         
            .cover-container {
                max-width: 52em;      
            }
    
    
            /*
            * Header
            */
            .masthead {
            margin-bottom: 2rem;
            } 
    
            @font-face {
                font-family: 'playlist';
                src: url('/font/playlist.otf');
                font-style: normal;
                font-weight: 100;
            }
    
            
    
            .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 700;
            color: rgba(255, 255, 255, .5);
            background-color: transparent;
            border-bottom: .25rem solid transparent;
            }
    
            .nav-masthead .nav-link:hover,
            .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255);
            }
    
            .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
            }
    
            .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
            }
    
            @media (min-width: 48em) {
                .masthead-brand {
                    float: left;
                }
                .nav-masthead {
                    float: right;
                }
            }
    
    
            /*
            * Cover
            */
            .cover {
                padding: 0 0rem;
                height: 100vh;
                align-items: center;
                margin-bottom: 10%;
                margin-top: 20%;
            }
            .cover .btn-lg {
            padding: .75rem 1.25rem;
            font-weight: 700;
            }
    
    
            /*
            * Footer
            */
            .mastfoot {
            color: rgba(255, 255, 255, .5);
            }
            .mastMenu{
                margin-bottom: 0;
                margin-top: 0;
            }
            .mastMenu-item{
                margin: 10%;
                font-weight: 600;
            }
            .headMenu{
                font-weight: 400;
            }

        </style>
    </head>
    <body class="text-center bg-light" >
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column ">
<!--------------Header Section-------------->
            <header class="container-fluid  mb-auto ">
                
                
                    <nav class="nav nav-masthead justify-content-center ">
                        @if (Route::has('login'))
                    <div class="headMenu">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login &nbsp;</a>
                            <a href="{{ route('register') }}">&nbsp; Register</a>
                        @endauth
                    </div>
                @endif
                    </nav>
                
            </header>

<!---------------Main Section---------------->
            <main role="main" class="inner cover rounded">
                <h1 class="cover-heading display-1"><span class="text-primary"><b>V</b></span>enture 2021</h1>
                <div class="row mastMenu" style="opacity: .9;">
                    <div class="col-sm-3 shadow-sm rounded-lg mt-4 border-right" >
                        <a href="#Home" class="text-dark mastMenu-item">Home Page</a>
                    </div>
                    <div class="col-sm-3 shadow-sm rounded-lg mt-4  border-right">
                        <a href="#Venturecast" class="text-dark mastMenu-item">Venturecast</a>
                    </div>
                    <div class="col-sm-3 shadow-sm rounded-lg mt-4  border-right">
                        <a href="#Lecturers" class="text-dark mastMenu-item">Lecturers</a>
                    </div>
                    <div class="col-sm-3 shadow-sm rounded-lg mt-4 border-right">
                        <a href="#About_Us" class="text-dark mastMenu-item">About Us</a>
                    </div>
    
                </div>
            </main>
            
<!---------------Footer Section-------------->
            <footer class="mastfoot mt-auto">
                
            </footer>
<!--------------/Footer Section-------------->
        </div>
        
    </body>
</html>
