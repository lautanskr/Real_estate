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
                                <li class="breadcrumb-item active">Country Table</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Country Table</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="card-box table-responsive">
                        <h4 class="header-title">
                            <a href="{{ route('countries.create') }}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New Country</button></a>
                        </h4>
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
                                    <th>Country Name</th>
                                    <th>Country Sortname</th>
                                    <th>Phone Code</th>
                                    <th width="80px">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                             @foreach ($countries as $country)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$country->name}}</td>
                                    <td>{{$country->sortname}}</td>
                                    <td>{{$country->phonecode}}</td>
                                    <td>
                                        <form action="{{ route('countries.destroy',$country->id) }}" method="POST">
                 
                                            <a class="btn btn-primary btn-sm" href="{{ route('countries.edit',$country->id) }}"><i class="ion ion-md-create"></i></a>
                           
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="ion ion-md-trash"></i></button>
                                        </form>
                                    </td>
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

    @include('layouts.footer')