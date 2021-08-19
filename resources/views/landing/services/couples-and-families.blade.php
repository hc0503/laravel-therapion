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
								<div class="title">Couples and Families</div>
								<h1>ONLINE COUNSELING FOR COUPLES AND FAMILIES</h1>
							</div>
							<div class="bold-text">
							Good personal relationships are essential in making life happy and 
                            meaningful. Getting the right help at the right times is essential in maintaining
                            good personal relationships, and it will get you and
                        your loved ones over many difficulties.</div>
						</div>
						<div class="content-style-one">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 text-column">
									<div class="text-content">
										<h3>Our Approach</h3>
										<div class="text">
											<p>Our approach to couples and family therapy is to provide
                                             a non-judgemental and all-inclusive environment where all
                                             persons involved in the situation can be heard and supported.
											</p>
											<p>The goal is always to work together 
                                             and get all participants actively engaged in the process of healing, problem solving
											 and reshaping of all psychological aspects of shared, mutual life.
											 </p>
											<p>
											 Typical topics for couples and family therapy include
                                            but are not limited to, growing apart, life changes, conflicts or arguments, 
                                            sadness and unhappiness, unfaithfulness and cheating, 
                                             lack of desire and other type of sexual disfunctions.
                                           <p>
											</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/service-1.jpg') }}" alt=""></figure>
								</div>
							</div>
							<div class="list-content">
								<h3>Online Counseling for Couples and Families</h3>
								<ul class="list">
									<li>Get help and find through a rough patch in your relationships</li>
									<li>Improve communication and avoid arguments</li>
									<li>Non-judgemental and all-inclusive environment</li>
									<li>Active problem solving instead of focusing on the negative</li>
								</ul>
							</div>
						</div>
						<div class="content-style-two">
							<h3>How Does it Work?</h3>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">1</div>
										<h4>Start with Individual Counseling</h4>
										<div class="text">Go to the bookings page and start with individual counseling. 
									    It helps us understand the underlying situation better.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">2</div>
										<h4>Get a Treatment Plan</h4>
										<div class="text">Let the counselor 
                                       know that you are interested in couples (or family) therapy. 
                                       Your counselor will then design
                                       you a special treatment plan for the future.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">3</div>
										<h4>Participate in the Sessions</h4>
										<div class="text">Move on and continue with the couples (or family) therapy sessions
                                        together with your partner (or family members).</div>
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