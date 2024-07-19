@extends('frontend.site.app')

@section('content')
 
	
		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Request a quote</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Request a quote</li>
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

		<!-- Start Request A Quote Area -->
		<section class="request-quote-area request-quote-area-style-two ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Request a quote</span>
					<h2>Tell us your needs, and our industry experts will respond</h2>
				</div>
				
				<div class="request-quote-content">
				<form class="request-quote-from" action="{{route('post_order')}}" method="post">
						@csrf
						<div class="row" data-cues="slideInUp">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Your name</label>
									<input type="text" name="name" class="form-control">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Email address</label>
									<input type="email" name="email" class="form-control">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Phone</label>
									<input type="text" name="phone" class="form-control">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Subject</label>
									<input type="text" name="subject" class="form-control">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Freight type</label>
									<select name="freight_type">
										<option value="road">Road freight</option>	
										<option value="rail">Rail freight</option>
										<option value="ocean">Ocean freight</option>
										<option value="air">Air freight</option>
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">City of departure</label>
									<input type="text" name="city_of_departure" class="form-control">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Delivery city</label>
									<input type="text" name="delivery_city" class="form-control">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label class="form-label">Incoterms</label>
									<input type="text" name="incoterms" class="form-control">
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="form-group">
									<label class="form-label">Weight</label>
									<input type="text" name="weight" class="form-control">
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="form-group">
									<label class="form-label">Width</label>
									<input type="text" name="width" class="form-control">
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="form-group">
									<label class="form-label">Height</label>
									<input type="text" name="height" class="form-control">
								</div>
							</div>

							<div class="col-lg-3 col-sm-6">
								<div class="form-group">
									<label class="form-label">Size</label>
									<input type="text" name="size" class="form-control">
								</div>
							</div>
						</div>

						<!-- <div class="row">
							<div class="col-lg-3 col-sm-6">
								<label class="single-check">
									Fragile
									<input type="radio" checked="checked" name="radio-2">
									<span class="checkmark"></span>
								</label>
							</div>

							<div class="col-lg-3 col-sm-6">
								<label class="single-check">
									Express delivery   
									<input type="radio" name="radio-2">
									<span class="checkmark"></span>
								</label>
							</div>

							<div class="col-lg-3 col-sm-6">
								<label class="single-check">
									Insurance
									<input type="radio" name="radio-2">
									<span class="checkmark"></span>
								</label>
							</div>

							<div class="col-lg-3 col-sm-6">
								<label class="single-check">
									Urgent
									<input type="radio" name="radio-2">
									<span class="checkmark"></span>
								</label>
							</div>
						</div> -->

						<button type="submit" class="default-btn btn-two">
							<span>
								Request a quote
								<i class="ri-send-plane-2-fill"></i>
							</span>
						</button>
					</form>
				</div>
			</div>

			<div class="quote-shape-1">
				<img src="assets/images/quote-shape-1.png" alt="Images">
			</div>
			<div class="quote-shape-2">
				<img src="assets/images/quote-shape-2.png" alt="Images">
			</div>
		</section>
		<!-- End Request A Quote Area -->

    
@endsection





   