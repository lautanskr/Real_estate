@include('layouts.header')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Sale Property Table</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sale Property Table</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="card-box table-responsive">
                        <h4 class="header-title">
                            <a href="{{ url()->previous() }}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;">Back</button></a>
                        </h4>
                        <br>
                        <hr>

                        <div class="right_col" role="main">
                            <div class="">
                              
                        
                              <div class="clearfix"></div>
                        
                        
                        <div class="">
                        <div class="col-md-10 col-sm-10  profile_details">
                            
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Image :</strong>
                                            
                                        </div>
                                        <img src="/sale_pro_image/{{ $saleProperty->image }}" width="300px">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Property Type:</strong>
                                            {{ $saleProperty->SPRelation->PCRelation->name }}
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Property Category:</strong>
                                            {{ $saleProperty->SPRelation->name}}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Price:</strong>
                                            {{ $saleProperty->price }}
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Description :</strong>
                                            
                                            {{ $saleProperty->description}} 
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Country :</strong>
                                    
                                    {{ $saleProperty->MPRelation->DMbelongTo->PDRelation->PCbelongTo->name}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Province :</strong>
                            
                            {{ $saleProperty->MPRelation->DMbelongTo->PDRelation->name}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>District :</strong>
                            
                            {{ $saleProperty->MPRelation->DMbelongTo->name}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Municipality :</strong>
                            
                            {{ $saleProperty->MPRelation->m_name}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Ward :</strong>
                            
                            {{ $saleProperty->ward}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Street :</strong>
                            
                            {{ $saleProperty->street}} 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Near By :</strong>
                            
                            {{ $saleProperty->near_by}} 
                        </div>
                    </div>
                          </div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

    @include('layouts.footer')