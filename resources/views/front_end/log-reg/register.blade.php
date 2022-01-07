<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Real | Estate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->

        <!-- App css -->
        <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body data-layout="horizontal">
        <!-- Begin page -->
    
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    
                    <h4 class="page-title text-center">Create Agent Account</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-lg-12">  

                        <div class="p-5">
                            <form action="{{route('RegisterAgent')}}" method="post" data-parsley-validate novalidate enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="userName">Full Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                                </div>
                                </div>
                                <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                                </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" name="password"placeholder="Password" required class="form-control">
                                </div>
                                </div>
                                <div class="col-lg-6"> 
                                <div class="form-group">
                                    <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#pass1"  type="password" required placeholder="Password" class="form-control" id="passWord2">
                                </div>
                                </div>
                             </div>

                             <div class="row">
                                <div class="col-lg-6">  
                                <div class="form-group">
                                    <label for="pass1">Mobile No<span class="text-danger">*</span></label>
                                    <input id="pass1" type="text" name="mobile" placeholder="Mobile No" required class="form-control">
                                </div>
                                </div>
                             </div>
                             <div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country<span class="text-danger">*</span></label>
                                            <select  parsley-trigger="change" name="country" id="country"  class="form-control" required>
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
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userName">Image<span class="text-danger">*</span></label>
                                    <input type="file" parsley-trigger="change" required name="image" class="form-control">
                                </div>
                            </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-purple">
                                        <input id="remember-1" type="checkbox">
                                        <label for="remember-1"> Remember me </label>
                                    </div>
                                    
                                </div>
                                <p class="text-muted">Already have account?<a href="{{ route('LoginAgent') }}" class="text-primary ml-1"><b>Sign In</b></a></p>
                                <div class="form-group text-center mb-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Register
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect ml-1">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>

                    
                    </div>
                </div>
                <!-- end row -->

                
                
            </div>
            <!-- end card-box -->
        </div>
        <!-- end col-->

    </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2018 - 2020 &copy; Zircos theme by <a href="#">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
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

        <!-- Vendor js -->
        <script src="backend/assets/js/vendor.min.js"></script>

        <!-- Plugin js-->
        <script src="backend/assets/libs/parsleyjs/parsley.min.js"></script>

        <!-- Validation init js-->
        <script src="backend/assets/js/pages/form-validation.init.js"></script>

        <!-- App js -->
        <script src="backend/assets/js/app.min.js"></script>    

    </body>
</html> 
