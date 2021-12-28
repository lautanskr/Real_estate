<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

{{-- 
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/zircos/layouts/horizontal/page-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 07:43:48 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Recover Password | RealEstate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backendassets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('backendassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('backendassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backendassets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="text-center account-logo-box">
                                <div class="mt-2 mb-2">
                                    <a href="index-2.html" class="text-success">
                                        <span><img src="{{asset('backend/assets/images/logo.png')}}" alt="" height="36"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="text-center mb-4">
                                    <p class="text-muted mb-0">Enter your email address and we'll send you an email with instructions to reset your password. </p>
                                </div>

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                 <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                            <input class="form-control" type="email" required="" name="email" placeholder="Enter email">
                                        </div>
                                    </div>

                                    <div class="form-group account-btn text-center mt-2 row">
                                        <div class="col-12">
                                            <button class="btn width-md btn-bordered btn-danger waves-effect waves-light" type="submit">Send Email
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-5">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Already have account?<a href="page-login.html" class="text-primary ml-1"><b>Sign In</b></a></p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <!-- Vendor js -->
        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

    </body>


</html> --}}