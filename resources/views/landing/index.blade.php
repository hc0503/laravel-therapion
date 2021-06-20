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
				<div>
					<h1 class="mt-5">Online Therapy and Counseling</h1>
					<p>Welcome to Therapion!</p>
					<p>We are your specialist in online therapy and counseling.</p>
					<p>Use our services from the comfort of your home or office. It’s easy, safe and affordable.</p>
					<p>Start today! Talk with a qualified psychologist or counselor by e-mail, chat, videoconferencing or phone.</p>
					<div class="text-center mt-2">
						<a href="/book" class="theme-btn">BOOK A SESSION</a>
					</div>
					<div class="mt-4">
						<img class="scale-with-grid" src="{{ asset('assets/images/resource/mental-health.webp') }}"
							alt="Get mental health care from home!" style="border: 2px solid #6ecc84;"/>
					</div>
					<h1 class="mt-5">The Many Benefits of Online Therapy</h1>
					<p>Online therapy offers you numerous benefits.</p>
					<ul class="simple-list">
						<li>Efficient time-management: never again will you waste time in traffic jams, trying to get to a counselor’s consulting room on time.</li>
						<br>
						<li>Many options of therapists and psychologists: In our team you will find specialists from all the most important areas of psychology 
							and psychotherapy. Choose the expert according to your needs!</li>
						<br>
						<li>Save money: We provide professional counseling at affordable fees. Get the help you need at a lower cost!</li>
						<br>
						<li>Continuity: Are you changing city or neighborhood? It doesn't matter, you can keep the same therapist with whom you already started 
							to talk.</li>
						<br>
						<li>Positive treatment results: Several clinical studies worldwide have shown that online therapy is a very effective treatment. 
							In fact, it is as efficient as the more traditional forms of face-to-face psychotherapy, and its results can be durable. </li>
						<br>
						<li>Privacy and comfort: Use our services from your home or office. Choose the time that you like best. Choose the communication channel. 
							You control the process and the level of privacy at all times.</li>
						<br>
						<li>
							Wide variety of problems that can be dealt with:
							Our online therapy and online counseling specialties include, but are not limited to, stress, depression,
							anxiety, loneliness, isses with self-esteem, social anxiety, eating disorders and obesity, shyness, guilt,
							anger, relationship advice, marriage and couples counseling, divorce and breakup, life transition and
							expat coaching.
						</li>
					</ul>
					<div class="mt-4">
						<img class="scale-with-grid" src="{{ asset('assets/images/resource/tablet-new.webp') }}"
							alt="Psychotherapy from distance is efficient!" style="border: 2px solid #6ecc84;">
					</div>
				</div>
			</div><!-- FIN COLUMNA1 -->
			<div class="col-md-6">
				<div class="info">
					<h1 class="mt-5">CUSTOMER SERVICE</h1>
					<p>
						Our customer service center is confidential and free of charge. We'll be happy to tell you more about our therapy and counseling services.
					</p>
					<div class="text-center mt-2">
						<a href="/contact-us" class="theme-btn">Contact us</a>
					</div>
					<br>
					<p>
						<img class="scale-with-grid" src="{{ asset('assets/images/resource/psychotherapy-done-remotely.webp') }}"
							alt="Online therapy works for me!" style="border: 2px solid #6ecc84;">
					</p>
					<h1 class="mt-5">TRAINING FOR COUNSELORS</h1>
					<p>
						In addition to counseling services, we provide professional training for counselors and therapists.
						Here you'll find our current online seminars:
					</p>
					<p>
						<a class="link small" href="./training-for-counselors.php">Methods in Online Counseling<img class="ml-2" src="../assets/images/internal-link.png"></a>
					</p>
					<p>
						Our special training seminar covers all essential aspects of online counseling such as different counseling
						methods and communication channels, ethics and security, industry best practices, and much more. We strongly
						recommend this training to all professional counselors.
					</p>
					<h1 class="mt-5">
						Professional Mental Health Care
					</h2>
					<p>
						Start to use Therapion today! All our counselors, psychologists, and therapists are fully licensed and
						registered. Your confidentiality and privacy are guaranteed. Our site is safe, reliable, and easy to use.
					</p>
					<p>
						At Therapion, we strongly believe that each and one of us needs to be able to choose how he or she
						communicates with the others. Therefore, with us, you have a rich selection of communication methods
						available. It means that you are completely free to choose whether you want to write or talk with the
						counselor.
					</p>
					<p>
						Use e-mail or chat to write, or talk by phone or videoconferencing. It’s simple as that. Therapion believes
						in personal freedom. Beside professionalism it is one of our fundamental core values.
						You are welcome to contact us at any time. We'll be happy to tell you more!
					</p>
					<p>
						At Therapion, we've been providing online therapy all over the world for over ten years. Today our
						counseling services are available in 15 different languages and we are present on all continents.
					</p>
					<br>
					<h1 class="mt-5">
						Therapion Reviews and News
					</h1>
					<p>
						Here you'll find customer reviews, the latest company news, interesting articles and much more.
					</p>
					<ul class="simple-list">
						<li>
							<a class="link"
								href="https://www.google.com/maps/place/Therapion+Consulting/@60.163352,24.91587,17z/data=!4m7!3m6!1s0x46920a42d0411e57:0x5b2898f16b72f02b!8m2!3d60.163352!4d24.918064!9m1!1b1">
								Reviews: Read What Our Customers Say
								<img class="ml-2" src="../assets/images/internal-link.png">
							</a>
						</li>
						<li> <a class="link" href="/news.php"> Therapion in the Press<img class="ml-2" src="../assets/images/internal-link.png">
							</a>
						</li>
						<li>
							<a class="link" href="https://onlinetherapyarticles.wordpress.com">
								Article: Life in the time of Covid-19<img class="ml-2" src="../assets/images/internal-link.png">
							</a>
						</li>
					</ul>
					<h1 class="mt-5">FREE LIVE EVENTS - SUMMER 2021</h3>
					<p>
						You are welcome to assist our online live events. They are always free and open to everyone.
					</p>
					<p>
						<b>
							Next event: "Mental health and Covid-19"
						</b>
					</p>
					<p>
						The current pandemia is affecting all of us. Here we want to share some practical tips and advice on how to
						survive it.
					</p>
					<p>
						Our focus is on mental health. However, it does not exclude issues related to well-being in general.
					</p>
					<p>
						Come and join us for this live event to talk about how to overcome these stressful times.
					</p>
					<p>
						Date: Thursday, June 17, 2021.
					</p>
					<p>
						Starting time: 7:00 pm Houston, USA (Central Day Time: UTC/GMT -5 hours). 8:00 pm Montréal, Canada.
					</p>

					<p>
						Duration: 40 minutes
						<br>
						Platform: ZOOM
					</p>

					<p class="mt-2">
						<a class="link" href="./formcustomerservice.php">Enroll To The Upcoming Event<img class="ml-2" src="../assets/images/internal-link.png"></a>
					</p>
					<p class="mt-2">
						<a class="link" href="./live-show.php">Read More About Our Live Events<img class="ml-2" src="../assets/images/internal-link.png"></a>
					</p>
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