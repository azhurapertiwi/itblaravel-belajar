<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Nexa :: Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-orange">
    <div class="authentication">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header slideDown">
                            <div class="logo"><img src="assets/images/logo.png" alt="Nexa"></div>
                            <h1>Nexa Admin</h1>
                            <ul class="list-unstyled l-social">
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <form class="col-lg-12" id="sign_in" method="POST" action="/proses_login">
                        @csrf
                        <h5 class="title">Sign in to your Account</h5>
                        @if (session('gagal'))
                            <p class="text-danger text-center">{{ session('gagal') }}</p>
                        @endif
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="email">
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button href="submit" class="btn btn-raised btn-primary waves-effect">SIGN IN</button>
                            <a href="sign-up.html" class="btn btn-raised btn-default waves-effect">SIGN UP</a>
                        </div>
                    </form>
                    <div class="col-lg-12 m-t-20">
                        <a class="" href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>
