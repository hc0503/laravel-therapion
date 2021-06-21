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
				<h2 class="mt-4 mb-0">Jobs: Counselor, Psychologist, or Psychotherapist</h2>
				<h3 class="mt-4 mb-3"> Desired Qualifications:</h3>
				<ul class="simple-list">
					<li>
						Master's degree in counseling, clinical psychology, psychotherapy, or the equivalent. 
					</li>
					<li>
						Good Internet skills
					</li>
					<li>
						Basic knowledge of social media
					</li>
					<li>
						Home-based part-time & online work
					</li>
				</ul>
				<h3 class="mt-4 mb-3">Special Instructions to applicants</h3>
				<p class="mt-1 mb-1"> Please send your resume and a brief cover letter to us by e-mail. </p>
				<p class="mt-1 mb-1">Entitle your message: "Counselor, Psychologist, or Psychotherapist" </p>
				<h3 class="mt-4 mb-3">Contact</h3>
				<p class="mt-1 mb-1">E-mail: info@therapion.com</p>
				<p class="mt-1 mb-1"> If you have questions about this position, please contact us. </p>
				<div class="text-center">
					<a href="/guidelines.php" class="theme-btn mt-4">Contact us</a>
				</div>
				<h2 class="mt-4 mb-3">Special Training Seminar</h2>
				<p class="mt-1 mb-1"> Would you be interested in our special training seminar for counselors and therapists? If so, take a look at this page: </p>
				<a class="link mt-1 mb-1" href="/training-for-counselors.php">Methods in Online Counseling<img class="ml-2" src="../assets/images/internal-link.png"></a>
			</div>
			<div class="col-md-6">
				<h2 class="mt-4">Company Information</h2>
				<p class="mt-1 mb-1">Founded in 2005, Therapion Consulting is a private company specializing in mental health services and coaching. Our world headquarters are in Helsinki, Finland. </p>
				<p class="mt-1 mb-1">Timo Kojonen, M.Sc., M.Psych., MBA serves as CEO.</p>
				<p class="mt-1 mb-1">
					For further information 
					<a class="link mt-1 mb-1" href="/formcustomerservice.php">Contact us<img class="ml-2" src="../assets/images/internal-link.png"></a>
				</p>
				<h2 class="mt-4">Open Management Positions</h2>
				<p class="mt-2 mb-1">
					We are currently looking for 
					<a class="link mt-1 mb-1" href="/sales-manager.php">Business Managers<img class="ml-2" src="../assets/images/internal-link.png"></a>
				</p>
				<img class="mt-4" src="{{ asset('assets/images/resource/therapion-office.webp') }}"
				alt="Get professional help at affordable prices." style="border: 2px solid #6ecc84;"/>
				<h2 class="mt-4 mb-2">Further Resources</h2>
				<ul class="simple-list">
					<li>
						<a class="link mt-1 mb-1" href="/news.php">Press & Media<img class="ml-2" src="../assets/images/internal-link.png"></a>
					</li>
					<li>
						<a class="link mt-1 mb-1" href="/friends.php">Our Global Partners<img class="ml-2" src="../assets/images/internal-link.png"></a>
					</li>
				</ul>
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