@extends('layouts.landing')
@section('content')
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

<section class="pricing-section">
	<div class="container">
		<div>
			<h1>Payment options</h1>
			<p>Please make your payment by following the instructions below.</p>
			<p>Your counselor will contact you via e-mail after we have received payment, either to answer your question or to confirm your live session time.</p>
			<p>We accept all major debit and credit cards.</p>
		</div>

		<div class="mt-5">
			<h1>Pay Now</h1>
			<p>Please make your payment now.</p>
    		<form action="{{ route('stripe.checkout') }}" method="POST">
				@csrf
				<select name="price" id="price">
					<option value="60">Phone counseling - 60.00USD</option>
					<option value="110">Email counseling - 110.00USD</option>
				</select>
				<button class="theme-btn" type="submit">Pay Now</button>
			</form>
		</div>
	</div>
</section>
@endsection