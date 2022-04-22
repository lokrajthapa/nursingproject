<?php

use App\Models\SelectClass;

$sc = new SelectClass();



//$selectBranches = $sc->selectBranch();



//$newsEvent = $sc->selectNews();


$selectTeams = $sc->SelectTeam();

$selecttestimonials = $sc->selectTestimonial();




?>
 
 
 @include('frontend.layouts.header') 
		<!-- Hero Area -->
		<section class="hero-area overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						
					</div>
				</div>
			</div>
		</section>
		<!--/ End Hero Area -->
		
		<!-- Fun Facts -->
		<div class="fun-facts">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="content">
								<div class="number"><span class="counter">8</span>k+</div>
								<p>Learning Resourses</p>
							</div>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-graduation-cap"></i>
							<div class="content">
								<div class="number"><span class="counter">3</span>k+</div>
								<p>Practice Questions</p>
							</div>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-video-camera"></i>
							<div class="content">
								<div class="number"><span class="counter">278</span>+</div>
								<p>Video Cources</p>
							</div>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="content">
								<div class="number"><span class="counter">10</span>+</div>
								<p>Mock Exams</p>
							</div>
						</div>
						<!--/ End Single Fact -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun Facts -->
		
		<!-- Why Choose -->
		<section id="why-choose" class="why-choose section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Why choose Us?</h2>
							<p>Nurse Career Promotion LLC is a trusted leading preparation center in Nepal for the NCLEX Test Preparation of US RN Nursing Licensure Exams.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7 col-md-12 col-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<!-- Choose Single -->
								<div class="choose-single">
									<i class="fa fa-book" aria-hidden="true"></i>
									<div class="content">
										<h4>8000+ online course</h4>
										<p>Best learning resources and exclusive video tutorials.</p>
									</div>
								</div>
								<!--/ End Choose Single -->
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<!-- Choose Single -->
								<div class="choose-single">
									<i class="fa fa-certificate" aria-hidden="true"></i>
									<div class="content">
										<h4>Quality education</h4>
										<p>Affordable fees and experienced instructors in the industry.</p>
									</div>
								</div>
								<!--/ End Choose Single -->
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<!-- Choose Single -->
								<div class="choose-single">
									<i class="fa fa-user" aria-hidden="true"></i>
									<div class="content">
										<h4>Career Counseling</h4>
										<p>Peer to peer counseling for NCLEX-RN Exam and US Immigration.</p>
									</div>
								</div>
								<!--/ End Choose Single -->
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<!-- Choose Single -->
								<div class="choose-single">
									<i class="fa fa-laptop" aria-hidden="true"></i>
									<div class="content">
										<h4>Hi-Tech Learning Center</h4>
										<p>Hi-Tech standard classroom and NCLEX exam Resources.</p>
									</div>
								</div>
								<!--/ End Choose Single -->
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Choose Single -->
						<div class="why-image">
							<img src="{{ asset('frontend/images/why.png') }}" alt="#">
						</div>
						<!--/ End Choose Single -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Why Choose -->
	
		
		<!-- Registration -->
		<section class="registration overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="registration-title">
							<h2>Book Appointment</h2>
							<p>Before you miss the chance to get your seat!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Single Registration -->
						<div class="registration-form">
							<!-- Form -->
							<form class="form" action="#">
								<div class="row" action="#">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="form-group">
											<input name="name" type="text" placeholder="*Name">
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="form-group">
											<input name="email" type="email" placeholder="*Email">
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="form-group">
											<input name="phone" type="phone" placeholder="*Phone">
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="form-group button">
											<button type="submit" class="btn">Book Now</button>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
						<!-- Single Registration -->
					</div>
				</div>
			</div>
		</section>

     <!-- Team -->
		<section class="team section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Our Awesome <span>Instructors</span></h2>
							<p>Our virtual Instructors are well experienced and helping thousands of students passing NCLEX-RN exam in very first attempt.</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach ($selectTeams as $selectTeam )   
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="{{url('uploads/teamimg/').'/'.$selectTeam->image }}" alt="#">
							<div class="team-content">
								<ul class="social">
							     	<li><a href="{{ $selectTeam->facebook}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{ $selectTeam->twitter}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{ $selectTeam->gmail}}"><i class="fa fa-gmail"></i></a></li>
									
								</ul>
								<h4>{{ $selectTeam->name }}</h4>
							
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				@endforeach	

				
				</div>
			</div>
		</section>
	
		
	
		<section class="testimonials">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="left" data-stellar-background-ratio="0.9">
							<a href="https://www.youtube.com/watch?v=ekGHTEXoQCs" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="testi-inner">
							<h4 class="title">What People says</h4>
							<div class="testimonial-slider">
								<!-- Single Testimonial -->
						
							
								<!-- Single Testimonial -->

							@foreach($selecttestimonials  as $selectTestimonial )					   
								<div class="single-testimonial">
									<i class="fa fa-quote-right" aria-hidden="true"></i>
									<div class="main-content">
										<img src="uploads/testimonial/{{$selectTestimonial->image}}" alt="#">
										<p class="text"> {{ $selectTestimonial->description }}</p>
										<p class="name"> {{ $selectTestimonial->name }} <span>student</span></p>
									</div>
								</div> 
				             @endforeach			

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Events -->
		<section class="events section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Upcoming Events</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Event -->
					<div class="col-12">
						<div class="single-event">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-12">
									<div class="date">
										<p>01 <span>june, 2018</span></p>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-12">
									<div class="cat">
										<p>educational school technology <span>18:00 - friday june 1, 2018 to 10:00 - monday june 4, 2018</span></p>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-12">
									<div class="location">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="content">
											<p>754 5th ave <span>new york, ny 10019</span></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<div class="image">
										<img src="{{ asset('frontend/images/event.jpg') }}" alt="#">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /End Single Event -->
					<!-- Single Event -->
					<div class="col-12">
						<div class="single-event">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-12">
									<div class="date">
										<p>05 <span>june, 2018</span></p>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-12">
									<div class="cat">
										<p>celebrating our graduates <span>18:00 - friday june 1, 2018 to 10:00 - monday june 4, 2018</span></p>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-12">
									<div class="location">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="content">
											<p>754 5th ave <span>new york, ny 10019</span></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<div class="image">
										<img src="{{ asset('frontend/images/event.jpg ') }}" alt="#">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /End Single Event -->
					<!-- Single Event -->
					<div class="col-12">
						<div class="single-event">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-12">
									<div class="date">
										<p>07 <span>june, 2018</span></p>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-12">
									<div class="cat">
										<p>welcome to our campus <span>18:00 - friday june 1, 2018 to 10:00 - monday june 4, 2018</span></p>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-12">
									<div class="location">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="content">
											<p>754 5th ave <span>new york, ny 10019</span></p>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<div class="image">
										<img src="{{ asset('frontend/images/event.jpg') }}" alt="#">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /End Single Event -->
				</div>
			</div>
		</section>
		<!--/ End Events -->
		
		<!-- Become Area -->
		<section class="become overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="become-inner">
					<div class="row">
						<div class="col-12">
							<div class="become-text">
								<h2>become a Registered Nurse in US</h2>
								<p>Passing the NCLEX-RN exam is a gateway to US permanent residency, Don't miss the lifetime oppertunity.</p>
								<div class="button">
									<a href="#" class="btn">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Become Area -->
		
		<!-- Apply Area -->
		<section class="apply">
			<!-- Apply-inner -->
			<div class="container">
				<div class="apply-inner">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-12">
							<div class="apply-text">
								<p>Click to Apply Now for Details</p>
								<h1>Admission is<span> Going on</span></h1>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="apply-button">
								<div class="button">
									<a href="courses.html" class="btn ">Apply Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Apply-inner -->
		</section>
		<!--/ End Apply Area -->
		
		<!-- Footer -->
 @include('frontend.layouts.footer') 


