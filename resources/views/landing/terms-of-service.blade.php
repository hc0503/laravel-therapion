@extends('layouts.landing')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{ asset('/assets/images/background/page-title.jpg') }});">
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

<section class="about-page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-sidebar">
				<div class="sidebar gray-bg">
					<div class="sidebar-form">
						<h3>Customer Services</h3>
						<div class="text">Our customer service center is confidential and free of charge.</div>
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
								<label>Info</label>
								<input type="email" name="info" required="">
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
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="about-page-content">
					<div class="inner-box">
						<div class="content-style-one">
							<div class="title-box clearfix">
								<div class="sec-title pull-left">
									<div class="title">terms of service</div>
									<h1>Terms of Service</h1>
								</div>
								<div class="social-links pull-right">
									<ul class="social-style-one">
										<li><a href="https://www.facebook.com/therapion"><i class="fab fa-facebook-f"></i></a></li>
						                <li><a href="https://www.youtube.com/user/therapion"><i class="fab fa-youtube"></i></a></li>
                						<li><a href="https://www.linkedin.com/company/therapion-consulting"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="bold-text">
							This user agreement applies to all services offered by Therapion Consulting 
							(In this agreement, "The company" or "Therapion") 
							through the website it owns and operates, Therapion.com
							<br/><br />
							By using our services, you confirm that you accept the following terms and conditions.
												</div>

							<div class="text">
								<p>1. Payment instructions: All sessions must be prepaid. The company will never ask for your debit or credit card or PayPal account details. The company is not responsible for payments applied to a wrong account. There are no free counseling sessions. Our customer service provides free information on our services both before and after making a booking.</p>
                                <p>2. Cost and use of prepaid sessions: The client bears full responsibility for all costs that may result from the use of our service. All sessions must be held within 60 days of purchase. Fees can be changed at any time without prior notice. For phone counseling, the counselor will call you. The fee includes the cost of making the call. The client is responsible for any cost of answering the call.</p>
                                <p>3. Rescheduling a live session: If you want to reschedule your live session, you must contact our office 48 hours before the session starts. If you are unable to attend your session, or give us less than 48 hours’ notice, the session will be cancelled and you will not receive a refund.</p>
            					<p>4. Problem situations: All live sessions begin punctually. The client must be present at the session’s start. Failure to do so will result in cancellation without a refund. We will contact you by e-mail if there is a problem on our end or if we are unable to reach you for a live session. We reserve the right to cancel any session at any time, without prior notice. However, if the company has to cancel a session, the session fee will be fully refunded. The following may render us unable to provide service: internet or phone connection malfunction, a situation out of our scope of practice and/or competence, or any type of security risk to you or us.</p>
								<p>5. <b>Legal disclaimer: No emergency service</b>: This is not a substitute for emergency service. If you suffer from severe depression, experience a sudden onset of a psychological crisis, or contemplate harming yourself or another person, please contact your local emergency center or a suicide prevention helpline.</p>
     							<p>6. Termination of services: a. Voluntary termination: the client voluntarily participates in our services and may decide at any point to discontinue use of services. There's no reimbursement for prepaid sessions that the client decides not use. b. Involuntary termination: the client may be terminated from services for reasons that put the safety or economical prosperity of the client or the company and its consultants at risk.</p>
					            <p>7. Waiver of liability: 
								   a. The client uses the service at his or her own risk and bears full responsibility for all decisions and actions that he (or she) may or may not take before, during, or after using the service.                           
								   b. For and in consideration of the company and its consultants (counselors, psychologists, psychotherapists, therapists, and coaches), the client hereby releases and discharges the company, its board of directors, the website, and the consultants of any form of claims, causes, actions or demands, which the client, or the client's associates or family, may have in connection with any economical, physical, or emotional harm or damage that could result from activities and behaviors inflicted by the client, or the client's associates or family, or anyone else, before, while or after attending counseling or coaching services on the website, or at the company.
								   c. The client who uses the service waives the right to sue the website and the company, and its board of directors, and the consultant who gave the service, regardless of the client's nationality, residence, or the jurisdiction the client is protected by.</p>
                                <p>8. Technology and programs, booking system, and confidentiality agreement: 
                                   a. Technology and programs: The client chooses the programs and systems (e-mail, chat, video conference and/or phone services and related technologies) through which he or she desires to use the counseling service. The company is not responsable for the functionality nor the data security of the technical solution(s) that the client chooses.
                                   Legal statement for U.S. clients: In accordance with HIPAA regulations and APA recommendations regarding Internet-based counseling services, the clients need to be aware that Skype, Zoom or phone sessions are not secured at all times.
                                   Legal statement for clients from the European Union: We are committed to Europe’s new General Data Protection Regulation (GDPR).
								   b. Booking system: the client can use the counseling service without using our booking system. If he or she so wishes, the client may contact our office by e-mail or phone to make a booking.
                                   c. Confidentiality agreement: the client agrees to respect and maintain the confidentiality of all information and advice given by the company and its consultants during and after the use of our service. Any communication from the consultant may not be copied, recorded and/or released to a third party. The client’s records are confidential data and shall not be released to any one during or after the service.</p>
											</div>
						</div>
						<div class="content-style-two">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 text-column">
									<div class="text">
									9. Information acknowledgement:
									  By using our service, the client acknowledges having read and accepted our Terms of Service, and that any questions the client has about the information contained on the website are answered to his (or her) satisfaction prior to the use of the service.
                                      The client is aware that he (or she) can refer to the company's website should clarification be needed now, or in the future, regarding anything related to the services. Additionally, the company can be contacted by e-mail or phone during office hours. 
                                      The client agrees to continue to maintain this agreement even after his (or her) active affiliation with the company and its services has ended. Therapion Consulting is a private company registered in Helsinki, Finland. All services are provided in accordance with European Union law.				 
						
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 image-column">
									<figure class="image-box"><img src="{{ asset('assets/images/resource/about-4.jpg') }}" alt=""></figure>
								</div>
							</div>
						</div>
						<div class="content-style-three">
							<div class="top-content">
								<div class="row">
									<div class="col-lg-6 col-md-12 col-sm-12 column">
										<div class="inner-column">
											<h3>Core Values</h3>
											<div class="text">
												<p>Honesty, integrity and transparency. We are committed to human rights and promote a fair world order for all living beings. Protect the planet.</p>
												</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12 col-sm-12 column">
										<div class="inner-column">
											<h3>Our Mission</h3>
											<div class="text">
												<p>Provide qualified and professional mental health care to individuals, couples and families, communities and new business ventures.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
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