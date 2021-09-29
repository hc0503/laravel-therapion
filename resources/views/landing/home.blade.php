@extends('layouts.landing')
@section('content')
	<!-- main-slider -->
	<section class="main-slider">
		<div class="main-slider-carousel owl-carousel owl-theme">
			<div class="slide" style="background-image:url({{ asset('/assets/images/main-slider/slider-1.jpg') }})">
					<div class="container clearfix">
						<div class="content-box">
							<h1>We are Always,<br />Always at Your Service</h1>
							<span>Customer Services</span>
							<div class="text">Our Customer Service Center is ready to assist you at all times.
							<br />We'll be glad to tell you more about online therapy services.</div>
							<div class="btn-box"><a href="contact.html" class="theme-btn-two">Contact us</a></div>
						</div>
					</div>
			</div>
			<div class="slide" style="background-image:url({{ asset('/assets/images/main-slider/slider-2.jpg') }})">
					<div class="container clearfix">
						<div class="content-box">
							<h1>Be Brave,<br />Help Yourself Now</h1>
							<span>Start Today</span>
							<div class="text">Be brave, take the first step. Get to us. Here you're not alone.
			                <br/>Talk to one of our qualified counselors today.
							</div>
							<div class="btn-box"><a href="contact.html" class="theme-btn-two">Book a Session</a></div>
						</div>
					</div>
			</div>
			<div class="slide" style="background-image:url({{ asset('/assets/images/main-slider/slider-3.jpg') }})">
					<div class="container clearfix">
						<div class="content-box">
							<h1>Be Smart,<br />Help Yourself Now</h1>
							<span>Get Help</span>
							<div class="text">Helping yourself is the best investment you can make. Period.
							<br/>It's also the best way to help people around you. Start now!</div>
							<div class="btn-box"><a href="contact.html" class="theme-btn-two">Book a Session</a></div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- main-slider end -->

	<!-- about-section -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 content-column">
					<div class="content-box">
						<div class="sec-title">
							<div class="title">about us</div>
							<h1>Professional Online Therapy and Counseling</h1>
						</div>
						<div class="bold-text">
						Welcome to Therapion!
                        Our website provides confidential online therapy and counseling services.
				</div>
						<div class="text">
							<p>Start today! Talk with a qualified psychologist, therapist or counselor from the comfort of your home or office. It’s easy, safe and affordable.
							</p>
						</div>
						<div class="btn-box"><a href="contact.html" class="theme-btn">Book a Session</a></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 video-column">
					<div class="video-content">
						<div class="video-icon wow zoomIn" data-wow-delay="1000ms" data-wow-duration="1500ms">
							<a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
						</div>
						<div class="image-box clearfix">
							<figure class="image-1"><img src="{{ asset('/assets/images/resource/about-1.jpg') }}" alt=""></figure>
							<figure class="image-2"><img src="{{ asset('/assets/images/resource/about-2.jpg') }}" alt=""></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-section end -->

	<!-- service-section -->
	<section class="service-section" style="background-image: url({{ asset('/assets/images/background/service-bg.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
					<div class="content-box">
						<div class="sec-title">
							<div class="title">our services</div>
							<h1>What Services<br />We Provide</h1>
							<p>Therapion provides a wide range of online therapy and counseling options.</p>
						</div>
						<div class="inner-box centred">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-argument"></i></div>
										<h4><a href="service-details-1.html">Individuals</a></h4>
										<div class="text">Professional online therapy and counseling for individuals.</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-woman"></i></div>
										<h4><a href="service-details-2.html">Couples and Families</a></h4>
										<div class="text">Help and guidance in your personal relationships.</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-brain"></i></div>
										<h4><a href="service-details-4.html">Communities</a></h4>
										<div class="text">Mental health care and preventive action plans for communities.</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-brain-1"></i></div>
										<h4><a href="service-details-3.html">Startup Mental Health</a></h4>
										<div class="text">Psychological wellbeing for new businesses of all sizes and types.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- service-section end -->

	<!-- work-section -->
	<section class="work-section centred">
		<div class="container">
			<div class="sec-title">
				<div class="title">work proccess</div>
				<h1>How does Therapion work?</h1>
				<p>Private online counseling sessions are available by e-mail, chat, video conferencing and phone.
<br />Our services are professional, easy to use and affordable. Start today!</p>
			</div>
			<div class="inner-box">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 column">
						<div class="single-item">
							<div class="icon-box">
								<div class="number">1</div>
								<figure class="icon"><img src="{{ asset('/assets/images/icons/work-icon-1.png') }}" alt=""></figure>
							</div>
							<h3><a href="#">Book a Session</a></h3>
							<div class="text">Book a session as you like it. <br>
							It can by e-mail, chat, video conferencing or phone.</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 column">
						<div class="single-item">
								<div class="icon-box">
									<div class="number">2</div>
									<figure class="icon"><img src="{{ asset('/assets/images/icons/work-icon-2.png') }}" alt=""></figure>
								</div>
								<h3><a href="#">Talk with the Counselor</a></h3>
								<div class="text">Talk with your counselor, either in a private online counseling
									session or by e-mail.</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 column">
						<div class="single-item">
							<div class="icon-box">
								<div class="number">3</div>
								<figure class="icon"><img src="{{ asset('/assets/images/icons/work-icon-3.png') }}" alt=""></figure>
							</div>
							<h3><a href="#">Enjoy Our Programs</a></h3>
							<div class="text">You can as well move on and enjoy one of our special Therapy Programs. They are practical and affordable 4-session packages.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- work-section end -->

	<!-- event-section -->
	<section class="event-section centred">
		<div class="container">
			<div class="sec-title">
				<div class="title">upcoming events</div>
				<h1>Free Live Events</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 event-block">
					<div class="event-block-one">
						<div class="inner-box">
							<figure class="image-box"><img src="{{ asset('/assets/images/resource/event-1.jpg') }}" alt=""></figure>
							<div class="lower-content">
								<div class="date">24<br /><span>October</span></div>
								<h3><a href="#">Personal Growth</a></h3>
								<div class="text">Join this event to talk about personal growth, self exploration and much more.</div>
								<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 event-block">
					<div class="event-block-one">
						<div class="inner-box">
							<figure class="image-box"><img src="{{ asset('/assets/images/resource/event-2.jpg') }}" alt=""></figure>
							<div class="lower-content">
								<div class="date">25<br /><span>October</span></div>
								<h3><a href="#">Life Changes</a></h3>
								<div class="text">Join this event to talk about major life changes and how to cope with them.</div>
								<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 event-block">
						<div class="event-block-one">
							<div class="inner-box">
								<figure class="image-box"><img src="{{ asset('/assets/images/resource/event-3.jpg') }}" alt=""></figure>
								<div class="lower-content">
									<div class="date">26<br /><span>October</span></div>
									<h3><a href="#">Counselor Training</a></h3>
									<div class="text">Join this free training session to find out more about our online counseling methods.</div>
									<div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- event-section end -->

	<!-- testimonial-section -->
	<section class="testimonial-section centred">
		<div class="image-column" style="background-image: url({{ asset('/assets/images/background/testimonial-bg.jpg') }});"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 content-column">
					<div class="content-box">
						<div class="sec-title">
							<div class="title">testimonials</div>
							<h1>Read What Our Customers Say</h1>
						</div>
						<div class="client-testimonial-carousel owl-carousel owl-theme">
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Therapion's online counseling service is an excellent way to get professional help, no matter where you live. 
											</div> 
									<h5 class="author">Tanja, 43 years</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">As an expat I truly appreciate being able to talk in my native language to a qualified counselor from the comfort of my home.</div> 
									<h5 class="author">Lisa from Singapore</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Very happy with the personal attention I've received from my counselor Carla, thank you!</div> 
									<h5 class="author">Carlos</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Great online workshops! I participated in the training session which was very informative and actually, quite fun, too!</div> 
									<h5 class="author">Helena, professional counselor</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Thank you so much, Britt! Help that I've got from you has been fantastic!</div> 
									<h5 class="author">Lena from Uppsala</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">I've learnt to know and understand myself so much better! Thank you so much!</div> 
									<h5 class="author">John Mark, NYC</h5>
								</div>
							</div>
						</div>
						
						<!--Client Thumbs Carousel-->
						<div class="client-thumb-outer">
							<div class="client-thumbs-carousel owl-carousel owl-theme">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="{{ asset('/assets/images/resource/testimonial-1.png') }}" alt=""></figure>
								</div>
								<div class="thumb-item">
									<figure class="thumb-box"><img src="{{ asset('/assets/images/resource/testimonial-2.png') }}" alt=""></figure>
								</div>
								<div class="thumb-item">
									<figure class="thumb-box"><img src="{{ asset('/assets/images/resource/testimonial-3.png') }}" alt=""></figure>
								</div>
								<div class="thumb-item">
									<figure class="thumb-box"><img src="{{ asset('/assets/images/resource/testimonial-1.png') }}" alt=""></figure>
								</div>
								<div class="thumb-item">
									<figure class="thumb-box"><img src="{{ asset('/assets/images/resource/testimonial-2.png') }}" alt=""></figure>
								</div>
								<div class="thumb-item">
									<figure class="thumb-box"><img src="{{ asset('/assets/images/resource/testimonial-3.png') }}" alt=""></figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonial-section end -->

	<!-- faq-section -->
	<section class="faq-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 content-column">
					<div class="content-box">
						<div class="sec-title">
							<div class="title">faq’s</div>
							<h1>Frequently<br />Asked Questions</h1>
						</div>
						<div class="bold-text">Clinical studies worldwide have shown that online therapy is a very effective treatment. In fact, it is as efficient as the more traditional forms of face-to-face psychotherapy, and its results can be durable.
						</div>
						<div class="text">
							<p>Read this section to find more about its many benefits.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 faq-column">
					<div class="faq-content">
						<ul class="accordion-box">
							<li class="accordion block active-block">
								<div class="acc-btn active">
									<div class="icon-outer"><i class="flaticon-add-1"></i></div>
									<h5>What is this kind of treatment good for?</h5>
								</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Wide variety of issues can be helped with, or completely solved with online therapy and counseling. Our specialties include, but are not limited to, stress, depression, anxiety, loneliness, issues with self-esteem, social anxiety, eating disorders and obesity, shyness, guilt, anger, relationship advice, marriage and couples counseling, divorce and breakup, life transition and expat coaching.
											Note that this is not an emergency service. Contact a local hotline if you need immediate help.</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><i class="flaticon-add-1"></i></div>
									<h5>What type of therapy is offered?</h5>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">In our team you will find specialists from all the most important areas of psychology and psychotherapy. Choose the expert according to your needs!
											All our psychologists, counselors and therapists are fully licensed and registered. 
											At Therapion, we strongly believe that each and one of us needs to be able to choose how he or she communicates with the others. Therefore, with us, you have a rich selection of communication methods available. It means that you are completely free to choose whether you want to write or talk with the counselor.</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><i class="flaticon-add-1"></i></div>
									<h5>How long does online therapy last?</h5>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Online therapy is best suited for short or medium term. 
											Typical duration of it varies from one session to a few months of treatment. 
											You can start with a single session, and ask the therapist for a treatment plan if you like.
											</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><i class="flaticon-add-1"></i></div>
									<h5>What is Therapion?</h5>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Therapion is a leading online therapy website.
											We've been providing mental health care services all over the world for over ten years.
										Today our counseling services are available in 15 different languages and we are present on all continents.
											</div>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- faq-setion end -->

	<!-- news-section -->
	<section class="news-section">
		<div class="container">
			<div class="sec-title centred">
				<div class="title">my blog</div>
				<h1>Latest Articles</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 news-block">
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-details.html"><img src="{{ asset('/assets/images/resource/news-1.jpg') }}" alt=""></a></figure>
							<div class="categorie-list">
								<a href="#">Clinical</a>
								<a href="#">Psychotherapy</a>
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>by <span>Britt Berglind</span></li>
									<li>Clinical Professional Counselor</li>
								</ul>
								<h3><a href="blog-details.html">Life in the time of Covid-19: What has changed and what has not?</a></h3>
								<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 news-block">
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-details.html"><img src="{{ asset('/assets/images/resource/news-2.jpg') }}" alt=""></a></figure>
							<div class="categorie-list">
								<a href="#">Cognitive-Behavioral</a>
								<a href="#">Therapy</a>
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>by <span>Nicholas P. Sarantakis</span></li>
									<li>Integrative Therapist</li>
								</ul>
								<h3><a href="blog-details.html">Remote counselling & video-conference based CBT</a></h3>
								<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 news-block">
					<div class="news-block-one">
						<div class="inner-box">
							<figure class="image-box"><a href="blog-details.html"><img src="{{ asset('/assets/images/resource/news-3.jpg') }}" alt=""></a></figure>
							<div class="categorie-list">
								<a href="#">Therapion</a>
								<a href="#">Newsletter</a>
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>by <span>Timo Kojonen</span></li>
									<li>Psychologist, Therapion CEO</li>
								</ul>
								<h3><a href="blog-details.html">Therapion Newsletter tells you the latest news</a></h3>
								<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- news-section end -->
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')