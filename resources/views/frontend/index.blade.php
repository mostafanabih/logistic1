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
                            <h1 class="" > <span>شركة تميز النجاح</span></h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.25s">
                            <p>تميز النجاح في تقديم أفضل الحلول اللوجستية! مع خبرة واسعة وفريق محترف، نضمن لك تقديم خدمات نقل وتوزيع تلبي كافة احتياجاتك بأسلوب آمن وفعال. اختر تميز النجاح لنجاح أعمالك</p>
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
                            <h3>الشحن والتخليص</h3>
                            <p> نتولى إدارة حركة
                                بضائعكم بخبرة، من المنشأ إلى الوجهة،
                                ً وتضمن تسليم ً ا سريع ّ ا وفع ًالا من حيث
                                التكلفة</p>
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
                            <h3>المخازن والتخزين</h3>
                            <p>  نوفر مخازن ا̧منة
                                والمتموضعة بشكل استراتيجي مساحة
                                واسعة لمخزونكم، مما يضمن سلامته
                                وإمكانية الوصول إليه</p>
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
                            <h3>النقل والتوزيع</h3>
                            <p>  نعمل على
                                تبسيط عملية تنفيذ طلباتكم، حيث
                                تقوم باختيار وتغليف وشحن منتجاتكم
                                بدقة وفعالية</p>
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
                            <h2 class=""><span>شركة تميز النجاح</span></h2>
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
                                <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>توصل معنا الان <span>055338310</span></h3></a>
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
                            <h3><span class="counter">20</span>+</h3>
                            <p>Years of Experience</p>
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
                    <h2 class=""><span> الخدامات</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">شركة تميز النجاح تقدم أفضل الخدمات في مجال اللوجستيات. بفضل خبرتنا الطويلة وفريقنا المحترف</p>
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
                    <a href="{{route('services')}}" class="btn-default">عرض جميع الخدمات</a>
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
                            <h2 class="">تميز النجاح تقدم لك حلولاً لوجستية مبتكرة بفضل خبرتنا الطويلة وفريقنا المحترف</h2>
                        </div>
                        <div class="our-contract-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">في شركة تميز النجاح، نعلم أن اللوجستيات هي أساس نجاح أي عمل. لذلك نعمل جاهدين لتقديم خدمات لوجستية مبتكرة وفعالة، تضمن لك التفوق في السوق. اختبر الفرق مع تميز النجاح!"</p>
                            <a href="#" class="btn-default wow fadeInUp" data-wow-delay="0.5s">توصل معنا الان</a>
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
                    <h2 class=""> <span> وسائل النقل</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s"> تلعب وسائل النقل دوراً حاسماً في تحقيق الكفاءة والفعالية في إدارة سلسلة الإمداد. تقدم الشركات اللوجستية مجموعة متنوعة من وسائل النقل لضمان تلبية احتياجات الشحن المتنوعة</p>
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
                                                <h3><a href="#">النقل البري</a></h3>
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
                                                <h3><a href="#">النقل البحري</a></h3>
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
                                                <h3><a href="#">النقل الجوي</a></h3>
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
                            <h2 class=""> <span> حلول لوجستية شاملة
                            </span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Providing Content Body Start -->
                        <div class="providing-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">نوفر مجموعة متنوعة من خدمات النقل البري، البحري، الجوي، والنقل بالأنابيب، بالإضافة إلى خدمات التخزين والتوزيع، لتلبية جميع احتياجات عملائنا في سلسلة الإمداد.



                            <div class="providing-item-box">
                                <div class="providing-item wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-1.svg')}}" alt="">
                                    </div>
                                    <span>التزام بالجودة:
                                    </span>
                                </div>

                                <div class="providing-item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-2.svg')}}" alt="">
                                    </div>
                                    <span>تقنيات متقدمة:
                                    </span>
                                </div>

                                <div class="providing-item wow fadeInUp" data-wow-delay="0.75s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-3.svg')}}" alt="">
                                    </div>
                                    <span>فريق عمل محترف:
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
                    <h2 class=""> <span> المدونه</span></h2>
                    </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/images/post-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <h3><a href="#">Overcoming Challenges in International Freight Forwarding</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#">admin /</a></li>
                                    <li><a href="#"> Fab 26, 2024</a></li>
                                </ul>
                            </div>
                            <div class="post-readmore">
                                <a href="#">اقراء المزيد</a>
                            </div>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/images/post-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <h3><a href="#">Logistics Strategies for a Freight Transport Greener Future</a></h3>

                            <div class="post-meta">
                                <ul>
                                    <li><a href="#">admin /</a></li>
                                    <li><a href="#"> Fab 26, 2024</a></li>
                                </ul>
                            </div>
                            <div class="post-readmore">
                                <a href="#">اقراء المزيد</a>
                            </div>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Post Featured Image Start -->
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/images/post-3.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Body Start -->
                        <div class="post-body">
                            <h3><a href="#">Enhancing Customer Experience Transport Solutions</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#">admin /</a></li>
                                    <li><a href="#"> Fab 26, 2024</a></li>
                                </ul>
                            </div>
                            <div class="post-readmore">
                                <a href="#">اقراء المزيد</a>
                            </div>
                        </div>
                        <!-- Post Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- latest Posts section End -->

    @endsection
