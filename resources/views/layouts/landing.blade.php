<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>{{ $pageTitle ?? 'Landing' }} - {{ config('app.name') }}</title>
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/style.css')}} " rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

@stack('css')

</head>

<!-- page wrapper -->
<body class="main_page">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header">

        <div class="header-top clearfix">
            <div class="top-left pull-left">
                <div class="text">Counseling and psychotherapy for individuals, couples and families.</div>
            </div>
            <div class="top-right pull-right">
                <ul class="topbar-info">
                    <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li>
                    <li><i class="fas fa-phone"></i><a href="tel:(251)235-3256">(251) 235-3256</a></li>
                </ul>
            </div>
        </div>

        <div class="header-bottom">
            <div class="outer-container">
                <div class="clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                    </div>
                    <div class="nav-outer clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style 01</a></li>
                                                    <li><a href="index-2.html">Header Style 02</a></li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Me</a></li> 
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="service.html">Our Services</a></li>
                                                <li><a href="service-details-1.html">Couples Therapy</a></li>
                                                <li><a href="service-details-2.html">Teens & Youth</a></li>
                                                <li><a href="service-details-3.html">Family Therapy</a></li>
                                                <li><a href="service-details-4.html">Individuals</a></li>
                                                <li><a href="service-details-5.html">Divorce Recovery</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="career.html">Career Page</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="pricing.html">Pricing Page</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>                             
                                        <li class="current"><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="outer-box clearfix">
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-magnifying-glass"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-box"><a href="#" class="theme-btn">Free Consultation</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/images/small-logo.png') }}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Page 01</a></li>
                                        <li><a href="index-2.html">Home Page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index.html">Header Style 01</a></li>
                                            <li><a href="index-2.html">Header Style 02</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Me</a></li> 
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="service.html">Our Services</a></li>
                                        <li><a href="service-details-1.html">Couples Therapy</a></li>
                                        <li><a href="service-details-2.html">Teens & Youth</a></li>
                                        <li><a href="service-details-3.html">Family Therapy</a></li>
                                        <li><a href="service-details-4.html">Individuals</a></li>
                                        <li><a href="service-details-5.html">Divorce Recovery</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                        <li><a href="career.html">Career Page</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="pricing.html">Pricing Page</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>                             
                                <li class="current"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-8.jpg') }});">
        <div class="container">
            <div class="content-box">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- contact-section end -->


    <!-- subscribe-section -->
    <section class="subscribe-section centred">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="left-content">
                        <h2>Schedule Your Appointment Today!</h2>
                        <a href="#" class="theme-btn">Get Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="right-content">
                        <h2>Subscribe<br />to Our Newsletter</h2>
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Subscribe" required="">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-btn scroll-to-target wow zoomIn" data-wow-delay="1000ms" data-wow-duration="1500ms" data-target="html"><i class="flaticon-up-arrow-1"></i></div>
    </section>
    <!-- subscribe-section end -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="container">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="{{ asset('assets/images/footer-logo.png') }}" alt=""></a></figure>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                    </div>
                                    <div class="btn-box"><a href="contact.html" class="theme-btn">Contact Me</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h3 class="widget-title">Quick links</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Company History</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">Contact Me</h3>
                                <div class="widget-content">
                                    <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed do tempor.</div>
                                    <ul class="info-list">
                                        <li>Flat 20, Reynolds Neck, North Hele naville, FV77 8WS</li>
                                        <li><a href="tel:+2(305)587-3407">+2(305) 587-3407</a></li>
                                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="left-content pull-left">
                        <div class="copyright"><a href="#">Morriston</a> &copy; 2019 All Right Reserved</div>
                    </div>
                    <div class="right-content pull-right">
                        <ul class="footer-nav">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->




<!-- jequery plugins -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('assets/js/script.js') }}"></script>

@stack('js')

</body><!-- End of .page_wrapper -->
</html>
