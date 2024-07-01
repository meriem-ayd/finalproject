<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MediCare</title>
    <link rel="shortcut icon" href="/images/logooooo.ico">

    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/demo_1/style.css">
    <!-- End layout styles -->
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="row">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
                    <div class="row w-100">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-dark text-left p-5">
                                <img src="/images/logooooo.png" alt="" width="90px" style="margin-left: 35%;">
                                <h2 class="mt-3" style="margin-left: 20%">Authentification</h2>
                                @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <form class="pt-4" action="{{ route('postAdminAuth') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email" style="border-radius: 10px;">
                                        <i class="mdi mdi-account"></i>
                                        @if ($errors->has('email'))
                                        <small class="text text-danger">
                                            {{ $errors->first('email') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" style="border-radius: 10px;">
                                        <i class="mdi mdi-eye"></i>
                                        @if ($errors->has('password'))
                                        <small class="text text-danger">
                                            {{ $errors->first('password') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="mt-5 text-center">
                                        <button type="submit" class="btn btn-block btn-secondary btn-lg font-weight-medium btn-custom " style="background-color: #D3D3D380;border-color: transparent;border-radius: 8px;color: black;">Se
                                            Connecter</button>
                                    </div>
                                    {{--
                                    <div class="mt-3 text-center">
                                        <a href="#" class="auth-link text-white">Forgot password?</a>
                                    </div>
                                    --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
