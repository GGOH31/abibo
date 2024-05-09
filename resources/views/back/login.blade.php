<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/pages/login/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Feb 2021 12:33:35 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-176728070-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-176728070-2');
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('/back/assets/build/styles/ltr-core.css') }}" rel="stylesheet">
    <link href="{{ asset('/back/assets/build/styles/ltr-vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('/back/assets/build/styles/ltr-dashboard1.css') }}" rel="stylesheet">
    <link href="https://panely-html.blueupcodes.com/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title>Admin</title>
</head>

<body class="theme-light preload-active" id="fullscreen">
    <div class="preload">
        <div class="preload-dialog">
            <div class="spinner-border text-primary preload-spinner"></div>
        </div>
    </div>
    <div class="holder">
        <div class="wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row no-gutters align-items-center justify-content-center h-100">
                        <div class="col-sm-8 col-md-6 col-lg-4">
                            <div class="portlet">
                                <div class="portlet-body">
                                    <div class="text-center mb-4">
                                        <div class="avatar avatar-label-primary avatar-circle widget12">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </div>
                                    <form id="login-form" method="post" action="{{ url('/login') }}">
                                        <div class="form-group">
                                            <div class="float-label float-label-lg"><input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Please insert your email"> <label for="email">Email</label></div>
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <div class="float-label float-label-lg"><input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Please insert your password"> <label for="password">Password</label></div>
                                        </div>
                                        {{-- <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="form-group mb-0">
                                                <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="remember" name="remember"> <label class="custom-control-label" for="remember">Remember me</label></div>
                                            </div><a href="#">Forgot password?</a></div> --}}
                                        <div class="d-flex align-items-center justify-content-between"><span>Don't have an account ? <a href="../register/register-1.html">Sign Up</a> </span><button type="submit" class="btn btn-label-primary btn-lg btn-widest">Login</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="float-btn float-btn-right"><button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme"><i class="fa fa-moon"></i></button> <button class="btn btn-flat-primary btn-icon" data-toggle="sidemenu" data-target="#sidemenu-dashboard"><i class="fa fa-paper-plane"></i></button></div>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/mandatory.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/dashboard1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/app/dashboard1/pages/login.js') }}"></script>
</body>
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/pages/login/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Feb 2021 12:33:35 GMT -->

</html>