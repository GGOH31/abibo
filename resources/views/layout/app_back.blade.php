<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/datatable/basic/base.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Feb 2021 12:33:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
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

<body class="theme-light preload-active aside-active aside-mobile-minimized aside-desktop-maximized" id="fullscreen">
    <div class="preload">
        <div class="preload-dialog">
            <div class="spinner-border text-primary preload-spinner"></div>
        </div>
    </div>
    <div class="holder">
        @include("layout.side_bare")
        <div class="wrapper">
          @include("layout.header_back")
          @yield('container')
           
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-left mb-0">Copyright <i class="far fa-copyright"></i> <span id="copyright-year"></span> Panely. All rights reserved</p>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <p class="text-right mb-0">Hand-crafted and made with <i class="fa fa-heart text-danger"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="float-btn float-btn-right"><button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme"><i class="fa fa-moon"></i></button> <button class="btn btn-flat-primary btn-icon" data-toggle="sidemenu" data-target="#sidemenu-dashboard"><i class="fa fa-paper-plane"></i></button></div> --}}
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/mandatory.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/build/scripts/dashboard1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/back/assets/app/dashboard1/datatable/basic/base.js') }}"></script>
</body>
<!-- Mirrored from panely-html.blueupcodes.com/dashboard1/ltr/datatable/basic/base.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Feb 2021 12:33:16 GMT -->

</html>