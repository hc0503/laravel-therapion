@extends('layouts.landing')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-3.jpg') }});">
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

<section class="career-page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="career-content-box">
					<div class="inner-content">
						<div class="career">
							<h1>Career Possibilities</h1>
							<div class="italic-text">
				    		Would you like to be part of our professional community? 
                            Are you an independent mental health professional who thrives to learn something new?
                            Is helping others your passion? Do you enjoy a modern and international lifestyle where differences 
                            between persons mean potential for the team?</div>
							
							<div class="text">
								<p>
						    If you identify yourself with these questions, please read further. 
							Below is a detailed description of our currently open jobs. 
						    There are jobs in  online counseling and psychotherapy, but also jobs in sales, marketing and management.
                            Send us your application today. We look forward to hearing from you!
								</p>
							</div>
						</div>
						<div class="category">
							<h3>Popular Categories</h3>
							<div class="inner-box clearfix">
								<div class="single-item">
									<div class="icon-box"><i class="flaticon-support"></i></div>
									<h4><a href="#">Online Counseling</a></h4>
									<span>Various open positions</span>
								</div>
								<div class="single-item">
									<div class="icon-box"><i class="flaticon-graphic"></i></div>
									<h4><a href="#">Team Management</a></h4>
									<span>Various open positions</span>
								</div>
								<div class="single-item">
									<div class="icon-box"><i class="flaticon-cube"></i></div>
									<h4><a href="#">Marketing & Sales</a></h4>
									<span>Two different open positions</span>
								</div>
							</div>
						</div>
						<div class="positions">
							<h3>Available Positions</h3>
							<div class="text">
								<p>Here you'll find a detailed description of the currently open jobs with us.</p>
							</div>
							<div class="inner-box">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>01.</span> Counselor, Psychologist, or Psychotherapist</h3>
											<div class="text">If you are a qualified mental health professional looking for an independent and flexible part-time position, this job is for you!</div>

											<h4>Job description</h4>
											<ul class="list">
											    <li>Category: Online Counseling, Team ANGLO</li>
												<li>Duties: Provide online counseling sessions to private clients
												<li>Master's degree in counseling, clinical psychology, psychotherapy, or the equivalent</li>
												<li>Good Internet skills</li>
												<li>Good verbal and written communication skills</li>
												<li>Home-based part-time & online work</li>
											</ul>
											
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>02.</span> Team Leader</h3>
											<div class="text">Are you already part of our counseling team? Would you like to make your team grow? 
												Is leading a team your passion? This job is for you!</div>
											<h4>Job description</h4>
											<ul class="list">
												<li>Category: Team Management, Team ANGLO</li>
												<li>Duties: Assist the manager with all tasks related to team management 
												<li>Capacity to create new content (texts or videos) </li>
												<li>Good verbal and written communication skills</li>
												<li>Leadership and problem-solving abilities</li>
												<li>Home-based part-time & online work</li>
											</ul>
										
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>03.</span> Project Manager: Community Services</h3>
											<div class="text">Work as a liaison officer between Therapion and different type of communities such as civil associations, NGOs and
												other type of organizations. Create tailored mental health plans for communities. </div>
											<h4>Job descriptions</h4>
											<ul class="list">
											<li>Category: Sales & Marketing</li>
											<li>Duties: Target selected communities and generate new business<Ili> 
												<li>Must have 2-5 years experience in sales and marketing and community work</li>
												<li>Have sound knowledge of commercial activities</li>
												<li>Good language and written communication skills</li>
												<li>Leadership and problem-solving abilities</li>
											</ul>
											
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>04.</span> Project Manager: Startup Mental Health</h3>
											<div class="text">Work as a liaison officer between Therapion and different type of startups. Create tailored mental health plans and generate sales.</div>
											<h4>Job description</h4>
											<ul class="list">
											   <li>Category: Sales & Marketing</li>
											   <li>Duties: Target selected startups and generate new business<Ili> 
											   <li>Must have 2-5 years experience in sales and marketing</li>
												<li>Have sound knowledge of commercial activities</li>
												<li>Good language and written communication skills</li>
												<li>Leadership and problem-solving abilities</li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="career-sidebar gray-bg">
					<h2>Special Instructions</h2>
					<div class="text">Would you like to apply for one of our open jobs? Follow these instructions.</div>
					<ul class="info-list">
						<li><span>Documents needed:</span> Your resumé and a short application</li>
						<li><span>Mark you message:</span> Indicate the team and job you're applying for</li>
						<li><span>Our contact:</span> Use this email (remove the spaces): info @ therapion.com</li>
						<li><span>Process duration:</span> We process your application within 2-3 weeks and will contact you if interested</li>
					</ul>
					<div class="btn-box"><a href="#" class="theme-btn">Apply For The Job</a></div>
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