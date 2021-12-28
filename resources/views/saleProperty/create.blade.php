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
                                <li class="breadcrumb-item active">Sale Property</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Sale Property</h4>
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
                                    <form action="{{route('propertyCategories.store')}}" method="POST" data-parsley-validate novalidate >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="property">Property Type<span class="text-danger">*</span></label>
                                            <select  parsley-trigger="change" id="property"  class="form-control" required>
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
                                            <select name="pro_type_id" parsley-trigger="change" required class="form-control" id="category">
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="province">Price<span class="text-danger">*</span></label>
                                                <input type="number" name="price" parsley-trigger="change" required class="form-control" id="district">
                                            </div>
                                        </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="province">Description<span class="text-danger">*</span></label>
                                        <textarea type="text" name="description" rows="5" parsley-trigger="change" required class="form-control" id="municipality"></textarea>
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
        $('#property').change(function() {

var propertyID = $(this).val();

if (propertyID) {

    $.ajax({
        type: "GET",
        url: "{{ url('getProperty') }}?pro_type_id=" + propertyID,
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