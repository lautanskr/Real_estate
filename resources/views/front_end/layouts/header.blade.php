<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Dec 2021 10:01:58 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="html 5 template">
<meta name="author" content="">
<title>Laudhan: Find your dream Properties</title>
<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="css/jquery-ui.css">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
<!-- FONT AWESOME -->
<link rel="stylesheet" href="{{asset('front-end/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/fontawesome-5-all.min.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/font-awesome.min.css')}}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{asset('front-end/css/search.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/aos.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/aos2.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/lightcase.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/menu.css')}}">
{{-- <link rel="stylesheet" href="{{asset('front-end/css/nice-select.css')}}"> --}}
<link rel="stylesheet" href="{{asset('front-end/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/styles.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/maps.css')}}">
<link rel="stylesheet" id="color" href="{{asset('front-end/css/colors/pink.css')}}">

</head>

<body class="homepage-9 hp-6 homepage-1">
<!-- Wrapper -->
<div id="wrapper">
<!-- START SECTION HEADINGS -->
<!-- Header Container
================================================== -->
<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="#"><img src="{{asset('front-end/images/logo3.png')}}" data-sticky-logo="images/logo-red.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="#">Home</a>
                            
                        <li><a href="#">Buy</a>
                             <ul>
                                 <li><a href="{{route('landbuy')}}">Land</a>
                                 
                                    </li>
                                    <li><a href="#">House</a>
                                        
                                    </li>
                                    <li><a href="#">Room</a>
                                        
                                    </li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">Sell</a>
                                <ul>
                                    <li><a href="single-property-1.html">Land</a></li>
                                    <li><a href="single-property-2.html">House</a></li>
                                    <li><a href="single-property-3.html">Rooms</a></li>
                                   
                                </ul>
                            </li>
                            <li><a href="#">Rent</a>
                                <ul>
                                    <li><a href="#">Land</a>
                                        
                                    </li>
                                    <li><a href="#">House</a>
                                        
                                    </li>
                                    <li><a href="about.html">Room</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">About Us</a>
                                
                            </li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->


            
            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class=""><a href="{{route('RegisterAgent')}}">Sign Up</a></div>
                </div>
               
                <!-- Header Widget / End -->
            </div>
            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class=""><a href="{{route('LoginAgent')}}">Log In</a></div>
                </div>
                
                <!-- Header Widget / End -->
            </div>
            <!-- lang-wrap-->
            <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Nepali</a></li>
                        
                    </ul>
                </div>
            </div>
            <!-- lang-wrap end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
