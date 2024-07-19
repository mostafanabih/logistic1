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
                            <h1 class="text-anime-style-3">Aerologix logistics <span>around the world</span></h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.25s">
                            <p>Need to move goods? Our freight and logistics solutions are tailored to meet your specific needs. We offer reliable cargo transportation, warehousing, distribution, and supply chain management services to ensure timely and secure delivery.</p>
                        </div>
                        <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default">Explore More</a>
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
                            <h3>Ocean Freight</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="cargo-shipment-readmore">
                            <a href="#">Read More</a>
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
                            <h3>Air Freight</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="cargo-shipment-readmore">
                                <a href="#">Read More</a>
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
                            <h3>Cargo Freight</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="cargo-shipment-readmore">
                                <a href="#">Read More</a>
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
                            <h2 class="text-anime-style-3"><span>Providing full range</span> of transportation</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Home Transportation Body Start -->
                        <div class="home-transportation-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Lorem Ipsum is simply dummy text of the k a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but</p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                        <!-- Home Transportation Body End -->

                        <!-- Home Transportation footer Start -->
                        <div class="home-transportation-footer wow fadeInUp" data-wow-delay="0.75s">
                            <div class="transportation-footer-btn">
                                <a href="#" class="btn-default">Discover More</a>
                            </div>                            
                            <div class="header-contact-us">
                                <a href="#"><img src="{{asset('assets/images/icon-phone.svg')}}" alt=""><h3>Call Anytime <span>808 707 6060</span></h3></a>
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
                    <h2 class="text-anime-style-3">Explore our<span> services</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Our Service Item Start -->
                    <div class="our-service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Our Service Image Start -->
                        <div class="our-service-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/images/service-1.jpg')}}" alt="">
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
                                    <h2>Ocean Freight</h2>
                                </div>
                            </div>
                            <div class="our-service-content-button">
                                <a href="#"><i class="fa-regular fa-circle-right"></i></a>
                            </div>                         
                        </div>
                        <!-- Our Service Content End -->
                    </div> 
                    <!-- Our Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Our Service Item Start -->
                    <div class="our-service-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Our Service Image Start -->
                        <div class="our-service-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/images/service-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Our Service Image End -->
                        
                        <!-- Our Service Content Start -->
                        <div class="our-service-content">
                            <div class="service-content-box">
                                <div class="our-service-icon">
                                    <img src="{{asset('assets/images/icon-cargo-2.svg')}}" alt="">
                                </div>
                                <div class="our-service-title">
                                    <h2>Air Freight</h2>
                                </div>
                            </div>
                            <div class="our-service-content-button">
                                <a href="#"><i class="fa-regular fa-circle-right"></i></a>
                            </div>                         
                        </div>
                        <!-- Our Service Content End -->
                    </div> 
                    <!-- Our Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Our Service Item Start -->
                    <div class="our-service-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Our Service Image Start -->
                        <div class="our-service-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/images/service-3.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Our Service Image End -->
                        
                        <!-- Our Service Content Start -->
                        <div class="our-service-content">
                            <div class="service-content-box">
                                <div class="our-service-icon">
                                    <img src="{{asset('assets/images/icon-cargo-3.svg')}}" alt="">
                                </div>
                                <div class="our-service-title">
                                    <h2>cargo Freight</h2>
                                </div>
                            </div>
                            <div class="our-service-content-button">
                                <a href="#"><i class="fa-regular fa-circle-right"></i></a>
                            </div>                         
                        </div>
                        <!-- Our Service Content End -->
                    </div> 
                    <!-- Our Service Item End -->
                </div>

                <!-- Our Service Footer Start -->
                <div class="our-service-footer wow fadeInUp" data-wow-delay="1s">
                    <a href="#" class="btn-default">View all Services</a>
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
                            <h2 class="text-anime-style-3">World's leading contract logistics provider</h2>
                        </div>
                        <div class="our-contract-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Feel free to reach out to us with any inquiries about our services, pricing, tracking shipments, or any other logistic-related questions.</p>
                            <a href="#" class="btn-default wow fadeInUp" data-wow-delay="0.5s">Contact Now</a>
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
                    <h2 class="text-anime-style-3">Explore <span> recent projects</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
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
                                                <h3><a href="#">Cargo Ship</a></h3>
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
                                                <h3><a href="#">Offshore Vessel</a></h3>
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
                                                <h3><a href="#">Tugboat</a></h3>
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
                                                <h3><a href="#">Ro-Ro Ship</a></h3>
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
                                                <img src="{{asset('assets/images/project-img-5.jpg')}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="project-content">
                                            <div class="project-content-title">
                                                <h3><a href="#">Bulk Carrier</a></h3>
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

    <!-- Our Goals Section Start -->
    <div class="our-goals">
        <div class="container">
            <div class="row align-items-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class="text-anime-style-3">Our goals <span> in numbers</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Our Goals Item Start -->
                    <div class="our-goals-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="counter-icon">
                            <img src="{{asset('assets/images/icon-goals-1.svg')}}" alt="">
                        </div>
                        <!-- Facts Counter Box Start -->
                        <div class="our-goals-counter">
                            <h3><span class="counter">985</span>+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <!-- Facts Counter Box End -->
                    </div>
                    <!-- Our Goals Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Our Goals Item Start -->
                    <div class="our-goals-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-icon">
                            <img src="{{asset('assets/images/icon-goals-2.svg')}}" alt="">
                        </div>
                        <!-- Facts Counter Box Start -->
                        <div class="our-goals-counter">
                            <h3><span class="counter">870</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <!-- Facts Counter Box End -->
                    </div>
                    <!-- Our Goals Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Our Goals Item Start -->
                    <div class="our-goals-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="counter-icon">
                            <img src="{{asset('assets/images/icon-goals-3.svg')}}" alt="">
                        </div>
                        <!-- Facts Counter Box Start -->
                        <div class="our-goals-counter">
                            <h3><span class="counter">49</span>+</h3>
                            <p>Worldwide Office</p>                                
                        </div>
                        <!-- Facts Counter Box End -->
                    </div>
                    <!-- Our Goals Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Our Goals Item Start -->
                    <div class="our-goals-item wow fadeInUp" data-wow-delay="1s">
                        <div class="counter-icon">
                            <img src="{{asset('assets/images/icon-goals-4.svg')}}" alt="">
                        </div>
                        <!-- Facts Counter Box Start -->
                        <div class="our-goals-counter">
                            <h3><span class="counter">300</span>+</h3>
                            <p>Awards Win</p>
                        </div>
                        <!-- Facts Counter Box End -->
                    </div>
                    <!-- Our Goals Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Goals Section End -->

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
                            <h2 class="text-anime-style-3">Logixs providing a <span> reliable services</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Providing Content Body Start -->
                        <div class="providing-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

                            <div class="providing-item-box">
                                <div class="providing-item wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-1.svg')}}" alt="">
                                    </div>
                                    <span>Cost optimisation</span>
                                </div>

                                <div class="providing-item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-2.svg')}}" alt="">
                                    </div>
                                    <span>Reduced transit time</span>
                                </div>

                                <div class="providing-item wow fadeInUp" data-wow-delay="0.75s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-porviding-3.svg')}}" alt="">
                                    </div>
                                    <span>Real time monitoring</span>
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
                    <h2 class="text-anime-style-3">Latest <span> news & articals</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
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
                                <a href="#">Read More</a>
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
                                <a href="#">Read More</a>
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
                                <a href="#">Read More</a>
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