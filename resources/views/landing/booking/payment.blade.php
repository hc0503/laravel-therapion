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
		
		<div class="row mt-5">
			<div class="col-md-6">
				<h1>Pay Now</h1>
				<p>Please make your payment now.</p>

				@foreach ($prices as $item)
					 <div class="mt-4">
						@if ($item->currency === 'USD')
							<h2 class="mb-3">Payment in dollars</h2>
						@elseif ($item->currency === 'EUR')
							<h2 class="mb-3">Payment in euros</h2>
						@elseif ($item->currency === 'GBP')
							<h2 class="mb-3">Payment in British pounds</h2>
						@endif
						<form action="{{ route('stripe.checkout', $booking->id) }}" method="POST">
							@csrf
							
							<input type="hidden" name="currency" value="{{ $item->currency }}" />
							<select name="price" id="price">
								<option value={{ $item->price }}>{{ $item->service->title }} - {{ $item->price }}{{ $item->currency }}</option>
							</select>
							<button class="theme-btn" type="submit">Pay Now</button>
						</form>
					</div>
				@endforeach

				<div class="mt-5">
					<h2 class="mb-3">Therapy programs</h2>
					<p>Program one = 2 X e-mail + 2 X videoconference counseling</p>
					<p>Program two = 2 X chat + 2 X videoconference counseling</p>
					<p>Program three = 4 X videoconference counseling</p>
				</div>
			</div>
			<div class="col-md-6">
				<h2>Customer Service</h2>
				<p>Contact our Customer Service if you have questions or need further help with your booking.</p>
				<a href="#">Customer Service</a>

				<h2 class="mt-5">Cancel your booking</h2>
				<p>Unpaid sessions get automatically cancelled.</p>
				<a href="/">Homepage</a>
			</div>
		</div>
	</div>
</section>
@endsection

@push('css')
<style>
	.theme-btn {
		padding: 5px 15px;
		font-size: 14px;
	}
</style>
@endpush