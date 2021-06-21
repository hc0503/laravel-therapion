@extends('layouts.landing')
@section('content')

<!--Page Title-->
<section class="page-title centred"	style="background-image: url({{ asset('/assets/images/background/page-title-2.jpg') }});">
</section>
<!--End Page Title-->

<!-- contact-section -->
<section class="contact-section mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mt-4 mb-3">About Our Services</h2>
				<p class="mt-1 mb-1">Online Therapy (the term E-Therapy is also used) is the delivery of mental health services online via e-mail, live chat, or webcam. Telephone therapy is also included in this broad definition.  </p>
				<p class="mt-1 mb-1">E-mail therapy is provided via an exchange of detailed e-mail messages. This form of therapy functions in delayed time.  </p>
				<p class="mt-1 mb-1">Live chat therapy functions by the therapist and client exchanging written messages in real time in a secure chat room, or other form of instant messaging, such as Skype or Zoom. </p>
				<p class="mt-1 mb-1">Therapy done via webcam is done by the therapist and client, using Skype, Zoom, or other form of videoconferencing. The session is conducted in real time. Feel free to choose the program needed for videoconferencing according to your individual needs. We do not promote any particular platform. </p>
				<p class="mt-1 mb-1">Phone therapy is conducted with both the therapist and the client on the telephone at the same time; it is conducted in real time. </p>
				<p class="mt-1 mb-1">
					Other service specialties we offer are 
					<a class="link small mt-1 mb-1" href="/expat-counseling-coaching.php">Expat Counseling<img class="ml-2" src="../assets/images/internal-link.png"></a>
					 and 
					<a class="link small mt-1 mb-1" href="/career-coaching.php">Career Coaching<img class="ml-2" src="../assets/images/internal-link.png"></a>
				</p>
				<h2 class="mt-4" style="color: #3D5B65 !important;">Further Information</h2>
				<div class="text-center">
					<a href="/guidelines.php" class="theme-btn mt-4">Technical Guidelines</a>
				</div>
			</div>
			<div class="col-md-6">
				<img class="mt-5" src="{{ asset('assets/images/resource/counseling-at-home.jpg') }}"
				alt="Get professional help at affordable prices." style="border: 2px solid #6ecc84;"/>
				<h2 class="mt-4">Ethical Guidelines</h2>
				<p class="mt-1 mb-1">We respect strict ethical guidelines in our work. All client information is kept confidential and is not used for marketing purposes.  </p>
				<h3 class="mt-4">Important</h3>
				<p class="mt-1 mb-1 font-weight-bold text-dark">This is not an emergency service. </p>
				<p class="mt-1 mb-1">
					<a class="link mt-1 mb-1" href="/terms-and-conditions.php">Read Our User Agreement<img class="ml-2" src="../assets/images/internal-link.png"></a>
					 before using the service
				</p>
			</div>
		</div>
	</div>
</section>
<!-- contact-section end -->
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')