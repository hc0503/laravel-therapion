<!DOCTYPE html>
<html lang="@if(session()->has('locale')){{ session()->get('locale') }}@else{{ 'en' }}@endif">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<meta name="robots" content="noindex, nofollow" />

	<title>{{ $pageTitle ?? 'Landing' }} - {{ config('app.name', 'Laravel') }}</title>
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Stylesheets -->
	<link href="{{ asset('assets/css/style.css')}} " rel="stylesheet">
	<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/app.css') }}" rel="stylesheet">

	@stack('css')

</head>

<!-- page wrapper -->

<body class="main_page">


	<!-- .preloader -->
	<div class="preloader"></div>
	<!-- /.preloader -->

	@include('partials.landing.topbar')

	@yield('content')

	@include('partials.landing.subscribe')

	@include('partials.landing.footer')

	<!-- jequery plugins -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('assets/js/owl.js') }}"></script>
	<script src="{{ asset('assets/js/wow.js') }}"></script>
	<script src="{{ asset('assets/js/validation.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

	<!-- main-js -->
	<script src="{{ asset('assets/js/script.js') }}"></script>

	@stack('js')

</body><!-- End of .page_wrapper -->

</html>