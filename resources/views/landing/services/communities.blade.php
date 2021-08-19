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
								<div class="title">Communities</div>
								<h1>ONLINE COUNSELING FOR COMMUNITIES</h1>
							</div>
							<div class="bold-text">Therapion collaborates with many associations, 
                             NGOs and other type of organizations. Our shared goal is to promote mental health
                             and make it a priority in everyday life.</div>
						</div>
						<div class="content-style-one">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 text-column">
									<div class="text-content">
										<h3>Our Approach</h3>
										<div class="text">
											<p>
                             Strong and healthy communities are essential in making life happy and 
                             meaningful. We are at your community's service in both
                            preventive stages of mental health care, as well as would active problem solving be needed some day.
                                           </p>
                                           <p>
                            Good mental health needs nurturing. 
                            Let us design a special program for your community, 
                            respecting the important aspects of your believe and value system.
                            Our mutual goal is to keep your community on track 
                            in a happy and satisfying life.</p>

							<p>
							Contact us today and request a plan for your community.
                            Therapion will then develop a special
                            program for you. It can
                            include discounts, special events, 
                            workshops and other type of activities
                            to promote mental health in your community.
							</p>
									</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/service-1.jpg') }}" alt=""></figure>
								</div>
							</div>
							<div class="list-content">
								<h3>Online Counseling for Communities</h3>
								<ul class="list">
									<li>Ensure well-being and good mental health in your community</li>
									<li>Avoid conflicts and tensions</li>
									<li>Help both individuals and families</li>
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
										<div class="text">Contact our customer services and tell that you are instered in a community program.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">2</div>
										<h4>Tell Us about Your Needs</h4>
										<div class="text">Tell us about your community, what do you need help for 
                                         and how you can be reached.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">3</div>
										<h4>Enjoy Your Community Plan</h4>
										<div class="text">Therapion will provide you a special tailor-made 
									   program to promote mental health in your community.  </div>
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