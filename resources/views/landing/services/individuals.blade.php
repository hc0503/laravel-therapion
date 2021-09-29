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
								<div class="title">Individuals</div>
								<h1>ONLINE THERAPY FOR INDIVIDUALS</h1>
							</div>
							<div class="bold-text">At Therapion, we provide a rich variety of online therapy and
    counseling options. You can choose from private e-mail, chat, videoconferencing and phone sessions. Book a single session, or start one of our 4-session therapy programs.</div>
						</div>
						<div class="content-style-one">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 text-column">
									<div class="text-content">
										<h3>Our Approach</h3>
										<div class="text">
											
                                    <p>
Our online therapy and online counseling specialties include, 
but are not limited to, stress, depression, anxiety, loneliness, 
issues with self-esteem, social anxiety, eating disorders and obesity, 
shyness, guilt, anger, relationship advice, marriage and couples counseling, 
divorce and breakup, life transition and expat coaching.</p>

											<p>
											To make the selection of your specialist easy, all of our psychologists, 
											counselors and therapists have their respective online profiles
                                            available on our site. That makes it easy for
                                            you to choose the right person to talk with.
											</p>

											<p>
                                   Use the language switcher in the menu would you like to change your preferred language.
                                    </p>

								</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/service-1.jpg') }}" alt=""></figure>
								</div>
							</div>
							<div class="list-content">
							<h3>Online Therapy and Counseling for Individuals</h3>
								
								<ul class="list">
									<li>Promotes mental health and well-being</li>
									<li>Helps you get through life challenges</li>
									<li>Creates new ways to overcome past events and traumas</li>
									<li>Increases happiness and balance in your life</li>
								</ul>
							</div>
						</div>
						<div class="content-style-two">
							<h3>How Does it Work?</h3>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">1</div>
										<h4>Make a Booking</h4>
										<div class="text">
                                    Make an appoitment on the bookings page. 
                                  Choose from a single session, or start one of our
                                    4-session therapy programs.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">2</div>
										<h4>Have the Session</h4>
										<div class="text">Join the counselor online for a live session, or 
                                        use e-mail to communicate with him/her.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">3</div>
										<h4>Enjoy a Program</h4>
										<div class="text">Our 4-session therapy programs are easy-to-use packages to promote mental health.</div>
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