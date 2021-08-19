@extends('layouts.landing')
@section('content')
	<!-- main-slider -->
	<section class="main-slider">
		<div class="main-slider-carousel owl-carousel owl-theme">
			<div class="slide" style="background-image:url({{ asset('/assets/images/main-slider/slider-1.jpg') }})">
					<div class="container clearfix">
						<div class="content-box">
							<h1>Be Smart,<br />Help Yourself Now</h1>
							<span>Free Consultation</span>
							<div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa.</div>
							<div class="btn-box"><a href="contact.html" class="theme-btn-two">Contact us</a></div>
						</div>
					</div>
			</div>
			<div class="slide" style="background-image:url({{ asset('/assets/images/main-slider/slider-2.jpg') }})">
					<div class="container clearfix">
						<div class="content-box">
							<h1>Be Smart,<br />Help Yourself Now</h1>
							<span>Free Consultation</span>
							<div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa.</div>
							<div class="btn-box"><a href="contact.html" class="theme-btn-two">Contact us</a></div>
						</div>
					</div>
			</div>
			<div class="slide" style="background-image:url({{ asset('/assets/images/main-slider/slider-3.jpg') }})">
					<div class="container clearfix">
						<div class="content-box">
							<h1>Be Smart,<br />Help Yourself Now</h1>
							<span>Free Consultation</span>
							<div class="text">Excepteur sint occaecat cupidatat non proident sunt in culpa.</div>
							<div class="btn-box"><a href="contact.html" class="theme-btn-two">Contact us</a></div>
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
							<div class="title">about me</div>
							<h1>Professional Psychology Therapy</h1>
						</div>
						<div class="bold-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloreque laudantum.</div>
						<div class="text">
							<p>Lorem ipsum dolor sit amet consectetur adipicing elit sed do usmod tempor incididunt.enim ad minim veniam, quis nostrud exer citation ulla mco laboris nisi ut aliquip commodo.</p>
						</div>
						<div class="btn-box"><a href="contact.html" class="theme-btn">Contact Us</a></div>
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
							<div class="title">my services</div>
							<h1>What Service<br />Provide</h1>
							<p>Excepteur sint occaecat cupidatat proident sunt culpa officia desernt mollit anim est laborum sed perspiciatis.</p>
						</div>
						<div class="inner-box centred">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-argument"></i></div>
										<h4><a href="service-details-1.html">Couples Therapy</a></h4>
										<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte.</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-woman"></i></div>
										<h4><a href="service-details-2.html">Teens & Youth</a></h4>
										<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte.</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-brain"></i></div>
										<h4><a href="service-details-4.html">Individuals</a></h4>
										<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte.</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 service-block">
									<div class="service-block-one">
										<div class="icon-box"><i class="flaticon-brain-1"></i></div>
										<h4><a href="service-details-3.html">Family Therapy</a></h4>
										<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmte.</div>
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
				<h1>How Morriston work?</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipicing elit sed do usmod tempor incididunt.enim ad minim<br />veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip commodo.</p>
			</div>
			<div class="inner-box">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 column">
						<div class="single-item">
							<div class="icon-box">
								<div class="number">1</div>
								<figure class="icon"><img src="{{ asset('/assets/images/icons/work-icon-1.png') }}" alt=""></figure>
							</div>
							<h3><a href="#">Make Schedule</a></h3>
							<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmtempor encid dolore.</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 column">
						<div class="single-item">
								<div class="icon-box">
									<div class="number">2</div>
									<figure class="icon"><img src="{{ asset('/assets/images/icons/work-icon-2.png') }}" alt=""></figure>
								</div>
								<h3><a href="#">Start Discussion</a></h3>
								<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmtempor encid dolore.</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 column">
						<div class="single-item">
							<div class="icon-box">
								<div class="number">3</div>
								<figure class="icon"><img src="{{ asset('/assets/images/icons/work-icon-3.png') }}" alt=""></figure>
							</div>
							<h3><a href="#">Enjoy Plan</a></h3>
							<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmtempor encid dolore.</div>
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
				<h1>My Programs</h1>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 event-block">
					<div class="event-block-one">
						<div class="inner-box">
							<figure class="image-box"><img src="{{ asset('/assets/images/resource/event-1.jpg') }}" alt=""></figure>
							<div class="lower-content">
								<div class="date">26<br /><span>April</span></div>
								<h3><a href="#">Psychology Therapy</a></h3>
								<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmtempor encid dolore.</div>
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
								<div class="date">24<br /><span>April</span></div>
								<h3><a href="#">Restoring Confidense</a></h3>
								<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmtempor encid dolore.</div>
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
									<div class="date">23<br /><span>April</span></div>
									<h3><a href="#">Work Improvements</a></h3>
									<div class="text">Lorem ipsum dolor sit amet adipelit sed eiusmtempor encid dolore.</div>
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
							<h1>Customers Say</h1>
						</div>
						<div class="client-testimonial-carousel owl-carousel owl-theme">
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid et dolore magna aliqu enim minim veniam quis nostrud exercullamco</div> 
									<h5 class="author">William Ayrton</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid et dolore magna aliqu enim minim veniam quis nostrud exercullamco</div> 
									<h5 class="author">Robertson</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid et dolore magna aliqu enim minim veniam quis nostrud exercullamco</div> 
									<h5 class="author">William Ayrton</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid et dolore magna aliqu enim minim veniam quis nostrud exercullamco</div> 
									<h5 class="author">William Ayrton</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid et dolore magna aliqu enim minim veniam quis nostrud exercullamco</div> 
									<h5 class="author">Robertson</h5>
								</div>
							</div>
							<div class="testimonial-content">
								<div class="inner-box">
									<div class="icon-box"><i class="flaticon-left-quote"></i></div>
									<div class="text">Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid et dolore magna aliqu enim minim veniam quis nostrud exercullamco</div> 
									<h5 class="author">William Ayrton</h5>
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
							<h1>Freequently<br />Asked Questions</h1>
						</div>
						<div class="bold-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu santium doloreque laudantum.</div>
						<div class="text">
							<p>Lorem ipsum dolor sit amet consectetur adipicing elit sed do usmod tempor incididunt.enim ad minim veniam, quis nostrud exer citation ulla mco laboris nisi ut aliquip commodo.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 faq-column">
					<div class="faq-content">
						<ul class="accordion-box">
							<li class="accordion block active-block">
								<div class="acc-btn active">
									<div class="icon-outer"><i class="flaticon-add-1"></i></div>
									<h5>What is a Marriage and Family Therapist?</h5>
								</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Dolor sit amet consectetur elit sed do eius mod tempor incd idunt labore magna.aliqua enim ad minim veniam quis nostrud exercita. tion ullamco laboris nisi ut alique.</div>
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
										<div class="text">Dolor sit amet consectetur elit sed do eius mod tempor incd idunt labore magna.aliqua enim ad minim veniam quis nostrud exercita. tion ullamco laboris nisi ut alique.</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">
									<div class="icon-outer"><i class="flaticon-add-1"></i></div>
									<h5>How long does therapy last?</h5>
								</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Dolor sit amet consectetur elit sed do eius mod tempor incd idunt labore magna.aliqua enim ad minim veniam quis nostrud exercita. tion ullamco laboris nisi ut alique.</div>
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
								<a href="#">Couples</a>
								<a href="#">Therapy</a>
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>by <span>Kirstin Hagen</span></li>
									<li>On 25 Mar, 2019</li>
								</ul>
								<h3><a href="blog-details.html">You Can’t Judge Depression by its Cover</a></h3>
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
								<a href="#">Couples</a>
								<a href="#">Therapy</a>
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>by <span>Kirstin Hagen</span></li>
									<li>On 24 Mar, 2019</li>
								</ul>
								<h3><a href="blog-details.html">Ratione voluptem seque nesciunt.</a></h3>
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
								<a href="#">Couples</a>
								<a href="#">Therapy</a>
							</div>
							<div class="lower-content">
								<ul class="post-info">
									<li>by <span>Kirstin Hagen</span></li>
									<li>On 23 Mar, 2019</li>
								</ul>
								<h3><a href="blog-details.html">We Schedule your discuss it and create a plan</a></h3>
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