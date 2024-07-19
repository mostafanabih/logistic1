@extends('frontend.site.app')
@section('content')


		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>Blog</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Blog</li>
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
		
		<!-- Start Blog Page Area -->
		<section class="blog-page-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
            @foreach($posts as $post)
							<div class="col-lg-12">
								<div class="single-blog-box">
									<a href="blog-details.html">
										<img src="{{asset("storage/$post->image")}}" alt="Images">
									</a>
									<ul>
										<li>
											<i class="ri-calendar-line"></i>
											{{ $post->created_at->format('d M Y') }}
										</li>
										<li>{{$post->type}}</li>
									</ul>
									<h3>
										<a href="blog-details.html">
											{{$post->name}}
										</a>
									</h3>
									<p>{{$post->description}}</p>
									<a href="{{route('show_post',$post->id)}}" class="read-more">
										Read more
										<i class="ri-add-circle-fill"></i>
									</a>
								</div>
							</div>
		        @endforeach
							
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
		<!-- End Blog Page Area -->


    
@endsection





   