<!-- main-footer -->
<footer class="main-footer">
	<div class="scroll-btn scroll-to-target wow zoomIn" data-wow-delay="1000ms" data-wow-duration="1500ms"
		data-target="html"><i class="flaticon-up-arrow-1"></i></div>
	<div class="footer-top">
		<div class="container">
			<div class="widget-section">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 footer-column">
						<div class="logo-widget footer-widget">
							<figure class="footer-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/footer-logo.png') }}"
										alt=""></a></figure>
							<div class="widget-content">
								<div class="text">
									<p>Therapion is a leading provider of online mental health care and counseling services.
										We promote positive change in individuals, couples, families and communities.</p>
								</div>
								<div class="btn-box"><a href="{{ route('contact-us') }}" class="theme-btn">Contact Us</a></div>
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
									<li><a href="{{ route('contact-us') }}">Contact Us</a></li>
									<li><a href="{{ route('services.all') }}">Services</a></li>
									<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
						<div class="contact-widget footer-widget">
							<h3 class="widget-title">Contact Us</h3>
							<div class="widget-content">
								<div class="text">We are always open</div>
								<ul class="info-list">
							    	<li><a href="tel: + 358 9 2316 4346">+ 358 9 2316 43462</a></li>
									<li><a href="Skype: therapion">Skype: therapion</a></li>
									<li><a href="mailto:info@example.com">info@therapion.com</a></li>
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
					<div class="copyright"><a href="{{ route('home') }}">Therapion Consulting</a> &copy; 2021 All Right Reserved</div>
				</div>
				<div class="right-content pull-right">
					<ul class="footer-nav">
						<li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
						<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
					</ul>
					<ul class="footer-social">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- main-footer end -->