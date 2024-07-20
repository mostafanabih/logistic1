@extends('frontend.site.app')

@section('content')
    
    <!-- subpage header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header box Start -->
                    <div class="page-header-box">
                        <h2 class="">الخدمات</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li><a href="#">الرئيسيه</a></li>
                                <li> الخدمات</li>
                            </ol>
                        </nav>                                
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Services List Page Start -->
    <div class="service-page">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <!-- Our Service Item Start -->
                    <div class="our-service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Our Service Image Start -->
                        <div class="our-service-image">
                            <figure class="image-anime">
                                <img src="{{ asset('storage/' . $service->images[0]) }}" alt="">
                            </figure>
                        </div>
                        <!-- Our Service Image End -->
                        
                        <!-- Our Service Content Start -->
                        <div class="our-service-content">
                            <div class="service-content-box">
                                <div class="our-service-icon">
                                    <img src="{{asset('assets/images/icon-cargo-1.svg')}}" alt="">
                                </div>
                                <div class="our-service-title">
                                    <h2>{{$service->name}}</h2>
                                </div>
                            </div>
                            <div class="our-service-content-button">
                                <a href="{{route('show_service',$service->id)}}"><i class="fa-regular fa-circle-right"></i></a>
                            </div>                         
                        </div>
                        <!-- Our Service Content End -->
                    </div> 
                    <!-- Our Service Item End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services List Page End -->
 
    @endsection