@include('layouts.header')
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard </a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-xl-4 col-md-6 text-center ml-5">
                                <div class="card widget-box-one border border-primary bg-soft-primary ">
                                    <div class="card-body">
                                        <div class="float-right avatar-lg rounded-circle mt-3">
                                            <i class="mdi mdi-layers font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                                        </div>
                                        <div class="wigdet-one-content">
                                            <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">Total Sale Property</p>
                                            <h2><span data-plugin="counterup">34578</span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                            <p class="text-muted m-0"><span class="font-weight-medium">Last:</span> 30.4k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-4 col-md-6 text-center ml-5">
                                <div class="card widget-box-one border border-warning bg-soft-warning">
                                    <div class="card-body">
                                        <div class="float-right avatar-lg rounded-circle mt-3">
                                            <i class="fas fa-home font-30 widget-icon rounded-circle avatar-title text-danger"></i>
                                        </div>
                                        <div class="wigdet-one-content">
                                            <p class="m-0 text-uppercase font-weight-bold text-muted" title="User This Month">Total Rent Property</p>
                                            <h2><span data-plugin="counterup">5667 </span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                            <p class="text-muted m-0"><span class="font-weight-medium">Last:</span> 40.33k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                        </div>   
                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->
    @include('layouts.footer')   