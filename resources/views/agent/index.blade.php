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
                            </ul>
    
                        </div>
                        <!-- End Sidebar -->
    
                        <div class="clearfix"></div>
    
                        
    
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
         <input data-id="{{$agent->id}}" class="toggle-class status" type="checkbox" id="switch{{$loop->iteration}}" data-switch="bool" {{ $agent->status ? 'checked' : '' }} onclick="Status({{$agent->id}})" />
         <label  for="switch{{$loop->iteration}}" data-on-label="✔" data-off-label="X" ></label>
         <div id="status{{$agent->id}}">
             @if( $agent->status==1)
             <p class="text-success" >Active</p>
             @else
              <p class="text-danger">Inactive</p>
             @endif
         </div>

   

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
       function Status(id)
       {
           $.ajax({
                  type: "POST",
                  dataType: "json",
                  url: '{{route('agentUpdate')}}',
                  data: {'status':true, 'id': id,'_token':'<?php echo csrf_token() ?>',},
                  success: function(data){
                    $('#status'+id).empty();
                    if(data.status==0)
                    {
                     var success='<p class="text-success" >Active</p>';
                    $('#status'+id).html(success);
                    }
                    else
                    {
                var status='<p class="text-danger">Inactive</p>';
                     $('#status'+id).html(status);
                    }
                  }
              });
       }
    
        
      </script>
      
@include('layouts.footer')