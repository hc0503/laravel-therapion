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
									<p>{{ __('global.footer.description') }}</p>
								</div>
								<div class="btn-box"><a href="{{ route('contact-us') }}" class="theme-btn">{{ __('global.footer.contactUs.title') }}</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
						<div class="links-widget footer-widget">
							<h3 class="widget-title">{{ __('global.footer.quickLink.title') }}</h3>
							<div class="widget-content">
								<ul>
									<li><a href="{{ route('about-us') }}">{{ __('global.footer.quickLink.aboutUs') }}</a></li>
									<li><a href="{{ route('press-media') }}">{{ __('global.footer.quickLink.pressMedia') }}</a></li>
									<li><a href="{{ route('collaboration') }}">{{ __('global.footer.quickLink.collaborateUs') }}</a></li>
									<li><a href="{{ route('training') }}">{{ __('global.footer.quickLink.trainingCounselor') }}</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
						<div class="contact-widget footer-widget">
							<h3 class="widget-title">{{ __('global.footer.contactUs.title') }}</h3>
							<div class="widget-content">
								<div class="text">{{ __('global.footer.contactUs.description') }}</div>
								<ul class="info-list">
							    	<li><a href="tel: {{ config('therapion.contact.phone') }}">{{ config('therapion.contact.phone') }}</a></li>
									<li><a href="Skype: {{ config('therapion.contact.skype') }}">Skype: {{ config('therapion.contact.skype') }}</a></li>
									<li><a href="mailto: {{ config('therapion.contact.email') }}">{{ config('therapion.contact.email') }}</a></li>
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
						<li><a href="{{ route('terms-of-service') }}">{{ __('global.footer.term') }}</a></li>
						<li><a href="{{ route('privacy-policy') }}">{{ __('global.footer.privacy') }}</a></li>
					</ul>
					<ul class="footer-social">
						<li><a href="https://www.facebook.com/therapion"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.youtube.com/user/therapion"><i class="fab fa-youtube"></i></a></li>
						<li><a href="https://www.linkedin.com/company/therapion-consulting"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- main-footer end -->