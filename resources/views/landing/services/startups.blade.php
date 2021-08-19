@extends('layouts.landing')

@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-2.jpg') }});">
	<div class="container">
		<div class="content-box">
			<h1>{{ $pageTitle }}</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>{{ $pageTitle }}</li>
			</ul>
		</div>
	</div>
</section>
<!--End Page Title-->

<!-- service-details -->
<section class="service-details">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar gray-bg">
					@include('partials.landing.service-sidebar')
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="service-details-content">
					<div class="inner-box">
						<div class="title-box">
							<div class="sec-title">
								<div class="title">Startups</div>
								<h1>Startup Mental Health</h1>
							</div>
							<div class="bold-text">Therapion supports startups of all types and sizes. 
                            Let it be a one-woman homebased agency or a two-men garage band, we 
                            are at your service. Our mutual goal is to ensure
                            that positive vibe and creativity persist in your operation.</div>
						</div>
						<div class="content-style-one">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 text-column">
									<div class="text-content">
										<h3>Our Approach</h3>
										<div class="text">
											<p>
                                Therapion helps new businesses of all types to 
                                ensure that all staff members are in good mental health 
								and happy with their respective lives.
                                           </p>
                                        	<p>
                                We can design special preventive mental health care programs for you, 
                                and we are ready to help would tensions or conflicts arise some day.
                                Our specialities include stress and time management, conflict resolution, 
                                adaptation to major life changes, intercultural counseling, and much more.
							                </p>
											<p>
											Contact us today and request a plan for your startup. 
											Therapion will then develop a special program for you. 
											It can include discounts, special events, workshops 
											and other type of activities to promote mental health in your community.
											</p>
																		</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/service-1.jpg') }}" alt=""></figure>
								</div>
							</div>
							<div class="list-content">
								<h3>Online Counseling for Startups</h3>
								<ul class="list">
									<li>Ensure well-being and good mental health in your community</li>
									<li>Avoid conflicts and tensions</li>
									<li>Get special assistance in special situations</li>
									<li>Non-judgemental, respectful environment</li>
								</ul>
							</div>
						</div>
						<div class="content-style-two">
							<h3>How Does it Work?</h3>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">1</div>
										<h4>Contact Customer Services</h4>
										<div class="text">Contact our customer services and tell that you are instered in Startup Mental Health.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">2</div>
										<h4>Tell Us about Your Needs</h4>
										<div class="text">Tell us about your business and community, what do you need help for, and how you can be reached.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">3</div>
										<h4>Enjoy Your Startup Plan</h4>
										<div class="text">Therapion will provide you a special tailor-made program 
                                        to promote mental health in your community.</div>
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
<!-- service-details end -->
@endsection