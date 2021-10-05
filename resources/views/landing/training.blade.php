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
						<h1>Training for Counselors</h1>
						<div class="italic-text">
						Therapion provides professional training to counselors, psychologists, therapists and coaches. 
						Our special training seminar is entitled, "Methods in Online Counseling."</div>		
						<div class="text">
							<p>The 4-hour online seminar is aimed at mental health care professionals regardless of any previous experience.
                               The seminar introduces online therapy and provides you with the essential tools needed for real online counseling work.	
							   In particular, you'll learn how to succesfully conduct online therapy sessions by e-mail, chat, phone and video conferencing.
							   This is an intensive training seminar, provided completely online. We use Skype (or Zoom) for group meetings.
                               The number of participants is limited to six in each group.
							<br />
							<br />
							Cost: 160 USD (135 EUR) all included
							</p>
							</div>
						<div class="faq-content-one">
							<h3>Seminar Work Plan - Part One</h3>
							<div class="text">
								<p>The seminar meets during two consequtive evenings, two hours at a time.
							Below is a detailed description of the seminar content. Besides the theory, we shall include 
							free discussion and excercises to the seminar. 
                            <br />
                            <br />
							The first seminar session is an introduction to online therapy as well as an introduction to the participants.
						    After that we take a closer look at the most popular online counseling methods.</p>	
							</div>
							<ul class="accordion-box">
								<li class="accordion block active-block">
									<div class="acc-btn active">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Introduction to online therapy</h5>
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">What is online therapy and counseling? 
												How did it get started, and why did it become popular?
											    Who are the major players and what are the key differencies between them?
											</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Introduction to the participants</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Why are you interested in providing online mental health care? 
												What makes you to stand out among all available service providers? 
												What is your professional identity? What are your areas of expertise? How can you create an efficient online presentation?</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Counseling by e-mail</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Written word in counseling. Is that more or less efficient than talking? 
											How should I use e-mail in counseling work? What are the key recommendations for practical counseling work by e-mail?</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Counseling by chat</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Written word in real time, aka using chat in counseling. What are the key recommendations
												for its safe and efficient use? What should I avoid and what should I always bear in mind when using chat?</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Counseling by video conferencing or phone</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">How to use phone and video conferencing professionally. 
												What should you be careful about and what can you take for granted. 
												What is the big difference between traditional face-to-face therapy and online counseling?
												What is the difference between a typical phone conversation and phone therapy as such?
												What about video conferencing versus phone, which one is better and why?
												Best practices and recommendations for real life counseling work with real patients.</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="faq-content-two">
							<h3>Seminar Work Plan - Part Two</h3>
							<div class="text">
								<p>The second session is dedicated to ethics and best practices, as well as to laws and regulations that vary considerably
									in different parts of the globe. We take a look at current trends and future possibilities, too.</p>
							</div>
							<ul class="accordion-box">
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Ethics and security</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Let's talk about how counseling changes when it's done online.
                                                              What do you think is applicaple from old times, and what has changed, ethically speaking? 
                            								What are the ethical best practices, and what are the key threaths in online counseling?
														     What other types of treaths are there in online counseling apart from technology?</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Laws and regulations</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">There is an ongoing effort worldwide to regularize online therapy and counseling. 
												Let's talk about a few of the major approaches, such as HIPAA rules and the European laws 
												for data protection and online privacy, the General Data Protection Regulation decree. 
												What about trade unions and local authorities, for example, on state level in the USA, 
												or on country level in Europe? What is releavant to you, professionally speaking?</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Actual trends and future possibilities</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Let's come back to where the seminar started. 
												What is online therapy, in your interpretation? Who pracitises it like that?
												What do you think will happen in the future? Do you think that online therapy
												gets completely automated, or shall it remain at least partially human-made?</div>
										</div>
									</div>
								</li>
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><i class="flaticon-add-1"></i></div>
										<h5>Conclusions and feedback</h5>
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Online therapy never stops evolving. What do you think you will do next? 
												Did this seminar make you more curious about online counseling, or did it put you off? 
												We invite all participants to open up and express their feelings about this seminar, and 
												about online counseling in general.</div>
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
						<h3>Enrollment Form</h3>
						<div class="text">Would you like to take the seminar? Send us this form and get the complete information package with a list of upcoming seminar dates in return.</div>
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