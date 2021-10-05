@extends('layouts.landing')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title.jpg') }});">
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

<section class="about-page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-sidebar">
				<div class="sidebar gray-bg">
					<div class="sidebar-form">
						<h3>Customer Services</h3>
						<div class="text">Our customer service center is confidential and free of charge.</div>
						<form action="#" method="post">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" name="name" required="">
							</div>
							<div class="form-group">
								<label>Your Email</label>
								<input type="email" name="name" required="">
							</div>
							<div class="form-group">
								<label>Subject</label>
								<div class="select-box">
									<select class="selectmenu">
										<option selected="selected">Defolt Sorting</option>
										<option>Couples Therapy</option>
										<option>Teens & Youth</option>
										<option>Family Therapy</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Info</label>
								<input type="email" name="info" required="">
							</div>
							<div class="form-group">
								<label>Your Message</label>
								<textarea name="message"></textarea>
							</div>
							<div class="form-group message-btn">
								<button type="submit" class="theme-btn">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="about-page-content">
					<div class="inner-box">
						<div class="content-style-one">
							<div class="title-box clearfix">
								<div class="sec-title pull-left">
									<div class="title">privacy policy</div>
									<h1>Privacy Policy</h1>
								</div>
								<div class="social-links pull-right">
									<ul class="social-style-one">
									<li><a href="https://www.facebook.com/therapion"><i class="fab fa-facebook-f"></i></a></li>
					            	<li><a href="https://www.youtube.com/user/therapion"><i class="fab fa-youtube"></i></a></li>
						            <li><a href="https://www.linkedin.com/company/therapion-consulting"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="bold-text">
							Therapion is committed to data protection. This page explains in detail how Europe's new General Data Protection Regulation (GDPR) 
							is implemented in our website and in the services we provide.<br />						
						    </div>


							<div class="text">
							<p>1. Use of services is voluntary: In reference to GDPR, Art. 6.1.a, the use of our services is voluntary. The client can terminate the use our services at any time.</p>
							<p>   2. Data is collected directly from user: All data is collected directly from the client. The client is free to submit the information that he or she considers useful for his or her treatment. Our mutual goal is to provide the best possible mental health care. Anything irrelevant to that can be excluded. To maintain communication with the client, some contact details are needed.</p>
							<p> 3. User data can be deleted at any time: The client can request a copy of their records at any time. The client can request us to delete all records related to him or her at any time.</p>
							<p> 4. Purpose of data collection: Client-related information will never be released to any third party. All collected data is directly related to treatment and to safety. By safety, we are referring to both patient's well-being and internet security in general.</p>
							<p> 5. Data transfer and third countries: In reference to GDPR, Art. 13.1.f, the client needs to be aware that IT systems and computer programs are not perfect and using them may entail risks. The client is free to choose his or her IT system and computer programs, and use our services through them, as long as the chosen IT system and program are legal and do not cause safety issues to the client, the company or the counselor handling the case. The client's technology-related decisions must be voluntary and will be treated as such. In addition, our clients must understand that programs such as e-mail, chat, videoconferencing software, and phone services may include data transfer to third countries. In order to limit risks, we recommend the client use IT systems and computer programs provided and operated by well-reputated and well-respected companies.</p>
							<p> 6. Special security needs will be respected: If the client has special needs regarding internet security, he or she can contact us at any time. While we cannot provide IT systems or computer programs, we can provide useful ideas on how to increase internet security and how to use our services safely.</p>
							<p> 7. Our booking system: Our booking system collects selected information from the client when a booking is made. Part, if not all, of that information may be saved by our system for a limited time period, but never longer than for twelve months. This is to ensure that the booked sessions are paid for, and that they are subsiquently provided. The counselors keep their own records related to the client, in accordance with the regulations and laws that apply to the mental health care sector. The client grants the company the right the process the booking forms manually in case it's necessary for providing the service. 
					   	    <p> 8. Duration of data storage: As stated above, our general rule for data storage is 12 months. No older client records will be kept by the company. The only exception to this rule are special cases that may need special attention for legal or security concerns.</p>
                      	</div>
						</div>
						<div class="content-style-two">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 text-column">
									<div class="text">
								<p>9. Data Protection Officer: Our company has a Data Protection Officer. You can contact him anytime through Customer Services.
									 You can request a translation of this document at any time. You are also invited to attend our live events. Especially recommended is our free training seminar. 
                                    It enables participants to ask anything they want related to our services. It is a wonderful opportunity to discuss questions related to data protection, too.</p>
									<div class="qualifications">
								<h3>Date of publication</h3>
								<br />
								<ul class="list">
									<li>First published: May 22, 2018</li>
							        <li>Last update: September 19, 2021</li>
								</ul>
							</div>
							
							
								</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/about-4.jpg') }}" alt=""></figure>
								</div>
							</div>
						</div>
						<div class="content-style-three">
							<div class="top-content">
								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-12 column">
										<div class="inner-column">
											<h3>Core Values</h3>
											<div class="text">
												<p>We don't collect unnecessary data. Your private information is not released to any third party.				
											We do not create huge centralized databases. Instead, you counselor keeps your treatment records.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 column">
										<div class="inner-column">
											<h3>Our Mission</h3>
											<div class="text">
												<p>Provide professional mental health care without compromising our clients to advertising, commercial pressure, hacking or any other type of abuse.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')