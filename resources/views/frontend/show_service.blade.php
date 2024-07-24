@extends('frontend.site.app')

@section('content')

    <!-- Page header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header box Start -->
                    <div class="page-header-box">
                        <h2 class="">{{$info->name}}</h2>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li><a href="#">الرئيسيه</a></li>
                                <li>{{$info->name}}</li>
                            </ol>
                        </nav>                                
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Details Section Start -->
    <div class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <!-- Service Details Content Start -->
                    <div class="service-details-content">
                        <!-- Service Details image Start -->
                        <div class="service-details-featured-image">
                            <figure class="reveal image-anime">
                                <img src="{{ asset('storage/' . $info->images[0]) }}" alt="">
                            </figure>
                        </div>
                        <!-- Service Details image End -->

                        <!-- Service Details body Start -->
                        <div class="service-details-body">
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">{{$info->name}}</h2>

                            <p class="wow fadeInUp" data-wow-delay="0.5s">{{$info->description}}</p>

                            
                        </div>
                        <!-- Service Details body End -->

                        <!-- Service Details footer Start -->
                        <div class="service-details-footer">
							@foreach($services as $service)
                            <div class="service-details-image-box wow fadeInUp" data-wow-delay="0.25s">
                                <figure class="image-anime">
                                    <img src="{{ asset('storage/' . $service->images[0]) }}" alt="">
                                </figure>
                             </div>
                            @endforeach
                            
                        </div>
                        <!-- Service Details footer End -->
                    </div>
                    <!-- Service Details Content End -->
                </div>
                <div class="col-lg-4  col-md-12">
                    <!-- Service Details sidebar Start -->
                    <div class="service-details-sidebar">
                        <!-- Post Category List Start -->
                        <div class="post-Category-list wow fadeInUp" data-wow-delay="0.25s">
                            <div class="footer-info-heading">
                                <h2>خدمات لوجستيه</h2>
                            </div>
                            <ul>
								@foreach($services as $service)
                                <li><a href="{{route('show_service',$service->id)}}"><i class="fa-solid fa-right-long"></i> {{$service->name}}</a></li>
                                @endforeach
								
                            </ul>
                        </div>
                        <!-- Post Category List End -->

                        <!-- Service Logistics Card Start -->
                        <div class="service-logistics-card wow fadeInUp" data-wow-delay="0.5s">
                            <div class="logistics-card-image">
                                <img src="{{asset('assets/images/logo.svg')}}" alt="">
                            </div>
                            <div class="logistics-card-title">
                                <h2>تميز النجاح</h2>
                                <p>حلول سلسلة التوريد المتكاملة في مكان واحد في عالم الخدمات اللوجستية وإدارة سلسلة التوريد المتنامي، تبرز شركة تميز النجاح كمنارة للكفاءة والموثوقية والتركيز على العملاء نحن فريق من المهنيين المتحمسين، مدفوعين برؤية مشتركة لتبسيط عمليات عملكم التجارية ودفعكم نحو نجاح لا مثيل له

</p>
                            </div>
                            <div class="logistics-card-body">
                                <a href="#" class="btn-default">توصل الان</a>
                                <!--Get Contact Us Start-->
                                <div class="header-contact-us">
                                    <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>هاتف <span>0553383310</span></h3></a>
                                </div>                           
                                <!--Get Contact Us End-->   
                            </div>
                        </div>
                        <!-- Service Logistics Card End -->
                    </div>
                    <!-- Service Details sidebar End -->
                </div>
            </div>
        </div>
    </div> 
    <!-- Service Details Section End -->

    @endsection