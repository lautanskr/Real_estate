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
                                <li class="breadcrumb-item active">Municipality Form</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Municipality</h4>
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
                                    <form action="{{route('municipalities.store')}}" method="POST" data-parsley-validate novalidate >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country<span class="text-danger">*</span></label>
                                            <select  parsley-trigger="change" id="country"  class="form-control" required>
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
                                            <select name="" parsley-trigger="change" required class="form-control" id="province">
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="province">District<span class="text-danger">*</span></label>
                                                <select name="district_id" parsley-trigger="change" required class="form-control" id="district">
                                                </select>
                                            </div>
                                        </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="province">Municipality<span class="text-danger">*</span></label>
                                        <input type="text" name="m_name" parsley-trigger="change" required class="form-control" id="municipality">
                                        
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

    </script>
  
    @include('layouts.footer')