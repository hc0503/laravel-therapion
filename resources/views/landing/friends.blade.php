@extends('layouts.landing')
@section('content')

<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-3.jpg') }});">
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

<section class="sidebar-page-container our-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="our-blog-content">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-1.jpg')}}" alt="">
										</a>
									</figure>
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
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
											<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-2.jpg')}}" alt="">
										</a>
									</figure>
									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 24 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">Conseqe tur magna eos ratione Depression.</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-3.jpg')}}" alt="">
										</a>
									</figure>
									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 22 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">We Schedule your discuss it and create a plan</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-4.jpg')}}" alt="">
										</a>
									</figure>
									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 21 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">Ratione voluptem seque nesciunt.</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-5.jpg')}}" alt="">
										</a>
									</figure>
									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 20 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">What is a Marriage and Family Therapist</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-6.jpg')}}" alt="">
										</a>
									</figure>
									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 19 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">We Schedule your discuss it and create a plan</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-7.jpg')}}" alt="">
										</a>
									</figure>
									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 17 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">Marriage Counselling & Couples Therapy</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 news-block">
							<div class="news-block-one">
								
								<div class="inner-box">
									<figure class="image-box">
										<a href="blog-details.html">
											<img src="{{ asset('assets/images/resource/news-8.jpg')}}" alt="">
										</a>
									</figure>


									<div class="categorie-list">
										<a href="#">Couples</a>
										<a href="#">Therapy</a>
									</div>
									<div class="lower-content">
										<ul class="post-info">
											<li>by <span>Kirstin Hagen</span></li>
											<li>On 15 Mar, 2019</li>
										</ul>
										<h3><a href="blog-details.html">We Schedule your discuss it and create a plan</a></h3>
										<div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination-wrapper">
						<ul class="pagination">
							<li><a href="#" class="active">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="sidebar blog-sidebar">
					<div class="sidebar-about sidebar-widget">
						<h2 class="sidebar-title">Our Community</h2>
						<div class="widget-content">
							<figure class="author-image">
								<img src="{{ asset('assets/images/resource/author.png') }}" alt="">
							</figure>
							<div class="text">
							<h4>Collaboration & Friends</h4>
							Therapion collaborates with trade unions, civil associations, NGOs and other type of organizations.
                            Contact us for further information. We'll be glad to assist you.</div>
							<figure class="signature">
								<img src="{{ asset('assets/images/resource/signature.png') }}" alt="">
							</figure>
							<ul class="social-list">
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="sidebar-category sidebar-widget">
						<h2 class="sidebar-title">Category</h2>
						<div class="widget-content">
							<ul>
								<li><a href="#">Project Planning</a></li>
								<li><a href="#">Site Mining</a></li>
								<li><a href="#">Constrution Works</a></li>
								<li><a href="#">Renovations</a></li>
								<li><a href="#">Floor Roofs</a></li>
								<li><a href="#">Market Research</a></li>
							</ul>
						</div>
					</div>
					<div class="sidebar-post sidebar-widget">
						<h2 class="sidebar-title">Latest Article</h2>
						<div class="widget-content">
							<div class="post">
								<figure class="post-thumb">
									<a href="blog-details.html">
										<img src="{{ asset('assets/images/resource/post-1.png') }}" alt="">
									</a>
								</figure>
								<span class="post-date">26 Jun, 2019</span>
								<h5><a href="blog-details.html">Ratione voluptem seque nesciunt.</a></h5>
							</div>
							<div class="post">
								<figure class="post-thumb">
									<a href="blog-details.html">
										<img src="{{ asset('assets/images/resource/post-2.png') }}" alt="">
									</a>
								</figure>
								<span class="post-date">25 Jun, 2019</span>
								<h5><a href="blog-details.html">Conseqe tur magna eos ratione.</a></h5>
							</div>
							<div class="post">
								<figure class="post-thumb">
									<a href="blog-details.html">
										<img src="{{ asset('assets/images/resource/post-3.png') }}" alt="">
									</a>
								</figure>
								<span class="post-date">24 Jun, 2019</span>
								<h5><a href="blog-details.html">Sdipisci velit quia non tempora.</a></h5>
							</div>
						</div>
					</div>
					<div class="sidebar-tags sidebar-widget">
						<h2 class="sidebar-title">Tags</h2>
						<div class="widget-content">
							<ul class="tag-list clearfix">
								<li><a href="#">Architecture</a></li>
								<li><a href="#">Counseling</a></li>
								<li><a href="#">Mental</a></li>
								<li><a href="#">Therapy</a></li>
								<li><a href="#">Couples</a></li>
								<li><a href="#">Divorce</a></li>
								<li><a href="#">Family</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('css')
<style>
	.image-box img {
		width: 370px;
		height: 370px;
		object-fit: cover;
	}
</style>
@endpush('css')

@push('js')

@endpush('js')