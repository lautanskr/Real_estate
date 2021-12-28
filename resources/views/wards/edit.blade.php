@include('layouts.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Ward Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Ward</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row ml-5">
                            <a href="{{ url()->previous()}}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;"> Back </button></a>
                            <div class="col-lg-10">
                                <div class="p-4">
                                    <div class="container-fluid">
                                        <div class="col-lg-12">
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                    <form action="{{route('wards.update', $ward->id)}}" method="POST" data-parsley-validate novalidate >
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Counrty<span class="text-danger">*</span></label>
                                            <select type="text" name="name" parsley-trigger="change" required class="form-control" id="country">
                                                <option value="">Choose Country</option>
                                                @foreach ($country as  $con)
                                                @if($ward->MWbelongTo->DMbelongTo->PDRelation->PCbelongTo->id==$con->id)
                                                <option value="{{$con->id}}" selected>{{$con->name}}</option>
                                            @else
                                                <option value="{{$con->id}}">{{$con->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress">Province <span class="text-danger">*</span></label>
                                            <select  name="province_id" parsley-trigger="change" required  class="form-control" id="province">
                                                @foreach ($province as  $pro)
                                                @if($ward->MWbelongTo->DMbelongTo->PDRelation->id==$pro->id)
                                                <option value="{{$pro->id}}" selected>{{$pro->name}}</option>
                                                @else
                                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="district">District <span class="text-danger">*</span></label>
                                            <select id="district"  name="district_id" required class="form-control">
                                                @foreach ($district as  $dis)
                                                @if($ward->MWbelongTo->DMbelongTo->id==$dis->id)
                                                <option value="{{$dis->id}}" selected>{{$dis->name}}</option>
                                                @else
                                                <option value="{{$dis->id}}">{{$dis->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="district">Municipality <span class="text-danger">*</span></label>
                                            <select id="municipality"   name="mun_id" required class="form-control">
                                                @foreach($municipality as $mun)
                                              @if($ward->MWbelongTo->id==$mun->id)
                                            <option value="{{$mun->id}}" selected>{{$ward->MWbelongTo->m_name}}</option>
                                            @else
                                            <option value="{{$mun->id}}">{{$mun->m_name}}</option>
                                            @endif


                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="province">Ward No<span class="text-danger">*</span></label>
                                                <select name="ward_no" parsley-trigger="change" required class="form-control" id="ward">
                                                    <option value="">{{$ward->ward_no}}</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="08">09</option>
                                                    <option value="01">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect ml-1">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            </div>
                        </div>
                        <!-- end row -->

                       
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->

    </div>
    
    <!-- end content -->

    <script>
        // when country dropdown changes
        $('#country').change(function() {
 
 var countryID = $(this).val();
 
 if (countryID) {
 
     $.ajax({
         type: "GET",
         url: "{{ url('getProvince') }}?country_id=" + countryID,
         success: function(res) {
 
             if (res) {
 
                 $("#province").empty();
                 $("#province").append('<option>Select Province</option>');
                 $.each(res, function(key, value) {
                     $("#province").append('<option value="' + key + '">' + value +
                         '</option>');
                 });
 
             } else {
 
                 $("#province").empty();
             }
         }
     });
 } else {
 
     $("#province").empty();
     $("#district").empty();
     $("#municipality").empty();
 }
 });
 
 // when province dropdown changes
 $('#province').on('change', function() {
 
 var provinceID = $(this).val();
 
 if (provinceID) {
 
     $.ajax({
         type: "GET",
         url: "{{ url('getDistrict') }}?province_id=" + provinceID,
         success: function(res) {
 
             if (res) {
                 $("#district").empty();
                 $("#district").append('<option>Select District</option>');
                 $.each(res, function(key, value) {
                     $("#district").append('<option value="' + key + '">' + value +
                         '</option>');
                 });
 
             } else {
 
                 $("#district").empty();
             }
         }
     });
 } else {
 
     $("#district").empty();
 }
 });
 
 // when district dropdown changes
 $('#district').on('change', function() {
 
 var districtID = $(this).val();
 
 if (districtID) {
 
     $.ajax({
         type: "GET",
         url: "{{ url('getMunicipality') }}?district_id=" + districtID,
         success: function(res) {
 
             if (res) {
                 $("#municipality").empty();
                 $("#municipality").append('<option>Select Municipality</option>');
                 $.each(res, function(key, value) {
                     $("#municipality").append('<option value="' + key + '">' + value +
                         '</option>');
                 });
 
             } else {
 
                 $("#municipality").empty();
             }
         }
     });
 } else {
 
     $("#municipality").empty();
 }
 });
 
     </script>

    @include('layouts.footer')