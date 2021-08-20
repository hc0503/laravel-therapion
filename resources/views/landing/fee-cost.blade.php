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
				<img class="mt-5" src="{{ asset('assets/images/resource/relaxedwoman.jpg') }}"
				alt="Get professional help at affordable prices." style="border: 2px solid #6ecc84;"/>
				<h2 class="mt-4">Fees and Costs</h1>
				<p class="mt-1 mb-1">E-mail counseling: 25 USD </p>
				<p class="mt-1 mb-1">Chat counseling (30 min): 40 USD </p>
				<p class="mt-1 mb-1">Videoconference counseling (45 min): 60 USD </p>
				<p class="mt-1 mb-1">Phone* counseling (45 min): 60 USD </p>
				<a class="link mt-1 mb-1" href="/therapy-programs.php">Therapy programs: Special fees<img class="ml-2" src="../assets/images/internal-link.png"></a>
				<p class="mt-1 mb-4 font-italic">*Note: Your counselor will call you. The fee includes the outgoing call from him/her to you. </p>
				<h2 class="font-italic" style="color: #3D5B65 !important;">Payment Options</h2>
				<p class="mt-1 mb-1 font-italic">The above listed fees are in dollars. However, you can pay in another currency (EUR, GBP) if you prefer. </p>
				<p class="mt-1 mb-1 font-italic">All sessions require prepayment. The system automatically displays the payment options after you have sent your booking.  </p>
				<p class="mt-1 mb-1 font-italic">We accept all major debit and credit cards. To use PayPal or international bank transfers, please visit the page below. </p>
				<div class="text-center">
					<a href="/payments.php" class="theme-btn mt-4">International Payment Options</a>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="mt-5 font-italic">Using Our Service is Easy</h1>
				<p class="mt-1 mb-1 font-italic"> Using our service is easy. There are three steps: </p>
				<ul class="simple-list">
					<li class="font-italic">
						Book your session.
					</li>
					<li class="font-italic">
						Get a confirmation e-mail from your counselor. 
					</li>
					<li class="font-italic">
						Have your private session. 
					</li>
				</ul>
				<h2 class="mt-5 font-italic"> Using Our Service is Fast</h1>
				<p class="mt-1 mb-1 font-italic">Our service is very fast. E-mail sessions will be answered within the next 24 hours after booking if not sooner. Live sessions are available 24 hours every day. Normally it takes just a few minutes, or maximum a few hours, to get the service you paid for.</p>
				<p class="mt-3 mb-1 font-italic">Ready to start?<a class="link ml-3" href="/booking-new">Make your booking now!<img class="ml-2" src="../assets/images/internal-link.png"></a></p>
				<h2 class="mt-5 mb-0 font-italic"> Terms and Conditions </h1>
				<p class="mt-1 mb-1 font-italic">Legal disclaimer </p>
				<p class="mt-1 mb-1 font-italic">This is not a substitute for an emergency service. By using our services, you agree to our User Agreement: </p>
				<p class="mt-3 mb-1 font-italic"><a class="link" href="/terms-and-conditions.php">Terms and Conditions<img class="ml-2" src="../assets/images/internal-link.png"></a></p>
				<p class="mt-3 mb-1 font-italic">Legal statement for clients from the European Union: We are committed to Europe’s new General Data Protection Regulation. </p>
				<p class="mt-3 mb-4 font-italic"><a class="link" href="/gdpr-implementation.php">Read Our GDPR Implementation Policies<img class="ml-2" src="../assets/images/internal-link.png"></a></p>
				<h2 class="font-italic" style="color: #3D5B65 !important;">Customer Service</h2>
				<p class="mt-2 mb-1 font-italic">Contact us if you need any assistance or would like to use an international bank transfer to complete the payment. </p>
				<div class="text-center">
					<a href="/formcustomerservice.php" class="theme-btn mt-4">Customer Service</a>
				</div>
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