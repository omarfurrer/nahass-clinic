
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
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    

</head>

<body>

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
                                <a href="#"><i class="fa fa-facebook" id="fbIcon"></i></a>
                                <a href="#"><i class="fa fa-youtube" id="ytIcon"></i></a>
                                <a href="#"><i class="fa fa-instagram" id="ig-Icon"></i></a>
                                <a href="#"><i class="fa fa-linkedin" id="liIcon"></i></a>
                                <a href="#"><i class="fa fa-twitter" id="twIcon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" id="navbarContainer">
                    <nav class="navbar navbar-expand-lg mainNav fixed">
                        <a class="navbar-brand" id="websiteTitle" href="#">Al Nahass Clinic</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
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
                <div>
                    @yield('content')
                </div>

                <script src="{{ asset("js/app.js") }}"></script>
                <script src="{{ asset("js/custom.js") }}"></script>
                @stack('scripts')

            </body>
            </html>