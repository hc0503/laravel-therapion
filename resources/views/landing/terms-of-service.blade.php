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
						<h3>Free Consultation</h3>
						<div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit</div>
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
									<div class="title">about me</div>
									<h1>My Biography</h1>
								</div>
								<div class="social-links pull-right">
									<ul class="social-style-one">
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="bold-text">I believe you have the power to make the changes you seek. There are times in our lives when we feel disempowered and disconnected from ourselves and others. I am here to walk with you on your journey towards healing.</div>
							<div class="text">
								<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.</p>
								<p>I have experience working with those who struggle with Substance Abuse, Eating Disorders, Anxiety, Depression, and Trauma. My primary therapeutic modalities include Cognitive Behavioral Therapy and Acceptance and Commitment Therapy.However, I work collaboratively with my clients to provide the most effective interventions possible based on their needs.</p>
							</div>
						</div>
						<div class="content-style-two">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 text-column">
									<div class="text">
										<p>My approach is to tailor therapy to each client's individual needs. I treat adults with concerns about business/school performance and creativity, depression, anxiety, panic attacks, phobias, childhood sexual or physical abuse, adult trauma, alcohol/drug problems, PTSD, codependency, adult children of alcoholics, and self-esteem.</p>
										<p>Prior stressful events can contribute to the stress we experience now. This can lead to frustration, feeling defeated, compulsive behavior to cope (e.g., drinking/drug abuse, excessive efforts to please, overspending, overworking, avoiding, etc). Therapy helps you to identify the causes, gain control, and find solutions to enable increased confidence and peace of mind.</p>
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
												<p>I am committed to building safety with clients through connecting, compassion and caring.</p>
												<p>I seek to empower people of all ages to know themselves, to take ownership of their lives and to be authentic in relationships.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 column">
										<div class="inner-column">
											<h3>My Mission</h3>
											<div class="text">
												<p>Promote the professional development of counselors, advocate for the profession, and ensure ethical, culturally-inclusive practices that protect those using counseling services.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="qualifications">
								<h3>Qualifications</h3>
								<ul class="list">
									<li>PhD Psychology, University of Birmingham (UK)</li>
									<li>MA Existential Phenomenological Psychology, Seattle University (USA)</li>
									<li>BA Psychology, Western Washington University (USA)</li>
									<li>Further training as a Trainee Clinical Psychologist (DClinPsy), University College of London (UK)</li>
								</ul>
							</div>
							<div class="certificates">
								<h3>My Certifications</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 image-column">
										<figure class="image-box"><img src="{{ asset('assets/images/resource/certificate-1.jpg') }}" alt=""></figure>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 image-column">
										<figure class="image-box"><img src="{{ asset('assets/images/resource/certificate-2.jpg') }}" alt=""></figure>
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