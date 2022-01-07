<!DOCTYPE html>
<html lang="en">

        <meta charset="utf-8" />
        <title>Real | Estate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      
         <!-- App css -->
         <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" /> 


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-success rounded-circle noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success">
                                        <i class="mdi mdi-settings-outline"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="text-muted">There are new settings available</small>
                                    </p>
                                </a>
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-bell-outline"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="text-muted">There are 2 new updates available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user
                                        <small class="text-muted">You have 10 unread messages</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                See all Notification
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-email noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Messages
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <div class="inbox-widget">
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="{{url('backend/assets/images/users/avatar-1.jpg')}}" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Chadengle</p>
                                            <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="{{url('backend/assets/images/users/avatar-3.jpg')}}" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text text-truncate">This theme is awesome!</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="{{url('backend/assets/images/users/avatar-4.jpg')}}" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text text-truncate">Nice to meet you</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>

                                        </div>
                                    </a>
                                </div> <!-- end inbox-widget -->

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                See all Messages
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('backend/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                                </form>
                            </a>

                        </div>
                    </li>

                   

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index-2.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{url('backend/assets/images/logo-light.png')}}" alt="" height="18">
                            <!-- <span class="logo-lg-text-light">Zircos</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">Z</span> -->
                            <img src="{{url('backend/assets/images/logo-sm.png')}}" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                    <li class="d-none d-lg-block">
                        <a href="#" class="nav-link">New</a>
                    </li>

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('backend/assets/images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{url('backend/assets/images/flags/germany.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>


                </ul>
            </div>
            <!-- end Topbar --> 
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                    <div class="slimscroll-menu">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
    
                            <ul class="metismenu" id="side-menu">
    
                                <li class="menu-title">Navigation</li>
    
                                <li>
                                    <a href="{{route('dashboard')}}"><i class="mdi mdi-view-dashboard"></i><span class="badge badge-success badge-pill float-right">Admin</span> Dashboard </a></li>

                                    <li>
                                        <a href="{{route('dashboard1')}}"><i class="mdi mdi-view-dashboard"></i>
                                            <span class="badge badge-info badge-pill float-right">Agent</span> Dashboard </a></li>
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect waves-light">
                                        <i class="fa fa-map-marker"></i>
                                        <span> Location </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
    
                                        <li><a href="{{route('countries.index')}}">Country</a></li>
                                        <li><a href="{{route('provinces.index')}}">Province</a></li>
                                        <li><a href="{{route('districts.index')}}">District</a></li>
                                        <li><a href="{{route('municipalities.index')}}">Municipality</a></li>
                                        <li><a href="{{route('wards.index')}}">Ward</a></li>
                                        
                                    </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('propertyType.index')}}"><i class="mdi mdi-diamond-stone"></i> Property type </a></li>

                                        <li>
                                            <a href="{{route('propertyCategories.index')}}" class="waves-effect waves-light">
                                                <i class="fas fa-plus-circle"></i>
                                                <span> Property Category </span>
                                            </a>
                                        </li>
    
                                    <li>
                                        <a href="{{route('saleProperty.index')}}" class="waves-effect waves-light">
                                            <i class="fas fa-hotel"></i>
                                            <span>For Sale </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('rentProperty.index')}}" class="waves-effect waves-light">
                                            <i class="fas fa-synagogue"></i>
                                            <span>For Rent </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('agent')}}" class="waves-effect waves-light">
                                            <i class="fas fa-synagogue"></i>
                                            <span> Agents </span>
                                        </a>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-email"></i>
                                            <span>  Email </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="email-inbox.html"> Inbox</a></li>
                                            <li><a href="email-read.html"> Read Mail</a></li>
                                            <li><a href="email-compose.html"> Compose Mail</a></li>
                                        </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-heart-outline"></i>
                                            <span>  Icons </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="icons-colored.html">Colored Icons</a></li>
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                            <li><a href="icons-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-diamond-stone"></i>
                                            <span class="badge badge-info badge-pill float-right">New</span>
                                            <span>  Forms  </span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="form-elements.html">Form Elements</a></li>
                                            <li><a href="form-advanced.html">Form Advanced</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-format-list-bulleted"></i>
                                            <span> Tables </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-title mt-2">Extra</li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-chart-arc"></i>
                                            <span> Charts </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="chart-flot.html">Flot Charts</a></li>
                                            <li><a href="chart-morris.html">Morris Charts</a></li>
                                            <li><a href="chart-google.html">Google Charts</a></li>
                                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs Charts</a></li>
                                            <li><a href="chart-c3.html">C3 Charts</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline Charts</a></li>
                                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                                        </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-map"></i>
                                            <span> Maps </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="maps-google.html">Google Maps</a></li>
                                            <li><a href="maps-vector.html">Vector Maps</a></li>
                                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                        </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-google-pages"></i>
                                            <span> Pages </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-logout.html">Logout</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                        </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-gift"></i>
                                            <span>  Extras </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="extras-profile.html">Profile</a></li>
                                            <li><a href="extras-sitemap.html">Sitemap</a></li>
                                            <li><a href="extras-about.html">About Us</a></li>
                                            <li><a href="extras-contact.html">Contact</a></li>
                                            <li><a href="extras-members.html">Members</a></li>
                                            <li><a href="extras-timeline.html">Timeline</a></li>
                                            <li><a href="extras-invoice.html">Invoice</a></li>
                                            <li><a href="extras-search-result.html">Search Result</a></li>
                                            <li><a href="extras-emailtemplate.html">Email Template</a></li>
                                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                            <li><a href="extras-faq.html">FAQ</a></li>
                                            <li><a href="extras-gallery.html">Gallery</a></li>
                                            <li><a href="extras-pricing.html">Pricing</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-title mt-2">More</li>

                                    <li>
    
                                    <a href="javascript: void(0);" class="waves-effect waves-light">
                                        <i class="mdi mdi-flip-horizontal"></i>
                                        <span>  Layouts  </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="index-2.html">Horizontal</a></li>
                                        <li><a href="layouts-topbar-light.html">Topbar Light</a></li>
                                        <li><a href="layouts-center-menu.html">Center Menu</a></li>
                                        <li><a href="layouts-normal-header.html">Unsticky Header</a></li>
                                    </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-comment-text-outline"></i>
                                            <span>  Blog  </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="blogs-dashboard.html">Dashboard</a></li>
                                            <li><a href="blogs-blog-list.html">Blog List</a></li>
                                            <li><a href="blogs-blog-column.html">Blog Column</a></li>
                                            <li><a href="blogs-blog-post.html">Blog Post</a></li>
                                            <li><a href="blogs-blog-add.html">Add Blog</a></li>
                                        </ul>
                                    </li>
    
                                    <li>
                                        <a href="javascript: void(0);" class="waves-effect waves-light">
                                            <i class="mdi mdi-home-map-marker"></i>
                                            <span>  Real Estate </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="real-estate-dashboard.html">Dashboard</a></li>
                                            <li><a href="real-estate-list.html">Property List</a></li>
                                            <li><a href="real-estate-column.html">Property Column</a></li>
                                            <li><a href="real-estate-detail.html">Property Detail</a></li>
                                            <li><a href="real-estate-agents.html">Agents</a></li>
                                            <li><a href="real-estate-profile.html">Agent Details</a></li>
                                            <li><a href="real-estate-add.html">Add Property</a></li>
                                        </ul>
                                    </li>
    
                            </ul>
    
                        </div>
                        <!-- End Sidebar -->
    
                        <div class="clearfix"></div>
    
                        <div class="help-box">
                            <h5 class="text-muted mt-0">For Help ?</h5>
                            <p class=""><span class="text-info">Email:</span>
                                <br/> support@support.com</p>
                            <p class="mb-0"><span class="text-info">Call:</span>
                                <br/> (+123) 123 456 789</p>
                        </div>
    
                    </div>
                    <!-- Sidebar -left -->
    
                </div>
                <!-- Left Sidebar End -->


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Agent Table</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Agent Table</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="card-box table-responsive">
                        
                        <br>
                        <hr>

                        <div class="col-lg-12">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Image</th>
                                    <th>Agent Name </th>
                                    <th>Email </th>
                                    <th>Mobile No </th>
                                    <th>Country </th>
                                    <th>Province </th>
                                    <th>District </th>
                                    <th>Municipality </th>
                                    <th>Ward </th>
                                    <th>Action </th>
                                </tr>
                            </thead>

                            <tbody>
                             @foreach ($agents as $agent)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td> 
                                        <img src="/agent_image/{{$agent->image}}"width="80px" height="60px">
                                    </td>
                                    <td>{{$agent->name}}</td>
                                    <td>{{$agent->email}}</td>
                                    <td>{{$agent->mobile}}</td>
                                    <td>{{$agent->AMRelation->DMbelongTo->PDRelation->PCbelongTo->name}}</td>
                                    <td>{{$agent->AMRelation->DMbelongTo->PDRelation->name}}</td>
                                    <td>{{$agent->AMRelation->DMbelongTo->name}}</td>
                                    <td>{{$agent->AMRelation->m_name}}</td>
                                    <td>{{$agent->ward}}</td>
                                    <td>
         <input data-id="{{$agent->id}}" class="toggle-class" type="checkbox" id="switch{{$loop->iteration}}" data-switch="bool" {{ $agent->status ? 'checked' : '' }}/>
         <label  class="toggle-class" for="switch{{$loop->iteration}}" data-on-label="✔" data-off-label="X" ></label>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

    <script>
        $(function() {
          $('.toggle-class').change(function() {
              var id = $(this).data('id'); 
               
              $.ajax({
                  type: "POST",
                  dataType: "json",
                  url: '{{route('agentUpdate')}}',
                  data: {'status': status, 'id': id},
                  success: function(data){
                    console.log(data.success)
                  }
              });
          })
        })
      </script>
      
@include('layouts.footer')