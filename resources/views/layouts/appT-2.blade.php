<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <title>
        Virtual Venture 2021
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="css/material-kit.min.css?v=2.0.7" rel="stylesheet" />
    <link href="demo/demo.css" rel="stylesheet" />
    <style>
        /*Profile Image CSS ---------------*/
            .image-preview__image{
                max-width: 400px;
                max-height: 400px;
                border-radius: 50%;
                border: 2px solid #dddddd;
            }
            .image-preview{
                min-width: 200px;
                min-height: 200px;
                border-radius: 50%;
                
                
                                
                /* default text */
                display: flex;
                align-items: center;
                justify-contents: center;
                font-weight: bold;
                color: #cccccc;
            }
            
            .image-preview__image{
                display: block;
                width: 100%;
            }
            .image-preview__default-text{
                display: none;
                width: 100%;
            }

        /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }
            textarea.invalid{
                background-color: #ffdddd;
            }

        /* Hide all steps by default: */
            .tab {
            display: none;
            }

        /* Make circles that indicate the steps of the form: */
            .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
            }

        /* Mark the active step: */
            .step.active {
            opacity: 1;
            }

        /* Mark the steps that are finished and valid: */
            .step.finish {
            background-color: #4CAF50;
            }
    </style>

</head>


<body class="bg-info login-page sidebar-collapse">
    <nav class="navbar  navbar-expand-lg" id="sectionsNav">
        <div class="container ">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url(app()->getLocale() . '/home') }}">
                Enlighten Venture  </a>
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
                    <li class="nav-item">
                        <a class="navbar-brand">
                            <span class="text-capitalize">Welcome {{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link text-capitalize" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Choose Your Language
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="../index.html" class="dropdown-item">
                                <i class="material-icons">layers</i>English
                            </a>
                            <a href="#l" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Sinhala
                            </a>
                            <a href="#l" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Tamil
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <main class="">
        @yield('content')
    </main>

    <footer class="pt-0 mt-0">
        <div class="container text-dark  pb-0 mb-0">
          <nav class=" pb-0">
            <ul>
                
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                    <i class="fa fa-twitter"></i> <span class="text-capitalize">Twitter</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                    <i class="fa fa-facebook-square"></i> <span class="text-capitalize">facebook</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                    href="#" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                    <i class="fa fa-instagram"></i> <span class="text-capitalize">instagram</span>
                    </a>
                </li>
                <li class="pb-0 mb-0">
                    <a href="#" class="pb-0 mb-0">
                    Licenses
                    </a>
                </li>
                <li class="pb-0 mb-0">
                    <a href="#" class="pb-0 mb-0">
                    Terms & Conditions
                    </a>
                </li>
            </ul>
          </nav>
          <div class="copyright pt-0 mt-0  pb-0 mb-0">
            &copy;
              <script>
                document.write(new Date().getFullYear())
              </script> developed by <a href="https://www.instagram.com/captain_burah" target="_blank" class="text-dark" >
              Captain Burah
            </a> for a better world.
          </div>
        </div>
    </footer>
</body>

  
    <!--   Core JS Files   -->
        <script src="js/core/jquery.min.js" type="text/javascript"></script>
        <script src="js/core/popper.min.js" type="text/javascript"></script>
        <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="js/plugins/moment.min.js"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="js/material-kit.js?v=2.0.7" type="text/javascript"></script>
    <!--   Core JS Files   -->
    <script>

        // ---------------- FileInput -----------------------------
            $('.form-file-simple .inputFileVisible').click(function() {
            $(this).siblings('.inputFileHidden').trigger('click');
            });

            $('.form-file-simple .inputFileHidden').change(function() {
            var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
            $(this).siblings('.inputFileVisible').val(filename);
            });

            $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
            $(this).parent().parent().find('.inputFileHidden').trigger('click');
            $(this).parent().parent().addClass('is-focused');
            });

            $('.form-file-multiple .inputFileHidden').change(function() {
            var names = '';
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                if (i < $(this).get(0).files.length - 1) {
                names += $(this).get(0).files.item(i).name + ',';
                } else {
                names += $(this).get(0).files.item(i).name;
                }
            }
            $(this).siblings('.input-group').find('.inputFileVisible').val(names);
            });

            $('.form-file-multiple .btn').on('focus', function() {
            $(this).parent().siblings().trigger('focus');
            });

            $('.form-file-multiple .btn').on('focusout', function() {
            $(this).parent().siblings().trigger('focusout');
            });
        // --------------- /FileInput -----------------------------

        // ---------------- Tab 01: Image preview -----------------------------
            const inpFile = document.getElementById('inpFile');
            const previewContainer = document.getElementById('imagePreview');
            const previewImage = previewContainer.querySelector(".image-preview__image");
            const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

            inpFile.addEventListener("change", function(){
                const file = this.files[0];

                if (file){
                    const reader = new FileReader();

                    previewDefaultText.style.display = "none";
                    previewImage.style.display = "block";

                    reader.addEventListener("load", function(){
                        console.log(this);
                        previewImage.setAttribute("src", this.result);
                    });

                    reader.readAsDataURL(file);
                } else{
                    previewDefaultText.style.display = null;
                    previewImage.style.display = null;
                    previewImage.setAttribute("src", "{{ asset('img/profile/tutors.png')}}");
                }
            });
        // --------------- /Tab 01: Image preview -----------------------------
            
        function scrollLecReg() {
                if ($('.section-LecReg').length != 0) {
                    $("html, body").animate({
                        scrollTop: $('.section-LecReg').offset().top
                    }, 1000);
                }
            };
        
        
        //--------- Setup Page multi-form -------------
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab
            function showTab(n) {
                // This function will display the specified tab of the form ...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                // ... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                // ... and run a function that displays the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");

                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;

                // Hide the current tab:
                x[currentTab].style.display = "none";

                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;

                // if you have reached the end of the form... :
                if (currentTab >= x.length) {
                    //...the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }

                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");

                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false:
                        valid = false;
                    }
                }
                
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class to the current step:
                x[n].className += " active";
            }
        //--------- Setup Page multi-form -------------

        //--------- Tab 01: other option --------------
            function yesnoCheck(that) {
                if (that.value == "Other") {
                    
                    document.getElementById("ifYes").style.display = "block";
                } else {
                    document.getElementById("ifYes").style.display = "none";
                }
            }

    </script>
  </body>

</html>