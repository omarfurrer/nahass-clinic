
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

</head>

<body>

   <!-- Begining of top navpart container -->
   <div class="container-fluid" id="top-NavPart">
    <div class="container">
        <div class="row" id="top-NavPartRow">


            <div class="col-md-3 col-sm-3 col-xs-12 top-NavPart-contact">
                <p class="top-NavPart-contactP">
                    <i class="fa fa-clock-o"></i> From 11:00 am To 11:00 pm  </p>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 top-NavPart-contact">
                    <p class="top-NavPart-contactP">
                        <i class="fa fa-envelope-open"></i> <a href="#">info@whitesmileclinic-eg.com</a>  </p>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 top-NavPart-contact">
                        <p class="top-NavPart-contactP">
                            <i class="fa fa-mobile-phone fa-lg"></i> 01096150382 - 0128388225  </p>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12" id="smIconsDiv">
                            <a href="#"><i class="fa fa-facebook fbIcon"></i></a>
                            <a href="#"><i class="fa fa-youtube ytIcon"></i></a>
                            <a href="#"><i class="fa fa-instagram ig-icon"></i></a>
                            <a href="#"><i class="fa fa-linkedin liIcon"></i></a>
                            <a href="#"><i class="fa fa-twitter twIcon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--    End of top navpart container -->


            <!-- Begining of Navbar Container -->
            <div class="container" id="navbarContainer">
                <nav class="navbar navbar-expand-lg mainNav fixed">
                    <a class="navbar-brand" id="websiteTitle" href="#">Al Nahass Clinic</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("about-us") }}">About Us</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dental Studio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--    End of Navbar container  -->              


            <!-- Begininig of mobileOnly Container -->
            <div class="container-fluid" id="mobileOnly">
                <div class="row">
                    <div class="col-sm-12">
                        <h5><i class="fa fa-phone"></i> Call Us</h5>
                        <p>+202 33 45 12 53 / +2012 83 88 22 54</p>
                    </div>
                    <div class="col-sm-12">
                        <h5><i class="fa fa-clock-o"></i> Opening Hours</h5>
                        <p>From 11:00 am To 11:00 pm</p>
                    </div>
                    <div class="col-sm-12">
                        <h5><i class="fa fa-calendar"></i> Book an appointment</h5>
                        <p><a href="#">Your perfect smile is one click away!</a></p>
                    </div>
                </div>
            </div>
            <!-- End of Mobile Only container -->
            <div>
                @yield('content')
            </div>
            <!-- Begining of Footer -->
            <div class="container footer">
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h4>Clinic 1:</h4>
                        <div class="footerPs">
                            <p><i class="fa fa-map-marker"></i> 21 El Batal Ahmed Abd El-Aziz</p>
                            <p><i class="fa fa-phone"></i> +202 33 45 12 53</p>
                            <p><i class="fa fa-mobile-phone fa-lg"></i> +2010 96 15 03 82</p>
                            <p><i class="fa fa-envelope"></i> elbatal@alnahassclinic.com</p>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <h4>Clinic 2:</h4>
                        <div class="footerPs">
                            <p><i class="fa fa-map-marker"></i> 21 El Batal Ahmed Abd El-Aziz</p>
                            <p><i class="fa fa-phone"></i> +202 33 45 12 53</p>
                            <p><i class="fa fa-mobile-phone fa-lg"></i> +2010 96 15 03 82</p>
                            <p><i class="fa fa-envelope"></i> elbatal@alnahassclinic.com</p>
                        </div>
                    </div> 
                    <div class="col-md-4 footerSm">
                        <h4>Follow Us:</h4>
                        <a href="#"><i class="fa fa-facebook fbIcon"></i></a>
                        <a href="#"><i class="fa fa-twitter twIcon"></i></a>
                        <a href="#"><i class="fa fa-instagram ig-icon"></i></a>
                        <a href="#"><i class="fa fa-youtube ytIcon"></i></a>
                    </div> 
                </div>
            </div>
            <!-- End of Footer -->
            <!-- Begining of Copyright container -->
            <div class="container-fluid copyrightContainer">
                <div class="container copyrightContainer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <span>Copyright © 2018 Al-Nahass Clinic. All Rights Reserved. Developed By <b>47-Flakes</b></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Copyright container -->


            <script src="{{ asset("js/app.js") }}"></script>
            <script src="{{ asset("assets/Counter-Up-master/jquery.counterup.min.js") }}"></script>
            <script src="{{ asset("assets/OwlCarousel2-2.3.4/dist/owl.carousel.js") }}"></script> 
            @stack('scripts')

        </body>
        </html>