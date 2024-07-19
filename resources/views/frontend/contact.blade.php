@extends('frontend.site.app')

@section('content')
   <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Contact Us</li>
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

		<!-- Start Contact Info Area -->
		<div class="contact-info-area pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-info">
							<i class="ri-map-pin-fill"></i>

							<div class="count-title">
								<p>2976 Sunrise Road Las Vegas, NV 89108</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-contact-info">
							<i class="ri-phone-fill"></i>

							<div class="count-title">
								<a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
								<a href="tel:+1-(514)-312-6677">+1 (514) 312-6677</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-contact-info">
							<i class="ri-mail-fill"></i>

							<div class="count-title">
								<a href="/cdn-cgi/l/email-protection#365f585059765b574244591855595b"><span class="__cf_email__" data-cfemail="650c0b030a25080411170a4b060a08">sales@tmnlogisticss.com</span></a>
								<a href="/cdn-cgi/l/email-protection#3d55585151527d505c494f52135e5250"><span class="__cf_email__" data-cfemail="7018151c1c1f301d1104021f5e131f1d">sales@tmnlogisticss.com</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Contact Info Area -->

		<!-- Start Map Area -->
		<div class="map-area pb-100">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51502.423422968604!2d-115.24877995231783!3d36.21758989848515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8eaf574293f1b%3A0x8e720e5b03149745!2sLas%20Vegas%2C%20NV%2089108%2C%20USA!5e0!3m2!1sen!2sbd!4v1612342385496!5m2!1sen!2sbd"></iframe>
		</div>
		<!-- End Map Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Write us a message</h2>
				</div>

				<form  action="{{route('contact_us')}}" method="post">
          @csrf
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Your name</label>
								<input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Your email</label>
								<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Your phone</label>
								<input type="text" name="phone" id="phone_number" required="" data-error="Please enter your number" class="form-control">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Subject</label>
								<input type="text" name="subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Your message</label>
								<textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" data-error="Write your message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>

						
						<div class="col-lg-12 col-md-12">
							<button type="submit" class="default-btn">
								<span>
									Send message
									<i class="ri-arrow-right-circle-line"></i>
								</span>
							</button>
							<!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Contact Area -->
    @endsection