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
							<div class="italic-text">I believe you have the power to make the changes you seek. There are times in our lives when we feel disempowered and disconnected from ourselves and others. I am here to walk with you on your journey towards healing.</div>
							<div class="text">
								<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.I have experience working with those who struggle with Substance Abuse, Eating Disorders, Anxiety, Depression, and Trauma. My primary therapeutic modalities include.Cognitive Behavioral Therapy and Acceptance and Commitment Therapy. However, I work collaboratively with my clients to provide the most effective interventions possible based on their needs.</p>
							</div>
						</div>
						<div class="category">
							<h3>Popular Categories</h3>
							<div class="inner-box clearfix">
								<div class="single-item">
									<div class="icon-box"><i class="flaticon-support"></i></div>
									<h4><a href="#">Online Counseling and Psychotherapy</a></h4>
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
								<p>Here you'll find a detailed description of all currently open jobs with us.</p>
							</div>
							<div class="inner-box">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>01.</span> Counselor, Psychologist, or Psychotherapist</h3>
											<div class="text">If you are a qualified mental health professional looking for an independent and flexible part-time position, this job is for you!</div>

											<h4>Job description</h4>
											<ul class="list">
											    <li>Category: Online Counseling and Psychotherapy</li>
												<li>Duties: Provide online counseling sessions to private clients
												<li>Master's degree in counseling, clinical psychology, psychotherapy, or the equivalent</li>
												<li>Good Internet skills</li>
												<li>Good verbal and written communication skills</li>
												<li>Home-based part-time & online work</li>
											</ul>
											<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>02.</span> Team Leader</h3>
											<div class="text">Are you already part of our counseling team? Would you like to make your team grow? This job is for you!</div>
											<h4>Job description</h4>
											<ul class="list">
												<li>Category: Team Management</li>
												<li>Duties: Assist the manager with all tasks related to team management 
												<li>Capacity to create new content (texts or videos) </li>
												<li>Have sound knowledge of team management</li>
												<li>Good verbal and written communication skills</li>
												<li>Leadership and problem-solving abilities</li>
											</ul>
											<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 column">
										<div class="single-item">
											<h3 class="inner-title"><span>03.</span> Project Manager: Community Services</h3>
											<div class="text">Work as a liaison officer between Therapion and different type of communities such as civil associations, NGOs and
												other type of organizations. Create tailored mental health plans for communities. </div>
											<h4>Job descriptions</h4>
											<ul class="list">
											<li>Category: Sales & Marketingy</li>
											<li>Duties: Target selected communities and generate new business<Ili> 
												<li>Must have 2-5 years experience in sales and marketing and community work</li>
												<li>Have sound knowledge of commercial activities</li>
												<li>Good verbal and written communication skills</li>
												<li>Leadership and problem-solving abilities</li>
											</ul>
											<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
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
												<li>Good verbal and written communication skills</li>
												<li>Leadership and problem-solving abilities</li>
											</ul>
											<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
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
					<h2>Job Overview</h2>
					<div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit</div>
					<ul class="info-list">
						<li><span>Publist on:</span> April 02, 2019 </li>
						<li><span>Vacancy:</span> 07</li>
						<li><span>Employment Status:</span> Full-time</li>
						<li><span>Experience:</span> 2 to 3 years</li>
						<li><span>Location:</span> New York City</li>
						<li><span>Application Deadline:</span> April 15, 2019</li>
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