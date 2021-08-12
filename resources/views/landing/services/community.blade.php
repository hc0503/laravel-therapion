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
								<div class="title">services</div>
								<h1>Community title</h1>
							</div>
							<div class="bold-text">I believe you have the power to make the changes you seek. There are times in our lives when we feel disempowered and disconnected from ourselves and others. I am here to walk with you on your journey towards healing.</div>
						</div>
						<div class="content-style-one">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 text-column">
									<div class="text-content">
										<h3>Approach</h3>
										<div class="text">
											<p>My approach is to tailor therapy to each client's individual needs. I treat adults with concerns about business/school performance and creativity, depression, anxiety, panic attacks, phobias, childhood sexual or physical abuse, adult trauma, alcohol/drug problems, PTSD, codependency, adult children of alcoholics, and self-esteem.</p>
											<p>Prior stressful events can contribute to the stress we experience now. This can lead to frustration, feeling defeated, compulsive behavior to cope (e.g., drinking/drug abuse.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/service-1.jpg') }}" alt=""></figure>
								</div>
							</div>
							<div class="list-content">
								<h3>Marriage Counselling</h3>
								<ul class="list">
									<li>Do you want help through a rough patch in your relationship?</li>
									<li>Lost communication or emotional connection in your marriage?</li>
									<li>Forever stuck in the same soul-destroying arguments?</li>
									<li>Are you feeling betrayed or trapped?</li>
								</ul>
							</div>
						</div>
						<div class="content-style-two">
							<h3>How Does it Work?</h3>
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">1</div>
										<h4>Make Schedule</h4>
										<div class="text">Lorem ipsum dolor amet adipelit sed eiusmtempor encid.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">2</div>
										<h4>Start Discussion</h4>
										<div class="text">Lorem ipsum dolor amet adipelit sed eiusmtempor encid.</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 column">
									<div class="single-item">
										<div class="count-box">3</div>
										<h4>Enjoy Plan</h4>
										<div class="text">Lorem ipsum dolor amet adipelit sed eiusmtempor encid.</div>
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