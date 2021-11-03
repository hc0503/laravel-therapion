@extends('layouts.landing')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-5.jpg') }});">
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

<section class="pricing-section centred">
	<div class="container">
		<div class="sec-title">
			<div class="title">pricing table</div>
			<h1>Fees and Costs</h1>
			<br/>
			<p>This is our list of fees and costs for individuals. Choose a single session or enjoy one of our affordable 4-session packages.</p>
		</div>

		<div class="list-content">
			<h3>SINGLE SESSIONS FOR INDIVIDUALS</h3>
			<br/>
			<ul class="list">
				<li>E-mail counseling: 25 USD</li>
				<li>Chat counseling (30 min): 40 USD</li>
				<li>Videoconference counseling (45 min): 60 USD</li>
				<li>Phone* counseling (45 min): 60 USD</li>
			</ul>
		</div>
		<br />
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
				<div class="pricing-table">
					<div class="table-header">
						<span>Program One</span>
						<h1>$90.00 <span></span></h1>
					</div>
					<div class="table-content">
						<ul>
							<li>1 User</li>
							<li>Four private sessions with your counselor</li>
							<li>Includes 4 x e-mail sessions</li>
							<li>Estimated duration: 4 weeks</li>
							<li>The price includes a 10% discount</li>
							<li>Ideal for those users who like to write about their personal situation without any rush</li>
						</ul>
					</div>
					<div class="table-footer"><a href="{{ route('booking.all') }}">Select A Program</a></div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
				<div class="pricing-table">
					<div class="table-header">
						<span>Program Two</span>
						<h1>$144.00 <span></span></h1>
					</div>
					<div class="table-content">
						<ul>
							<li>1 User</li>
							<li>Four private sessions with your counselor</li>
							<li>Includes 4 x chat sessions</li>
							<li>Estimated duration: 4 weeks</li>
							<li>The price includes a 10% discount</li>
							<li>Ideal for those users who like to write about their personal situation and get instant feedback</li>
						</ul>
					</div>
					<div class="table-footer"><a href="{{ route('booking.all') }}">Select A Program</a></div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
				<div class="pricing-table">
					<div class="table-header">
						<span>Program Three</span>
						<h1>$216.00 <span></span></h1>
					</div>
					<div class="table-content">
						<ul>
								<li>1 User</li>
							<li>Four private sessions with your counselor</li>
							<li>Includes 4 x videoconference sessions</li>
							<li>Estimated duration: 4 weeks</li>
							<li>The price includes a 10% discount</li>
							<li>Ideal for those users who like to talk about their personal situation and get instant feedback,  
							with or without a webcam</li>
						</ul>
					</div>
					<div class="table-footer"><a href="{{ route('booking.all') }}">Select A Program</a></div>				
				</div>
			</div>
		</div>
	</div>
	<br/>
	<h3>Payment Options</h3>
	<br/>
	<p>
		Note that the above listed fees are in dollars. However, you can pay in another currency (EUR, GBP) if you prefer. 
	</p>
	<p>
		All sessions require prepayment. The system automatically displays the payment options after you have sent your booking.
	</p>
	<p>
		*Phone counseling: Your counselor will call you. The fee includes the outgoing call from him/her to you.
	</p>
  	<p>
		We accept all major debit and credit cards via Stripe. To use PayPal or international bank transfers, 
		take a look at our additional payment options.		
 	</p>
	 <div class="btn-box"><a href="#" class="theme-btn-two">Additional Payment Options</a></div>

</section>
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')