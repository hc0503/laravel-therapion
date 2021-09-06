@extends('layouts.landing')
@section('content')

<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-2.jpg') }});">
	<div class="container">
		 <div class="content-box">
			  <h1>Appointment Scheduling and Booking</h1>
			  <ul class="bread-crumb clearfix">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>Book</li>
			  </ul>
		 </div>
	</div>
</section>
<!--End Page Title-->

<section class="team-section">
	<div class="container">
		<div class="row">
			@foreach ($psychologists as $psychologist)
				<div class="col-lg-4 col-md-6 col-sm-12 team-block">
					<div class="team-block-one">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{ asset('storage/profiles/' . $psychologist->photo) }}" alt="{{ $psychologist->name }}">
								<ul class="social-icons">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
							</figure>
							<div class="lower-content">
								<h3><a href="#">{{ $psychologist->name }}</a></h3>
								<span class="designation">{{ $psychologist->title }}</span>
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
</style>
@endpush('css')

@push('js')

@endpush('js')