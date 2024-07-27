@extends('frontend.site.app')

@section('content')

    <!-- Hero Section Start -->
    <div class="hero parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <!-- Hero Left Content Start -->
                    <div class="hero-content">
                        <div class="hero-content-title">
                            <h1 class="" > <span>{{trans('main.tamayoz_alnajah_co')}}</span></h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.25s">
                            <p>{{trans('main.pic_description')}}</p>
                        </div>

                    </div>
                    <!-- Hero Left Content End -->
                </div>

                <div class="col-lg-6 col-md-5">
                    <!-- Hero Video Section Start -->
                    <div class="video-play-button">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <img src="{{asset('assets/images/play.svg')}}" alt="">
                        </a>
                    </div>
                    <!-- Hero Video Section End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Cargo Shipment Section Start -->
    <div class="cargo-shipment">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <!-- Cargo Shipment Item Start -->
                    <div class="cargo-shipment-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="cargo-shipment-image">
                            <img src="{{asset('assets/images/cargo-shipment-bg-img-1.jpg')}}" alt="">
                        </div>
                        <div class="cargo-shipment-content">
                            <div class="cargo-shipment-icon">
                                <img src="{{asset('assets/images/icon-cargo-1.svg')}}" alt="">
                            </div>
                            <h3>{{trans('main.Shipping_and_clearance')}}</h3>
                            <p> {{trans('main.shipping_description')}}</p>
                            <div class="cargo-shipment-readmore">
                            </div>
                        </div>
                    </div>
                    <!-- Cargo Shipment Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Cargo Shipment Item Start -->
                    <div class="cargo-shipment-item active wow fadeInUp" data-wow-delay="0.5s">
                        <div class="cargo-shipment-image">
                            <img src="{{asset('assets/images/cargo-shipment-bg-img-2.jpg')}}" alt="">
                        </div>
                        <div class="cargo-shipment-content">
                            <div class="cargo-shipment-icon">
                                <img src="{{asset('assets/images/icon-cargo-2.svg')}}" alt="">
                            </div>
                            <h3>{{trans('main.Warehouses_and_storage')}}</h3>
                            <p>{{trans('main.Warehouses_description')}}</p>
                            <div class="cargo-shipment-readmore">
                            </div>
                        </div>
                    </div>
                    <!-- Cargo Shipment Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Cargo Shipment Item Start -->
                    <div class="cargo-shipment-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="cargo-shipment-image">
                            <img src="{{asset('assets/images/cargo-shipment-bg-img-3.jpg')}}" alt="">
                        </div>
                        <div class="cargo-shipment-content">
                            <div class="cargo-shipment-icon">
                                <img src="{{asset('assets/images/icon-cargo-3.svg')}}" alt="">
                            </div>
                            <h3>{{trans('main.Transportation_and_distribution')}}</h3>
                            <p>{{trans('main.Transportation_description')}}</p>
                            <div class="cargo-shipment-readmore">
                            </div>
                        </div>
                    </div>
                    <!-- Cargo Shipment Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Cargo Shipment Section End -->

    <!-- Transportation Section Start -->
    <div class="home-transportation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-2">
                    <!-- Home Transportation Content Start -->
                    <div class="home-transportation-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class=""><span>{{trans('main.tamayoz_alnajah_co')}}</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Home Transportation Body Start -->
                        <div class="home-transportation-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">حلول سلسلة التوريد المتكاملة في مكان واحد
                                في عالم الخدمات اللوجستية وإدارة سلسلة التوريد المتنامي، تبرز
                                شركة تميز النجاح كمنارة للكفاءة والموثوقية والتركيز على العملاء
                                نحن فريق من المهنيين المتحمسين، مدفوعين برؤية مشتركة لتبسيط
                                عمليات عملكم التجارية ودفعكم نحو نجاح لا مثيل له</p>
                        </div>
                        <!-- Home Transportation Body End -->

                        <!-- Home Transportation footer Start -->
                        <div class="home-transportation-footer wow fadeInUp" data-wow-delay="0.75s">
                            <div class="transportation-footer-btn">
                            </div>
                            <div class="header-contact-us">
                                <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>{{trans('main.contact_us_now')}}<span>0553383310</span></h3></a>
                            </div>
                        </div>
                        <!-- Home Transportation footer End -->
                    </div>
                    <!-- Home Transportation content End -->
                </div>

                <div class="col-lg-6 col-md-12 order-lg-2 order-md-1 order-1">
                    <!-- Home Transportation Image Start -->
                    <div class="home-transportation-right">
                        <div class="transportation-img-1">
                            <figure class="reveal image-anime">
                                <img src="{{asset('assets/images/transportation-img-1.jpg')}}" alt="">
                            </figure>
                        </div>

                        <div class="transportation-img-2">
                            <figure class="reveal image-anime">
                                <img src="{{asset('assets/images/transportation-img-2.jpg')}}" alt="">
                            </figure>
                        </div>

                        <!-- Facts Counter Box Start -->
                        <div class="transportation-counter-box wow fadeInUp" data-wow-delay="0.5s">
                            <h3><span>{{trans('main.our_best')}}</span></h3>
                        </div>
                        <!-- Facts Counter Box End -->
                    </div>
                    <!-- Home Transportation Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Transportation Section End -->

    <!-- Explore Our Service Section Start -->
    <div class="our-service">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class=""><span> {{trans('main.services')}}</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">{{trans('main.services_description')}}</p>
                </div>
                <!-- Section Title End -->
            </div>

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
                <!-- Our Service Footer Start -->
                <div class="our-service-footer wow fadeInUp" data-wow-delay="1s">
                    <a href="{{route('services')}}" class="btn-default">{{trans('main.view_all_services')}}</a>
                </div>
                <!-- Our Service Footer End -->
            </div>
        </div>
    </div>
    <!-- Explore Our Service Section End -->

    <!-- Our Contract Section Start -->
    <div class="our-contract parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <!-- Our Cta Box Start -->
                    <div class="our-cta-box">
                        <div class="our-contract-title">
                            <h2 class="">{{trans('main.tt')}}</h2>
                        </div>
                        <div class="our-contract-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{trans('main.tt_description')}}</p>
                            <a href="{{route('contacts')}}" class="btn-default wow fadeInUp" data-wow-delay="0.5s">{{trans('main.contact_us_now')}}</a>
                        </div>
                    </div>
                    <!-- Our Cta Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Contract Section End -->

    <!-- recent project section Start -->
    <div class="recent-project">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class=""> <span> {{trans('main.Transportation')}}</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s"> {{trans('main.Transportation_description')}}</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="project-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- recent projects slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-image">
                                            <figure class="image-anime">
                                                <img src="{{asset('assets/images/project-img-1.jpg')}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="project-content">
                                            <div class="project-content-title">
                                                <h3><a href="#">{{trans('main.Road_transport')}}</a></h3>
                                                <span><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recent projects slide End -->

                                <!-- recent projects slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-image">
                                            <figure class="image-anime">
                                                <img src="{{asset('assets/images/project-img-2.jpg')}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="project-content">
                                            <div class="project-content-title">
                                                <h3><a href="#">{{trans('main.Shipping')}}</a></h3>
                                                <span><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recent projects slide End -->

                                <!-- recent projects slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-image">
                                            <figure class="image-anime">
                                                <img src="{{asset('assets/images/project-img-3.jpg')}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="project-content">
                                            <div class="project-content-title">
                                                <h3><a href="#">{{trans('main.Air_transport')}}</a></h3>
                                                <span><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recent projects slide End -->

                                <!-- recent projects slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-image">
                                            <figure class="image-anime">
                                                <img src="{{asset('assets/images/project-img-4.jpg')}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="project-content">
                                            <div class="project-content-title">
                                                <h3><a href="#">النقل الدخلي</a></h3>
                                                <span><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- recent projects slide End -->


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="client-button-prev"><i class="fa-regular fa-circle-left"></i></div>
                        <div class="client-button-next"><i class="fa-regular fa-circle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent project section End -->


    <!-- Providing Service Section Start -->
    <div class="providing-service">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="Featured-Content-Box">
                       <figure class="reveal image-anime">
                           <img src="{{asset('assets/images/featured-content-img.jpg')}}" alt="">
                       </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Providing Content Start -->
                    <div class="providing-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class=""> <span> {{trans('main.Comprehensive_logistics_solution')}}
                            </span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Providing Content Body Start -->
                        <div class="providing-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{trans('main.Comprehensive_logistics_solution_description')}}



                            <div class="providing-item-box">
                                <div class="providing-item wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-1.svg')}}" alt="">
                                    </div>
                                    <span>{{trans('main.Commitment_to_quality')}}:
                                    </span>
                                </div>

                                <div class="providing-item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-2.svg')}}" alt="">
                                    </div>
                                    <span>{{trans('main.Advanced_technologies')}}:
                                    </span>
                                </div>

                                <div class="providing-item wow fadeInUp" data-wow-delay="0.75s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-3.svg')}}" alt="">
                                    </div>
                                    <span> {{trans('main.Professional_work_team')}}:
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Providing Content Body End -->
                    </div>
                    <!-- Providing Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Providing Service Section End -->

    <!-- latest posts section Start -->
    <div class="latest-posts">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class=""> <span> {{trans('main.posts')}}</span></h2>
                    </div>
                <!-- Section Title End -->
            </div>

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
                                <!--<a href="{{route('show_post',$post->id)}}">Read More</a>-->
                            </div>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach

                <div class="our-service-footer wow fadeInUp" data-wow-delay="1s">
                    <a href="{{route('posts')}}" class="btn-default">{{trans('main.view_all_posts')}}</a>
                </div>

            </div>
        </div>
    </div>
    <!-- latest Posts section End -->

    @endsection
