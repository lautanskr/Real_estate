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
                            <a href="{{ route('saleProperty.create') }}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New Property</button></a>
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
                             @foreach ($sales as $sale)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                            <td> 
                                                @php
                                    $image=explode(',', $sale->image);
                                          @endphp
                                                <img src="/sale_pro_image/{{$sale->image}}"width="80px" height="60px">
                                            </td>
                                    <td>{{$sale->SPRelation->PCRelation->name}}</td>
                                    <td>{{$sale->SPRelation->name}}</td>
                                    <td>{{$sale->price}}</td>
                                    <td>{{$sale->description}}</td>
                                    <td>{{$sale->MPRelation->DMbelongTo->PDRelation->PCbelongTo->name}}</td>
                                    <td>{{$sale->MPRelation->DMbelongTo->PDRelation->name}}</td>
                                    <td>{{$sale->MPRelation->DMbelongTo->name}}</td>
                                    <td>{{$sale->MPRelation->m_name}}</td>
                                    <td>{{$sale->ward}}</td>
                                    <td>{{$sale->street}}</td>
                                    <td>{{$sale->near_by}}</td>
                                    <td>
                                        <form action="{{ route('saleProperty.destroy',$sale->id) }}" method="POST">
                                            <a class="btn btn-success btn-sm" href="{{ route('saleProperty.show',$sale->id) }}"><i class="ion ion-md-eye"></i></a>
                 
                                            <a class="btn btn-primary btn-sm" href="{{ route('saleProperty.edit',$sale->id) }}"><i class="ion ion-md-create"></i></a>
                           
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