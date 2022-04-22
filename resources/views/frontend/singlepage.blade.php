@include('frontend.layouts.header') 

		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						
						<h2>{{ $childContentDetails[0]->childpage->child_title ?? ''}}</h2>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Blogs -->
		<section class="blog archives single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<!-- Single Blog -->
			<div class="single-blog">
				<div class="blog-head">
					@isset($childContentDetails[0]->Thumbnailimg)
				    	<img class="img-fluid" width="100%" src="{{url('uploads/childcontentimg/').'/'.$childContentDetails[0]->Thumbnailimg }}">
					@endisset				
				</div>
          <div class="blog-content">
						
								
					<p> {!! $childContentDetails[0]->text !!}  <p>
									 

          </div>
<!-- End Single Blog -->
					</div>
						
					</div>
					<div class="col-lg-3 col-12">
						<div class="blog-sidebar">
							<!-- Single Widget -->
							
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Quick <span>Links</span></h3>
								<ul class="categor-list">
									<li><a href="#">Home</a></li>
									<li><a href="#">Blogs</a></li>
									<li><a href="#">Event</a></li>
									<li><a href="#">Appointement</a></li>
									
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget about">
								<h3 class="title">About<span>Us</span></h3>
								<div class="about-inner">
									<img src="{{ asset('frontend/images/about.jpg') }}" alt="#">
									<p>Nurse Career Promotion is a trusted learning center for NCLEX-RN exam preparation in Nepal.</p>
									<!-- Social -->
									<ul class="social">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									<!-- End Social -->
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!--/ End Blogs -->
		
 @include('frontend.layouts.footer') 
	