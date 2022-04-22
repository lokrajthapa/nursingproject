<?php

use App\Models\SelectClass;
$sc = new SelectClass();
$newsEvents = $sc->selectNews();
?>


@include('frontend.layouts.header')
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2> Event Pages</h2>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Blogs -->
		<section class="blog archives section">
			<div class="container">
				<div class="row">

					<!-- <div class="col-lg-4 col-md-6 col-12">
						
						<div class="single-blog">
							<div class="blog-head">
								<img src="{{ asset('frontend/images/blog/blog1.jpg') }}" alt="#">
							</div>
							<div class="blog-content">
								<div class="date"><i class="fa fa-calendar"></i> <span>Education</span></div>
								<h4 class="blog-title"><a href="blog-single.html">9 skills students need in the future workforce</a></h4>
							
							</div>
							
						</div>
					</div> -->
                
             @foreach ($newsEvents as $newsEvent)

				
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-head">
                            @if($newsEvent->image)
							  <img src="uploads/Postimg/{{ $newsEvent->image ?? '' }}" > 
                            @endif    
							</div>
							<div class="blog-content">
								<div class="date"><a href="news/{{ $newsEvent->id }}"><span>{{ $newsEvent->title }}</span></div>
								<h4 class="blog-title"><a href="news/{{ $newsEvent->id }}">{!! substr($newsEvent->description , 0, 200) !!}</a></h4>
								
							</div>
							<!-- End Single Blog -->
						</div>
					</div>
		     @endforeach
				</div>
				
			</div>
		</section>
		<!--/ End Blogs -->
@include('frontend.layouts.footer') 
