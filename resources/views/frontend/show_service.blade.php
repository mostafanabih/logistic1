@extends('frontend.site.app')

@section('content')

    
		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Services details</h2>

					<ul>
						<li>
							<a href="{{route('index')}}">
								Home 
							</a>
						</li>

						<li class="active">Services details</li>
					</ul>
				</div>
			</div>

			<div class="shape shape-1">
				<img src="{{asset('assets/images/page-title-shape-1.png')}}" alt="Image">
			</div>
			<div class="shape shape-2">
				<img src="{{asset('assets/images/page-title-shape-2.png')}}" alt="Image">
			</div>
		</div>
		<!-- End Page Title Area -->
		
		<!-- Start Services Details Area -->
		<section class="services-details-area ptb-100">
			<div class="container">
				<div class="row">
					


					<div class="col-lg-8 text-center">
						<div class="services-details-top-content">
							<div class="services-details-content content-1">
								<h3>{{$info->name}}</h3>
								<div class="services-details-img">
									<img src="{{ asset('storage/' . $info->images[0]) }}" alt="Image">
								</div>
							</div>

							<div class="services-details-content content-2">
								<p>{{$info->description}}</p>
							</div>

							
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End Services Details Area -->
    @endsection