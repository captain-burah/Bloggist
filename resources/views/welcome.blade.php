<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        <title>Venture 2021</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
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
            body{
                background-color: #40844e;
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
            .cover-heading{
                font-weight: 400;
                margin-bottom: 5%;
            }
    
    
            /*
            * Footer
            */
            
            .mastMenu{
                
                margin-bottom: 0;
                margin-top: 0;
                background-color: #32673c;
                align-items: center;
            }
            .mastMenu-a{
                align-items: center;
                margin: 10%;
                font-weight: 600;
            }
            .headMenu{
                font-weight: 400;
            }

            .mastMenu-item:hover {
                background-color: #40844e;
                color: #fff !important;
                
                transition: background-color .25s;
            }
            

        </style>
    </head>
    <body class="text-center " >
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column ">
<!--------------Header Section-------------->
            <header class="container-fluid  mb-auto border-bottom">
                
                
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
                <h1 class="cover-heading display-1 text-light">Venture 2021</h1>
                <div class="row mastMenu text-light my-0 " style="opacity: .9;;">
                    <div class="col-sm-3 my-0 py-3 mastMenu-item" >
                        <a href="#Home" class="text-light mastMenu-a">The Academy</a>
                    </div>
                    <div class="col-sm-3 my-0 py-3 mastMenu-item">
                        <a href="#Venturecast" class="text-light mastMenu-a ">Venturecast</a>
                    </div>
                    <div class="col-sm-3  my-0 py-3 mastMenu-item">
                        <a href="#Lecturers" class="text-light mastMenu-a">Lecture Board</a>
                    </div>
                    <div class="col-sm-3  my-0 py-3 mastMenu-item">
                        <a href="#Lecturers" class="text-light mastMenu-a">Join Here</a>
                    </div>
                </div>
                <div class="row mastMenu text-light my-0" style="opacity: .9;  border-radius: 0px 0px 50px 50px">
                    <div class="col-sm-6  my-0 py-3 mastMenu-item">
                        <a href="#Lecturers" class="text-light mastMenu-a">Contact</a>
                    </div>
                    <div class="col-sm-6  my-0 py-3 mastMenu-item">
                        <a href="#About_Us" class="text-light mastMenu-a">About Us</a>
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
