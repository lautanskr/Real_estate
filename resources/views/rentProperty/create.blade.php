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
                                <li class="breadcrumb-item active">Rent Property</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Rent Property</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row ml-5">
                            <a href="{{ url()->previous()}}"><button class="btn btn-primary btn-xs" style="float:left; font-size:16px;"> Back </button></a>
                            <h3 class="mt-1 ml-2">Rent Property Details</h3>
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
                                    <form action="{{route('rentProperty.store')}}" method="POST" data-parsley-validate novalidate enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="property">Property Type<span class="text-danger">*</span></label>
                                            <select  parsley-trigger="change" id="property" name="Pro_type_id"  class="form-control" required>
                                                <option value="">Choose Property Type</option>
                                                @foreach ($propertyType as  $pro)
                                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="province">Property Category<span class="text-danger">*</span></label>
                                            <select name="pro_cat_id" parsley-trigger="change" required class="form-control" id="category">
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="province">Price<span class="text-danger">*</span></label>
                                                <input type="number" name="price" parsley-trigger="change" required class="form-control" placeholder="Enter Price">
                                            </div>
                                        </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="province">Description<span class="text-danger">*</span></label>
                                        <textarea type="text" name="description" rows="5" parsley-trigger="change" required class="form-control" id="description" placeholder="Write Description About your Property..."></textarea>
                                    </div>
                                    </div>
                                </div>
                                <div class="list_wrapper">  
                                    <div class="row">
    
                                        <div class="col-xs-6 col-sm-12 col-md-6">
    
                                            <div class="form-group ">
                                                Image:
                                                <input  name="image[]" type="file" class="form-control" required="required"/> 
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
                                        <option value="{{$con->id}}">{{$con->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="province">Province<span class="text-danger">*</span></label>
                                    <select name="province" parsley-trigger="change" required class="form-control" id="province">
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="province">District<span class="text-danger">*</span></label>
                                        <select name="district" parsley-trigger="change" required class="form-control" id="district">
                                        </select>
                                    </div>
                                </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="province">Municipality<span class="text-danger">*</span></label>
                                <select name="mun_id" parsley-trigger="change" required class="form-control" id="municipality">
                                </select>
                                
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="province">Ward No<span class="text-danger">*</span></label>
                                <select name="ward" parsley-trigger="change" required class="form-control" id="ward">
                                    <option value="">Select Ward No</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="08">09</option>
                                    <option value="10">10</option>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="province">Street<span class="text-danger">*</span></label>
                                <input type="text" name="street" parsley-trigger="change" required class="form-control" id="street">   
                            </div>
                        </div>
                    </div>  
                    
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="province">Near By<span class="text-danger">*</span></label>
                            <input type="text" name="near_by" parsley-trigger="change" required class="form-control" id="near_by">    
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