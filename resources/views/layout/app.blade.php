<!DOCTYPE html>
<html lang="en-US">
<head>

<!-- Basic Page Head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Grandium - Responsive Hotel Template</title>
<meta name="description" content="Responsive Hotel Template">
<meta name="author" content="Loco Theme - locotheme.com">
<meta name="keywords" content="hotel, hostel, motel, guesthouse, booking, accommodation, inn, spa, resort, travel, holiday, tourism, vacation, bootstrap, responsive">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/img/apple-touch-icon-76x76.png") }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset("assets/img/apple-touch-icon-120x120.png") }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset("assets/img/apple-touch-icon-152x152.png") }}">
<link rel="apple-touch-icon" sizes="167x167" href="{{ asset("assets/img/apple-touch-icon-167x167.png") }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/img/apple-touch-icon-180x180.png") }}">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Css -->
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.min.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/font.awesome.min.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/magnific.popup.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/owl.carousel.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/owl.theme.default.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/jquery-ui.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}">

<!-- Google Fonts -->
<link href="../css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">    
<link href="../css-1?family=Lato:300,400,700,900&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

{{-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66631247-10', 'auto');
  ga('send', 'pageview');

</script>     --}}
    
</head>
<body>
  <div class="site-loading">
    <img src="{{ asset("/assets/img/loading.gif") }}" alt="Loading">
  </div>
  

    <div class="site-header">
        <!-- Header Top -->
          <div class="header-top">
            <div class="wrapper">
                {{-- <div class="header-contact">
                    <ul>
                        <li>+1-800-123-45-67</li>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="header-lang">
                    <ul>
                        <li class="active"><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                        <li><a href="#">DE</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <!-- Header Top End -->
        <!-- Header Bottom -->
        <div class="header-bottom">
            <div class="wrapper">
                <div class="header-logo">
                    <a href="{{ "/" }}"><img src="{{ asset('/images/logo.png') }}" alt="The Grandium Hotel"></a>
                </div>
                <div class="header-nav">
                    <ul class="nav-left">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ url('/#about') }}">Apropos</a></li>
                        <li><a href="{{ url('/#galerie') }}">galeries</a></li>
                        {{-- <li class="sub"><a href="rooms.html">ROOMS</a>
                            <ul>
                                <li><a href="rooms.html">ROOMS LISTING</a></li>
                                <li><a href="rooms-detail.html">ROOMS DETAIL</a></li>
                            </ul>
                        </li> --}}
                    
                    </ul>
                    <ul class="nav-right">
                      <li><a href="{{ url('/#even') }}">Evenements</a></li>
                      {{-- <li><a href="{{ url('/#galerie') }}">galeries</a></li> --}}
                        <li><a href="{{ url('/chambre') }}">Chambres</a></li>
                        {{-- <li><a href="booking.html">FAQ</a></li> --}}
                        {{-- <li class="sub"><a href="blog.html">BLOG</a>
                            <ul>
                                <li><a href="blog.html">BLOG LISTING</a></li>
                                <li><a href="blog-single.html">BLOG SINGLE PHOTO</a></li>
                                <li><a href="blog-single-gallery.html">BLOG SINGLE GALLERY</a></li>
                                <li><a href="blog-single-vimeo.html">BLOG SINGLE VIMEO</a></li>
                                <li><a href="blog-single-youtube.html">BLOG SINGLE YOUTUBE</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="contactus.html">CONTACT</a></li> --}}
                    </ul>
                </div>
                <div class="header-toggle">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
          <!-- Header Bottom End -->
    </div>

    @yield('container') 




    <div class="site-footer">
      <!-- Footer Top -->
      <div class="footer-top">
          <div class="wrapper">
              <div class="row">
                  <div class="col-lg-6">
                      <h5>SOCIAL MEDIA</h5>
                      <h6>FOLLOW THE GRADIUM</h6>
                      <div class="widget-social-icons">
                          <ul>
                              <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <h5>NEWSLETTER</h5>
                      <h6>WE LOVE TO SHARE NEW OFFERS AND EXLUSIVE PROMOTIONS</h6>
                      <div class="widget-newsletter">
                          <form>
                              <input type="text" placeholder="ENTER YOUR E-MAIL ADDRESS" required="">
                              <button type="submit"><i class="fa fa-paper-plane"></i></button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer Top End -->
      <!-- Footer Bottom -->
      <div class="footer-bottom">
          <div class="wrapper">
              <div class="footer-logo">
                  <img src="assets/img/logo.png" alt="The Grandium Hotel">
              </div>
              <div class="footer-copyright">
                  <p>COPYRIGHT © THE GRANDIUM HOTEL</p>
              </div>
              <div class="footer-contact">
                  <ul>
                      <li><i class="fa fa-map-marker"></i> LONGRIDGE ROAD, EARLS COURT, LONDON</li>
                      <li><i class="fa fa-phone"></i> +1-800-123-45-67</li>
                      <li><a href="mailto:info@thegrandiumhotel.com"><i class="fa fa-paper-plane"></i> INFO@THEGRANDIUMHOTEL.COM</a></li>
                  </ul>
              </div>
              <div class="footer-nav">
                  <ul>
                      <li><a href="#">SITEMAP</a></li>
                      <li><a href="#">PRIVACY POLICY</a></li>
                      <li><a href="#">TERMS OF USE</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <!-- Footer Bottom End -->
  </div>
  <!-- Site Footer End -->
  
  <!-- Scripts -->
  <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
  <script src="{{ asset("assets/js/jquery-ui.min.js") }}"></script>
  <script src="{{ asset("assets/js/jquery.fitvids.js") }}"></script>
  <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("assets/js/magnific.popup.min.js") }}"></script>
  <script src="{{ asset("assets/js/imagesloaded.pkgd.js") }}"></script>
  <script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("assets/js/booking.form.js") }}"></script>
  <script src="{{ asset("assets/js/contact.form.js") }}"></script>
  
  {{-- <!-- Map Scripts -->
  <script src="https://maps.google.com/maps/api/js?sensor=false&language=en"></script>
  <script src="assets/js/gmap3.min.js"></script> --}}
  
  <!-- Custom Scripts -->
  <script src="{{ asset("assets/js/custom.js") }}"></script>

 
  </body>
  </html>



