@extends('layouts.landing')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-8.jpg') }});">
	<div class="container">
		<div class="content-box">
			<h1>{{ $pageTitle }}</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>{{ $pageTitle }}</li>
			</ul>
		</div>
	</div>
</section>
<!--End Page Title-->

<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 info-column">
				<div class="contact-info">
					<h1>Customer Services</h1>
					<div class="bold-text">Our customer service center is confidential and free of charge. <br />
						                   We'll be happy to tell you more about our services.</div>
					<div class="inner-box">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 column">
								<div class="single-item">
									<h4>Helsinki</h4>
									<div class="text">
										<a href="tel:(+358) 9 2316 4346"> (+358) 9 2316 4346</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 column">
								<div class="single-item">
									<h4>Email</h4>
									<div class="text">
										<a href="mailto:info@therapion.com">info@therapion.com</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 column">
								<div class="single-item">
									<h4>Madrid</h4>
									<div class="text">
										<a href="tel: (+34) 646 538762"> (+34) 646 538762</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 column">
								<div class="single-item">
									<h4>Skype</h4>
									<div class="text">
										<a href="Skype:therapion">therapion</a>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 column">
								<div class="single-item">
									<h4>Mexico City</h4>
									<div class="text">
										<a href="tel: (+52) 55 27682353"> (+52) 55 27682353</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="google-map-area">
						<div 
							class="google-map" 
							id="contact-google-map" 
							data-map-lat="40.712776" 
							data-map-lng="-74.005974" 
							data-icon-path="images/icons/map-marker.png"  
							data-map-title="Brooklyn, New York, United Kingdom" 
							data-map-zoom="12" 
							data-markers='{
								"marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
							}'>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 form-column">
				<div class="contact-form-area">
					<h1>Send Us Email</h1>
					<div class="text">You can send us email using this form.</div>
					<form method="post" action="sendemail.php" id="contact-form"> 
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<label>Your Name</label>
								<input type="text" name="username" required>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<label>Your Email</label>
								<input type="email" name="email" required>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 form-group">
								<label>Your Phone</label>
								<input type="text" name="phone" required>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 form-group">
								<label>Your Subject</label>
								<input type="text" name="subject" required>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<label>Your Message</label>
								<textarea name="message"></textarea>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
								<button type="submit" class="theme-btn" name="submit-form">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('css')

@endpush('css')

@push('js')
<!-- map script -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<script src="{{ asset('assets/js/gmaps.js') }}"></script>
<script src="{{ asset('assets/js/map-helper.js') }}"></script>
@endpush('js')