@extends('layouts.landing')

@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-6.jpg') }});">
	<div class="container">
		 <div class="content-box">
			  <h1>{{ $errorCode }} {{ $pageTitle }}</h1>
			  <ul class="bread-crumb clearfix">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li>{{ $errorCode }} {{ $pageTitle }}</li>
			  </ul>
		 </div>
	</div>
</section>
<!--End Page Title-->

<!-- error-section -->
<section class="error-section centred">
	<div class="container">
		<div class="inner-content">
			<h3>{{ $errorMessage }}</h3>
			<div class="btn-box"><a href="{{ route('home') }}" class="theme-btn">Back to main page</a></div>
		</div>
	</div>
</section>
<!-- error-section end -->
@endsection
