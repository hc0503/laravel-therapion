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

	@include('partials.landing.topbar')

	@yield('content')

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
		<div class="scroll-btn scroll-to-target wow zoomIn" data-wow-delay="1000ms" data-wow-duration="1500ms"
			data-target="html"><i class="flaticon-up-arrow-1"></i></div>
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
								<figure class="footer-logo"><a href="index.html"><img src="{{ asset('assets/images/footer-logo.png') }}"
											alt=""></a></figure>
								<div class="widget-content">
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
											labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
											nisi.</p>
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