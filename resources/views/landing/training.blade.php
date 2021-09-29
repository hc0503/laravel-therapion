@extends('layouts.landing')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title-4.jpg') }});">
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

<section class="faq-page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="faq-content-side">
					<div class="inner-box">
						<h1>Freequently Ask Questions</h1>
						<div class="italic-text">I believe you have the power to make the changes you seek. There are times in our lives when we feel disempowered and disconnected from ourselves and others. I am here to walk with you on your journey towards healing.</div>
						<div class="text">
							<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.I have experience working with those who struggle with Substance Abuse, Eating Disorders, Anxiety, Depression, and Trauma. My primary therapeutic modalities include.Cognitive Behavioral Therapy and Acceptance and Commitment Therapy. However, I work collaboratively with my clients to provide the most effective interventions possible based on their needs.</p>
						</div>
						<div class="faq-content-one">
							<h3>General Questions</h3>
							<div class="text">
								<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.I have experience working with those who struggle with Substance Abuse, Eating Disorders Anxiety Depression.</p>
							</div>
							<ul class="accordion-box">
								<li class="accordion block active-block">
									<div class="acc-btn active">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>What is compatitive price?</h5>
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>How can i get quality product?</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Do you know about quick delivery</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>How can i get quality product?</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Do you know about quick delivery</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="faq-content-two">
							<h3>Couple Therapy Questions</h3>
							<div class="text">
								<p>I will provide a safe, non-judgmental environment where you can work toward your own personal empowerment to overcome your struggles.I have experience working with those who struggle with Substance Abuse, Eating Disorders Anxiety Depression.</p>
							</div>
							<ul class="accordion-box">
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>How can i get quality product?</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Do you know about quick delivery</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>How can i get quality product?</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Do you know about quick delivery</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est labrum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.doloremque laudantium totam rem aperiam eaque ipsa quae.</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="faq-sidebar sidebar gray-bg">
					<div class="sidebar-form">
						<h3>Submit Question</h3>
						<div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit</div>
						<form action="#" method="post">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" name="name" required="">
							</div>
							<div class="form-group">
								<label>Your Email</label>
								<input type="email" name="name" required="">
							</div>
							<div class="form-group">
								<label>Subject</label>
								<div class="select-box">
									<select class="selectmenu">
										<option selected="selected">Defolt Sorting</option>
										<option>Couples Therapy</option>
										<option>Teens & Youth</option>
										<option>Family Therapy</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Your Message</label>
								<textarea name="message"></textarea>
							</div>
							<div class="form-group message-btn">
								<button type="submit" class="theme-btn">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('css')

@endpush('css')

@push('js')

@endpush('js')