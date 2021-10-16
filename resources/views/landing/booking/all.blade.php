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

<section class="team-section centred">
	<div class="container">
		<div class="sec-title">
			<div class="title">appointment scheduling and booking</div>
			<h1>Book a Session</h1>
			<br/>
			<p>Choose your counselor first. After that you can choose the session type. 
				Private counseling sessions are available by e-mail, chat, video conferencing and phone.</p>
		</div>
	</div>
</section>

<section class="team-section">
	<div class="container">
		<div class="row">
			@foreach ($psychologists as $psychologist)
				<div class="col-lg-4 col-md-6 col-sm-12 team-block">
					<div class="team-block-one">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('storage/' . $psychologist->photo) }}" alt="{{ $psychologist->name }}">
						    	<ul class="social-icons">
			            		<li><a href="{{ route('booking.details', $psychologist->id) }}">Book with me</a></li>
								</ul>
							</figure>
							<div class="lower-content">
								<h3><a href="{{ route('booking.details', $psychologist->id) }}">{{ $psychologist->name }}</a></h3>
								<span class="designation text-truncate">{{ $psychologist->title }}</span>
								<div class="text">{{ $psychologist->about }}</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
@endsection

@push('css')
<style>
	.image-box img {
		width: 370px;
		height: 370px;
		object-fit: cover;
	}
	.team-block-one .image-box .social-icons li a {
		border-radius: 10px;
		width: 100%;
		height: 100%;
		padding: 0 10px 0 10px;
	}
	.text {
		display: -webkit-box;
		-webkit-line-clamp: 4;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
</style>
@endpush('css')

@push('js')

@endpush('js')