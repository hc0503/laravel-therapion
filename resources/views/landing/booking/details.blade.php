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
							<span class="designation">{{ $psychologist->education }}</span>
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
				<div class="call"><i class="fas fa-phone"></i><a href="tel:(+358) 9 2316 4346">(+358) 9 2316 4346</a></div>
				<ul class="social-style-one">
					<li><a href="https://www.facebook.com/therapion"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.youtube.com/user/therapion"><i class="fab fa-youtube"></i></a></li>
					<li><a href="https://www.linkedin.com/company/therapion-consulting"><i class="fab fa-linkedin"></i></a></li>
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
							<h1>My Professional Profile</h1>

							<div class="italic-text">Here are the key facts about my education and qualifications, 
								areas of expertise, office hours plus a short biography.</div>
						

							<h3>My Titles</h3>

							<div class="italic-text">{{ $psychologist->title }}</div>

							<h3>Qualifications and Certificates</h3>

							<div class="italic-text">{{ $psychologist->education }}</div>

							<h3>Areas of Expertise</h3>

							<div class="text">I can help you deal with the following issues: {{ $psychologist->topic }}</div>
							
							<h3>Office Hours</h3>

							<div class="text">{{ $psychologist->info }}</div>	

						</div>

						<div class="content-style-two">
							<h3>My Biography</h3>
							<div class="text">{{ $psychologist->about }}</div>			 							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
					<div class="sidebar gray-bg">
						<div class="sidebar-form">
						<h3>Book A Session</h3>
							<div class="text">Here you can book a personal counseling session with me.</div>
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
									<label>Type of Session</label>
									<div class="select-box">
										<select class="selectmenu">
											<option value="0" selected disabled>Choose one</option>
											@foreach ($psychologist->services as $item)
											<option value="{{ $item->id }}">{{ $item->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label>Schedule Your Session</label>
									<input type="email" name="info" required="">
								</div>
								<div class="form-group">
									<label>Your Message</label>
									<textarea name="message"></textarea>
								</div>
								<div class="form-group message-btn">
									<button type="submit" class="theme-btn">Confirm Your Booking</button>
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