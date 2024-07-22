@extends('frontend.site.app')
@section('content')


    <!-- subpage header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header box Start -->
                    <div class="page-header-box">
                        <h2 class="">اخر الأخبار</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li><a href="#">الرئيسيه</a></li>
                                <li> اخر الأخبار</li>
                            </ol>
                        </nav>                                
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Page section Start -->
    <div class="latest-posts blog-page">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="{{asset("storage/$post->image")}}" alt="">
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <h3><a href="#">{{$post->name}}</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#">{{$post->user}}</a></li>
                                    <li><a href="#">{{ $post->created_at->format('d M Y') }}</a></li>
                                </ul>
                            </div>
                            <div class="post-readmore">
                                <a href="{{route('show_post',$post->id)}}">Read More</a>
                            </div>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach
               
            </div>
            
            <!-- <div class="row">
				<div class="col-md-12"> -->
					<!-- Post Pagination Start -->
					<!-- <div class="post-pagination wow fadeInUp" data-wow-delay="1s">
						<ul class="pagination">
							<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
						</ul>
					</div> -->
					<!-- Post Pagination End -->
				<!-- </div>
			</div> -->
        </div>
    </div>
    <!-- Blog Page section End -->

    
@endsection





   