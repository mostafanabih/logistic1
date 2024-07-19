@extends('frontend.site.app')

@section('content')
 
		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Blog details</h2>

					<ul>
						<li>
							<a href="{{route('index')}}">
								Home 
							</a>
						</li>

						<li class="active">Blog details</li>
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
		
		<!-- Start Blog Details Area -->
		<section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="blog-details-top-content">
							<div class="blog-details-content content-1">
								<div class="blog-details-img">
									<img src="{{ asset('storage/' . $info->image) }}" alt="Image">
								</div>
							</div>

							

							<div class="blog-details-content content-2">
								<ul>
									<li>
										<i class="ri-calendar-line"></i>
										{{ $info->created_at->format('d M Y') }} 
									</li>
									<li>{{ $info->type}} </li>
								</ul>
							</div>

							<div class="blog-details-content content-3">
								<h3>{{$info->name}}</h3>

								<p>{{$info->description}}</p>
							</div>

							
							
						</div>
					</div>

					<div class="col-lg-4">
						<div class="widget-sidebar">
							

							

							<div class="sidebar-widget recent-post">
								<h3 class="widget-title">Other posts</h3>
								
								<ul>
									@foreach($posts as $post)
									<li>
										<a href="{{route('show_post',$post->id)}}">
											{{$post->name}}
											<img src="{{ asset('storage/' . $post->image) }}" alt="Image" style="height:100px;width:100px;">
										</a>
										<span>{{ $post->created_at->format('d M Y') }}</span>
									</li>
									@endforeach
									
								</ul>
							</div>
	
							<div class="sidebar-widget tags mb-0">
								<h3>Popular tags</h3>
	
								<ul>
									<li>
										<a href="blog.html">Logistic</a>
									</li>
									<li>
										<a href="blog.html">Transport</a>
									</li>
									<li>
										<a href="blog.html">Freight</a>
									</li>
									<li>
										<a href="blog.html">Warehouse</a>
									</li>
									<li>
										<a href="blog.html">Management</a>
									</li>
									<li>
										<a href="blog.html">Supply Chain</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Details Area -->

    @endsection





   