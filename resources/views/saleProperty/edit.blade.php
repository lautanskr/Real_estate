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
                                <li class="breadcrumb-item active">Sale Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sale Edit</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row ml-5">
                            <a href="{{ url()->previous()}}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;"> Back </button></a>
                            <h3 class="mt-1 ml-2">Sale Property Details</h3>
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
                                    <form action="{{route('saleProperty.update', $saleProperty->id)}}" method="POST" data-parsley-validate novalidate enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="property">Property Type<span class="text-danger">*</span></label>
                                            <select  parsley-trigger="change" id="property" name="Pro_type_id"  class="form-control" required>
                                                @foreach($propertyType as $pro)
                                                @if($pro->id==$saleProperty->SPRelation->PCRelation->id)
                                                    <option value="{{$pro->id}}" selected>{{$saleProperty->SPRelation->PCRelation->name}}</option>
                                                    @else
                                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                                    @endif
                                                        @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="province">Property Category<span class="text-danger">*</span></label>
                                            <select name="pro_cat_id" parsley-trigger="change" required class="form-control" id="category">
                                                @foreach($propertyCategory as $cat)
                                                @if($cat->id==$saleProperty->SPRelation->id)
                                                    <option value="{{$cat->id}}" selected>{{$saleProperty->SPRelation->name}}</option>
                                                    @else
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endif
                                                        @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="province">Price<span class="text-danger">*</span></label>
                                                <input type="number" name="price" parsley-trigger="change" required class="form-control" value="{{$saleProperty->price}}">
                                            </div>
                                        </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="description">Description<span class="text-danger">*</span></label>
                                        <textarea type="text" name="description" rows="5" parsley-trigger="change" required class="form-control" id="description">
                                            {{$saleProperty->description}}
                                        </textarea>
                                    </div>
                                    </div>
                                </div>
                                <div class="list_wrapper">  
                                  
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-12 col-md-6">
                                            <div class="form-group ">
                                                Image:
                                                <input  name="image[]" type="file" class="form-control"/> 
                                            </div>
                                        </div> 
								<div class="col-xs-4 col-sm-4 col-md-4">
									<br>
									<button class="btn btn-primary list_add_button" type="button">Add More</button>
								</div>
							</div>     
                                </div>

                                <h3>Location Details</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country<span class="text-danger">*</span></label>
                                    <select name="country"  parsley-trigger="change" id="country"  class="form-control" required>
                                        <option value="">Choose Country</option>
                                                @foreach ($country as  $con)
                                                @if($saleProperty->MPRelation->DMbelongTo->PDRelation->PCbelongTo->id==$con->id)
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
                                    <label for="province">Province<span class="text-danger">*</span></label>
                                    <select name="province" parsley-trigger="change" required class="form-control" id="province">
                                        @foreach ($province as  $pro)
                                        @if($saleProperty->MPRelation->DMbelongTo->PDRelation->id==$pro->id)
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
                                        <label for="province">District<span class="text-danger">*</span></label>
                                        <select name="district" parsley-trigger="change" required class="form-control" id="district">
                                            @foreach ($district as  $dis)
                                            @if($saleProperty->MPRelation->DMbelongTo->id==$dis->id)
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
                                <label for="province">Municipality<span class="text-danger">*</span></label>
                                <select name="mun_id" parsley-trigger="change" required class="form-control" id="municipality">
                                     @foreach($municipality as $mun)
                                              @if($saleProperty->MPRelation->id==$mun->id)
                                            <option value="{{$mun->id}}" selected>{{$saleProperty->MPRelation->m_name}}</option>
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
                                <input name="ward" type="number" parsley-trigger="change" required class="form-control" id="ward" value="{{$saleProperty->ward}}">
                                    
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="province">Street<span class="text-danger">*</span></label>
                                <input type="text" name="street" parsley-trigger="change" required class="form-control" id="street" value="{{$saleProperty->street}}">   
                            </div>
                        </div>
                    </div>  
                    
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="province">Near By<span class="text-danger">*</span></label>
                            <input type="text" name="near_by" parsley-trigger="change" required class="form-control" id="near_by" value="{{$saleProperty->near_by}}">    
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
         url: "{{ url('getPro') }}?country_id=" + countryID,
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
         url: "{{ url('getDis') }}?province_id=" + provinceID,
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
     $("#municipality").empty();
    }
    });
    
    // when district dropdown changes
    $('#district').on('change', function() {
    
    var districtID = $(this).val();
    
    if (districtID) {
    
     $.ajax({
         type: "GET",
         url: "{{ url('getMun') }}?district_id=" + districtID,
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


    // when property dropdown changes
    $('#property').change(function() {

var propertyID = $(this).val();

if (propertyID) {

    $.ajax({
        type: "GET",
        url: "{{ url('getProp') }}?pro_type_id=" + propertyID,
        success: function(res) {

            if (res) {

                $("#category").empty();
                $("#category").append('<option>Select Property Category</option>');
                $.each(res, function(key, value) {
                    $("#category").append('<option value="' + key + '">' + value +
                        '</option>');
                });

            } else {

                $("#category").empty();
            }
        }
    });
} 
});
      
    </script>

  
  <script>

    $(document).ready(function()
    
    {
    var x = 0; //Initial field counter
    var list_maxField = 2; //Input fields increment limitation
    
    //Once add button is clicked
    $('.list_add_button').click(function()
    {
    //Check maximum number of input fields
    if(x < list_maxField){ 
    x++; //Increment field counter
    var list_fieldHTML = '<div class="row"><div class="col-xs-6 col-sm-12 col-md-6"><div class="form-group"><input name="image[]" type="file" class="form-control" required="required"/></div></div><div class="col-xs-4 col-sm-4 col-md-4"><a href="javascript:void(0);" class="list_remove_button btn btn-danger">Remove</a></div></div>'; //New input field html 
    $('.list_wrapper').append(list_fieldHTML); //Add field html
    }
    });
    
    //Once remove button is clicked
    $('.list_wrapper').on('click', '.list_remove_button', function()
    {
    $(this).closest('div.row').remove(); //Remove field html
    x--; //Decrement field counter
    });
    });
    </script>



    @include('layouts.footer')