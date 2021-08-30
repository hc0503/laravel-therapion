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

<!-- career-page-section -->
<section class="career-page-section">
	<div class="container">
		<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 content-side">
					<div class="career-content-box">
						<div class="inner-content">
								<div class="career">
									<h1>Career</h1>
									<div class="italic-text">I believe you have the power to make the changes you seek. There are times in our lives when we feel disempowered and disconnected from ourselves and others. I am here to walk with you on your journey towards healing.</div>
									<div class="text">
										<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.I have experience working with those who struggle with Substance Abuse, Eating Disorders, Anxiety, Depression, and Trauma. My primary therapeutic modalities include.Cognitive Behavioral Therapy and Acceptance and Commitment Therapy. However, I work collaboratively with my clients to provide the most effective interventions possible based on their needs.</p>
									</div>
								</div>
								<div class="category">
									<h3>Popular Category</h3>
									<div class="inner-box clearfix">
										<div class="single-item">
												<div class="icon-box"><i class="flaticon-work"></i></div>
												<h4><a href="#">Accounting</a></h4>
												<span>(25)</span>
										</div>
										<div class="single-item">
												<div class="icon-box"><i class="flaticon-graphic"></i></div>
												<h4><a href="#">Finance</a></h4>
												<span>(10)</span>
										</div>
										<div class="single-item">
												<div class="icon-box"><i class="flaticon-pen"></i></div>
												<h4><a href="#">Design & Creative</a></h4>
												<span>(40)</span>
										</div>
										<div class="single-item">
												<div class="icon-box"><i class="flaticon-cube"></i></div>
												<h4><a href="#">Marketing & Sales</a></h4>
												<span>(37)</span>
										</div>
										<div class="single-item">
												<div class="icon-box"><i class="flaticon-support"></i></div>
												<h4><a href="#">Digital Media</a></h4>
												<span>(52)</span>
										</div>
										<div class="single-item">
												<div class="icon-box"><i class="flaticon-smart"></i></div>
												<h4><a href="#">Technology</a></h4>
												<span>(27)</span>
										</div>
									</div>
								</div>
								<div class="positions">
									<h3>Available Positions</h3>
									<div class="text">
										<p>I support people in finding their strengths, building on them, and finding balance and contentment in the emotional, relational, physical, cognitive, and spiritual components of their life. I seek to create a safe and respectful environment for individuals and couples to nurture growth and healing.</p>
									</div>
									<div class="inner-box">
										<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 column">
													<div class="single-item">
														<h3 class="inner-title"><span>01.</span> Marketing Executive</h3>
														<div class="text">I uphold the autonomy within those seeking help. I gently challenge them to courageously face life’s invariable disappointments.</div>
														<h4>Responsibilities</h4>
														<ul class="list">
																<li>Must have to 5 years experience of this field</li>
																<li>Have sound knowledge of commercial activities.</li>
																<li>Good verbal and written communication skills.</li>
																<li>Leadership and problem-solving abilities.</li>
														</ul>
														<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 column">
													<div class="single-item">
														<h3 class="inner-title"><span>02.</span> Web Developer</h3>
														<div class="text">I uphold the autonomy within those seeking help. I gently challenge them to courageously face life’s invariable disappointments.</div>
														<h4>Responsibilities</h4>
														<ul class="list">
																<li>Must have to 5 years experience of this field</li>
																<li>Have sound knowledge of commercial activities.</li>
																<li>Good verbal and written communication skills.</li>
																<li>Leadership and problem-solving abilities.</li>
														</ul>
														<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 column">
													<div class="single-item">
														<h3 class="inner-title"><span>03.</span> Nutrition Advisor</h3>
														<div class="text">I uphold the autonomy within those seeking help. I gently challenge them to courageously face life’s invariable disappointments.</div>
														<h4>Responsibilities</h4>
														<ul class="list">
																<li>Must have to 5 years experience of this field</li>
																<li>Have sound knowledge of commercial activities.</li>
																<li>Good verbal and written communication skills.</li>
																<li>Leadership and problem-solving abilities.</li>
														</ul>
														<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 column">
													<div class="single-item">
														<h3 class="inner-title"><span>04.</span> Project Manager</h3>
														<div class="text">I uphold the autonomy within those seeking help. I gently challenge them to courageously face life’s invariable disappointments.</div>
														<h4>Responsibilities</h4>
														<ul class="list">
																<li>Must have to 5 years experience of this field</li>
																<li>Have sound knowledge of commercial activities.</li>
																<li>Good verbal and written communication skills.</li>
																<li>Leadership and problem-solving abilities.</li>
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
<!-- career-page-section  end -->
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')