<?php

use App\Models\SelectClass;

$sc = new SelectClass();
$selectblogs = $sc->selectBlog();

?>
@include('frontend.layouts.header')
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2> Blog Pages</h2>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Blogs -->
		<section class="blog archives section">
			<div class="container">
				<div class="row">

			
                
             @foreach ($selectblogs as $selectblog)

				
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-blog">
							<div class="blog-head">
                            @if($selectblog->image)
							  <img src="uploads/Postimg/{{ $selectblog->image ?? '' }}" > 
                            @endif    
							</div>
							<div class="blog-content">
								<div class="date"><a href="blogpage/{{ $selectblog->id }}"><span>{{ $selectblog->title }}</span></div>
								<h4 class="blog-title"><a href="blogpage/{{ $selectblog->id }}">{!! substr($selectblog->description , 0, 200) !!}</a></h4>
								
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
