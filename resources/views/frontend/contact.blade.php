@include('frontend.layouts.header') 

		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="contact.html">contact</a></li>
						</ul>
						<h2>Contact Pages</h2>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2><span>Contact</span> Information</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="info overlay">
								<div class="info-inner">
									<h2 class="title">Contact Information</h2>
									<div class="single-info">
										<div class="icon"><i class="fa fa-map"></i></div>
										<div class="content">
											<p>3455 N Beltline Rd, St 204 <br>Irving TX 75062</p>
										</div>
									</div>
									<div class="single-info">
										<div class="icon"><i class="fa fa-phone"></i></div>
										<div class="content">
											<p>(800) 457 392 </p>
										</div>
									</div>
									<div class="single-info">
										<div class="icon"><i class="fa fa-envelope"></i></div>
										<div class="content">
											<p><a href="mailto:information@gmail.com">information@yourwebsite.com</a></p>
										</div>
									</div>
									<!-- Social -->
										<ul class="social">
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										</ul>
									<!-- End Social -->
									<p class="text"><i>“Build your Bright Future at Edugrade, Get in Touch, minim veniam,We would love to help you! </i></p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="head-top">
								<h2 class="get">Get In touch</h2>
								<div class="form-head">
									<!-- Form -->
									<form class="form" action="mail/mail.php">
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<input name="name" type="text" placeholder="Enter Name">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<input name="email" type="email" placeholder="Email Address">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<textarea name="message" placeholder="Comment"></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="button">
													<button type="submit" class="btn primary">Post Comment</button>
												</div>
											</div>
										</div>
									</form>
									<!--/ End Form -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
@include('frontend.layouts.footer') 
		
	