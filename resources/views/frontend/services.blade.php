@extends('frontend.site.app')

@section('content')
    
		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Services</h2>

					<ul>
						<li>
							<a href="{{route('index')}}">
								Home 
							</a>
						</li>

						<li class="active">Services</li>
					</ul>
				</div>
			</div>

			<div class="shape shape-1">
				<img src="assets/images/page-title-shape-1.png" alt="Image">
			</div>
			<div class="shape shape-2">
				<img src="assets/images/page-title-shape-2.png" alt="Image">
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Success Area -->
		<section class="success-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<h2>We provide transport & logistics services to deliver customer success</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="single-success">
							<i class="flaticon-supply-chain"></i>
							<h3>Supply chains solutions</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna.</p>
								
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-success">
							<i class="flaticon-internet"></i>
							<h3>Internet fulfillment</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-success">
							<i class="flaticon-distribution-1"></i>
							<h3>World freight forwarding</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Success Area -->

		<!-- Start Services Area -->
		<section class="services-area services-area-style-two bg-color pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Shipping services</span>
					<h2>What we can do for you</h2>
				</div>

				<div class="row">
          @foreach($services as $service)
					<div class="col-lg-3 col-sm-6">
						<div class="single-services-box">
							<a href="services-details.html">
								<img src="{{ asset('storage/' . $service->images[0]) }}" alt="Images">
							</a>
							<h3>
								<a href="services-details.html">
									{{$service->name}}
								</a>
							</h3>
							<p>{{$service->description}}</p>
							<a href="{{route('show_service',$service->id)}}" class="read-more">
								Read more
								<i class="ri-add-circle-fill"></i>
							</a>
						</div>
					</div>
          @endforeach
					
				</div>
			</div>
		</section>
		<!-- End Services Area -->

		<!-- Start Logistics Solutions Area -->
		<section class="logistics-solutions-area logistics-solutions-area-style-two pt-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="logistics-solutions">
							<span>Logistics solutions</span>
							<h2>We provide the best solution for you</h2>

							<ul>
								<li>
									<i class="flaticon-warehouse-1"></i>
									<h3>Warehouse solutions</h3>
									<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a lorem ipsum dolor sit amet tincidunt nibh pulvinar.</p>
								</li>

								<li>
									<i class="flaticon-warehouse"></i>
									<h3>Transport and distribution</h3>
									<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a lorem ipsum dolor sit amet tincidunt nibh pulvinar.</p>
								</li>

								<li>
									<i class="flaticon-contract"></i>
									<h3>Order management</h3>
									<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a lorem ipsum dolor sit amet tincidunt nibh pulvinar.</p>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="logistics-solutions-img bg-2">
							<div class="video-button">
								<a href="https://www.youtube.com/watch?v=cTxCqUwnLg4" class="popup-youtube">
									<i class="ri-play-fill"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Logistics Solutions Area -->

		<!-- Start Pricing Area -->
		<section class="pricing-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Pricing plans</span>
					<h2>Choose your perfect plan</h2>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="single-pricing-box">
							<div class="pricing-title">
								<h3>Personal plan</h3>
								<h1>39 <sub><span>$</span> Per monthly</sub></h1>
							</div>

							<ul>
								<li>
									Orders dispatched per month
								</li>
								<li>
									12 Month fixed price
								</li>
								<li>
									Automatically picking
								</li>
								<li>
									Storage medium parcel size
								</li>
								<li>
									Special delivery
								</li>
								<li>
									24/7 Customer help desk
								</li>
							</ul>

							<a href="contact.html" class="default-btn btn-two">
								<span>
									Purchase now
									<i class="ri-arrow-right-line"></i>
								</span>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-pricing-box active">
							<div class="pricing-title">
								<h3>Business plan</h3>
								<h1>59 <sub><span>$</span> Per monthly</sub></h1>
							</div>

							<ul>
								<li>
									Orders dispatched per month
								</li>
								<li>
									1 Year fixed price
								</li>
								<li>
									Automatically picking
								</li>
								<li>
									Storage medium parcel size
								</li>
								<li>
									Special delivery
								</li>
								<li>
									24/7 Customer help desk
								</li>
							</ul>

							<a href="contact.html" class="default-btn btn-two">
								<span>
									Purchase now
									<i class="ri-arrow-right-line"></i>
								</span>
							</a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-pricing-box">
							<div class="pricing-title">
								<h3>Enterprise plan</h3>
								<h1>89 <sub><span>$</span> Per monthly</sub></h1>
							</div>

							<ul>
								<li>
									Orders dispatched per month
								</li>
								<li>
									2 Years fixed price
								</li>
								<li>
									Automatically picking
								</li>
								<li>
									Storage medium parcel size
								</li>
								<li>
									Special delivery
								</li>
								<li>
									24/7 Customer help desk
								</li>
							</ul>

							<a href="contact.html" class="default-btn btn-two">
								<span>
									Purchase now
									<i class="ri-arrow-right-line"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing Area -->
 
    @endsection