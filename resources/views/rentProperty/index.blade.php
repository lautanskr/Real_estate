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
                                <li class="breadcrumb-item active">Rent Property Table</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Rent Property Table</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="card-box table-responsive">
                        <h4 class="header-title">
                            <a href="{{ route('rentProperty.create') }}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New Rent Property</button></a>
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
                                    <th>Image </th>
                                    <th>Property type </th>
                                    <th>Property category </th>
                                    <th>Price </th>
                                    <th>Description </th>
                                    <th>Country </th>
                                    <th>Province </th>
                                    <th>District </th>
                                    <th>Municipality </th>
                                    <th>Ward </th>
                                    <th>Street </th>
                                    <th>Near By </th>
                                    <th width="80px">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                             @foreach ($rents as $rent)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                            <td> 
                                                @php
                                    $image=explode(',', $rent->image);
                                          @endphp
                                                <img src="/rent_pro_image/{{$rent->image}}"width="80px" height="60px">
                                            </td>
                                    <td>{{$rent->RPRelation->PCRelation->name}}</td>
                                    <td>{{$rent->RPRelation->name}}</td>
                                    <td>{{$rent->price}}</td>
                                    <td>{{$rent->description}}</td>
                                    <td>{{$rent->MRRelation->DMbelongTo->PDRelation->PCbelongTo->name}}</td>
                                    <td>{{$rent->MRRelation->DMbelongTo->PDRelation->name}}</td>
                                    <td>{{$rent->MRRelation->DMbelongTo->name}}</td>
                                    <td>{{$rent->MRRelation->m_name}}</td>
                                    <td>{{$rent->ward}}</td>
                                    <td>{{$rent->street}}</td>
                                    <td>{{$rent->near_by}}</td>
                                    <td>
                                        <form action="{{ route('rentProperty.destroy',$rent->id) }}" method="POST">
                                            <a class="btn btn-success btn-sm" href="{{ route('rentProperty.show',$rent->id) }}"><i class="ion ion-md-eye"></i></a>
                 
                                            <a class="btn btn-primary btn-sm" href="{{ route('rentProperty.edit',$rent->id) }}"><i class="ion ion-md-create"></i></a>
                           
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