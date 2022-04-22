<?php

    use App\Models\SelectClass;

    $sc = new SelectClass();

    $subheadings = $sc->selectSubHeading("About");

    $subheadingsCourses = $sc->selectSubHeading("Courses");

    $headingskidneyhealths = $sc->selectSubHeading("Kidney Health");

?>





<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>Nurse Career Promotion</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,600,700,700i,800,800i,900" rel="stylesheet">
		
		<link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
		
    </head>
    <body>
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-9 col-12">
							<!-- Contact -->
							<ul class="content">
								<li><i class="fa fa-phone"></i>123-456-789</li>
								<li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i>info@nursecareerpromotion.com</a></li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i>Hours 09:00 - 18:00</li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-4 col-md-3 col-12">
							<!-- Login -->
							<!-- <div class="login">
								<a href="#"><i class="fa fa-unlock-alt"></i>Login</a>
							</div> -->
							<!-- End Login -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="logo">
								<a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}" alt="#"></a>
							</div>
							<div class="mobile-menu"></div>
						</div>
						<div class="col-9">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<ul id="nav" class="nav menu navbar-nav">
										<li class="active"><a href="{{ url('/')}}">Home</a></li>
										<li><a href="#">About</a>

											<ul class="dropdown">
											
											     	@foreach($subheadings  as $subheading )   
														<li> 
															<a href="{{ url('singleblog/').'/'.$subheading->id }}">{{ $subheading->child_title }}</a>
														</li>                                
                                                    @endforeach  
												
											</ul>
										</li>
										<li><a href="#">Courses</a> 
											<ul class="dropdown">
										    	@foreach($subheadingsCourses  as $subheading )  
												<li>
												<a href="{{ url('singleblog/').'/'.$subheading->id }}">{{ $subheading->child_title }}</a>

											   </li>
												@endforeach  



												
											</ul>
										</li>
										<li><a href="{{ url('/eventinglisting')}}">Events</a> </li>
										<li><a href="{{ url('/bloglisting')}}">Blogs</a> </li>

										
										
										<li><a href="{{url('/contact')}}">Contact</a></li>
									</ul>
									<!-- End Main Menu -->
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->