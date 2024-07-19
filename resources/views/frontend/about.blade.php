@extends('frontend.site.app')

@section('content')
 
		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>About</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">About Us</li>
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

		<!-- Start Choose Area -->
		<section class="choose-area pt-100 pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="choose-img">
							<img src="assets/images/choose-img.jpg" alt="Images">

							<div class="your-of">
								<h1>30</h1>
								<h3>Year’s of experience in transport and logistics services</h3>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="faq-accordion">
							<h2>Why should you choose Matro transport and logistics services</h2>

							<ul class="accordion">
								<li class="accordion-item">
									<a class="accordion-title active" href="javascript:void(0)">
										<span class="flaticon-contract"></span>
										Our history
										<i class="ri-add-fill"></i>
									</a>
	
									<div class="accordion-content show">
										<p>{{$about->message_description}}</p>

									</div>
								</li>

								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)">
										<span class="flaticon-target"></span>
										Our vision
										<i class="ri-add-fill"></i>									
									</a>
	
									<div class="accordion-content">
										<p>{{$about->view_description}}</p>

									</div>
								</li>

								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)">
										<span class="flaticon-mission"></span>
										Our mission
										<i class="ri-add-fill"></i>
									</a>
	
									<div class="accordion-content">
										<p>{{$about->aim_description}}</p>

									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Choose Area -->

		<!-- Start Counter Area -->
		<section class="counter-area bg-color pt-100 pb-70">
			<div class="container">
				<div class="counter-bg">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="single-counter">
								<i class="flaticon-new-year"></i>

								<div class="count-title">
									<h2>
										<span class="odometer" data-count="30">00</span> 
									</h2>
									<h4>Number of years</h4>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="single-counter">
								<i class="flaticon-bus"></i>

								<div class="count-title">
									<h2>
										<span class="odometer" data-count="50">00</span> 
										<span class="target">+</span>
									</h2>
									<h4>Specialist vehicles</h4>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="single-counter">
								<i class="flaticon-package"></i>

								<div class="count-title">
									<h2>
										<span class="odometer" data-count="30">00</span> 
										<span class="target">K</span>
									</h2>
									<h4>Deliveries per year</h4>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="single-counter">
								<i class="flaticon-rating"></i>

								<div class="count-title">
									<h2>
										<span class="odometer" data-count="10">00</span> 
										<span class="target">K</span>
									</h2>
									<h4>Satisfied clients</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter Area -->

		<!-- Start Testimonials Area -->
		<section class="testimonials-area-style-two pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Testimonials</span>
					<h2>What people's say about us</h2>
				</div>

				<div class="testimonials-slider-two owl-carousel owl-theme">
					<div class="single-testimonials-box">
						<div class="testimonials-img">
							<img src="assets/images/testimonials/testimonials-3.jpg" alt="Image">
							<div class="testimonials-mane">
								<h3>Carol Mcdonald</h3>
								<span>Management</span>
							</div>
						</div>

						<ul>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
						</ul>

						<p>“ Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum.”</p>
					</div>

					<div class="single-testimonials-box">
						<div class="testimonials-img">
							<img src="assets/images/testimonials/testimonials-4.jpg" alt="Image">
							<div class="testimonials-mane">
								<h3>Charles Cooper</h3>
								<span>Product Manager</span>
							</div>
						</div>

						<ul>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
						</ul>

						<p>“ Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum.”</p>
					</div>

					<div class="single-testimonials-box">
						<div class="testimonials-img">
							<img src="assets/images/testimonials/testimonials-3.jpg" alt="Image">
							<div class="testimonials-mane">
								<h3>Carol Mcdonald</h3>
								<span>Management</span>
							</div>
						</div>

						<ul>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
							<li>
								<i class="ri-star-fill"></i>
							</li>
						</ul>

						<p>“ Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum.”</p>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials Area -->

		<!-- Start Team Area -->
		<section class="team-area bg-color ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Our professionals</span>
					<h2>Meet our dedicated team</h2>
				</div>
				
				<div class="team-sidler owl-carousel owl-theme">
					<div class="single-team-member">
						<img src="assets/images/team/team-img-1.jpg" alt="Image">

						<div class="team-content">
							<h3>Jasper Hooghwerff</h3>
							<span>Management</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="single-team-member">
						<img src="assets/images/team/team-img-2.jpg" alt="Image">

						<div class="team-content">
							<h3>Debbie Zange</h3>
							<span>Operational Staff</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="single-team-member">
						<img src="assets/images/team/team-img-3.jpg" alt="Image">

						<div class="team-content">
							<h3>Arnold Plank</h3>
							<span>Business Advisor</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="single-team-member">
						<img src="assets/images/team/team-img-4.jpg" alt="Image">

						<div class="team-content">
							<h3>Hendrik Zuidema</h3>
							<span>Operational Staff</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="single-team-member">
						<img src="assets/images/team/team-img-5.jpg" alt="Image">

						<div class="team-content">
							<h3>Scott Murphy</h3>
							<span>Director</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="single-team-member">
						<img src="assets/images/team/team-img-6.jpg" alt="Image">

						<div class="team-content">
							<h3>Sara Horton</h3>
							<span>Senior Manager</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="single-team-member">
						<img src="assets/images/team/team-img-7.jpg" alt="Image">

						<div class="team-content">
							<h3>Julian Thompson</h3>
							<span>Chief Financial Officer</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="single-team-member">
						<img src="assets/images/team/team-img-8.jpg" alt="Image">

						<div class="team-content">
							<h3>Alison King</h3>
							<span>Director of HR</span>

							<div class="team-social">
								<a href="javascript:;" class="control">
									<i class="ri-share-line"></i>
								</a>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Area -->

		<!-- Start Partner Area -->
		<div class="partner-area ptb-100">
			<div class="container">
				<div class="partner-bg">
					<div class="row">
						<div class="partner-slider owl-carousel owl-theme">
                          @foreach($clients as $client)
							<div class="partner-item">
								<a href="partner-details.html">
									<img src="{{$client->logo}}" alt="Image">
								</a>
							</div>
	                       @endforeach
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Partner Area -->
    
@endsection





   