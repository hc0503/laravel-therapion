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
						<h3>Customer Service</h3>
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
									<div class="title">about us</div>
									<h1>Our Company</h1>
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
                                   Therapion Consulting is a private company 
                                   specializing in mental health services and coaching. 
                                   All services are provided through our website, therapion.com
                                   which the company owns and operates.
                                   Timo Kojonen, M.Sc., M.Psych., MBA serves as CEO.
                                   Our world headquarters are in Helsinki, Finland.
                            </div>
							<div class="text">
								  <p>
                                 Would you require further information regarding
                                  our company, please contact us.
                                 </p>
								 <div class="btn-box"><a href="contact-us" class="theme-btn">Contact Us</a></div>
							</div>
						</div>
						<div class="content-style-two">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 text-column">
									<div class="text">
										<p>Our history: 
                                           Our company was founded in 2005. 
                                           In the beginning, we managed various smaller regional websites, 
                                           such as Ulkopsykologit.fi (in Finnish and Swedish)
                                           and Latpsi.com (Psicología para Latinos; in Spanish and English).
                                           As the service grew popular, we merged all sites into one in year 2009.
                                           The new site was named Therapion in reference to "therapy". 
                                           Today our services are available in 15 languages, and we 
                                           are present on all continents.
                                           </p>
									
										
										<p>Our Approach: Our approach is to tailor mental health care to each client's individual needs. 
                                           Our approach is non-judgemental and all-inclusive.
                                           We respect human rights and personal choises. 
                                       </p>
                                       <p>
									   Our approach is multi-disciplinary.
                                       In our team you'll find specialists from all major areas of psychology, 
                                       psychotherapy and coaching. Our service covers the most popular
                                       mental health care topics, and it is not limited to any particular area of expertise. 
                                       </p>
									   <p>
                                       In our approach prevention is as important as actually 
                                       treating mental health care issues. In our opinion 
									   mental health care should be available to all. 
                                      </p>
									  <p>
                                       Legal disclaimer: This is not a substitute for
                                       an emergency service. Would you require immediate help, please
                                       contact a local help-line.
                                       </p>		
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
												<p>
											Our service is professional, personal and easy to use.
                                            We have only professional and certified counselors, psychologists, 
                                            therapists and coaches working with us. 
                                            Our service is always tailored for each and one client. To use our services, 
                                            you only need internet access, and our pricing is affordable. 
                                                </p>  
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 column">
										<div class="inner-column">
											<h3>Our Mission</h3>
											<div class="text">
												<p>  
                                                Our mission is to provide the best possible mental health care, 
                                                regardless of your race, socio-economical status
                                                or region. We have today 15 language alternatives to choose from. 
                                                Over 200 mental health professionals from around the world work with us.
												We are present on all continents.
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="qualifications">
								<h3>Qualifications and Certifications</h3>
								<ul class="list">
									<li>All counselors must go through a vigorous recruitment process before starting to work here</li>
                                    <li>It includes a strict control of professional qualifications, such as diplomas and licenses</li>
                                    <li>A list of qualifications and areas of expertise is included in each counselor's personal online profile</li>
                                    <li>As a client, you can request more information on your counselor's certification at any time</li>		
								</ul>
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