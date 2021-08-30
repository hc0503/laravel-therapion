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

<!-- pricing-section -->
<section class="pricing-section centred">
	<div class="container">
		<div class="sec-title">
			<div class="title">pricing table</div>
			<h1>Choose Your Plan</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipicing elit sed do usmod tempor incididunt.enim ad<br />minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip commodo.</p>
		</div>
		<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
					<div class="pricing-table">
						<div class="table-header">
							<span>Basic Plan</span>
							<h1>$39.75 <span>/ mo</span></h1>
						</div>
						<div class="table-content">
							<ul>
								<li>1 User</li>
								<li>Competitive analysis</li>
								<li>Monthly management</li>
								<li>Marketing strategy</li>
								<li>Single Project</li>
							</ul>
						</div>
						<div class="table-footer"><a href="#">Select A Plan</a></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
					<div class="pricing-table">
						<div class="table-header">
							<span>Standard Plan</span>
							<h1>$69.75 <span>/ mo</span></h1>
						</div>
						<div class="table-content">
							<ul>
								<li>1 User</li>
								<li>Competitive analysis</li>
								<li>Monthly management</li>
								<li>Marketing strategy</li>
								<li>Single Project</li>
							</ul>
						</div>
						<div class="table-footer"><a href="#">Select A Plan</a></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
					<div class="pricing-table">
						<div class="table-header">
							<span>Premium Plan</span>
							<h1>$99.75 <span>/ mo</span></h1>
						</div>
						<div class="table-content">
							<ul>
								<li>1 User</li>
								<li>Competitive analysis</li>
								<li>Monthly management</li>
								<li>Marketing strategy</li>
								<li>Single Project</li>
							</ul>
						</div>
						<div class="table-footer"><a href="#">Select A Plan</a></div>
					</div>
				</div>
		</div>
	</div>
</section>
<!-- pricing-section end -->
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')