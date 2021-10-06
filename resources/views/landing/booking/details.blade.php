@extends('layouts.landing')
@section('content')

<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/team-bg.jpg') }});">
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

<section class="team-details">
	<div class="single-team-member" style="background-image: url({{ asset('/assets/images/background/team-bg.jpg') }});">
		<div class="container">
			<div class="inner-box">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-sm-12 image-column">
						<figure class="image-box"><img src="{{ asset('storage/' . $psychologist->photo) }}" alt="{{ $psychologist->name }}"></figure>
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12 content-column">
						<div class="content-box">
							<h1>{{ $psychologist->name }}</h1>
							<span class="designation">{{ $psychologist->title }}</span>
							<div class="text">{{ $psychologist->about }}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="team-social-bar">
		<div class="container clearfix">
			<div class="content-box pull-right">
				<div class="call"><i class="fas fa-phone"></i><a href="tel:(251)235-3256">(251) 235-3256</a></div>
				<ul class="social-style-one">
					<li><a href="mailto:{{ $psychologist->email }}"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="lower-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 content-side">
					<div class="content-box">
						<div class="content-style-one">
							<h1>Biography</h1>
							<div class="italic-text">I believe you have the power to make the changes you seek. There are times in our lives when we feel disempowered and disconnected from ourselves and others. I am here to walk with you on your journey towards healing.</div>
							<div class="text">
								<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.I have experience working with those who struggle with Substance Abuse, Eating Disorders, Anxiety, Depression, and Trauma. My primary therapeutic modalities include. Cognitive Behavioral Therapy and Acceptance and Commitment Therapy.However, I work collaboratively with my clients to provide the most effective interventions possible based on their needs.</p>
							</div>
							<h3>Areas of Counselling Practice</h3>
							<ul class="list">
								<li>Adult children dealing with parents/caretakers who have personality disorders, and dementia</li>
								<li>Affairs – working through the discovery and rebuilding trust</li>
								<li>Self-esteem & confidence, assertive communication</li>
								<li>Building better relationships (work and personal)</li>
								<li>Complex mental health issues including dissociative disorders</li>
								<li>Relationship issues including conflict & domestic violence</li>
								<li>Anxiety including OCD, panic attacks, stress management</li>
							</ul>
						</div>
						<div class="content-style-two">
							<h3>How I Approach Counselling and Psychotherapy</h3>
							<div class="text">
								<p>I support people in finding their strengths, building on them, and finding balance and contentment in the emotional, relational, physical, cognitive, and spiritual components of their life. I seek to create a safe and respectful environment for individuals and couples to nurture growth and healing.</p>
								<p>I uphold the autonomy within those seeking help. I gently challenge them to courageously face life’s invariable disappointments outside the therapy room and to embrace opportunities to encourage others in their life journey.</p>
							</div>
							<h3>How I Approach Counselling and Psychotherapy</h3>
							<ul class="list">
								<li>PhD Psychology, University of Birmingham (UK)</li>
								<li>MA Existential Phenomenological Psychology, Seattle University (USA)</li>
								<li>BA Psychology, Western Washington University (USA)</li>
								<li>Further training as a Trainee Clinical Psychologist (DClinPsy), University College of London (UK)</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
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
			</div>
		</div>
	</div>
</section>
@endsection

@push('css')
@endpush('css')

@push('js')

@endpush('js')